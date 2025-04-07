<div>
    <section class="shop py-80">
        <div class="container container-lg">
            <div class="row">
                <div class="xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="shop-sidebar">
                        <button type="button"
                            class="shop-sidebar__close xl:hidden flex w-32 h-32 flex items-center justify-center border border-gray-100 rounded-[50%] hover-bg-main-600 absolute right-0 mr-[10px] mt-8 hover-text-white hover-border-main-600">
                            <i class="ph ph-x"></i>
                        </button>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Product Category</h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                @foreach ($categories as $category)
                                    <li class="mb-24 cursor-pointer">
                                        <a href="javascript:void(0)" wire:click="filterByCategory({{ $category->id }})"
                                            class="text-gray-900 hover-text-main-600">
                                            {{ $category->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Filter by Price</h6>
                            <div class="custom--range">
                                <div id="slider-range"></div>
                                <div class="flex-between flex-wrap-reverse gap-8 mt-24 ">
                                    <button type="button" class="btn btn-main h-40 flex items-center">Filter
                                    </button>
                                    <div class="custom--range__content flex items-center gap-8">
                                        <span class="text-gray-500 text-md flex-shrink-0">Price:</span>
                                        <input type="text"
                                            class="custom--range__prices text-neutral-600 text-start text-md font-[500]"
                                            id="amount" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Filter by Rating</h6>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label class="absolute w-full h-full cursor-pointer" for="rating5"> </label>
                                <div class="common-check common-radio !mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating5">
                                </div>
                                <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 70%"></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">124</span>
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label class="absolute w-full h-full cursor-pointer" for="rating4"> </label>
                                <div class="common-check common-radio !mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating4">
                                </div>
                                <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 50%">
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">52</span>
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label class="absolute w-full h-full cursor-pointer" for="rating3"> </label>
                                <div class="common-check common-radio !mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating3">
                                </div>
                                <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%">
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">12</span>
                            </div>
                            <div class="flex items-center gap-8 relative mb-20">
                                <label class="absolute w-full h-full cursor-pointer" for="rating2"> </label>
                                <div class="common-check common-radio !mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating2">
                                </div>
                                <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 20%">
                                    </div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">5</span>
                            </div>
                            <div class="flex items-center gap-8 relative mb-0">
                                <label class="absolute w-full h-full cursor-pointer" for="rating1"> </label>
                                <div class="common-check common-radio !mb-0">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="rating1">
                                </div>
                                <div class="progress w-full bg-gray-100 rounded-[50rem] h-8" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="5" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 5%"></div>
                                </div>
                                <div class="flex items-center gap-4">
                                    <span class="text-xs font-[500] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[500] text-gray-400 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                </div>
                                <span class="text-gray-900 flex-shrink-0">2</span>
                            </div>
                        </div>

                        <div class="shop-sidebar__box border border-gray-100 rounded-8 p-32 mb-32">
                            <h6 class="text-xl border-b border-gray-100 pb-24 mb-24">Filter by Author</h6>
                            <ul class="max-h-540 overflow-y-auto scroll-sm">
                                @foreach ($authors as $author)
                                    <li class="mb-24">
                                        <div class="form-check common-check common-radio">
                                            <input class="form-check-input" type="radio" name="color"
                                                id="author-{{ $author->id }}">
                                            <label class="form-check-label"
                                                for="author-{{ $author->id }}">{{ $author->name }}</label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="shop-sidebar__box rounded-8">
                            <img src="/images/thumbs/advertise-img1.png" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="xl:w-9/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="flex-between gap-16 flex-wrap mb-40 ">
                        <span class="text-gray-900">Showing {{ $books->firstItem() }}-{{ $books->lastItem() }} of
                            {{ $books->total() }} result</span>
                        <div class="relative flex items-center gap-16 flex-wrap">
                            {{-- <div class="list-grid-btns flex items-center gap-16">
                                <button type="button"
                                    class="w-44 h-44 flex items-center justify-center border border-gray-100 rounded-6 text-2xl list-btn">
                                    <i class="ph-bold ph-list-dashes"></i>
                                </button>
                                <button type="button"
                                    class="w-44 h-44 flex items-center justify-center border border-main-600 text-white bg-main-600 rounded-6 text-2xl grid-btn">
                                    <i class="ph ph-squares-four"></i>
                                </button>
                            </div> --}}
                            <div class="relative text-gray-500 flex items-center gap-4 text-14">
                                <label for="sorting" class="text-inherit flex-shrink-0">Sort by: </label>
                                <select
                                    class="form-control block w-full  p-[0.375rem_0.75rem] text-base leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] rounded transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input px-14 py-14 text-inherit rounded-6 w-auto"
                                    wire:change="sortBy($event.target.value)">
                                    <option value="created_at" @if ($sort == 'created_at' && $direction == 'desc') selected @endif>
                                        Latest
                                    </option>

                                    <option value="created_at" @if ($sort == 'created_at' && $direction == 'asc') selected @endif>
                                        Oldest
                                    </option>

                                    <option value="retail_w_gst" @if ($sort == 'retail_w_gst' && $direction == 'asc') selected @endif>
                                        Price: Low to High
                                    </option>

                                    <option value="retail_w_gst" @if ($sort == 'retail_w_gst' && $direction == 'desc') selected @endif>
                                        Price: High to Low
                                    </option>
                                </select>
                            </div>
                            <button type="button"
                                class="w-44 h-44 xl:hidden flex flex items-center justify-center border border-gray-100 rounded-6 text-2xl sidebar-btn"><i
                                    class="ph-bold ph-funnel"></i></button>
                        </div>
                    </div>
                    <div class="list-grid-wrapper">
                        @forelse ($books as $each)
                            <div
                                class="product-card h-full p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="/product-detail/{{ $each->id }}"
                                    class="product-card__thumb flex items-center justify-center rounded-8 bg-gray-50 relative">
                                    <img src="/images/thumbs/product-two-img1.png" alt="Image"
                                        class="!w-auto max-w-[unset]">
                                    {{-- @if ($each['best_sale'])
                                        <span
                                            class="product-card__badge bg-primary-600 px-8 py-4 text-sm text-white absolute inset-inline-start-0 inset-block-start-0">Best
                                            Sale </span>
                                    @endif --}}
                                </a>
                                <div class="product-card__content mt-16">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="/product-detail/{{ $each->id }}" class="link text-line-2"
                                            tabindex="0">{{ $each->title }}</a>
                                    </h6>
                                    <div class="flex items-center mb-20 mt-16 gap-6">
                                        <span class="text-xs font-[500] text-gray-500">
                                            {{ $each->start_rating ?? 5 }}
                                        </span>
                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[500] text-gray-500">
                                            ({{ $each->view ?? 999 }} view)
                                        </span>
                                    </div>
                                    <div class="mt-8">
                                        <div class="progress w-full bg-color-three rounded-[50rem] h-4"
                                            role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-main-two-600 rounded-[50rem]"
                                                style="width: 35%">
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-xs font-[500] mt-8">Sold:
                                            {{ $each->sold ?? '10/100' }}</span>
                                    </div>
                                    <div class="product-card__price my-20">
                                        {{-- <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                            {{ $each['price'] }}
                                        </span> --}}
                                        <span class="text-heading text-md font-[600] ">
                                            ${{ $each->retail_w_gst }}
                                            <span class="text-gray-500 font-normal">/Qty</span> </span>
                                    </div>
                                    <a href="/add-to-cart/{{ $each->id }}"
                                        class="product-card__cart btn bg-gray-50 text-heading hover-bg-main-600 hover-text-white py-11 px-24 rounded-8 flex items-center justify-center gap-8 font-[500]"
                                        tabindex="0">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-2xl">No books found</div>
                        @endforelse
                    </div>
                    <ul class="pagination flex items-center justify-center flex-wrap gap-16">
                        @if ($books->currentPage() > 1)
                            <li class="page-item">
                                <a class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                    href="javascript:void(0)"
                                    wire:click="changePage({{ $books->currentPage() - 1 }})">
                                    <i class="ph-bold ph-arrow-left"></i>
                                </a>
                            </li>
                        @endif

                        @for ($i = 1; $i <= $books->lastPage(); $i++)
                            <li class="page-item @if ($i == $books->currentPage()) active @endif">
                                <a class="page-link h-64 w-64 flex items-center justify-center text-md rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                    href="javascript:void(0)"
                                    wire:click="changePage({{ $i }})">{{ $i }}</a>
                            </li>
                        @endfor

                        @if ($books->currentPage() < $books->lastPage())
                            <li class="page-item">
                                <a class="page-link h-64 w-64 flex items-center justify-center text-xxl rounded-8 font-[500] text-neutral-600 border border-gray-100"
                                    href="javascript:void(0)"
                                    wire:click="changePage({{ $books->currentPage() + 1 }})">
                                    <i class="ph-bold ph-arrow-right"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="400">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-car-profile"></i></span>
                        <div class="">
                            <h6 class="mb-0">Free Shipping</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="600">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-hand-heart"></i></span>
                        <div class="">
                            <h6 class="mb-0"> 100% Satisfaction</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="800">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-credit-card"></i></span>
                        <div class="">
                            <h6 class="mb-0"> Secure Payments</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12" data-aos="zoom-in"
                    data-aos-duration="1000">
                    <div
                        class="shipping-item flex items-center gap-16 rounded-16 bg-main-50 hover-bg-main-100 transition-2">
                        <span
                            class="w-56 h-56 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-32 flex-shrink-0"><i
                                class="ph-fill ph-chats"></i></span>
                        <div class="">
                            <h6 class="mb-0"> 24/7 Support</h6>
                            <span class="text-sm text-heading">Free shipping all over the US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('changePage', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
@endpush
