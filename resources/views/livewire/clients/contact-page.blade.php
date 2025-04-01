@extends('layouts.app')
@section('content')
    <!-- ========================= Breadcrumb End =============================== -->
    <!-- ============================ Contact Section Start ================================== -->
    <section class="contact py-80">
        <div class="container container-lg">
            <div class="row g-5">
                <div class="xl:w-8/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="contact-box border border-gray-100 rounded-16 px-24 py-40">
                        <form action="#">
                            <h6 class="mb-32">Make Custom Request</h6>
                            <div class="row g-4">
                                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12 ">
                                    <label for="name"
                                        class="flex items-center gap-4 text-sm font-heading-two text-gray-900 font-[600] mb-4">Full
                                        Name <span class="text-danger text-xl line-height-1">*</span> </label>
                                    <input type="text" class="common-input px-16" id="name" placeholder="Full name">
                                </div>
                                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12 ">
                                    <label for="email"
                                        class="flex items-center gap-4 text-sm font-heading-two text-gray-900 font-[600] mb-4">Email
                                        Address <span class="text-danger text-xl line-height-1">*</span> </label>
                                    <input type="email" class="common-input px-16" id="email"
                                        placeholder="Email address">
                                </div>
                                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12 ">
                                    <label for="phone"
                                        class="flex items-center gap-4 text-sm font-heading-two text-gray-900 font-[600] mb-4">Phone
                                        Number<span class="text-danger text-xl line-height-1">*</span> </label>
                                    <input type="number" class="common-input px-16" id="phone"
                                        placeholder="Phone Number*">
                                </div>
                                <div class="md:w-6/12  flex-grow-0 flex-shrink-0 basis-auto custom-sm:w-6/12 ">
                                    <label for="subject"
                                        class="flex items-center gap-4 text-sm font-heading-two text-gray-900 font-[600] mb-4">Subject
                                        <span class="text-danger text-xl line-height-1">*</span> </label>
                                    <input type="text" class="common-input px-16" id="subject" placeholder="Subject">
                                </div>
                                <div class="md:w-full flex-grow-0 flex-shrink-0 basis-auto">
                                    <label for="message"
                                        class="flex items-center gap-4 text-sm font-heading-two text-gray-900 font-[600] mb-4">Message
                                        <span class="text-danger text-xl line-height-1">*</span> </label>
                                    <textarea class="common-input px-16" id="message" placeholder="Type your message"></textarea>
                                </div>
                                <div class="md:w-full flex-grow-0 flex-shrink-0 basis-auto mt-16">
                                    <button type="submit" class="btn btn-main py-18 px-32 rounded-8">Get a Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="xl:w-4/12  flex-grow-0 flex-shrink-0 basis-auto">
                    <div class="contact-box border border-gray-100 rounded-16 px-24 py-40">
                        <h6 class="mb-48">Get In Touch</h6>
                        <div class="flex items-center gap-16 mb-16">
                            <span
                                class="w-40 h-40 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i
                                    class="ph-fill ph-phone-call"></i></span>
                            <a href="tel:+00123456789" class="text-md text-gray-900 hover-text-main-600">+00 123 456 789</a>
                        </div>
                        <div class="flex items-center gap-16 mb-16">
                            <span
                                class="w-40 h-40 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i
                                    class="ph-fill ph-envelope"></i></span>
                            <a href="mailto:support24@marketpro.com"
                                class="text-md text-gray-900 hover-text-main-600">support24@marketpro.com</a>
                        </div>
                        <div class="flex items-center gap-16 mb-0">
                            <span
                                class="w-40 h-40 flex items-center justify-center rounded-[50%] border border-gray-100 text-main-two-600 text-2xl flex-shrink-0"><i
                                    class="ph-fill ph-map-pin"></i></span>
                            <span class="text-md text-gray-900 ">789 Inner Lane, California, USA</span>
                        </div>
                    </div>
                    <div class="mt-24 flex items-center flex-wrap gap-16">
                        <a href="index.html"
                            class="bg-neutral-600 hover-bg-main-600 rounded-8 p-10 px-16 flex-between flex-wrap gap-8 flex-grow">
                            <span class="text-white font-[500]">Get Support On Call</span>
                            <span
                                class="w-36 h-36 bg-main-600 rounded-8 flex items-center justify-center text-xl text-white"><i
                                    class="ph ph-headset"></i></span>
                        </a>
                        <a href="index.html"
                            class="bg-neutral-600 hover-bg-main-600 rounded-8 p-10 px-16 flex-between flex-wrap gap-8 flex-grow">
                            <span class="text-white font-[500]">Get Direction</span>
                            <span
                                class="w-36 h-36 bg-main-600 rounded-8 flex items-center justify-center text-xl text-white"><i
                                    class="ph ph-map-pin"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Contact Section End ================================== -->
    <!-- ========================== Shipping Section Start ============================ -->
    <section class="shipping mb-24" id="shipping">
        <div class="container container-lg">
            <div class="row g-4">
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12  " data-aos="zoom-in"
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 " data-aos="zoom-in"
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 " data-aos="zoom-in"
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
                <div class="custom-2xl:w-3/12  flex-grow-0 flex-shrink-0 basis-auto md:w-6/12 " data-aos="zoom-in"
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
@endsection
