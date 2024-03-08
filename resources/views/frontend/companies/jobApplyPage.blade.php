@extends('layouts.master')
@section('title', 'Job')
@section('content')
@include('frontend.components.header')

<!-- content -->
@foreach($jobInfo as $job)
<div class="flex justify-center flex-wrap -mx-3">
  <div class="w-full max-w-1/2 px-3 mt-20 lg:w-1/2 md:flex-none">
    <div class="flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">

      <div class="flex-auto p-4">
        <!-- Edit Button -->
        <div class="flex justify-between items-center mx-5 p-2 md:p-2 rounded-b dark:border-gray-600">
          <div>
            <span class="mb-2 text-2xl font-bold tracking-tight dark:text-white text-fuchsia-900">{{$job->company->company_name}}</span>
            <p><span class="font-semibold text-slate-700">{{$job->designation}}</span></p>
          </div>
        </div>

        <!-- main content -->
        @foreach($userInfo as $user)
        <form action="">
          <div class="flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
            <div class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <div class="flex flex-col justify-between p-4 leading-normal w-full">
                <div class="flex justify-between">
                  <!-- Basic Information -->
                  <div class="flex flex-col justify-between leading-normal md:w-8/12 lg:w-10/12 pe-4">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-fuchsia-900 dark:text-white">{{$user->user->name}}</h5>
                    <div class="flex flex-col">
                      <!-- Email -->
                      <span class="mb-2 leading-tight text-sm sm:ml-2">Email : <span
                          class="font-semibold text-slate-700 sm:ml-2">{{$user->user->email}}</span></span>
                        <!-- Phone -->
                      <span class="mb-2 leading-tight text-sm sm:ml-2">Phone : <span
                          class="font-semibold text-slate-700 sm:ml-2">{{$user->phone}}</span></span>
                    </div>
                  </div>
                  
                  <!-- Candidate Image -->
                  <div class="min-w-2/12">
                    <img class=" object-cover w-16 rounded-2xl h-16 md:h-16 md:w-16"
                      src="{{asset($user->img)}}" alt="Candidate Picture/Logo">
                  </div>
                </div>

                <h6 class="mt-4 mb-2 text-fuchsia-900">Current Salary : </h6>                
                <input name="current_salary" placeholder="Current Salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-fuchsia-500 dark:focus:border-fuchsia-500" >
                
                <h6 class="mt-4 mb-2 text-fuchsia-900">Expexted Salary : </h6>
                <input name="expected_salary" placeholder="Expected Salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-fuchsia-500 dark:focus:border-fuchsia-500" >
                                
                <input class="hidden" name="account_id" type="text" value="{{$user->id}}">
                <!-- <input class="hidden" name="job_id" type="text" value="{{$job->id}}"> -->
                <input class="hidden" name="company_id" type="text" value="{{$job->company->id}}">
                <!-- Apply button -->
                <a href="{{url('jobApplyed', $job->id)}}" type="submit"
                  class="text-white bg-green-700 mt-6 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-bold rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Apply</a>
              </div>
            </div>
          </div>
        </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endforeach
@include('frontend.components.footer')
@endsection