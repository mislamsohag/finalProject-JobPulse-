@extends('layouts.app')

@section('title', 'Account')
@section('content')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-6 lg:w-full md:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <!-- Edit Button -->
        <div class="flex justify-between items-center mx-5 p-2 md:p-2 rounded-b dark:border-gray-600">
          <span>Account</span>
        </div>
        <!-- main content -->
        <div class="relative  flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div
            class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
              <form>
                <div class="flex">
                  <div class="flex-initial w-10/12">
                    <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                      src="{{asset('/images/sohagTech_logo.png')}}" alt="Candidate Picture">
                    
                    <input type="file">
                  </div>
                  <div class="flex-initial w-2/12 justify-center">
                    <a href="{{url('accountUpdate')}}" type="submit"
                      class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-bold rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
                  </div>
                </div>
                <div class="grid gap-2 mb-6 md:grid-cols-2 mt-6">
                  <span class="mb-2 leading-tight text-sm">Full Name: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" value="Md. Mazharul Islam Sohag"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">Cell No.: <span class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" value="01812060163"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">Emergency Contact No.: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" value="01635757151"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">Email: <span class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" value="mislamsohag@gmail.com" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">WhatsApp: <span class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" value="01812060163" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">Current Password: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" placeholder="Current Password" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">New Password: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" placeholder="New Password" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>
                  <span class="mb-2 leading-tight text-sm">Retype Password: <span
                      class="font-semibold text-slate-700 sm:ml-2">
                      <input type="text" placeholder="Retype Password" readonly
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </span></span>




                </div>
            </div>
            </form>
            <!--  -->

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection