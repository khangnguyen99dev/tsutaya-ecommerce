<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Edit Book</h1>
        <a href="{{ route('admin.books.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
            <i class="ph ph-arrow-left mr-1"></i> Back to List
        </a>
    </div>
    
    <div class="bg-white shadow-md rounded-lg p-6">
        <form wire:submit="update">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Title -->
                <div class="col-span-2">
                    <label for="description" class="block text-sm font-medium text-gray-700">Book Title <span class="text-red-600">*</span></label>
                    <input type="text" id="description" wire:model="description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- SKU and ISBN -->
                <div>
                    <label for="short_sku" class="block text-sm font-medium text-gray-700">SKU</label>
                    <input type="text" id="short_sku" wire:model="short_sku" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('short_sku') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="isbn13" class="block text-sm font-medium text-gray-700">ISBN-13</label>
                    <input type="text" id="isbn13" wire:model="isbn13" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('isbn13') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Author and Publisher -->
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-700">Author <span class="text-red-600">*</span></label>
                    <input type="text" id="author" wire:model="author" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('author') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                    <input type="text" id="publisher" wire:model="publisher" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('publisher') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Binding and Language -->
                <div>
                    <label for="binding" class="block text-sm font-medium text-gray-700">Binding</label>
                    <select id="binding" wire:model="binding" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="">Select binding</option>
                        <option value="Hardcover">Hardcover</option>
                        <option value="Paperback">Paperback</option>
                        <option value="E-book">E-book</option>
                        <option value="Audio">Audio</option>
                    </select>
                    @error('binding') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                    <select id="language" wire:model="language" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="">Select language</option>
                        <option value="English">English</option>
                        <option value="Vietnamese">Vietnamese</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Korean">Korean</option>
                    </select>
                    @error('language') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Date Published and Price -->
                <div>
                    <label for="date_published" class="block text-sm font-medium text-gray-700">Publication Date</label>
                    <input type="date" id="date_published" wire:model="date_published" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('date_published') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="retail_w_gst" class="block text-sm font-medium text-gray-700">Price (VND) <span class="text-red-600">*</span></label>
                    <input type="number" id="retail_w_gst" wire:model="retail_w_gst" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('retail_w_gst') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
                
                <!-- Status and Image -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="activated" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            <span class="ml-2">Active</span>
                        </label>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Book Cover Image</label>
                    
                    @if ($existingImage)
                        <div class="mb-3">
                            <div class="flex items-center space-x-3">
                                <img src="{{ asset('storage/' . $existingImage) }}" class="h-32 w-auto object-cover">
                                <button type="button" wire:click="removeImage" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-sm">
                                    <i class="ph ph-trash"></i> Remove
                                </button>
                            </div>
                        </div>
                    @endif
                    
                    <input type="file" id="newImage" wire:model="newImage" class="mt-1 block w-full">
                    @error('newImage') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    
                    @if ($newImage)
                        <div class="mt-2">
                            <img src="{{ $newImage->temporaryUrl() }}" class="h-32 w-auto object-cover">
                        </div>
                    @endif
                </div>
                
                <!-- Categories -->
                {{-- <div class="col-span-2">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Categories</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        @foreach($categories as $category)
                            <label class="inline-flex items-center">
                                <input type="checkbox" value="{{ $category->id }}" wire:model="selectedCategories" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                                <span class="ml-2">{{ $category->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('selectedCategories') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div> --}}
                
                <!-- Synopsis -->
                <div class="col-span-2">
                    <label for="synopsis" class="block text-sm font-medium text-gray-700">Synopsis</label>
                    <textarea id="synopsis" wire:model="synopsis" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                    @error('synopsis') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
            
            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <i class="ph ph-check mr-1"></i> Update Book
                </button>
            </div>
        </form>
    </div>
</div>