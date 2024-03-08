@extends('layouts.master')
@section('title', 'Job')
@section('content')
@include('frontend.components.header')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-20 lg:w-full md:flex-none">
    <div class="flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      @foreach($jobDetails as $jobDetail)
      <div class="flex-auto p-4">
        <!-- Edit Button -->
        <div class="flex justify-between items-center mx-5 p-2 md:p-2 rounded-b dark:border-gray-600">
          <div>
          <span class="mb-2 text-2xl font-bold tracking-tight dark:text-white text-fuchsia-900">{{$jobDetail->company->company_name}}</span>
          <p><span
            class="font-semibold text-slate-700">{{$jobDetail->designation}}</span></p>
          </div>

          <!-- Apply button -->
          <a href="{{url('jobApplyPage', $jobDetail->id)}}" type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-bold rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply</a>
        </div>

        <!-- main content -->
        <div class="flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div
            class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">           
           
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
              <div class="flex justify-between">
                <!-- Basic Information --> 
                <div class="flex flex-col justify-between leading-normal md:w-8/12 lg:w-10/12 pe-4">
                  <h5 class="mb-2 text-xl font-bold tracking-tight text-fuchsia-900 dark:text-white">Job Title : {{$jobDetail->title}}</h5>
                  <div class="flex flex-col">                   
                    
                    <span class="mb-2 leading-tight text-sm"><span
                        class="font-semibold text-slate-700 sm:ml-2">Deadline : {{$jobDetail->deadline}}</span></span>
                    
                    <span class="mb-2 leading-tight text-sm"><span
                        class="font-semibold text-slate-700 sm:ml-2">Education : {{$jobDetail->education}}</span></span>
                    
                    <span class="mb-2 leading-tight text-sm"><span
                        class="font-semibold text-slate-700 sm:ml-2">Experience : {{$jobDetail->experience}}</span></span>
                    
                    <span class="mb-2 leading-tight text-sm"><span
                        class="font-semibold text-slate-700 sm:ml-2">Age Limit : {{$jobDetail->age_range}}</span></span>
                    
                    <span class="mb-2 leading-tight text-sm"><span
                        class="font-semibold text-slate-700 sm:ml-2">Job Location : {{$jobDetail->job_location}}</span></span>
                    
                  </div>
                </div>
                
               <!-- Company Image -->
                <div class="min-w-2/12">
                  <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                    src="{{asset($jobDetail->company->img)}}" alt="Company Picture/Logo">
                </div>
              </div>        


              <h6 class="mt-4 mb-2 text-fuchsia-900">Job Context : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->description}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Job Responsibilities : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->response}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Skills & Expertise : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->qualification}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Company Facility & Benefits  : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->benefits}}</span></span>

              <h6 class="mt-4 mb-2 text-fuchsia-900">Employment Status : </h6>
              <span class="mb-2 leading-tight text-xs sm:ml-2">Job Type : <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->job_type}}</span></span>
              <span class="mb-2 leading-tight text-xs sm:ml-2">Work Mode : <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->work_mode}}</span></span>

              <h6 class="mt-4 mb-2 text-fuchsia-900">Job Summury : </h6>
              <span class="mb-2 leading-tight text-xs sm:ml-2">Vacancy : <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->vacancy}}</span></span>
              <span class="mb-2 leading-tight text-xs sm:ml-2">Salary Range : <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->salary}}</span></span>
            </div>
          </div>
        </div>

        <!-- Company Information -->
        <div class="flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div
            class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">           
            <div class="flex flex-col justify-between p-4 leading-normal w-full">              
              <h6 class="mt-4 mb-2 text-fuchsia-900 font-extrabold text-2xl">Company Information : </h6>
              <span class="mb-2 leading-tight text-sm sm:ml-2">Name : <span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->company->company_name}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Address : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->company->district}}, {{$jobDetail->company->thana}}, {{$jobDetail->company->location}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Company Type : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->company->industry_type}}</span></span>
              
              <h6 class="mt-4 mb-2 text-fuchsia-900">Theme of Company : </h6>
              <span class="mb-2 leading-tight text-sm"><span class="font-semibold text-slate-700 sm:ml-2">{{$jobDetail->company->description}}</span></span>
            </div>            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@include('frontend.components.footer')
@endsection