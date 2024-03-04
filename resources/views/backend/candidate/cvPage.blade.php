@extends('layouts.app')

@section('title', 'Profile')
@section('content')

<!-- content -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mt-6 lg:w-full md:flex-none">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <!-- Edit Button -->
        <div class="flex justify-between items-center mx-5 p-2 md:p-2 rounded-b dark:border-gray-600">
          <span>Personal Details</span>
          <a href="{{url('cvEditPage')}}" type="button"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-bold rounded-lg text-sm px-6 py-2 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</a>
        </div>
        <!-- main content -->
        <div class="relative  flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
          <div
            class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            
            @foreach($data[0] as $info) 
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
              <div class="flex justify-between">
                <!-- Basic Information --> 
                <div class="flex flex-col justify-between leading-normal md:w-8/12 lg:w-10/12 pe-4">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$info->name ?? ''}}</h5>
                  <div class="flex flex-col">                    
                    <span class="mb-2 leading-tight text-xs">Father's Name: <span
                        class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->father_name ?? ''}}</span></span>
                    <span class="mb-2 leading-tight text-xs">Mother's Name: <span
                        class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->mother_name ?? ''}}</span></span>
                    <span class="mb-2 leading-tight text-xs">Date Of Birth: <span
                        class="font-semibold text-slate-700 sm:ml-2">{{$info->account->dateOfBirth ?? ''}}</span></span>
                    <span class="mb-2 leading-tight text-xs">Blood Group: <span
                        class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->blood_group ?? ''}}</span></span>
                    
                  </div>
                </div>
                
               
                <div class="min-w-2/12">
                  <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                    src="{{$info->account->img ?? '#'}}" alt="Candidate Picture">
                    
                </div>
                
              </div>
 
              <div class="flex flex-col">
                <span class="mb-2 leading-tight text-xs">ID(NID/Any Type of ID): <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->n_id ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Passport No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->passport ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Cell No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->account->phone ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Emergency Contact No.: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->account->emergency ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Email: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->email ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">WhatsApp: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->account->whatsup ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Linkedin Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->linkedin ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Facebook Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->facebook ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">GitHub Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->github ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Behance/Dribble Link: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->behance ?? ''}}</span></span>
                <span class="mb-2 leading-tight text-xs">Portfolio Website: <span
                    class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_basic->portfolio ?? ''}}</span></span>
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
                        {{$info->cv_education->degree ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_education->school_university ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$info->cv_education->department ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_education->passing_year ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$info->cv_education->CGPA ?? ''}}
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
                        Duration
                      </th>
                      <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        Completion Year
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                      <td scope="row"
                        class="text-xs px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                        {{$info->cv_training->training_name ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_training->organization ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$info->cv_training->duration ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_training->passing_year ?? ''}}
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
                        Company Name
                      </th>
                      <th scope="col" class="px-6 py-3">
                        Designation
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
                        {{$info->cv_experience->company_name ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_experience->designation ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$info->cv_experience->joining_date ?? ''}}
                      </td>
                      <td class="text-xs px-6 py-4">
                        {{$info->cv_experience->departure_date ?? ''}}
                      </td>
                    </tr>                    
                  </tbody>
                </table>
              </div>

              <h6 class="mt-4 mb-2">Skills</h6>
              <span class="mb-2 leading-tight text-xs">Skills: <span class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_skill->skills ?? ''}}</span></span>

              <h6 class="mt-4 mb-2">Extra Information</h6>
              <span class="mb-2 leading-tight text-xs">Current Salary: <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_skill->current_salary ?? ''}}</span></span>

              <span class="mb-2 leading-tight text-xs">Expected Salary: <span
                  class="font-semibold text-slate-700 sm:ml-2">{{$info->cv_skill->expected_salary ?? ''}}</span></span>

            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection