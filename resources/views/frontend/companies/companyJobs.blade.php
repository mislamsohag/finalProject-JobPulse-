@extends('layouts.master')
@section('title', 'Company Jobs')
@section('content')
@include('frontend.components.header')



<!-- Start Hero Section block -->
@foreach($companyInfo as $company)
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl text-fuchsia-900 text-3xl font-extrabold leading-none tracking-tight md:text-4xl xl:text-5xl dark:text-white">
                {{$company->company_name}} </h1><br>
            <span>{{$company->description}}</span> 
        </div>
        <!-- Hero section image -->
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img class="p-2 w-full  h-full rounded-t-lg" src="{{asset($company->img)}}" alt="Company image" />            
        </div>
    </div>
</section>
<!-- End Hero Section block --><!-- Start Job block -->

<section class="bg-gray-50 dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-4 mx-auto space-y-6 lg:space-y-6 lg:py-4 lg:px-4">
        <!-- Row -->
        <h2 class="text-2xl font-extrabold tracking-tight text-fuchsia-900 dark:text-white">{{$company->company_name}}
           all Published Job</h2>        
           <div class="items-center gap-2 sm:grid sm:grid-cols-2 md:grid md:grid-cols-3  lg:grid lg:grid-cols-4 xl:gap-2">
            
            @foreach($company->job as $jobs)
            <div class="text-gray-500 sm:text-lg dark:text-gray-400">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">                    
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$jobs->title}}</h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$jobs->designation}}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Salary :{{$jobs->salary}}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Job block -->

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
                <p class="text-xl font-medium text-fuchsia-900 md:text-2xl dark:text-white">{{$company->description}}</p>
            </blockquote>
            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                <img class="w-6 h-6 rounded-full"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                    alt="profile picture">
                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                    <div class="pr-3 font-medium text-gray-900 dark:text-white">{{$company->contact_person}}</div>
                    <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">{{$company->designation}} at {{$company->company_name}}</div>
                </div>
            </figcaption>
        </figure>
    </div>
</section>
<!-- End block -->
@endforeach
<!-- Footer -->
@include('frontend.components.footer')

@endsection