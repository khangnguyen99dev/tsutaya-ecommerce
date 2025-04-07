<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Authors Management</h1>
        <a href="{{ route('admin.authors.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            <i class="ph ph-plus mr-1"></i> Add New Author
        </a>
    </div>
    
    <!-- Search and Filters -->
    <div class="mb-6 flex gap-4">
        <div class="flex-1">
            <input 
                wire:model.live.debounce.300ms="search" 
                type="text" 
                placeholder="Search by name" 
                class="w-full rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
            >
        </div>
        <select 
            wire:model.live="perPage" 
            class="rounded border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"
        >
            <option value="10">10 per page</option>
            <option value="25">25 per page</option>
            <option value="50">50 per page</option>
            <option value="100">100 per page</option>
        </select>
    </div>
    
    <!-- Books Table -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button wire:click="sortBy('id')" class="flex items-center">
                            ID
                            @if ($sortField === 'id')
                                <i class="ph {{ $sortDirection === 'asc' ? 'ph-sort-ascending' : 'ph-sort-descending' }} ml-1"></i>
                            @endif
                        </button>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        <button wire:click="sortBy('name')" class="flex items-center">
                            Name
                            @if ($sortField === 'name')
                                <i class="ph {{ $sortDirection === 'asc' ? 'ph-sort-ascending' : 'ph-sort-descending' }} ml-1"></i>
                            @endif
                        </button>
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($authors as $each)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $each->id }}</td>
                        <td class="px-6 py-4 whitespace-normal text-sm text-gray-900">
                            {{ $each->name }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="{{ route('admin.authors.edit', $each->id) }}" class="text-blue-600 hover:text-blue-900 mr-3">
                                <i class="ph ph-pencil"></i> Edit
                            </a>
                            <button 
                                wire:click="deleteAuthor({{ $each->id }})" 
                                wire:confirm="Are you sure you want to delete this author?"
                                class="text-red-600 hover:text-red-900"
                            >
                                <i class="ph ph-trash"></i> Delete
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No books found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="mt-4">
        {{ $authors->links() }}
    </div>
</div>