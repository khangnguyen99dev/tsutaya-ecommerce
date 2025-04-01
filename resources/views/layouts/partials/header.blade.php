<div class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white">
    <img src="./images/icon/preloader.gif" alt="Image">
</div>

<div class="overlay"></div>
<div class="side-overlay"></div>

<!-- ==================== Scroll to Top ==================== -->
<div
    class="progress-wrap fixed right-[36px] bottom-[36px] h-[46px] w-[46px] leading-[46px] cursor-pointer block rounded-[50px] shadow-inset z-[10000] opacity-0 invisible translate-y-[15px] transition-all duration-200 ease-linear bg-transparent max-lg:right-[24px] max-lg:bottom-[24px] max-lg:h-[40px] max-lg:w-[40px] max-lg:leading-[40px] hover:scale-[1.06] after:absolute after:font-[900] after:text-center after:w-[46px] after:h-[46px] after:leading-[46px] after:text-[18px] after:left-0 after:top-0 after:cursor-pointer after:block after:content-['\e08e'] after:font-phospor after:z-[1] after:transition-all after:duration-200 after:ease-linear after:text-main max-lg:after:h-[40px] max-lg:after:w-[40px] max-lg:after:leading-[40px]">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== Search Box ==================== -->
<form action="#" class="search-box">
    <button type="button"
        class="search-box__close absolute inset-block-start-0 right-0 m-16 w-48 h-48 border border-gray-100 rounded-[50%] flex items-center justify-center text-white hover-text-gray-800 hover-bg-white text-2xl transition-1">
        <i class="ph ph-x"></i>
    </button>
    <div class="container">
        <div class="relative">
            <input type="text"
                class="form-control block w-full  p-[0.375rem_0.75rem] leading-6 text-[#495057] bg-white bg-clip-padding border border-[#ced4da] transition-all duration-150 ease-in-out focus:text-[#495057] focus:bg-white focus:border-main focus:outline-0 focus:shadow-none py-16 px-24 text-xl rounded-[50rem] pe-64 h-[64px]"
                placeholder="Search for a product or brand">
            <button type="submit"
                class="w-48 h-48 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8">
                <i class="ph ph-magnifying-glass"></i>
            </button>
        </div>
    </div>
</form>

<!-- ==================== Mobile Menu Start Here ==================== -->
<div class="mobile-menu scroll-sm xl:hidden block">
    <button type="button" class="close-button"> <i class="ph ph-x"></i> </button>
    <div class="mobile-menu__inner">
        <a href="index.html" class="mobile-menu__logo">
            <img src="./images/logo/logo.png" alt="Logo">
        </a>
        <div class="mobile-menu__menu">
            <!-- Nav Menu Start -->
            <ul class="nav-menu flex items-center nav-menu--mobile">
                <li class="on-hover-item nav-menu__item has-submenu activePage">
                    <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item activePage">
                            <a href="index.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Home
                                Grocery</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="index-two.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home
                                Electronics</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="index-three.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home
                                Fashion</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="shop.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Shop</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="product-details.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop
                                Details</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="product-details-two.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop Details
                                Two</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="cart.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Cart</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="wishlist.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Wishlist</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="checkout.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Checkout </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="become-seller.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become
                                Seller</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="account.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Account</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <span class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="vendor.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Vendors </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="vendor-details.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor Details
                            </a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="vendor-two.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors
                                Two</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="vendor-two-details.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors Two
                                Details</a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item nav-menu__item has-submenu">
                    <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="blog.html" class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Blog</a>
                        </li>
                        <li class="common-dropdown__item nav-submenu__item">
                            <a href="blog-details.html"
                                class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog
                                Details</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-menu__item">
                    <a href="contact.html" class="nav-menu__link">Contact Us</a>
                </li>
            </ul>
            <!-- Nav Menu End -->
        </div>
    </div>
</div>

<!-- ======================= Become A Seller, About Us, Free Delivery, Returns Policy bar ======================= -->
<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
            <ul class="flex items-center flex-wrap hidden lg:flex">
                <li class="border-right-item"><a href="#shipping"
                        class="text-white text-sm hover-text-decoration-underline">Become A Seller</a></li>
                <li class="border-right-item"><a href="#shipping"
                        class="text-white text-sm hover-text-decoration-underline">About us</a></li>
                <li class="border-right-item"><a href="#shipping"
                        class="text-white text-sm hover-text-decoration-underline">Free Delivery</a></li>
                <li class="border-right-item"><a href="#shipping"
                        class="text-white text-sm hover-text-decoration-underline">Returns Policy</a></li>
            </ul>
            <ul class="header-top__right flex items-center flex-wrap">
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="text-white text-sm py-8">Help Center</a>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li class="nav-submenu__item">
                            <a href="index.html"
                                class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <span class="text-sm flex"><i class="ph ph-headset"></i></span>
                                Call Center
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="index.html"
                                class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <span class="text-sm flex"><i class="ph ph-chat-circle-dots"></i></span>
                                Live Chat
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul
                        class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag1.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag2.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag3.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag4.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag6.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag5.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                    <ul
                        class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag1.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag2.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag3.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag4.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag6.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"
                                class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex items-center gap-8 rounded-none">
                                <img src="./images/thumbs/flag5.png" alt="Image"
                                    class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="border-right-item">
                    <a href="account.html" class="text-white text-sm py-8 flex items-center gap-6">
                        <span class="icon text-md flex"> <i class="ph ph-user-circle"></i> </span>
                        <span class="hover-text-decoration-underline">My Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- ======================= Header ======================= -->
<header class="header-middle bg-color-one border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex-between">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html" class="link">
                    <img src="./images/logo/logo.png" alt="Logo">
                </a>
            </div>

            <!-- form Category/Search/Location -->
            <form action="#" class="flex items-center flex-wrap form-location-wrapper">
                <div class="search-category flex h-48 select-border-r-0 radius-end-0 search-form md:flex hidden">
                    <select class="js-example-basic-single border border-gray-200 border-r-0" name="state">
                        <option value="1" selected disabled>All Categories</option>
                        <option value="1">Grocery</option>
                        <option value="1">Breakfast & Dairy</option>
                        <option value="1">Vegetables</option>
                        <option value="1">Milks and Dairies</option>
                        <option value="1">Pet Foods & Toy</option>
                        <option value="1">Breads & Bakery</option>
                        <option value="1">Fresh Seafood</option>
                        <option value="1">Fronzen Foods</option>
                        <option value="1">Noodles & Rice</option>
                        <option value="1">Ice Cream</option>
                    </select>
                    <div class="search-form__wrapper relative">
                        <input type="text"
                            class="search-form__input common-input py-13 ps-16 pe-18 !rounded-tr-[50rem] !rounded-br-[50rem] pe-44"
                            placeholder="Search for a product or brand">
                        <button type="submit"
                            class="w-32 h-32 bg-main-600 rounded-[50%] flex items-center justify-center text-xl text-white absolute top-[50%] translate-y-[-50%] right-0 me-8"><i
                                class="ph ph-magnifying-glass"></i></button>
                    </div>
                </div>
                <div
                    class="location-box bg-white flex items-center gap-8 py-6 px-16 rounded-[50rem] border border-gray-100">
                    <span class="text-gray-900 text-xl sm:flex hidden"><i class="ph ph-map-pin"></i></span>
                    <div class="line-height-1">
                        <span class="text-gray-600 text-xs">Your Location</span>
                        <div class="line-height-1">
                            <select class="js-example-basic-single border border-gray-200 border-r-0" name="state">
                                <option value="1">Alabama</option>
                                <option value="1">Alaska</option>
                                <option value="1">Arizona</option>
                                <option value="1">Delaware</option>
                                <option value="1">Florida</option>
                                <option value="1">Georgia</option>
                                <option value="1">Hawaii</option>
                                <option value="1">Indiana</option>
                                <option value="1">Marzland</option>
                                <option value="1">Nevada</option>
                                <option value="1">New Jersey</option>
                                <option value="1">New Mexico</option>
                                <option value="1">New York</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Wishlist/Cart -->
            <div class="header-right items-center xl:block hidden">
                <div class="flex items-center flex-wrap gap-12">
                    <button type="button" class="search-icon flex items-center xl:hidden flex gap-4 item-hover">
                        <span class="text-2xl text-gray-700 flex relative item-hover__text">
                            <i class="ph ph-magnifying-glass"></i>
                        </span>
                    </button>
                    <a href="cart.html" class="flex items-center gap-4 item-hover">
                        <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-heart"></i>
                            <span
                                class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                        </span>
                        <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Wishlist</span>
                    </a>
                    <a href="cart.html" class="flex items-center gap-4 item-hover">
                        <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                            <i class="ph ph-shopping-cart-simple"></i>
                            <span
                                class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                        </span>
                        <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Cart</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- ==================== Header Bar ==================== -->
<header class="header bg-white border-b border-gray-100">
    <div class="container container-lg">
        <nav class="header-inner flex justify-between gap-8">
            <div class="flex items-center menu-category-wrapper">
                <!-- Category Dropdown -->
                <div class="category on-hover-item">
                    <button type="button"
                        class="category__button flex items-center gap-8 font-[500] p-16 border-r border-l border-gray-100 text-heading">
                        <span class="icon text-2xl sm:flex hidden"><i class="ph ph-dots-nine"></i></span>
                        <span class="md:flex hidden">All</span> Categories
                        <span class="arrow-icon text-xl flex"><i class="ph ph-caret-down"></i></span>
                    </button>
                    <div
                        class="responsive-dropdown on-hover-dropdown common-dropdown nav-submenu p-0 submenus-submenu-wrapper">
                        <button type="button"
                            class="close-responsive-dropdown rounded-[50%] text-xl absolute right-0 inset-block-start-0 mt-4 me-8 xl:hidden flex">
                            <i class="ph ph-x"></i> </button>
                        <ul class="scroll-sm p-0 py-8 w-300 max-h-400 overflow-y-auto">
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-carrot"></i></span>
                                    <span>Vegetables &amp; Fruit</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Vegetables &amp; Fruit</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Potato &amp; Tomato</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cucumber &amp; Capsicum</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Leafy Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Root Vegetables</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Beans &amp; Okra</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Cabbage &amp; Cauliflower</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Gourd &amp; Drumstick</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Specialty</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Beverages</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Beverages</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html">Soda & Cocktail Mix </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Sports & Energy Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Non Alcoholic Drinks</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Packaged Water </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Spring Water</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flavoured Water </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Meats & Seafood</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Meats & Seafood</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Fresh Meat </a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Frozen Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Marinated Meat</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Fresh & Frozen Meat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-submenus-submenu">
                                <a href="javascript:void(0)"
                                    class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                                    <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                                    <span>Breakfast & Dairy</span>
                                    <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                                </a>
                                <div class="submenus-submenu py-16">
                                    <h6 class="text-lg px-16 submenus-submenu__title">Breakfast & Dairy</h6>
                                    <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                        <li>
                                            <a href="shop.html"> Oats & Porridge</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Kids Cereal</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Muesli</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Flakes</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Granola & Cereal Bars</a>
                                        </li>
                                        <li>
                                            <a href="shop.html"> Instant Noodles</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Menu: Home, Shop, Cart, Wishlist, Checkout, Account, Blog, Contact -->
                <div class="header-menu xl:block hidden">
                    <ul class="nav-menu flex items-center">
                        <li class="on-hover-item nav-menu__item has-submenu activePage">
                            <a href="/" class="nav-menu__link">Home</a>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">Shop</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/shop"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                        Shop</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/product-detail"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <span
                                class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                            <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/cart"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                        Cart</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                   <a href="/wishlist"
                                       class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                       Wishlist</a>
                               </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/checkout"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                        Checkout </a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/account"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                        Account</a>
                                </li>
                            </ul>
                        </li>
                        <li class="on-hover-item nav-menu__item has-submenu">
                            <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                            <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/blog"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                        Blog</a>
                                </li>
                                <li class="common-dropdown__item nav-submenu__item">
                                    <a href="/blog-detail"
                                        class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-menu__item">
                            <a href="/contact" class="nav-menu__link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Header Right -->
            <div class="header-right flex items-center">
                <div
                    class="bg-main-600 text-white p-12 h-full hover-bg-main-800 flex items-center gap-8 text-lg xl:flex hidden">
                    <div class="flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                </div>
                <div class="me-16 xl:hidden block">
                    <div class="flex items-center flex-wrap gap-12">
                        <button type="button" class="search-icon flex items-center xl:hidden flex gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative item-hover__text">
                                <i class="ph ph-magnifying-glass"></i>
                            </span>
                        </button>
                        <a href="/wishlist" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-heart"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Wishlist</span>
                        </a>
                        <a href="/cart" class="flex items-center gap-4 item-hover">
                            <span class="text-2xl text-gray-700 flex relative me-6 mt-6 item-hover__text">
                                <i class="ph ph-shopping-cart-simple"></i>
                                <span
                                    class="w-16 h-16 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-xs absolute top-n6 end-n4">2</span>
                            </span>
                            <span class="text-md text-gray-500 item-hover__text hidden xl:flex">Cart</span>
                        </a>
                    </div>
                </div>
                <button type="button" class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"> <i
                        class="ph ph-list"></i> </button>
            </div>
        </nav>
    </div>
</header>