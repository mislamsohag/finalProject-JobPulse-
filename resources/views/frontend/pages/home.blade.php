@extends('layouts.master')
@section('title', 'Home')
@section('content')
@include('frontend.components.header')

<!-- Start Hero Section block -->
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <!-- Search Button Start-->
            <form class="mx-auto w-full my-6">
                <div class="flex">
                    <label class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Job Search</label>                    
                    <!-- Category Dropdown -->
                    <div class="bg-white divide-y divide-gray-100 shadow w-44 dark:bg-gray-700">
                        <div class="max-w-sm mx-auto">
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                
                                @foreach($categories as $category)
                                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <!-- Category Dropdown -->

                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-fuchsia-500 focus:border-fuchsia-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-fuchsia-500"
                            placeholder="Your needable job hear" required />

                        <button type="submit"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-fuchsia-700 rounded-e-lg border border-fuchsia-700 hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Search Button End -->
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

<!-- Top Companies Block Start -->
<section class="bg-white dark:bg-gray-900">
    <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">

        <h2 class="text-2xl py-6 font-extrabold tracking-tight text-fuchsia-900 dark:text-white">Top Companies</h2>
        <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
            <!-- Companies -->
            @foreach($companies as $company)
            <div
                class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{url('companyDetails', $company->id)}}" class="center">
                    <img class="p-2 w-32  h-32 rounded-t-lg" src="{{asset($company->img)}}" alt="Company image" />
                </a>
                <div class="px-5 pb-5">
                    <a href="{{url('companyDetails', $company->id)}}">
                        <h5 class="text font-semibold tracking-tight text-gray-900 dark:text-white">
                            {{$company->company_name}}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Top Companies Block block End -->

<!-- Start Recent Publish Job block -->
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-4 mx-auto space-y-6 lg:space-y-6 lg:py-4 lg:px-4">
        <!-- Row -->
        <h2 class="text-2xl font-extrabold tracking-tight text-fuchsia-900 dark:text-white">Recent Publish Jobs</h2>

        <div class="items-center gap-2 sm:grid sm:grid-cols-2 md:grid md:grid-cols-3  lg:grid lg:grid-cols-4 xl:gap-2">

            @foreach($allJobs as $jobs)
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <img class="object-cover w-20 h-20 rounded-t-lg md:h-30 md:w-30 md:rounded-none md:rounded-s-lg"
                        src="{{asset('images/sohagTech_logo.png')}}" alt="Company Logo">
                    <div class="flex flex-col justify-between p-2 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$jobs->title}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$jobs->designation}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Job Type: {{$jobs->work_mode}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Recent Publish Job block -->

<!-- Start block -->
<section class="bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-24 lg:px-6">
        <figure class="max-w-screen-md mx-auto">
            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z"
                    fill="currentColor" />
            </svg>
            <blockquote>
                <p class="text-xl font-medium text-fuchsia-900 md:text-2xl dark:text-white">"Landwind is just awesome.
                    It contains tons of predesigned components and pages starting from login screen to complex
                    dashboard. Perfect choice for your next SaaS application."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                    alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-900 dark:text-white">Micheal Gough</div>
                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
<!-- End block -->

<!-- Footer -->
@include('frontend.components.footer')

@endsection