@extends('layouts.master')
@include('frontend.components.header')
@section('title', 'Account Page')
@section('content')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-20 lg:w-full md:flex-none">
    <div class=" flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">

        <!-- main content -->
        <div class="  flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div
            class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">

              <form method="post" action="{{url('accountCreate')}}" enctype="multipart/form-data">
                <div class="flex justify-center items-center">
                  <!-- Candidate Image -->
                  <div class="flex-initial w-10/12">
                    <img id="img"
                      class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                      src="{{asset('/images/sohagTech_logo.png')}}" alt="Candidate Picture">

                    <input name="img" type="file">
                  </div>
                  <!-- Submit Button -->
                  <div class="flex-initial w-2/12 ">
                    <button type="submit"
                      class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-bold rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                  </div>
                </div>

                <!-- Name candidate -->
                <div class="grid gap-2 mb-6 md:grid-cols-2 mt-6">
                  <span class="mb-2 leading-tight text-sm">Full Name : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" name="name" placeholder="Your Name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Phone Number -->
                  <span class="mb-2 leading-tight text-sm">Phone Number : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="phone" type="text" placeholder="Phone Number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Emergency Contact No. -->
                  <span class="mb-2 leading-tight text-sm">Emergency Contact No. : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="emergency" type="text" placeholder="Emergency Contact No."
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Email -->
                  <span class="mb-2 leading-tight text-sm">Email : <span class="font-semibold text-slate-700 sm:ml-2">
                      <input name="email" type="text" placeholder="Your Email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Whats Up -->
                  <span class="mb-2 leading-tight text-sm">WhatsApp : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="whatsup" type="text" placeholder="WhatsApp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Date of Birth -->
                  <span class="mb-2 leading-tight text-sm">Date of Birth : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="dateOfBirth" type="date" placeholder="Date of Birth"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>

                  <!-- Password -->
                  <span class="mb-2 leading-tight text-sm">Password : <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="password" type="text" placeholder="Password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                    
                  <!-- Re type password -->
                  <span class="mb-2 leading-tight text-sm">Retype Password: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input name="rePassword" type="text" placeholder="Retype Password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('frontend.components.footer')
@endsection