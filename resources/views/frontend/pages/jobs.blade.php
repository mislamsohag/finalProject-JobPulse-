@extends('layouts.master')
@section('title', 'All Jobs')
@section('content')
@include('frontend.components.header')

<!-- Hero Section block Start -->
<section class="bg-white dark:bg-fuchsia-900">
    <div class="grid max-w-screen-xl pt-8 pb-4 mx-auto lg:gap-4 xl:gap-0 lg:py-12 lg:grid-cols-12">
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
<!-- Hero Section block End -->

<!-- Recent Publish Job block Start -->

<section class="bg-gray-50 dark:bg-gray-800"> 
    <div class="max-w-screen-xl px-4 py-4 mx-auto space-y-6 lg:space-y-6 lg:py-4 lg:px-4">
        <!-- Row --> 
        <div class="flex flex-wrap items-center justify-between">
            <h2 class="text-2xl font-extrabold tracking-tight text-fuchsia-900 dark:text-white">All Published Jobs</h2>
            
            <!-- Search Button Start-->
            <form class="flex items-center max-w-screen">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                        </svg>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search job category" required />
                </div>
                <button type="submit"
                    class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
            <!-- Search Button End -->
        </div>       
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Developers</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Designers</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Marketers</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">UI/UX</button>
        <button type="button"
            class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Others</button>

        <div class="items-center gap-2 sm:grid sm:grid-cols-2 md:grid md:grid-cols-3  lg:grid lg:grid-cols-4 xl:gap-2">

            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <img class="object-cover w-2/5 rounded-t-lg md:h-2/5 md:w-2/5 md:rounded-none md:rounded-s-lg"
                        src="{{asset('images/sohagTech_logo.png')}}" alt="Company Logo">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-fuchsia-900 dark:text-white">Job Title
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-1</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-2</p>
                    </div>
                </a>
            </div>
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <img class="object-cover w-2/5 rounded-t-lg md:h-2/5 md:w-2/5 md:rounded-none md:rounded-s-lg"
                        src="{{asset('images/sohagTech_logo.png')}}" alt="Company Logo">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-fuchsia-900 dark:text-white">Job Title
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-1</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-2</p>
                    </div>
                </a>
            </div>
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <img class="object-cover w-2/5 rounded-t-lg md:h-2/5 md:w-2/5 md:rounded-none md:rounded-s-lg"
                        src="{{asset('images/sohagTech_logo.png')}}" alt="Company Logo">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-fuchsia-900 dark:text-white">Job Title
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-1</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-2</p>
                    </div>
                </a>
            </div>
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <img class="object-cover w-2/5 rounded-t-lg md:h-2/5 md:w-2/5 md:rounded-none md:rounded-s-lg"
                        src="{{asset('images/sohagTech_logo.png')}}" alt="Company Logo">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-fuchsia-900 dark:text-white">Job Title
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-1</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Description-2</p>
                    </div>
                </a>
            </div>









        </div>

    </div>
</section>
<!-- End Recent Publish Job block -->

<!-- Top Companies Block Start -->
<section class="bg-white dark:bg-fuchsia-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">

        <h2 class="text-2xl py-6 font-extrabold tracking-tight text-fuchsia-900 dark:text-white">Top Companies</h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <!-- Companies -->
            <div
                class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company Name
                        </h5>
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
                        <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company Name
                        </h5>
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
                        <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company Name
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Companies Block block End -->

<!-- Footer -->
@include('frontend.components.footer')

@endsection