

<div>
    <!-- ============================ Banner Section start =============================== -->
    <div class="banner">
        <div class="container container-lg">
            <div class="banner-item rounded-24 overflow-hidden relative arrow-center"
                style="-webkit-mask-image: url(/images/bg/banner-bg2.png);mask-image: url(/images/bg/banner-bg2.png);">
                <a href="#featureSection"
                    class="scroll-down w-84 h-84 text-center flex items-center justify-center bg-main-600 rounded-[50%] border border-5 text-white border-white !absolute left-[50%] translate-x-[-50%] bottom-0 hover-bg-main-800">
                    <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span>
                </a>
                <img src="/images/bg/banner-bg.png" alt="Image"
                    class="banner-img absolute inset-block-start-0 inset-inline-start-0 w-full h-full z-[-1] object-fit-cover rounded-24">
                <div class="flex items-center">
                    <button type="button" id="banner-prev"
                        class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="banner-next"
                        class="slick-next slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>
                <div class="banner-slider">
                    <div class="banner-slider__item">
                        <div class="banner-slider__inner flex-between relative">
                            <div class="banner-item__content">
                                <h1 class="banner-item__title wow bounceInDown" data-wow-duration="1s">Daily Grocery
                                    Order and Get Express Delivery
                                </h1>
                                <a href="shop.html"
                                    class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 wow bounceInUp"
                                    data-wow-duration="1s">
                                    Explore Shop <span class="icon text-xl flex"><i class="ph ph-shopping-cart-simple"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12"
                                data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                                <img src="/images/thumbs/banner-img1.png" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="banner-slider__item">
                        <div class="banner-slider__inner flex-between relative">
                            <div class="banner-item__content">
                                <h1 class="banner-item__title wow bounceInDown" data-wow-duration="1s">Daily Grocery
                                    Order and Get Express Delivery
                                </h1>
                                <a href="shop.html"
                                    class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 wow bounceIn"
                                    data-wow-duration="1s">
                                    Explore Shop <span class="icon text-xl flex"><i class="ph ph-shopping-cart-simple"></i>
                                    </span>
                                </a>
                            </div>
                            <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt data-tilt-max="12"
                                data-tilt-speed="500" data-tilt-perspective="5000" data-tilt-scale="1.06">
                                <img src="/images/thumbs/banner-img3.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1>
        {{ __('client.test') }} {{ app()->currentLocale() }}
    </h1>
    <!-- ============================ Banner Section End =============================== -->
    <!-- ============================ Feature Section start =============================== -->
    <div class="feature" id="featureSection">
        <div class="container container-lg">
            <div class="relative arrow-center">
                <div class="flex items-center">
                    <button type="button" id="feature-item-wrapper-prev"
                        class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-left"></i>
                    </button>
                    <button type="button" id="feature-item-wrapper-next"
                        class="slick-next slick-arrow flex items-center justify-center rounded-[50%] bg-white text-xl hover-bg-main-600 hover-text-white transition-1">
                        <i class="ph ph-caret-right"></i>
                    </button>
                </div>
                <div class="feature-item-wrapper">
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="400">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img1.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Vegetables</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="600">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img2.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="800">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img3.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Desserts</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1000">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img4.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Drinks & Juice</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1200">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img5.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Animals Food</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1400">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img6.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fresh Fruits</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1600">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img7.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Yummy Candy</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="1800">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img2.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Fish & Meats</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2000">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img8.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Dairy & Eggs</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2200">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img9.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Snacks</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                    <div class="feature-item text-center wow bounceIn" data-aos="fade-up" data-aos-duration="2400">
                        <div class="feature-item__thumb rounded-[50%]">
                            <a href="shop.html" class="w-full h-full flex items-center justify-center">
                                <img src="/images/thumbs/feature-img10.png" alt="Image">
                            </a>
                        </div>
                        <div class="feature-item__content mt-16">
                            <h6 class="text-lg mb-8"><a href="shop.html" class="text-inherit">Frozen Foods</a></h6>
                            <span class="text-sm text-gray-400">125+ Products</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Feature Section End =============================== -->
    <!-- ======================== promotional banner Start ============================== -->
    <section class="promotional-banner pt-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                    data-aos="fade-up" data-aos-duration="400">
                    <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                        <img src="/images/thumbs/promotional-banner-img1.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-32">Everyday Fresh Meat</h6>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                    data-aos="fade-up" data-aos-duration="600">
                    <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                        <img src="/images/thumbs/promotional-banner-img2.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-32">Daily Fresh Vegetables</h6>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                    data-aos="fade-up" data-aos-duration="800">
                    <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                        <img src="/images/thumbs/promotional-banner-img3.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-32">Everyday Fresh Milk</h6>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                    data-aos="fade-up" data-aos-duration="1000">
                    <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                        <img src="/images/thumbs/promotional-banner-img4.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                        <div class="promotional-banner-item__content">
                            <h6 class="promotional-banner-item__title text-32">Everyday Fresh Fruits</h6>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================== promotional banner End ============================== -->
    <!-- ========================= flash sales Start ================================ -->
    <section class="flash-sales pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Flash Sales Today</h5>
                    <div class="flex items-center gap-16 wow bounceInRight">
                        <a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
                        <div class="flex items-center gap-8">
                            <button type="button" id="flash-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="flash-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flash-sales__slider arrow-style-two">
                <div class="" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                        <img src="/images/bg/flash-sale-bg1.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                        <div class="flash-sales-item__thumb md:block hidden">
                            <img src="/images/thumbs/flash-sale-img1.png" alt="Image">
                        </div>
                        <div class="flash-sales-item__content ms-sm-auto">
                            <h6 class="text-32 mb-20">Fresh Vegetables</h6>
                            <div class="countdown" id="countdown1">
                                <ul class="countdown-list flex items-center flex-wrap">
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="days"></span>Days
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="hours"></span>Hours
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="minutes"></span>Min
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                        <img src="/images/bg/flash-sale-bg2.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                        <div class="flash-sales-item__thumb md:block hidden">
                            <img src="/images/thumbs/flash-sale-img2.png" alt="Image">
                        </div>
                        <div class="flash-sales-item__content ms-sm-auto">
                            <h6 class="text-32 mb-20">Daily Snacks</h6>
                            <div class="countdown" id="countdown2">
                                <ul class="countdown-list flex items-center flex-wrap">
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="days"></span>Days
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="hours"></span>Hours
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="minutes"></span>Min
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="" data-aos="fade-up" data-aos-duration="1400">
                    <div
                        class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                        <img src="/images/bg/flash-sale-bg2.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                        <div class="flash-sales-item__thumb md:block hidden">
                            <img src="/images/thumbs/flash-sale-img2.png" alt="Image">
                        </div>
                        <div class="flash-sales-item__content ms-sm-auto">
                            <h6 class="text-32 mb-20">Daily Snacks</h6>
                            <div class="countdown" id="countdown3">
                                <ul class="countdown-list flex items-center flex-wrap">
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="days"></span>Days
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="hours"></span>Hours
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="minutes"></span>Min
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                        <span class="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html" class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= flash sales End ================================ -->
    <div class="product mt-24">
        <div class="container container-lg">
            <div class="row g-4 g-12">
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img1.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img2.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img3.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img1.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img5.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="1200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="cart.html"
                            class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 absolute inset-block-start-0 right-0 me-16 mt-16">
                            Add <i class="ph ph-shopping-cart"></i>
                        </a>
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img6.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="product-card__price mb-16">
                                <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                    $28.99</span>
                                <span class="text-heading text-md font-[600] ">$14.99 <span
                                        class="text-gray-500 font-normal">/Qty</span> </span>
                            </div>
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-600">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-600">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="mt-12">
                                <div class="progress w-full  bg-color-three rounded-[50rem] h-4" role="progressbar"
                                    aria-label="Basic example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%"></div>
                                </div>
                                <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========================== Offer Section Start =============================== -->
    <section class="offer pt-80 pb-80">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in" data-aos-duration="600">
                    <div
                        class="offer-card relative rounded-16 bg-main-600 overflow-hidden p-16 flex items-center gap-16 flex-wrap z-[1]">
                        <img src="/images/shape/offer-shape.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                        <div class="offer-card__thumb xl:block hidden">
                            <img src="/images/thumbs/offer-img1.png" alt="Image">
                        </div>
                        <div class="2xl:py-[1.5rem]">
                            <div
                                class="offer-card__logo mb-16 w-80 h-80 flex items-center justify-center bg-white rounded-[50%]">
                                <img src="/images/thumbs/offer-logo.png" alt="Image">
                            </div>
                            <h4 class="text-white mb-8">$5 off your first order</h4>
                            <div class="flex items-center gap-8">
                                <span class="text-sm text-white">Delivery by 6:15am</span>
                                <span class="text-sm text-main-two-600">expired Aug 5</span>
                            </div>
                            <a href="shop.html"
                                class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in" data-aos-duration="800">
                    <div
                        class="offer-card relative rounded-16 bg-main-600 overflow-hidden p-16 flex items-center gap-16 flex-wrap z-[1]">
                        <img src="/images/shape/offer-shape.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                        <div class="offer-card__thumb xl:block hidden">
                            <img src="/images/thumbs/offer-img2.png" alt="Image">
                        </div>
                        <div class="2xl:py-[1.5rem]">
                            <div
                                class="offer-card__logo mb-16 w-80 h-80 flex items-center justify-center bg-white rounded-[50%]">
                                <img src="/images/thumbs/offer-logo.png" alt="Image">
                            </div>
                            <h4 class="text-white mb-8">$5 off your first order</h4>
                            <div class="flex items-center gap-8">
                                <span class="text-sm text-white">Delivery by 6:15am</span>
                                <span class="text-sm text-main-two-600">expired Aug 5</span>
                            </div>
                            <a href="shop.html"
                                class="mt-16 btn bg-white hover-text-white hover-bg-main-800 text-heading font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================== Offer Section End =============================== -->
    <!-- ========================= Recommended Start ================================ -->
    <section class="recommended overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading flex-between flex-wrap gap-16">
                <h5 class="mb-0 wow bounceInLeft">Recommended for you</h5>
                <ul class="nav common-tab nav-pills wow bounceInRight" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr active" data-target="#pills-all" id="pills-all-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab"
                            aria-controls="pills-all" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-grocery" id="pills-grocery-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-grocery" type="button" role="tab"
                            aria-controls="pills-grocery" aria-selected="false">Grocery</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-fruits" id="pills-fruits-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-fruits" type="button" role="tab"
                            aria-controls="pills-fruits" aria-selected="false">Fruits</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-juices" id="pills-juices-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-juices" type="button" role="tab"
                            aria-controls="pills-juices" aria-selected="false">Juices</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-vegetables" id="pills-vegetables-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-vegetables" type="button" role="tab"
                            aria-controls="pills-vegetables" aria-selected="false">Vegetables</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-snacks" id="pills-snacks-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-snacks" type="button" role="tab"
                            aria-controls="pills-snacks" aria-selected="false">Snacks</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link bt-tb-btn-pr" data-target="#pills-organic" id="pills-organic-tab"
                            data-bs-toggle="pill" data-bs-target="#pills-organic" type="button" role="tab"
                            aria-controls="pills-organic" aria-selected="false">Organic Foods</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane bt-pane-pr fade show active" id="pills-all" role="tabpanel"
                    aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-grocery" role="tabpanel"
                    aria-labelledby="pills-grocery-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-fruits" role="tabpanel"
                    aria-labelledby="pills-fruits-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-juices" role="tabpanel"
                    aria-labelledby="pills-juices-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-vegetables" role="tabpanel"
                    aria-labelledby="pills-vegetables-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-snacks" role="tabpanel"
                    aria-labelledby="pills-snacks-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                <div class="tab-pane bt-pane-pr fade" id="pills-organic" role="tabpanel"
                    aria-labelledby="pills-organic-tab" tabindex="0">
                    <div class="row g-12">
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img7.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img11.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Lucerne Yogurt, Lowfat,
                                            Strawberry</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img12.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Nature Valley Whole
                                            Grain Oats and Honey Protein</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img13.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img14.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img15.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">C-500 Antioxidant
                                            Protect Dietary Supplement</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img16.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Good & Gather Farmed
                                            Atlantic Salmon</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img17.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Market Pantry 41/50 Raw
                                            Tail-Off Large Raw Shrimp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div class="custom-2xl:w-2/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-4/12  flex-grow-0 flex-shrink-0 basis-auto w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                            data-aos="fade-up" data-aos-duration="1200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
            </div>
        </div>
    </section>
    <!-- ========================= Recommended End ================================ -->
    <!-- ========================= hot-deals Start ================================ -->
    <section class="hot-deals pt-80 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Hot Deals Todays</h5>
                    <div class="flex items-center gap-16 wow bounceInRight">
                        <a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
                        <div class="flex items-center gap-8">
                            <button type="button" id="deals-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="deals-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-12">
                <div class="lg:w-4/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in">
                    <div class="hot-deals relative rounded-16 bg-main-600 overflow-hidden p-28 z-[1] text-center">
                        <img src="/images/shape/offer-shape.png" alt="Image"
                            class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                        <div class="hot-deals__thumb">
                            <img src="/images/thumbs/hot-deals-img.png" alt="Image">
                        </div>
                        <div class="2xl:py-[1.5rem]">
                            <h4 class="text-white mb-8">Fresh Vegetables</h4>
                            <div class="countdown my-32" id="countdown4">
                                <ul class="countdown-list flex items-center justify-center flex-wrap">
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="days"></span>Days
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="hours"></span>Hours
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="minutes"></span>Min
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html"
                                class="mt-16 btn btn-main-two font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-8/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="hot-deals-slider arrow-style-two">
                        <div data-aos="fade-up" data-aos-duration="200">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img8.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Marcel's Modern Pantry
                                            Almond Unsweetened</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div data-aos="fade-up" data-aos-duration="400">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div data-aos="fade-up" data-aos-duration="600">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-info-600 px-8 py-4 text-sm text-white">Best Sale
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img10.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Whole Grains and Seeds
                                            Organic Bread</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div data-aos="fade-up" data-aos-duration="800">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-warning-600 px-8 py-4 text-sm text-white">New</span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img18.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Tropicana 100% Juice,
                                            Orange, No Pulp</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <div
                                class="product-card h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                                <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale 50%
                                </span>
                                <a href="product-details.html"
                                    class="product-card__thumb flex items-center justify-center">
                                    <img src="/images/thumbs/product-img9.png" alt="Image">
                                </a>
                                <div class="product-card__content p-sm-2 w-full">
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">O Organics Milk, Whole,
                                            Vitamin D</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
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
            </div>
        </div>
    </section>
    <!-- ========================= hot-deals End ================================ -->
    <!-- ============================== Top Vendors Section Start ================================= -->
    <section class="top-vendors py-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">Weekly Top Vendors</h5>
                    <a href="shop.html"
                        class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">All
                        Vendors</a>
                </div>
            </div>
            <div class="row g-4 vendor-card-wrapper">
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="200">
                    <div class="vendor-card text-center px-16 pb-24"
                        style="-webkit-mask-image: url(/images/shape/box-shape2.png);mask-image: url(/images/shape/box-shape2.png);">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo1.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Organic Market</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="400">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo2.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Safeway</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="600">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo3.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Food Max</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="800">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo4.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">HRmart</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="200">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo5.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Lucky Supermarket</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="400">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo6.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Arico Farmer</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="600">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo7.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Farmer Market</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="zoom-in" data-aos-duration="800">
                    <div class="vendor-card text-center px-16 pb-24">
                        <div class="">
                            <img src="/images/thumbs/vendor-logo8.png" alt="Image" class="vendor-card__logo m-12">
                            <h6 class="title mt-32">Foodsco</h6>
                            <span class="text-heading text-sm block">Delivery by 6:15am</span>
                            <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                                Snack & Candy</a>
                        </div>
                        <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img1.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img2.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img3.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img4.png" alt="Image">
                            </div>
                            <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                                <img src="/images/thumbs/vendor-img5.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================== Top Vendors Section End ================================= -->
    <!-- ========================= best sells Start ================================ -->
    <section class="best sells pb-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Daily Best Sells</h5>
                </div>
            </div>
            <div class="row g-12">
                <div class="custom-2xl:w-8/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="row g-4">
                        <div class="lg:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="fade-up"
                            data-aos-duration="200">
                            <div
                                class="product-card style-two h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 flex items-center gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale
                                        50% </span>
                                    <a href="product-details.html"
                                        class="product-card__thumb flex items-center justify-center">
                                        <img src="/images/thumbs/best-sell1.png" alt="Image">
                                    </a>
                                    <div class="countdown" id="countdown6">
                                        <ul class="countdown-list style-three flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="days"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="hours"></span>Hours
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="minutes"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="seconds"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md font-[600] ">$14.99 <span
                                                class="text-gray-500 font-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-full  bg-color-three rounded-[50rem] h-4"
                                            role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%">
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="cart.html"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="fade-up"
                            data-aos-duration="400">
                            <div
                                class="product-card style-two h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 flex items-center gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale
                                        50% </span>
                                    <a href="product-details.html"
                                        class="product-card__thumb flex items-center justify-center">
                                        <img src="/images/thumbs/best-sell2.png" alt="Image">
                                    </a>
                                    <div class="countdown" id="countdown7">
                                        <ul class="countdown-list style-three flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="days"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="hours"></span>Hours
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="minutes"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="seconds"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md font-[600] ">$14.99 <span
                                                class="text-gray-500 font-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-full  bg-color-three rounded-[50rem] h-4"
                                            role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%">
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="cart.html"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="fade-up"
                            data-aos-duration="200">
                            <div
                                class="product-card style-two h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 flex items-center gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale
                                        50% </span>
                                    <a href="product-details.html"
                                        class="product-card__thumb flex items-center justify-center">
                                        <img src="/images/thumbs/best-sell3.png" alt="Image">
                                    </a>
                                    <div class="countdown" id="countdown8">
                                        <ul class="countdown-list style-three flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="days"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="hours"></span>Hours
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="minutes"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="seconds"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md font-[600] ">$14.99 <span
                                                class="text-gray-500 font-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-full  bg-color-three rounded-[50rem] h-4"
                                            role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%">
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
                                    </div>
                                    <a href="cart.html"
                                        class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8 mt-24 w-full justify-center">
                                        Add To Cart <i class="ph ph-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-6/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="fade-up"
                            data-aos-duration="400">
                            <div
                                class="product-card style-two h-full p-8 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 flex items-center gap-16">
                                <div class="">
                                    <span class="product-card__badge bg-danger-600 px-8 py-4 text-sm text-white">Sale
                                        50% </span>
                                    <a href="product-details.html"
                                        class="product-card__thumb flex items-center justify-center">
                                        <img src="/images/thumbs/best-sell4.png" alt="Image">
                                    </a>
                                    <div class="countdown" id="countdown9">
                                        <ul class="countdown-list style-three flex items-center flex-wrap">
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="days"></span>Days
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="hours"></span>Hours
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="minutes"></span>Min
                                            </li>
                                            <li
                                                class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500]">
                                                <span class="seconds"></span>Sec
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-card__content">
                                    <div class="product-card__price mb-16">
                                        <span class="text-gray-400 text-md font-[600] text-decoration-line-through">
                                            $28.99</span>
                                        <span class="text-heading text-md font-[600] ">$14.99 <span
                                                class="text-gray-500 font-normal">/Qty</span> </span>
                                    </div>
                                    <div class="flex items-center gap-6">
                                        <span class="text-xs font-[700] text-gray-600">4.8</span>
                                        <span class="text-15 font-[700] text-warning-600 flex"><i
                                                class="ph-fill ph-star"></i></span>
                                        <span class="text-xs font-[700] text-gray-600">(17k)</span>
                                    </div>
                                    <h6 class="title text-lg font-[600] mt-12 mb-8">
                                        <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli
                                            Florets Vegetables</a>
                                    </h6>
                                    <div class="flex items-center gap-4">
                                        <span class="text-main-600 text-md flex"><i
                                                class="ph-fill ph-storefront"></i></span>
                                        <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                                    </div>
                                    <div class="mt-12">
                                        <div class="progress w-full  bg-color-three rounded-[50rem] h-4"
                                            role="progressbar" aria-label="Basic example" aria-valuenow="35"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-main-600 rounded-[50rem]" style="width: 35%">
                                            </div>
                                        </div>
                                        <span class="text-gray-900 text-xs font-[500] mt-8">Sold: 18/35</span>
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
                <div class="custom-2xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto" data-aos="zoom-in"
                    data-aos-duration="600">
                    <div class="relative rounded-16 bg-light-purple overflow-hidden p-28 z-[1] text-center">
                        <div class="">
                            <img src="/images/bg/special-snacks.png" alt="Image"
                                class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full cover-img">
                            <div class="custom-2xl:block hidden">
                                <img src="/images/thumbs/special-snacks-img.png" alt="Image">
                            </div>
                        </div>
                        <div class="2xl:py-[1.5rem]">
                            <h4 class="mb-8">Special Snacks</h4>
                            <div class="countdown my-32" id="countdown5">
                                <ul class="countdown-list style-two flex items-center justify-center flex-wrap">
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="days"></span>Days
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="hours"></span>Hours
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="minutes"></span>Min
                                    </li>
                                    <li
                                        class="countdown-list__item text-heading flex items-center gap-4 text-sm font-[500] colon-white">
                                        <span class="seconds"></span>Sec
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html"
                                class="mt-16 btn btn-main-two font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                tabindex="0">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= best sells End ================================ -->
    <!-- ========================= Delivery Section Start ================================ -->
    <div class="delivery-section">
        <div class="container container-lg">
            <div class="delivery relative rounded-16 bg-main-600 p-16 flex items-center gap-16 flex-wrap z-[1]">
                <img src="/images/bg/delivery-bg.png" alt="Image"
                    class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full">
                <div class="row items-center">
                    <div class="lg:w-3/12  flex-grow-0 flex-shrink-0 basis-auto lg:block hidden">
                        <div class="delivery__man text-center" data-aos="fade-down-right">
                            <img src="/images/thumbs/delivery-man.png" alt="Image">
                        </div>
                    </div>
                    <div
                        class="lg:w-5/12  flex-grow-0 flex-shrink-0 basis-auto md:w-7/12  flex-grow-0 flex-shrink-0 basis-auto">
                        <div class="text-center">
                            <h4 class="text-white mb-8" data-aos="fade-down">We Delivery on Next Day from 10:00 AM to
                                08:00 PM
                            </h4>
                            <p class="text-white" data-aos="zoom-in">For Orders starts from $100</p>
                            <a href="shop.html"
                                class="mt-16 btn btn-main-two font-[500] inline-flex items-center rounded-[50rem] gap-8"
                                data-aos="fade-up" tabindex="0">
                                Shop Now
                                <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="lg:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-5/12  flex-grow-0 flex-shrink-0 basis-auto md:block hidden"
                        data-aos="zoom-out" data-aos-duration="800">
                        <img src="/images/thumbs/special-snacks-img.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================= Delivery Section End ================================ -->
    <!-- ========================= organic food Start ================================ -->
    <section class="organic-food py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0 wow bounceInLeft">Organic Food</h5>
                    <div class="flex items-center gap-16 wow bounceInRight">
                        <a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">
                            All Categories</a>
                        <div class="flex items-center gap-8">
                            <button type="button" id="organic-prev"
                                class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-left"></i>
                            </button>
                            <button type="button" id="organic-next"
                                class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                <i class="ph ph-caret-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="organic-food__slider arrow-style-two">
                <div data-aos="fade-up" data-aos-duration="200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img20.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img21.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img22.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img23.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img24.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img25.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1400">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img21.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">Taylor Farms Broccoli Florets
                                    Vegetables</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn bg-main-50 text-main-600 hover-bg-main-600 hover-text-white py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= organic food End ================================ -->
    <!-- ========================== Short Product Section Start ============================== -->
    <div class="short-product">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="600">
                    <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line relative mb-0 pb-16 inline-block">Featured Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two">
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img1.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img2.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img3.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img1.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img2.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img3.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="800">
                    <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line relative mb-0 pb-16 inline-block">Top Selling Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two">
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img5.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img6.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img8.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img5.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img6.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img8.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="1000">
                    <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line relative mb-0 pb-16 inline-block">On-sale Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two">
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img9.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img9.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img4.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                    data-aos="fade-up" data-aos-duration="1200">
                    <div class="p-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2 ">
                        <div class="p-16 bg-main-50 rounded-16 mb-32">
                            <h6 class="underlined-line relative mb-0 pb-16 inline-block">Top Rated Products</h6>
                        </div>
                        <div class="short-product-list arrow-style-two">
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img3.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img1.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img8.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img1.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img7.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16 mb-40">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img3.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-16">
                                    <div class="w-90 h-90 rounded-12 border border-gray-100 flex-shrink-0">
                                        <a href="product-details.html" class="link"><img
                                                src="/images/thumbs/short-product-img8.png" alt="Image"></a>
                                    </div>
                                    <div class="product-card__content mt-12">
                                        <div class="flex items-center gap-6">
                                            <span class="text-xs font-[700] text-gray-500">4.8</span>
                                            <span class="text-15 font-[700] text-warning-600 flex"><i
                                                    class="ph-fill ph-star"></i></span>
                                            <span class="text-xs font-[700] text-gray-500">(17k)</span>
                                        </div>
                                        <h6 class="title text-lg font-[600] mt-8 mb-8">
                                            <a href="product-details.html" class="link text-line-1">Taylor Farms
                                                Broccoli Florets Vegetables</a>
                                        </h6>
                                        <div class="product-card__price flex items-center gap-8">
                                            <span class="text-heading text-md font-[600] block">$1500.00</span>
                                            <span class="text-gray-400 text-md font-[600] block">$1500.00</span>
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
    <!-- ========================== Short Product Section End ============================== -->
    <!-- ============================== Brand Section Start =============================== -->
    <div class="brand py-80 overflow-hidden">
        <div class="container container-lg">
            <div class="brand-inner bg-color-one p-24 rounded-16">
                <div class="section-heading">
                    <div class="flex-between flex-wrap gap-8">
                        <h5 class="mb-0 wow bounceInLeft">Shop by Brands</h5>
                        <div class="flex items-center gap-16 wow bounceInRight">
                            <a href="shop.html"
                                class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                                All Deals</a>
                            <div class="flex items-center gap-8">
                                <button type="button" id="brand-prev"
                                    class="slick-prev slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-left"></i>
                                </button>
                                <button type="button" id="brand-next"
                                    class="slick-next slick-arrow flex items-center justify-center rounded-[50%] border border-gray-100 hover-border-main-600 text-xl hover-bg-main-600 hover-text-white transition-1">
                                    <i class="ph ph-caret-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand-slider arrow-style-two">
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="200">
                        <img src="/images/thumbs/brand-img1.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="400">
                        <img src="/images/thumbs/brand-img2.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="600">
                        <img src="/images/thumbs/brand-img3.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="800">
                        <img src="/images/thumbs/brand-img4.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1000">
                        <img src="/images/thumbs/brand-img5.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1200">
                        <img src="/images/thumbs/brand-img6.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1400">
                        <img src="/images/thumbs/brand-img7.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1600">
                        <img src="/images/thumbs/brand-img8.png" alt="Image">
                    </div>
                    <div class="brand-item" data-aos="zoom-in" data-aos-duration="1800">
                        <img src="/images/thumbs/brand-img3.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================== Brand Section End =============================== -->
    <!-- ========================== New Arrival Section Start ============================= -->
    <section class="new-arrival pb-80">
        <div class="container container-lg">
            <div class="section-heading">
                <div class="flex-between flex-wrap gap-8">
                    <h5 class="mb-0">New Arrivals</h5>
                    <div class="flex items-center gap-16">
                        <a href="shop.html"
                            class="text-sm font-[500] text-gray-700 hover-text-main-600 hover-text-decoration-underline">View
                            All Deals</a>
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
                <div data-aos="fade-up" data-aos-duration="200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img20.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="400">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img21.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img22.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img23.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img24.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1200">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img25.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="1400">
                    <div
                        class="product-card px-8 py-16 border border-gray-100 hover-border-main-600 rounded-16 relative transition-2">
                        <a href="product-details.html" class="product-card__thumb flex items-center justify-center">
                            <img src="/images/thumbs/product-img21.png" alt="Image">
                        </a>
                        <div class="product-card__content mt-12">
                            <div class="flex items-center gap-6">
                                <span class="text-xs font-[700] text-gray-500">4.8</span>
                                <span class="text-15 font-[700] text-warning-600 flex"><i
                                        class="ph-fill ph-star"></i></span>
                                <span class="text-xs font-[700] text-gray-500">(17k)</span>
                            </div>
                            <h6 class="title text-lg font-[600] mt-12 mb-8">
                                <a href="product-details.html" class="link text-line-2">C-500 Antioxidant Protect
                                    Dietary Supplement</a>
                            </h6>
                            <div class="flex items-center gap-4">
                                <span class="text-main-600 text-md flex"><i class="ph-fill ph-storefront"></i></span>
                                <span class="text-gray-500 text-xs">By Lucky Supermarket</span>
                            </div>
                            <div class="flex-between gap-8 mt-24 flex-wrap">
                                <div class="product-card__price">
                                    <span class="text-gray-400 text-md font-[600] text-decoration-line-through block">
                                        $28.99</span>
                                    <span class="text-heading text-md font-[600] ">$14.99 <span
                                            class="text-gray-500 font-normal">/Qty</span> </span>
                                </div>
                                <a href="cart.html"
                                    class="product-card__cart btn btn-main py-11 px-24 rounded-[50rem] flex items-center gap-8">
                                    Add <i class="ph ph-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================== New Arrival Section End ============================= -->
    <!-- ========================== Shipping Section Start ============================ -->
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
    <!-- ========================== Shipping Section End ============================ -->
    <!-- =============================== Newsletter Section Start ============================ -->
    <div class="newsletter">
        <div class="container container-lg">
            <div class="newsletter-box relative rounded-16 flex items-center gap-16 flex-wrap z-[1]">
                <img src="/images/bg/newsletter-bg.png" alt="Image"
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
                        <img src="/images/thumbs/newsletter-img.png" alt="Image" class="wow fadeInUp">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== Newsletter Section End ============================ -->
</div>
