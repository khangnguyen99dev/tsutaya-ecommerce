<div>
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Add New Book</h1>
        <a href="{{ route('admin.books.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded hover:bg-gray-700">
            <i class="ph ph-arrow-left mr-1"></i> Back to List
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form wire:submit="save">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Book Title EN -->
                <div class="col-span-2">
                    <label for="title-en" class="block text-sm font-medium text-gray-700">Book Title (EN) <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="title-en" wire:model="title.en"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('title.en')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="title-ms" class="block text-sm font-medium text-gray-700">Book Title (MS) <span
                            class="text-red-600">*</span></label>
                    <input type="text" id="title-ms" wire:model="title.ms"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('title.ms')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2 grid grid-cols-3 gap-3">
                    <!-- Book Title MY -->


                    <!-- SKU and ISBN -->
                    <div>
                        <label for="short_sku" class="block text-sm font-medium text-gray-700">SKU</label>
                        <input type="text" id="short_sku" wire:model="short_sku"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('short_sku')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="isbn13" class="block text-sm font-medium text-gray-700">ISBN-13</label>
                        <input type="text" id="isbn13" wire:model="isbn13"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('isbn13')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="retail_w_gst" class="block text-sm font-medium text-gray-700">Price (RM) <span
                                class="text-red-600">*</span></label>
                        <input type="number" id="retail_w_gst" wire:model="retail_w_gst"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        @error('retail_w_gst')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="publisher" class="block text-sm font-medium text-gray-700">Publisher</label>
                    <input type="text" id="publisher" wire:model="publisher"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('publisher')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="date_published" class="block text-sm font-medium text-gray-700">Publication Date</label>
                    <input type="date" id="date_published" wire:model="date_published"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                    @error('date_published')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>



                <!-- Status and Image -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Status</label>
                    <div class="mt-2">
                        <label class="inline-flex items-center">
                            <input type="checkbox" wire:model="activated"
                                class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            <span class="ml-2">Active</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Book Cover Image <span
                            class="text-red-600">*</span></label>
                    <input type="file" id="image" wire:model="image" class="mt-1 block w-full">
                    @error('image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                    @if ($image)
                        <div class="mt-2">
                            <img src="{{ $image->temporaryUrl() }}" class="h-32 w-auto object-cover">
                        </div>
                    @endif
                </div>

                <!-- Categories -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Categories</label>
                    <select multiple name="categories" id="categories" wire:model="selectedCategories" class="tom-select-it w-full">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('selectedCategories')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Authors</label>
                    <select name="authors" id="authors" wire:model="author_id"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="">Select Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div class="col-span-2">
                    <label for="description-en" class="block text-sm font-medium text-gray-700">Description (EN) <span
                            class="text-red-600">*</span></label>
                    <textarea id="description-en" wire:model="description.en" rows="4"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                    @error('description.en')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="description-ms" class="block text-sm font-medium text-gray-700">Description (MS) <span
                            class="text-red-600">*</span></label>
                    <textarea id="description-ms" wire:model="description.ms" rows="4"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                    @error('description.ms')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    <i class="ph ph-check mr-1"></i> Save Book
                </button>
            </div>
        </form>
    </div>
</div>
