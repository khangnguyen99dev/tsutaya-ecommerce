@extends('layouts.app')
@section('content')
    <!-- ========================= Breadcrumb End =============================== -->
    <!-- ========================== Product Details Two Start =========================== -->
    <section class="product-details py-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="2xl:w-9/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="row g-4">
                        <div class="2xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto">
                            <div class="product-details__left">
                                <div class="product-details__thumb-slider border border-gray-100 rounded-16">
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full">
                                            <img src="./images/thumbs/product-details-two-thumb1.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full">
                                            <img src="./images/thumbs/product-details-two-thumb2.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full">
                                            <img src="./images/thumbs/product-details-two-thumb3.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full">
                                            <img src="./images/thumbs/product-details-two-thumb1.png" alt="Image">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="product-details__thumb flex items-center justify-center h-full">
                                            <img src="./images/thumbs/product-details-two-thumb2.png" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-24">
                                    <div class="product-details__images-slider">
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="./images/thumbs/product-details-two-thumb1.png" alt="Image">
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="./images/thumbs/product-details-two-thumb2.png" alt="Image">
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="./images/thumbs/product-details-two-thumb3.png" alt="Image">
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="./images/thumbs/product-details-two-thumb1.png" alt="Image">
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="max-w-120 max-h-120 h-full flex items-center justify-center border border-gray-100 rounded-16 p-8">
                                                <img src="./images/thumbs/product-details-two-thumb2.png" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto">
                            <div class="product-details__content">
                                <div
                                    class="flex items-center justify-center mb-24 flex-wrap gap-16 bg-color-one rounded-8 py-16 px-24 relative z-[1]">
                                    <img src="./images/bg/details-offer-bg.png" alt="Image"
                                        class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1]">
                                    <div class="flex items-center gap-16">
                                        <span class="text-white text-sm">Special Offer:</span>
                                    </div>
                                    <div class="countdown" id="countdown11">
                                        <ul class="countdown-list flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0  justify-center">
                                                <span class="days"></span>
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0  justify-center">
                                                <span class="hours"></span>
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0  justify-center">
                                                <span class="minutes"></span>
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-xs font-[500] w-28 h-28 rounded-4 border border-main-600 !p-0  justify-center">
                                                <span class="seconds"></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="text-white text-xs">Remains untill the end of the offer</span>
                                </div>
                                <h5 class="mb-12">HP Chromebook With Intel Celeron, 4GB Memory & 64GB eMMC - Modern Gray
                                </h5>
                                <div class="flex items-center flex-wrap gap-12">
                                    <div class="flex items-center gap-12 flex-wrap">
                                        <div class="flex items-center gap-8">
                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                        </div>
                                        <span class="text-sm font-[500] text-neutral-600">4.7 Star Rating</span>
                                        <span class="text-sm font-[500] text-gray-500">(21,671)</span>
                                    </div>
                                    <span class="text-sm font-[500] text-gray-500">|</span>
                                    <span class="text-gray-900"> <span class="text-gray-400">SKU:</span>EB4DRP </span>
                                </div>
                                <span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                                <p class="text-gray-700">Geared up and ready to roll: Get the responsive performance you're
                                    looking for with an Intel processor and 64 GB eMMC storage. Stay productive with
                                    compatible
                                    apps like Microsoft Office, Google Workspace, and more. The Chrome OS gives you a fast,
                                    simple, and secure online experience with built-in virus protection.
                                </p>
                                <div class="my-32 flex items-center gap-16 flex-wrap">
                                    <div class="flex items-center gap-8">
                                        <div class="flex items-center gap-8 text-main-two-600">
                                            <i class="ph-fill ph-seal-percent text-xl"></i>
                                            -10%
                                        </div>
                                        <h6 class="mb-0">USD 320.99</h6>
                                    </div>
                                    <div class="flex items-center gap-8">
                                        <span class="text-gray-700">Regular Price</span>
                                        <h6 class="text-xl text-gray-400 mb-0 font-[500]">USD 452.99</h6>
                                    </div>
                                </div>
                                <div class="my-32 flex items-center flex-wrap gap-12">
                                    <a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">
                                        Monthyly EMI USD 15.00
                                        <i class="ph ph-caret-right"></i>
                                    </a>
                                    <a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">
                                        Shipping Charge
                                        <i class="ph ph-caret-right"></i>
                                    </a>
                                    <a href="index.html"
                                        class="px-12 py-8 text-sm rounded-8 flex items-center gap-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">
                                        Security & Privacy
                                        <i class="ph ph-caret-right"></i>
                                    </a>
                                </div>
                                <span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                                <div class="mt-32">
                                    <h6 class="mb-16">Quick Overview</h6>
                                    <div class="flex-between items-start flex-wrap gap-16">
                                        <div>
                                            <span class="text-gray-900 block mb-12">
                                                Color:
                                                <span class="font-[500]">Mineral Silver</span>
                                            </span>
                                            <div class="color-list flex items-center gap-8">
                                                <button type="button"
                                                    class="color-list__button w-20 h-20  border-2 border-gray-50 rounded-[50%] bg-info-600"></button>
                                                <button type="button"
                                                    class="color-list__button w-20 h-20 border-2 border-gray-50 rounded-[50%] bg-warning-600"></button>
                                                <button type="button"
                                                    class="color-list__button w-20 h-20  border-2 border-gray-50 rounded-[50%] bg-tertiary-600"></button>
                                                <button type="button"
                                                    class="color-list__button w-20 h-20  border-2 border-gray-50 rounded-[50%] bg-main-600"></button>
                                                <button type="button"
                                                    class="color-list__button w-20 h-20  border-2 border-gray-50 rounded-[50%] bg-gray-100"></button>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-gray-900 block mb-12">
                                                Pattern Name:
                                                <span class="font-[500]">with offer</span>
                                            </span>
                                            <div class="flex items-center gap-8 flex-wrap">
                                                <a href="index.html"
                                                    class="px-12 py-8 text-sm rounded-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">
                                                    with offer </a>
                                                <a href="index.html"
                                                    class="px-12 py-8 text-sm rounded-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">12th
                                                    Gen Laptop</a>
                                                <a href="index.html"
                                                    class="px-12 py-8 text-sm rounded-8 text-gray-900 border border-gray-200 hover-border-main-600 hover-text-main-600">without
                                                    offer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="mt-32 pt-32 text-gray-700 border-t border-gray-100 block"></span>
                                <a href="https://www.whatsapp.com"
                                    class="btn btn-black flex items-center justify-center gap-8 rounded-8 py-16">
                                    <i class="ph ph-whatsapp-logo text-lg"></i>
                                    Request More Information
                                </a>
                                <div class="mt-32">
                                    <span class="font-[500] text-gray-900">100% Guarantee Safe Checkout</span>
                                    <div class="mt-10">
                                        <img src="./images/thumbs/gateway-img.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="product-details__sidebar py-40 px-32 border border-gray-100 rounded-16">
                        <div class="mb-32">
                            <label for="delivery"
                                class="h6 activePage mb-8 text-heading font-[600] block">Delivery</label>
                            <div class="flex items-center border border-gray-100 rounded-4 px-16">
                                <span class="text-xl flex text-main-600">
                                    <i class="ph ph-map-pin"></i>
                                </span>
                                <select class="common-input !border-0 px-8 rounded-4" id="delivery">
                                    <option value="1">Maymansign</option>
                                    <option value="1">Khulna</option>
                                    <option value="1">Rajshahi</option>
                                    <option value="1">Rangpur</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-32">
                            <label for="stock" class="text-lg mb-8 text-heading font-[600] block">Total Stock:
                                21</label>
                            <span class="text-xl flex">
                                <i class="ph ph-location"></i>
                            </span>
                            <div class="flex rounded-4 overflow-hidden">
                                <button type="button"
                                    class="quantity__minus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex items-center justify-center hover-bg-main-600 hover-text-white">
                                    <i class="ph ph-minus"></i>
                                </button>
                                <input type="number"
                                    class="quantity__input flex-grow border border-gray-100 border-l-0 border-r-0 text-center w-32 px-16"
                                    id="stock" value="1" min="1">
                                <button type="button"
                                    class="quantity__plus flex-shrink-0 h-48 w-48 text-neutral-600 bg-gray-50 flex items-center justify-center hover-bg-main-600 hover-text-white">
                                    <i class="ph ph-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-32">
                            <div class="flex-between flex-wrap gap-8 border-b border-gray-100 pb-16 mb-16">
                                <span class="text-gray-500">Price</span>
                                <h6 class="text-lg mb-0">$150.00</h6>
                            </div>
                            <div class="flex-between flex-wrap gap-8">
                                <span class="text-gray-500">Shipping</span>
                                <h6 class="text-lg mb-0">From $10.00</h6>
                            </div>
                        </div>
                        <a href="index.html"
                            class="btn btn-main flex items-center justify-center gap-8 rounded-8 py-16 font-normal mt-48">
                            <i class="ph ph-shopping-cart-simple text-lg"></i>
                            Add To Cart
                        </a>
                        <a href="index.html" class="btn btn-outline-main ritu rounded-8 py-16 font-normal mt-16 w-full">
                            Buy Now
                        </a>
                        <div class="mt-32">
                            <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-14">
                                <span
                                    class="w-32 h-32 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-xl flex-shrink-0">
                                    <i class="ph-fill ph-truck"></i>
                                </span>
                                <span class="text-sm text-neutral-600">Ship from <span class="font-[600]">MarketPro</span>
                                </span>
                            </div>
                            <div class="px-16 py-8 bg-main-50 rounded-8 flex-between gap-24 mb-0">
                                <span
                                    class="w-32 h-32 bg-white text-main-600 rounded-[50%] flex items-center justify-center text-xl flex-shrink-0">
                                    <i class="ph-fill ph-storefront"></i>
                                </span>
                                <span class="text-sm text-neutral-600">Sold by: <span class="font-[600]">MR Distribution
                                        LLC</span> </span>
                            </div>
                        </div>
                        <div class="mt-32">
                            <div class="px-32 py-16 rounded-8 border border-gray-100 flex-between gap-8">
                                <a href="index.html" class="flex text-main-600 text-28"><i
                                        class="ph-fill ph-chats-teardrop"></i></a>
                                <span class="h-26 border border-gray-100"></span>
                                <div class="dropdown on-hover-item">
                                    <button class="flex text-main-600 text-28" type="button">
                                        <i class="ph-fill ph-share-network"></i>
                                    </button>
                                    <div
                                        class="on-hover-dropdown common-dropdown border-0 inset-inline-start-auto right-0">
                                        <ul class="flex items-center gap-16">
                                            <li>
                                                <a href="https://www.facebook.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-facebook-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-twitter-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.linkedin.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-instagram-logo"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.pinterest.com"
                                                    class="w-44 h-44 flex items-center justify-center bg-main-100 text-main-600 text-xl rounded-[50%] hover-bg-main-600 hover-text-white">
                                                    <i class="ph-fill ph-linkedin-logo"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-80">
                <div class="product-dContent border rounded-24">
                    <div class="product-dContent__header border-b border-gray-100 flex-between flex-wrap gap-16">
                        <ul class="nav common-tab nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bt-tb-btn active" data-target="#pills-description"
                                    id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description"
                                    type="button" role="tab" aria-controls="pills-description"
                                    aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bt-tb-btn" data-target="#pills-reviews" id="pills-reviews-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab"
                                    aria-controls="pills-reviews" aria-selected="false">Reviews</button>
                            </li>
                        </ul>
                        <a href="index.html"
                            class="btn bg-color-one rounded-16 flex items-center gap-8 text-main-600 hover-bg-main-600 hover-text-white">
                            <img src="./images/icon/satisfaction-icon.png" alt="Image">
                            100% Satisfaction Guaranteed
                        </a>
                    </div>
                    <div class="product-dContent__box">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane bt-tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab" tabindex="0">
                                <div class="mb-40">
                                    <h6 class="mb-24">Product Description</h6>
                                    <p>Wherever celebrations and good times happen, the LAY'S brand will be there just as it
                                        has
                                        been for more than 75 years. With flavors almost as rich as our history, we have a
                                        chip or
                                        crisp flavor guaranteed to bring a smile on your face.
                                    </p>
                                    <p>Morbi ut sapien vitae odio accumsan gravida. Morbi vitae erat auctor, eleifend nunc
                                        a,
                                        lobortis neque. Praesent aliquam dignissim viverra. Maecenas lacus odio, feugiat eu
                                        nunc
                                        sit amet, maximus sagittis dolor. Vivamus nisi sapien, elementum sit amet eros sit
                                        amet,
                                        ultricies cursus ipsum. Sed consequat luctus ligula. Curabitur laoreet rhoncus
                                        blandit.
                                        Aenean vel diam ut arcu pharetra dignissim ut sed leo. Vivamus faucibus, ipsum in
                                        vestibulum vulputate, lorem orci convallis quam, sit amet consequat nulla felis
                                        pharetra
                                        lacus. Duis semper erat mauris, sed egestas purus commodo vel.
                                    </p>
                                    <ul class="list-inside mt-32 ms-16">
                                        <li class="text-gray-400 mb-4">8.0 oz. bag of LAY'S Classic Potato Chips</li>
                                        <li class="text-gray-400 mb-4">Tasty LAY's potato chips are a great snack</li>
                                        <li class="text-gray-400 mb-4">Includes three ingredients: potatoes, oil, and salt
                                        </li>
                                        <li class="text-gray-400 mb-4">Gluten free product</li>
                                    </ul>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-4">Made in USA</li>
                                        <li class="text-gray-400 mb-4">Ready To Eat.</li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">Product Specifications</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Product Type:
                                                <span class="text-gray-500"> Chips & Dips</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Product Name:
                                                <span class="text-gray-500"> Potato Chips Classic </span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Brand:
                                                <span class="text-gray-500"> Lay's</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                FSA Eligible:
                                                <span class="text-gray-500"> No</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Size/Count:
                                                <span class="text-gray-500"> 8.0oz</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Item Code:
                                                <span class="text-gray-500"> 331539</span>
                                            </span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]">
                                                Ingredients:
                                                <span class="text-gray-500"> Potatoes, Vegetable Oil, and Salt.</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-40">
                                    <h6 class="mb-24">Nutrition Facts</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]"> Total Fat 10g 13%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]"> Saturated Fat 1.5g 7%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]"> Cholesterol 0mg 0%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]"> Sodium 170mg 7%</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-heading font-[500]"> Potassium 350mg 6%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mb-0">
                                    <h6 class="mb-24">More Details</h6>
                                    <ul class="mt-32">
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Lunarlon midsole delivers ultra-plush
                                                responsiveness</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Encapsulated Air-Sole heel unit for lightweight
                                                cushioning</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Colour Shown: Ale Brown/Black/Goldtone/Ale
                                                Brown</span>
                                        </li>
                                        <li class="text-gray-400 mb-14 flex items-center gap-14">
                                            <span
                                                class="w-20 h-20 bg-main-50 text-main-600 text-xs flex items-center justify-center rounded-[50%]">
                                                <i class="ph ph-check"></i>
                                            </span>
                                            <span class="text-gray-500"> Style: 805899-202</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane bt-tab-pane fade" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab" tabindex="0">
                                <div class="row g-4">
                                    <div class="xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto">
                                        <h6 class="mb-24">Product Description</h6>
                                        <div class="flex items-start gap-24 pb-44 border-b border-gray-100 mb-44">
                                            <img src="./images/thumbs/comment-img1.png" alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
                                            <div class="flex-grow">
                                                <div class="flex-between items-start gap-8 ">
                                                    <div class="">
                                                        <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                        <div class="flex items-center gap-8">
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-gray-800 text-xs">3 Days ago</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                                <p class="text-gray-700">There are many variations of passages of Lorem
                                                    Ipsum
                                                    available, but the majority have suffered alteration in some form, by
                                                    injected
                                                    humour
                                                </p>
                                                <div class="flex items-center gap-20 mt-44">
                                                    <button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-thumbs-up"></i>
                                                        Like
                                                    </button>
                                                    <a href="#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                        Replay
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-start gap-24">
                                            <img src="./images/thumbs/comment-img1.png" alt="Image"
                                                class="w-52 h-52 object-fit-cover rounded-[50%] flex-shrink-0">
                                            <div class="flex-grow">
                                                <div class="flex-between items-start gap-8 ">
                                                    <div class="">
                                                        <h6 class="mb-12 text-md">Nicolas cage</h6>
                                                        <div class="flex items-center gap-8">
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                            <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                    </div>
                                                    <span class="text-gray-800 text-xs">3 Days ago</span>
                                                </div>
                                                <h6 class="mb-14 text-md mt-24">Greate Product</h6>
                                                <p class="text-gray-700">There are many variations of passages of Lorem
                                                    Ipsum
                                                    available, but the majority have suffered alteration in some form, by
                                                    injected
                                                    humour
                                                </p>
                                                <div class="flex items-center gap-20 mt-44">
                                                    <button
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-thumbs-up"></i>
                                                        Like
                                                    </button>
                                                    <a href="#comment-form"
                                                        class="flex items-center gap-12 text-gray-700 hover-text-main-600">
                                                        <i class="ph-bold ph-arrow-bend-up-left"></i>
                                                        Replay
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-56">
                                            <div class="">
                                                <h6 class="mb-24">Write a Review</h6>
                                                <span class="text-heading mb-8">What is it like to Product?</span>
                                                <div class="flex items-center gap-8">
                                                    <span class="text-15 font-[500] text-warning-600 flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 font-[500] text-warning-600 flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 font-[500] text-warning-600 flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 font-[500] text-warning-600 flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                    <span class="text-15 font-[500] text-warning-600 flex"><i
                                                            class="ph-fill ph-star"></i></span>
                                                </div>
                                            </div>
                                            <div class="mt-32">
                                                <form action="#">
                                                    <div class="mb-32">
                                                        <label for="title" class="text-neutral-600 mb-8">Review
                                                            Title</label>
                                                        <input type="text" class="common-input rounded-8"
                                                            id="title" placeholder="Great Products">
                                                    </div>
                                                    <div class="mb-32">
                                                        <label for="desc" class="text-neutral-600 mb-8">Review
                                                            Content</label>
                                                        <textarea class="common-input rounded-8" id="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</textarea>
                                                    </div>
                                                    <button type="submit"
                                                        class="btn btn-main rounded-[50rem] mt-48">Submit
                                                        Review</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto">
                                        <div class="ms-xxl-5">
                                            <h6 class="mb-24">Customers Feedback</h6>
                                            <div class="flex flex-wrap gap-44">
                                                <div
                                                    class="border border-gray-100 rounded-8 px-40 py-52 flex items-center justify-center flex-col flex-shrink-0 text-center">
                                                    <h2 class="mb-6 text-main-600">4.8</h2>
                                                    <div class="flex items-center justify-center gap-8">
                                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                        <span class="text-15 font-[500] text-warning-600 flex"><i
                                                                class="ph-fill ph-star"></i></span>
                                                    </div>
                                                    <span class="mt-16 text-gray-500">Average Product Rating</span>
                                                </div>
                                                <div class="border border-gray-100 rounded-8 px-24 py-40 flex-grow">
                                                    <div class="flex items-center gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">5</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width: 70%">
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
                                                            <span class="text-xs font-[500] text-warning-600 flex"><i
                                                                    class="ph-fill ph-star"></i></span>
                                                        </div>
                                                        <span class="text-gray-900 flex-shrink-0">124</span>
                                                    </div>
                                                    <div class="flex items-center gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">4</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width: 50%">
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
                                                    <div class="flex items-center gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">3</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width: 35%">
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
                                                    <div class="flex items-center gap-8 mb-20">
                                                        <span class="text-gray-900 flex-shrink-0">2</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width: 20%">
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
                                                    <div class="flex items-center gap-8 mb-0">
                                                        <span class="text-gray-900 flex-shrink-0">1</span>
                                                        <div class="progress w-full bg-gray-100 rounded-[50rem] h-8"
                                                            role="progressbar" aria-label="Basic example"
                                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                                            <div class="progress-bar bg-main-600 rounded-[50rem]"
                                                                style="width: 5%">
                                                            </div>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Product Details Two End =========================== -->
    <!-- ========================== Similar Product Start ============================= -->
    <section class="new-arrival pb-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">You Might Also Like</h5>
                    <div class="flex items-center gap-16">
                        <a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">All
                            Products</a>
                        <div class="flex items-center gap-8">
                            <button type="button" id="new-arrival-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="new-arrival-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="new-arrival__slider arrow-style-two">
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img7.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect Dietary
                                    Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img8.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry Almond
                                    Unsweetened</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img9.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole, Vitamin
                                    D</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img10.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic
                                    Bread</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img11.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                    Strawberry</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50% </span>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img12.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Nature Valley Whole Grain Oats and
                                    Honey
                                    Protein</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div
                        class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale </span>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="./images/thumbs/product-img10.png" alt="Image">
                        </a>
                        <div class="product-card__content p-sm-2 w-full">
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds Organic
                                    Bread</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="product-card__content mt-12">
                                <div class="product-card__price mb-8">
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                        $28.99</span>
                                </div>
                                <div class="flex items-center gap-6">
                                    <span class="text-xs font-[700] text-gray-600">4.8</span>
                                    <span class="text-15 font-[700] text-warning-600 flex"><i
                                            class="ph-fill ph-star"></i></span>
                                    <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                    Add To Cart <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== Similar Product End ============================= -->
    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12">
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
    <!-- ========================== Shipping Section End ============================ -->
    <!-- =============================== Newsletter Section Start ============================ -->
    <div class="newsletter">
        <div class="container container-lg">
            <div class="newsletter-box relative rounded-16 flex items-center gap-16 flex-wrap z-[1]">
                <img src="./images/bg/newsletter-bg.png" alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                <div class="row items-center">
                    <div class="2xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto">
                        <div class="">
                            <h1 class="text-white mb-12 wow fadeInUp">Don't Miss Out on Grocery Deals</h1>
                            <p class="text-white h5 mb-0 wow fadeInUp">SING UP FOR THE UPDATE NEWSLETTER</p>
                            <form action="#" class="relative mt-40 wow fadeInUp">
                                <input type="text"
                                    class="form-control block w-full  p-[0.375rem_0.75rem] text-base leading-6 placeholder:text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none common-input !rounded-[50rem] text-white py-22 px-16 pe-144"
                                    placeholder="Your email address...">
                                <button type="submit"
                                    class="btn btn-main-two !rounded-[50rem] !absolute top-[50%] translate-y-[-50%] right-0 mr-[10px]">Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="2xl:w-6/12  flex-grow-0 flex-shrink-0 basis-auto text-center xl:block hidden">
                        <img src="./images/thumbs/newsletter-img.png" alt="Image" class="wow fadeInUp">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
