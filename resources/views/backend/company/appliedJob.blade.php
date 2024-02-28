@extends('layouts.app')

@section('title', 'Applied Jobs')
@section('content')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-6 lg:w-1/2 md:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <h6 class="mb-0">Job Titel:</h6>
      </div>
      <div class="flex-auto p-4 pt-6">
        <ul class="flex flex-col pl-0 mb-0 rounded-lg">

          <li class="relative flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
            <div class="flex flex-col w-10/12">
              <h6 class="mb-4 leading-normal text-sm">Applicant Name:</h6>
              <span class="mb-2 leading-tight text-xs">Post: <span class="font-semibold text-slate-700 sm:ml-2">Viking
                  Burrito</span></span>
              <span class="mb-2 leading-tight text-xs">Email Address: <span
                  class="font-semibold text-slate-700 sm:ml-2">oliver@burrito.com</span></span>
              <span class="leading-tight text-xs">Mobile: <span
                  class="font-semibold text-slate-700 sm:ml-2">01812060163</span></span>
            </div>

            <a href="{{url('/jobDetails')}}" class="text-white text-center bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Details</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

</div>

@endsection