<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">{{ $title }}</h1>
        <a href="{{ route('admin.authors.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
            <i class="ph ph-arrow-left mr-1"></i> Back to List
        </a>
    </div>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <form wire:submit="save">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Title -->
                <div class="col-span-2">
                    <label for="name" class="block text-sm font-medium text-gray-700">Author Name <span class="text-red-600">*</span></label>
                    <input type="text" id="name" wire:model="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <i class="ph ph-check mr-1"></i> Save Author
                </button>
            </div>
        </form>
    </div>
</div>
