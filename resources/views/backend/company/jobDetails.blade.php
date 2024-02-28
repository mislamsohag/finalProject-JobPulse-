@extends('layouts.app')

@section('title', 'Job Details')
@section('content')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-6 lg:w-full md:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="p-6 px-6 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <h6 class="mb-2 px-6">Job Titel:</h6>
        <!-- Select and Reject Btn -->
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          <a href="#" type="button"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Select</a>
          <a href="#" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reject</a>
        </div>
      </div>

      <div class="flex-auto p-4 pt-2">
        <div class="relative  flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
              <div class="flex ">

                <!-- Basic Information -->
                <div class="flex flex-col justify-between leading-normal md:w-8/12 lg:w-10/12 pe-4">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Candidate Name: </h5>
                  <div class="flex flex-col">
                    <span class="mb-2 leading-tight text-xs">Father's Name: <span
                      class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                  <span class="mb-2 leading-tight text-xs">Mother's Name: <span
                      class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                  <span class="mb-2 leading-tight text-xs">Date Of Birth: <span
                      class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
                  <span class="mb-2 leading-tight text-xs">Blood Group: <span
                      class="font-semibold text-slate-700 sm:ml-2">A+</span></span>
                  </div>  
                </div>
                <div class="min-w-2/12">
                  <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                  src="{{asset('/images/sohagTech_logo.png')}}" alt="Candidate Picture">
                </div>
              </div>
              
              <div class="flex flex-col">                
                <span class="mb-2 leading-tight text-xs">Social ID(NID/Any Type of ID): <span
                    class="font-semibold text-slate-700 sm:ml-2">000000000000000000000</span></span>
                <span class="mb-2 leading-tight text-xs">Passport No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">000000000000000000</span></span>
                <span class="mb-2 leading-tight text-xs">Cell No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">012000000000000000</span></span>
                <span class="mb-2 leading-tight text-xs">Emergency Contact No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">01200000000000000</span></span>
                <span class="mb-2 leading-tight text-xs">Email: <span
                    class="font-semibold text-slate-700 sm:ml-2">oliver@burrito.com</span></span>
                <span class="mb-2 leading-tight text-xs">WhatsApp: <span
                    class="font-semibold text-slate-700 sm:ml-2">012451245000</span></span>
                <span class="mb-2 leading-tight text-xs">Linkedin Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">oliver.linkedin.com</span></span>
                <span class="mb-2 leading-tight text-xs">Facebook Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">sohag@facebook.com</span></span>
                <span class="mb-2 leading-tight text-xs">GitHub Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">sohag@github.com</span></span>
                <span class="mb-2 leading-tight text-xs">Behance/Dribble Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">sohag@github.com</span></span>
                <span class="mb-2 leading-tight text-xs">Portfolio Website: <span
                    class="font-semibold text-slate-700 sm:ml-2">sohag@github.com</span></span>
              </div>
              
              <h6 class="mt-4 mb-2">Educational Info</h6>
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <th scope="col" class=" px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Degree Type
                      </th>
                      <th scope="col" class="px-6 py-3">
                        University/School
                      </th>
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Department
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Passing Year
                      </th>
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        CGPA
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Bachelore of science
                      </td>
                      <td class="text-xs px-6 py-4">
                        Dhaka
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Computer
                      </td>
                      <td class="text-xs px-6 py-4">
                        2014
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        3.87
                      </td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Apple MacBook"
                      </td>
                      <td class="text-xs px-6 py-4">
                        White
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Laptop
                      </td>
                      <td class="text-xs px-6 py-4">
                        $3000
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Laptop
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <h6 class="mt-4 mb-2">Professional Trainings (if any)</h6>
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        taining Name
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Institution Name
                      </th>
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Completion Year
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row" class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Bachelore of science
                      </td>
                      <td class="text-xs px-6 py-4">
                        Dhaka
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Computer
                      </td>                      
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Bachelore of science
                      </td>
                      <td class="text-xs px-6 py-4">
                        Dhaka
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Computer
                      </td>                      
                    </tr>
                    
                  </tbody>
                </table>
              </div>

              <h6 class="mt-4 mb-2">Job Experiences (if any)</h6>
              <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Designation
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Company Name
                      </th>
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Joining Date
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Departure Date
                      </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Bachelore of science
                      </td>
                      <td class="text-xs px-6 py-4">
                        Dhaka
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Computer
                      </td>
                      <td class="text-xs px-6 py-4">
                        2014
                      </td>
                      
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        Apple MacBook"
                      </td>
                      <td class="text-xs px-6 py-4">
                        White
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        Laptop
                      </td>
                      <td class="text-xs px-6 py-4">
                        $3000
                      </td>                      
                    </tr>
                  </tbody>
                </table>
              </div>

              <h6 class="mt-4 mb-2">Skills</h6>
              <span class="mb-2 leading-tight text-xs">Skills: <span
                class="font-semibold text-slate-700 sm:ml-2">a, b, c</span></span>
          
              <h6 class="mt-4 mb-2">Extra Information</h6>
              <span class="mb-2 leading-tight text-xs">Current Salary: <span
                class="font-semibold text-slate-700 sm:ml-2">$20000</span></span>
          
              <span class="mb-2 leading-tight text-xs">Expected Salary: <span
                class="font-semibold text-slate-700 sm:ml-2">$2500</span></span>
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection