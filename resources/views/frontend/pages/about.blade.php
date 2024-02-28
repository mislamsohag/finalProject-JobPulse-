@extends('layouts.master')

@section('title', 'Home')

@section('content')

@include('frontend.components.header')

<!-- Start Hero Section block -->
<section class="bg-white dark:bg-fuchsia-900">
    <div class="grid max-w-screen-xl pt-20 pb-8 mx-auto lg:gap-4 xl:gap-0 lg:py-8 lg:grid-cols-12 lg:pt-16">
        <div class="mr-auto place-self-center lg:col-span-7">

            <h1
                class="max-w-2xl mb-4 text-fuchsia-900 text-3xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-5xl dark:text-white">
                Find the right job & <br>Search for best candidate</h1>
        </div>
        <!-- Hero section image -->
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="{{asset('images/hero.png')}}" alt="hero image">
        </div>
    </div>
</section>
<!-- End Hero Section block -->

<main class="mx-auto mt-4 bg-white shadow-lg rounded-lg">
    <section class="mb-4 flex flex-col md:flex-row gap-4 items-center">
        <div class="md:w-1/2 mb-4 md:mb-0">
            <img src="https://via.placeholder.com/500" alt="Company Team" class="w-full h-auto rounded-lg shadow-md">
        </div>
        <div class="md:w-1/2 md:px-4 lg:px-4">
            <h2 class="text-2xl text-fuchsia-900 font-bold mb-4">Who We Are</h2>
            <p class="text-gray-700 text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor nunc eu mauris cursus, vel
                tincidunt orci ullamcorper.
                Quisque ultricies efficitur metus, non volutpat felis tincidunt a. Sed euismod leo vel tellus malesuada,
                et varius tortor
                lobortis. Duis consectetur libero eu scelerisque euismod.
            </p>
        </div>
    </section>



    <!-- Top Companies Block Start -->
    <section class="bg-white dark:bg-fuchsia-900">
        <div class="max-w-screen-xl pb-4 mx-auto lg:pb-8">

            <h2 class="text-2xl py-4 font-extrabold tracking-tight text-fuchsia-900 dark:text-white">Companies believe
                in us</h2>
            <div class="grid grid-cols-2 gap-4 text-gray-500 sm:gap-4 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                <!-- Companies -->
                <div
                    class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-4 rounded-t-lg" src="#" alt="Company image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                                Name</h5>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-4 rounded-t-lg" src="#" alt="Company image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                                Name</h5>
                        </a>
                    </div>
                </div>
                <div
                    class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                                Name</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Companies Block block End -->

    <!-- Mission and Vission Block Start -->
    <section class="mb-8 flex flex-col md:flex-row gap-6 items-center">
        <div class="md:w-1/2 md:pl-8">
            <h2 class="text-2xl text-fuchsia-900 font-bold mb-4">Our Mission and Vission</h2>
            <p class="text-gray-700 text-justify">
                Vestibulum fermentum dui sit amet massa fringilla, vel consequat enim tincidunt. Sed eu justo ut leo
                bibendum fringilla.
                Proin id leo eu augue eleifend facilisis. Integer eget dolor vitae enim facilisis aliquam.
            </p>
        </div>
        <div class="md:w-1/2 mb-4 md:mb-0">
            <img src="https://via.placeholder.com/500" alt="Company Team" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </section>
</main>

<!-- Footer -->
@include('frontend.components.footer')

@endsection