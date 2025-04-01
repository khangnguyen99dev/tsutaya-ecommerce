
@extends('layouts.app')

@section('content')
    <!--==================== Preloader Start ====================-->
    <div class="preloader fixed inset-0 z-[9999] flex justify-center items-center bg-white">
        <img src="./images/icon/preloader.gif" alt="Image">
     </div>
     <!--==================== Preloader End ====================-->
     <!--==================== Overlay Start ====================-->
     <div class="overlay"></div>
     <!--==================== Overlay End ====================-->
     <!--==================== Sidebar Overlay End ====================-->
     <div class="side-overlay"></div>
     <!--==================== Sidebar Overlay End ====================-->
     <!-- ==================== Scroll to Top End Here ==================== -->
     <div
        class="progress-wrap fixed right-[36px] bottom-[36px] h-[46px] w-[46px] leading-[46px] cursor-pointer block rounded-[50px] shadow-inset z-[10000] opacity-0 invisible translate-y-[15px] transition-all duration-200 ease-linear bg-transparent max-lg:right-[24px] max-lg:bottom-[24px] max-lg:h-[40px] max-lg:w-[40px] max-lg:leading-[40px] hover:scale-[1.06] after:absolute after:font-[900] after:text-center after:w-[46px] after:h-[46px] after:leading-[46px] after:text-[18px] after:left-0 after:top-0 after:cursor-pointer after:block after:content-['\e08e'] after:font-phospor after:z-[1] after:transition-all after:duration-200 after:ease-linear after:text-main max-lg:after:h-[40px] max-lg:after:w-[40px] max-lg:after:leading-[40px]">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
           <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
     </div>
     <!-- ==================== Scroll to Top End Here ==================== -->
     <!-- ==================== Search Box Start Here ==================== -->
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
     <!-- ==================== Search Box End Here ==================== -->
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
                          <a href="index.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home
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
                          <a href="shop.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop</a>
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
                    <span
                       class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                       <li class="common-dropdown__item nav-submenu__item">
                          <a href="cart.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Cart</a>
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
                          <a href="account.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Account</a>
                       </li>
                    </ul>
                 </li>
                 <li class="on-hover-item nav-menu__item has-submenu">
                    <span
                       class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                    <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
                    <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                       <li class="common-dropdown__item nav-submenu__item">
                          <a href="vendor.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendors </a>
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
                          <a href="blog.html"
                             class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Blog</a>
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
     <!-- ==================== Mobile Menu End Here ==================== -->
     <!-- ======================= Middle Top Start ========================= -->
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
     <!-- ======================= Middle Top End ========================= -->
     <!-- ======================= Middle Header Start ========================= -->
     <header class="header-middle bg-color-one border-b border-gray-100">
        <div class="container container-lg">
           <nav class="header-inner flex-between">
              <!-- Logo Start -->
              <div class="logo">
                 <a href="index.html" class="link">
                 <img src="./images/logo/logo.png" alt="Logo">
                 </a>
              </div>
              <!-- Logo End  -->
              <!-- form location Start -->
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
              <!-- form location start -->
              <!-- Header Middle Right start -->
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
              <!-- Header Middle Right End  -->
           </nav>
        </div>
     </header>
     <!-- ======================= Middle Header End ========================= -->
     <!-- ==================== Header Start Here ==================== -->
     <header class="header bg-white border-b border-gray-100">
        <div class="container container-lg">
           <nav class="header-inner flex justify-between gap-8">
              <div class="flex items-center menu-category-wrapper">
                 <!-- Category Dropdown Start -->
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
                       <!-- Logo Start -->
                       <div class="logo px-16 xl:hidden block">
                          <a href="index.html" class="link">
                          <img src="./images/logo/logo.png" alt="Logo">
                          </a>
                       </div>
                       <!-- Logo End -->
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
                          <li class="has-submenus-submenu">
                             <a href="javascript:void(0)"
                                class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                             <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                             <span>Frozen Foods</span>
                             <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                             </a>
                             <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Frozen Foods</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                   <li>
                                      <a href="shop.html"> Instant Noodles </a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Hakka Noodles</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Cup Noodles</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Vermicelli</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Instant Pasta</a>
                                   </li>
                                </ul>
                             </div>
                          </li>
                          <li class="has-submenus-submenu">
                             <a href="javascript:void(0)"
                                class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                             <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                             <span>Biscuits & Snacks</span>
                             <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                             </a>
                             <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Biscuits & Snacks</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                   <li>
                                      <a href="shop.html"> Salted Biscuits </a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Marie, Health, Digestive</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Cream Biscuits & Wafers </a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Glucose & Milk biscuits</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Cookies</a>
                                   </li>
                                </ul>
                             </div>
                          </li>
                          <li class="has-submenus-submenu">
                             <a href="javascript:void(0)"
                                class="text-gray-500 text-15 py-12 px-16 flex items-center gap-8 rounded-none">
                             <span class="text-xl flex"><i class="ph ph-brandy"></i></span>
                             <span>Grocery & Staples</span>
                             <span class="icon text-md flex ms-auto"><i class="ph ph-caret-right"></i></span>
                             </a>
                             <div class="submenus-submenu py-16">
                                <h6 class="text-lg px-16 submenus-submenu__title">Grocery & Staples</h6>
                                <ul class="submenus-submenu__list max-h-300 overflow-y-auto scroll-sm">
                                   <li>
                                      <a href="shop.html"> Lemon, Ginger & Garlic </a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Indian & Exotic Herbs</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Orangic Vegetables</a>
                                   </li>
                                   <li>
                                      <a href="shop.html">Orangic Fruits </a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Orangic Dry Fruits</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Orangic Dals & pulses</a>
                                   </li>
                                   <li>
                                      <a href="shop.html"> Orangic Millet & Flours</a>
                                   </li>
                                </ul>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <!-- Category Dropdown End  -->
                 <!-- Menu Start  -->
                 <div class="header-menu xl:block hidden">
                    <!-- Nav Menu Start -->
                    <ul class="nav-menu flex items-center ">
                       <li class="on-hover-item nav-menu__item has-submenu activePage">
                          <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                          <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                             <li class="common-dropdown__item nav-submenu__item activePage">
                                <a href="index.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Home
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
                                <a href="shop.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Shop</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="product-details.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop
                                Details</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="product-details-two.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Shop
                                Details Two</a>
                             </li>
                          </ul>
                       </li>
                       <li class="on-hover-item nav-menu__item has-submenu">
                          <span
                             class="badge-notification bg-warning-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                          <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                          <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="cart.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Cart</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="wishlist.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Wishlist</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="checkout.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Checkout </a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="become-seller.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Become
                                Seller</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="account.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Account</a>
                             </li>
                          </ul>
                       </li>
                       <li class="on-hover-item nav-menu__item has-submenu">
                          <span
                             class="badge-notification bg-tertiary-600 text-white text-sm py-2 px-8 rounded-4">New</span>
                          <a href="javascript:void(0)" class="nav-menu__link">Vendors</a>
                          <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="vendor.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Vendors </a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="vendor-details.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100"> Vendor
                                Details </a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="vendor-two.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Vendors Two</a>
                             </li>
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="vendor-two-details.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
                                Vendors Two Details</a>
                             </li>
                          </ul>
                       </li>
                       <li class="on-hover-item nav-menu__item has-submenu">
                          <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                          <ul class="on-hover-dropdown common-dropdown nav-submenu scroll-sm">
                             <li class="common-dropdown__item nav-submenu__item">
                                <a href="blog.html"
                                   class="common-dropdown__link nav-submenu__link hover-bg-neutral-100">
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
                 <!-- Menu End  -->
              </div>
              <!-- Header Right start -->
              <div class="header-right flex items-center">
                 <a href="tel:01234567890"
                    class="bg-main-600 text-white p-12 h-full hover-bg-main-800 flex items-center gap-8 text-lg xl:flex hidden">
                    <div class="flex text-32"><i class="ph ph-phone-call"></i></div>
                    01- 234 567 890
                 </a>
                 <div class="me-16 xl:hidden block">
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
                 <button type="button" class="toggle-mobileMenu xl:hidden ms-3n text-gray-800 text-4xl flex"> <i
                    class="ph ph-list"></i> </button>
              </div>
              <!-- Header Right End  -->
           </nav>
        </div>
     </header>
     <!-- ==================== Header End Here ==================== -->
     <!-- ============================ Banner Section start =============================== -->
     <div class="banner">
        <div class="container container-lg">
           <div class="banner-item rounded-24 overflow-hidden relative arrow-center">
              <a href="#featureSection"
                 class="scroll-down w-84 h-84 text-center flex items-center justify-center bg-main-600 rounded-[50%] border border-5 text-white border-white !absolute left-[50%] translate-x-[-50%] bottom-0 hover-bg-main-800">
              <span class="icon line-height-0"><i class="ph ph-caret-double-down"></i></span>
              </a>
              <img src="./images/bg/banner-bg.png" alt="Image"
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
                          Explore Shop <span class="icon text-xl flex"><i
                             class="ph ph-shopping-cart-simple"></i> </span>
                          </a>
                       </div>
                       <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt
                          data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                          data-tilt-scale="1.06">
                          <img src="./images/thumbs/banner-img1.png" alt="Image">
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
                          Explore Shop <span class="icon text-xl flex"><i
                             class="ph ph-shopping-cart-simple"></i> </span>
                          </a>
                       </div>
                       <div class="banner-item__thumb wow bounceIn" data-wow-duration="1s" data-tilt
                          data-tilt-max="12" data-tilt-speed="500" data-tilt-perspective="5000"
                          data-tilt-scale="1.06">
                          <img src="./images/thumbs/banner-img3.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
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
                       <img src="./images/thumbs/feature-img1.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img2.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img3.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img4.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img5.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img6.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img7.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img2.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img8.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img9.png" alt="Image">
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
                       <img src="./images/thumbs/feature-img10.png" alt="Image">
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
                    <img src="./images/thumbs/promotional-banner-img1.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                    <div class="promotional-banner-item__content">
                       <h6 class="promotional-banner-item__title text-32">Everyday Fresh Meat</h6>
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                       Shop Now
                       <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                 data-aos="fade-up" data-aos-duration="600">
                 <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                    <img src="./images/thumbs/promotional-banner-img2.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                    <div class="promotional-banner-item__content">
                       <h6 class="promotional-banner-item__title text-32">Daily Fresh Vegetables</h6>
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                       Shop Now
                       <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                 data-aos="fade-up" data-aos-duration="800">
                 <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                    <img src="./images/thumbs/promotional-banner-img3.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                    <div class="promotional-banner-item__content">
                       <h6 class="promotional-banner-item__title text-32">Everyday Fresh Milk</h6>
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                       Shop Now
                       <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12  wow bounceIn"
                 data-aos="fade-up" data-aos-duration="1000">
                 <div class="promotional-banner-item relative rounded-24 overflow-hidden z-[1]">
                    <img src="./images/thumbs/promotional-banner-img4.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1]">
                    <div class="promotional-banner-item__content">
                       <h6 class="promotional-banner-item__title text-32">Everyday Fresh Fruits</h6>
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
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
                    <img src="./images/bg/flash-sale-bg1.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                       <img src="./images/thumbs/flash-sale-img1.png" alt="Image">
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
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                       Shop Now
                       <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="" data-aos="fade-up" data-aos-duration="1000">
                 <div
                    class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                    <img src="./images/bg/flash-sale-bg2.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                       <img src="./images/thumbs/flash-sale-img2.png" alt="Image">
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
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
                       Shop Now
                       <span class="icon text-xl flex"><i class="ph ph-arrow-right"></i></span>
                       </a>
                    </div>
                 </div>
              </div>
              <div class="" data-aos="fade-up" data-aos-duration="1400">
                 <div
                    class="flash-sales-item rounded-16 overflow-hidden z-[1] relative flex items-center flex-0 justify-between gap-8">
                    <img src="./images/bg/flash-sale-bg2.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 w-full h-full object-fit-cover z-[-1] flash-sales-item__bg">
                    <div class="flash-sales-item__thumb md:block hidden">
                       <img src="./images/thumbs/flash-sale-img2.png" alt="Image">
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
                       <a href="shop.html"
                          class="btn btn-main inline-flex items-center rounded-[50rem] gap-8 mt-24">
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
                    <img src="./images/thumbs/product-img1.png" alt="Image">
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
                    <img src="./images/thumbs/product-img2.png" alt="Image">
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
                    <img src="./images/thumbs/product-img3.png" alt="Image">
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
                    <img src="./images/thumbs/product-img1.png" alt="Image">
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
                    <img src="./images/thumbs/product-img5.png" alt="Image">
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
                    <img src="./images/thumbs/product-img6.png" alt="Image">
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
                    <img src="./images/shape/offer-shape.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                    <div class="offer-card__thumb xl:block hidden">
                       <img src="./images/thumbs/offer-img1.png" alt="Image">
                    </div>
                    <div class="2xl:py-[1.5rem]">
                       <div
                          class="offer-card__logo mb-16 w-80 h-80 flex items-center justify-center bg-white rounded-[50%]">
                          <img src="./images/thumbs/offer-logo.png" alt="Image">
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
                    <img src="./images/shape/offer-shape.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                    <div class="offer-card__thumb xl:block hidden">
                       <img src="./images/thumbs/offer-img2.png" alt="Image">
                    </div>
                    <div class="2xl:py-[1.5rem]">
                       <div
                          class="offer-card__logo mb-16 w-80 h-80 flex items-center justify-center bg-white rounded-[50%]">
                          <img src="./images/thumbs/offer-logo.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img7.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img11.png" alt="Image">
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
                          <img src="./images/thumbs/product-img12.png" alt="Image">
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
                          <img src="./images/thumbs/product-img13.png" alt="Image">
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
                          <img src="./images/thumbs/product-img14.png" alt="Image">
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
                          <img src="./images/thumbs/product-img15.png" alt="Image">
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
                          <img src="./images/thumbs/product-img16.png" alt="Image">
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
                          <img src="./images/thumbs/product-img17.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                    <img src="./images/shape/offer-shape.png" alt="Image"
                       class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full opacity-6">
                    <div class="hot-deals__thumb">
                       <img src="./images/thumbs/hot-deals-img.png" alt="Image">
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
                          <img src="./images/thumbs/product-img8.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                          <img src="./images/thumbs/product-img10.png" alt="Image">
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
                          <img src="./images/thumbs/product-img18.png" alt="Image">
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
                          <img src="./images/thumbs/product-img9.png" alt="Image">
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
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo1.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Organic Market</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="400">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo2.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Safeway</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="600">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo3.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Food Max</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="800">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo4.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">HRmart</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="200">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo5.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Lucky Supermarket</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="400">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo6.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Arico Farmer</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="600">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo7.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Farmer Market</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
                       </div>
                    </div>
                 </div>
              </div>
              <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto"
                 data-aos="zoom-in" data-aos-duration="800">
                 <div class="vendor-card text-center px-16 pb-24">
                    <div class="">
                       <img src="./images/thumbs/vendor-logo8.png" alt="Image" class="vendor-card__logo m-12">
                       <h6 class="title mt-32">Foodsco</h6>
                       <span class="text-heading text-sm block">Delivery by 6:15am</span>
                       <a href="shop.html" class="btn btn-main-two rounded-[50rem] py-6 px-16 text-12 mt-8">$5 off
                       Snack & Candy</a>
                    </div>
                    <div class="vendor-card__list mt-22 flex items-center justify-center flex-wrap gap-8">
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img1.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img2.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img3.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img4.png" alt="Image">
                       </div>
                       <div class="vendor-card__item bg-white rounded-[50%] flex items-center justify-center">
                          <img src="./images/thumbs/vendor-img5.png" alt="Image">
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
                             <img src="./images/thumbs/best-sell1.png" alt="Image">
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
                             <img src="./images/thumbs/best-sell2.png" alt="Image">
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
                             <img src="./images/thumbs/best-sell3.png" alt="Image">
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
                             <img src="./images/thumbs/best-sell4.png" alt="Image">
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
                       <img src="./images/bg/special-snacks.png" alt="Image"
                          class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full cover-img">
                       <div class="custom-2xl:block hidden">
                          <img src="./images/thumbs/special-snacks-img.png" alt="Image">
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
              <img src="./images/bg/delivery-bg.png" alt="Image"
                 class="absolute inset-block-start-0 inset-inline-start-0 z-[-1] w-full h-full">
              <div class="row items-center">
                 <div class="lg:w-3/12  flex-grow-0 flex-shrink-0 basis-auto lg:block hidden">
                    <div class="delivery__man text-center" data-aos="fade-down-right">
                       <img src="./images/thumbs/delivery-man.png" alt="Image">
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
                    <img src="./images/thumbs/special-snacks-img.png" alt="Image">
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
                    <img src="./images/thumbs/product-img20.png" alt="Image">
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
                    <img src="./images/thumbs/product-img21.png" alt="Image">
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
                    <img src="./images/thumbs/product-img22.png" alt="Image">
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
                    <img src="./images/thumbs/product-img23.png" alt="Image">
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
                    <img src="./images/thumbs/product-img24.png" alt="Image">
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
                    <img src="./images/thumbs/product-img25.png" alt="Image">
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
                    <img src="./images/thumbs/product-img21.png" alt="Image">
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
                                   src="./images/thumbs/short-product-img1.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img2.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img3.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img1.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img2.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img3.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img5.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img6.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img8.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img5.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img6.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img8.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img9.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img9.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img4.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img3.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img1.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img8.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img1.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img7.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img3.png" alt="Image"></a>
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
                                   src="./images/thumbs/short-product-img8.png" alt="Image"></a>
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
                    <img src="./images/thumbs/brand-img1.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="400">
                    <img src="./images/thumbs/brand-img2.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="600">
                    <img src="./images/thumbs/brand-img3.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="800">
                    <img src="./images/thumbs/brand-img4.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="./images/thumbs/brand-img5.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="1200">
                    <img src="./images/thumbs/brand-img6.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="1400">
                    <img src="./images/thumbs/brand-img7.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="1600">
                    <img src="./images/thumbs/brand-img8.png" alt="Image">
                 </div>
                 <div class="brand-item" data-aos="zoom-in" data-aos-duration="1800">
                    <img src="./images/thumbs/brand-img3.png" alt="Image">
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
                    <img src="./images/thumbs/product-img20.png" alt="Image">
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
                    <img src="./images/thumbs/product-img21.png" alt="Image">
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
                    <img src="./images/thumbs/product-img22.png" alt="Image">
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
                    <img src="./images/thumbs/product-img23.png" alt="Image">
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
                    <img src="./images/thumbs/product-img24.png" alt="Image">
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
                    <img src="./images/thumbs/product-img25.png" alt="Image">
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
                    <img src="./images/thumbs/product-img21.png" alt="Image">
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
     <!-- =============================== Newsletter Section End ============================ -->
     <!-- ==================== Footer Start Here ==================== -->
     <footer class="footer py-120">
        <img src="./images/bg/body-bottom-bg.png" alt="BG" class="body-bottom-bg">
        <div class="container container-lg">
           <div class="footer-item-wrapper flex items-start flex-wrap">
              <div class="footer-item" data-aos="fade-up" data-aos-duration="200">
                 <div class="footer-item__logo">
                    <a href="index.html"> <img src="./images/logo/logo.png" alt="Image"></a>
                 </div>
                 <p class="mb-24">We're Grocery Shop, an innovative team of food supliers.</p>
                 <div class="flex items-center gap-16 mb-16">
                    <span
                       class="w-32 h-32 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-md flex-shrink-0"><i
                       class="ph-fill ph-map-pin"></i></span>
                    <span class="text-md text-gray-900 ">789 Inner Lane, Biyes park, California, USA</span>
                 </div>
                 <div class="flex items-center gap-16 mb-16">
                    <span
                       class="w-32 h-32 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-md flex-shrink-0"><i
                       class="ph-fill ph-phone-call"></i></span>
                    <div class="flex items-center gap-16 flex-wrap">
                       <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456
                       789</a>
                       <span class="text-md text-main-600 ">or</span>
                       <a href="tel:+00987654012" class="text-md text-gray-900 hover-text-main-600">+00 987 654
                       012</a>
                    </div>
                 </div>
                 <div class="flex items-center gap-16 mb-16">
                    <span
                       class="w-32 h-32 flex items-center justify-center rounded-[50%] bg-main-600 text-white text-md flex-shrink-0"><i
                       class="ph-fill ph-envelope"></i></span>
                    <a href="mailto:support24@marketpro.com"
                       class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                 </div>
              </div>
              <div class="footer-item" data-aos="fade-up" data-aos-duration="400">
                 <h6 class="footer-item__title">Information</h6>
                 <ul class="footer-menu">
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Become a Vendor</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Affiliate Program</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Privacy Policy</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Our Suppliers</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Extended Plan</a>
                    </li>
                    <li class="">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Community</a>
                    </li>
                 </ul>
              </div>
              <div class="footer-item" data-aos="fade-up" data-aos-duration="600">
                 <h6 class="footer-item__title">Customer Support</h6>
                 <ul class="footer-menu">
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Center</a>
                    </li>
                    <li class="mb-16">
                       <a href="contact.html" class="text-gray-600 hover-text-main-600">Contact Us</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Report Abuse</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Submit and Dispute</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Policies & Rules</a>
                    </li>
                    <li class="">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Online Shopping</a>
                    </li>
                 </ul>
              </div>
              <div class="footer-item" data-aos="fade-up" data-aos-duration="800">
                 <h6 class="footer-item__title">My Account</h6>
                 <ul class="footer-menu">
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">My Account</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Order History</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Shoping Cart</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Compare</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Help Ticket</a>
                    </li>
                    <li class="">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Wishlist</a>
                    </li>
                 </ul>
              </div>
              <div class="footer-item" data-aos="fade-up" data-aos-duration="1000">
                 <h6 class="footer-item__title">Daily Groceries</h6>
                 <ul class="footer-menu">
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Dairy & Eggs</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Meat & Seafood</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Breakfast Food</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Household Supplies</a>
                    </li>
                    <li class="mb-16">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Bread & Bakery</a>
                    </li>
                    <li class="">
                       <a href="shop.html" class="text-gray-600 hover-text-main-600">Pantry Staples</a>
                    </li>
                 </ul>
              </div>
              <div class="footer-item" data-aos="fade-up" data-aos-duration="1200">
                 <h6 class="">Shop on The Go</h6>
                 <p class="mb-16">Marketpro App is available. Get it now</p>
                 <div class="flex items-center gap-8 my-32">
                    <a href="https://www.apple.com/store" class="">
                    <img src="./images/thumbs/store-img1.png" alt="Image">
                    </a>
                    <a href="https://play.google.com/store/apps?hl=en" class="">
                    <img src="./images/thumbs/store-img2.png" alt="Image">
                    </a>
                 </div>
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
     </footer>
     <!-- bottom Footer -->
     <div class="bottom-footer bg-color-one py-8">
        <div class="container container-lg">
           <div class="bottom-footer__inner flex-between flex-wrap gap-16 py-16">
              <p class="bottom-footer__text wow fadeInLeftBig">Marketpro eCommerce &copy; 2024. All Rights Reserved
              </p>
              <div class="flex items-center gap-8 flex-wrap wow fadeInRightBig">
                 <span class="text-heading text-sm">We Are Accepting</span>
                 <img src="./images/thumbs/payment-method.png" alt="Image">
              </div>
           </div>
        </div>
     </div>
     <!-- ==================== Footer End Here ==================== -->
@endsection
