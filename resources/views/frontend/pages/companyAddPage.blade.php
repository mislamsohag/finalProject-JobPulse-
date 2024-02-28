@extends('layouts.master')
@include('frontend.components.header')
@section('title', 'Company Add')
@section('content')

<!-- content -->
<div
    class="min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div class="flex flex-col justify-between p-4 leading-normal w-full">
      <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

        <form method="POST" action="{{url('companyEntry')}}" enctype="multipart/form-data">
          @csrf

          <div class="flex items-center mb-4 p-2 md:p-2 rounded-b dark:border-gray-600">
            <div class="min-w-2/12">
              <!-- Company Image -->
              <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                src="{{asset('/images/sohagTech_logo.png')}}" alt="Candidate Picture">
              <input name="img" type="file">
            </div>
          </div>

          <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
              <label for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name <span class="text-red-600">*</span></label>
              <input type="text" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Name" required />
            </div>

            <div>
              <label for="password"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password <span class="text-red-600">*</span></label>
              <input type="text" name="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Password" required />
            </div>

            <div>
              <label for="confirmPassword"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password <span class="text-red-600">*</span></label>
              <input type="text" name="confirmPassword" id="confirmPassword"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Confirm Password" required />
            </div>

            <div>
              <label for="company_name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name <span class="text-red-600">*</span></label>
              <input type="text" name="company_name" id="company_name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Company Name" required />
            </div>

            <div>
              <label for="established_year"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Established Year <span class="text-red-600">*</span></label>
              <input type="text" name="established_year" id="established_year"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Company Established Year" required />
            </div>

            <div>
              <label for="employee" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Employee <span class="text-red-600">*</span></label>
              <input type="text" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Total Employee" required />
            </div>                      

            <div>
              <label for="country"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country <span class="text-red-600">*</span></label>
              <input type="text" name="country" id="country"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Country" required />
            </div>

            <div>
              <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">District Name <span class="text-red-600">*</span></label>
              <input type="text" name="district" id="district"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="District Name" required />
            </div>

            <div>
              <label for="thana"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Thana Name <span class="text-red-600">*</span></label>
              <input type="text" name="thana" id="thana"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Thana Name" required />
            </div>

            <div>
              <label for="location"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company location <span class="text-red-600">*</span></label>
              <input type="text" name="location" id="location"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Company Location" required />
            </div>

            <div>
              <label for="industry_type"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Industry Type <span class="text-red-600">*</span></label>
              <input type="text" name="industry_type" id="industry_type"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Industry Type" required />
            </div>

            <div>
              <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description <span class="text-red-600">*</span></label>
              <input type="text" name="description" id="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description" required />
            </div>

            <div>
              <label for="license"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">License / Trade License <span class="text-red-600">*</span></label>
              <input type="text" name="license" id="license"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="License" required />
            </div>

            <div>
              <label for="facebook"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook Link <span class="text-red-600">*</span></label>
              <input type="text" name="facebook" id="facebook"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Facebook Link" required />
            </div>

            <div>
              <label for="contact_person"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Person <span class="text-red-600">*</span></label>
              <input type="text" name="contact_person" id="contact_person"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Contact Person" required />
            </div>

            <div>
              <label for="designation"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation <span class="text-red-600">*</span></label>
              <input type="text" name="designation" id="designation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Designation" required />
            </div>

            <div>
              <label for="phone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone <span class="text-red-600">*</span></label>
              <input type="text" name="phone" id="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Phone" required />
            </div>                      
          
            <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email <span class="text-red-600">*</span></label>
              <input type="text" name="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Email" required />
            </div>

            <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
              <button  type="submit"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Register</button>
              <!-- <a href="{{url('#')}}" type="button"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@include('frontend.components.footer')
@endsection
