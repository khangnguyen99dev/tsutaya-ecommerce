<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

abstract class BaseCRUDController
{
    protected bool $isReturnView = true;
    abstract protected function getModel(): Model;

    protected array $redirect = [
        'created' => '/',
        'updated' => '/',
        'deleted' => '/',
    ];

    abstract protected function rules(string $type): array;

    protected function relationships(array $validatedData): array
    {
        return [];
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = Validator::make($request->all(), $this->rules('created'))->validate();

        $relations = $this->relationships($validatedData);
        $mainData = array_diff_key($validatedData, $relations);

        $record = $this->getModel()->create($mainData);

        foreach ($relations as $relation => $data) {
            if (method_exists($record, $relation)) {
                $this->storeRelationship($record, $relation, $data);
            }
        }

        return $this->responseSuccess('Created successfully!', $record, $this->redirect['created']);
    }

    protected function storeRelationship(Model $record, string $relation, $data): void
    {
        if (!method_exists($record, $relation)) {
            return;
        }

        $relationInstance = $record->{$relation}();

        if ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\HasOne) {
            $relationInstance->create($data);
        } elseif ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\HasMany) {
            $relationInstance->createMany($data);
        } elseif ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\BelongsToMany) {
            $relationInstance->sync($data);
        }
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $record = $this->getModel()->findOrFail($id);
        $validatedData = Validator::make($request->all(), $this->rules('updated'))->validate();

        $relations = $this->relationships($validatedData);
        $mainData = array_diff_key($validatedData, $relations);

        $record->update($mainData);

        foreach ($relations as $relation => $data) {
            if (method_exists($record, $relation)) {
                $this->updateRelationship($record, $relation, $data);
            }
        }

        return $this->responseSuccess('Updated successfully!', $record, $this->redirect['updated']);
    }

    protected function updateRelationship(Model $record, string $relation, $data): void
    {
        if (!method_exists($record, $relation)) {
            return;
        }

        $relationInstance = $record->{$relation}();

        if ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\HasOne) {
            $relationInstance->updateOrCreate([], $data);
        } elseif ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\HasMany) {
            foreach ($data as $item) {
                $relationInstance->updateOrCreate(['id' => $item['id'] ?? null], $item);
            }
        } elseif ($relationInstance instanceof \Illuminate\Database\Eloquent\Relations\BelongsToMany) {
            $relationInstance->sync($data);
        }
    }

    public function destroy($id): RedirectResponse
    {
        $record = $this->getModel()->find($id);

        if (!$record) {
            return $this->responseError('Data does not exist!', $this->redirect['deleted']);
        }

        if (method_exists($record, 'trashed')) {
            $record->forceDelete();
        } else {
            $record->delete();
        }

        return $this->responseSuccess('Deleted successfully!', null, $this->redirect['deleted']);
    }

    private function responseSuccess(string $message, $data = null, string $redirectUrl = '/'): mixed
    {
        if (!$this->isReturnView) {
            return response()->json([
                'error' => false,
                'message' => $message,
                'data' => $data,
            ]);
        }

        return redirect($redirectUrl)->with([
            'error' => false,
            'message' => $message,
        ]);
    }

    private function responseError(string $message, string $redirectUrl = '/'): mixed
    {
        if (!$this->isReturnView) {
            return response()->json([
                'error' => true,
                'message' => $message,
            ]);
        }

        return redirect($redirectUrl)->with([
            'error' => true,
            'message' => $message,
        ]);
    }
}
