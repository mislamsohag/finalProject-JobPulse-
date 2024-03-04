@extends('layouts.app')

@section('title', 'CV_Update')
@section('content')

<!-- content -->
<div>
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-6 lg:w-full md:flex-none">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        @foreach($data[0] as $info)
        <div class="flex-auto p-4">
          
          <!-- main content -->
          <div class="relative  flex p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
            <div
              class="flex min-w-full flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
              <div class="flex flex-col justify-between p-4 leading-normal w-full">

                <!-- Accrodion start -->
                <div id="accordion-collapse" data-accordion="collapse">
                  <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                      class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                      data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                      aria-controls="accordion-collapse-body-1">
                      <span>Basic Information</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5" />
                      </svg>
                    </button>
                  </h2>
                  <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

                      <!-- CV Basic Information -->
                      <form method="POST" action="{{url('cvBasic')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <!-- Full Name -->
                          <div>
                            <label for="name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                            <input name="name" type="text" id="name" value="{{$info->name}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="John" />
                          </div>

                          <!-- Hidden Id's for Account Id -->                          
                          <input hidden name="account_id" type="text" value="{{$info->account->id}}" class="" id="account_id" />
                          <!-- <input hidden name="password" type="text" value="{{$info->password}}" class="" id="account_id" /> -->

                          <!-- Father_Name -->
                          <div>
                            <label for="father_name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father's Name</label>
                            <input name="father_name" type="text" id="father_name" value="{{$info->cv_basic->father_name}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Father's Name" required />
                          </div>

                          <!-- Mother Name -->
                          <div>
                            <label for="mother_name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Name</label>
                            <input name="mother_name" type="text" id="mother_name" value="{{$info->cv_basic->mother_name}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Mother's Name" required />
                          </div>

                          <!-- Date of Birth -->
                          <div>
                            <label for="dateOfBirth"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                              of Birth</label>
                            <input name="dateOfBirth" type="date" id="dateOfBirth" value="{{$info->cv_basic->dateOfBirth}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Date of Birth" />
                          </div>

                          <!-- Phone -->
                          <div>
                            <label for="phone"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                              number</label>
                            <input name="phone" type="number" id="phone" value="{{$info->account->phone}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" />
                          </div>

                          <!-- Blood Group -->
                          <div>
                            <label for="blood_group"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Blood Group</label>
                            <input name="blood_group" type="text" id="blood_group" value="{{$info->cv_basic->blood_group}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Blood Group" required />
                          </div>

                          <!-- NID -->
                          <div>
                            <label for="n_id"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NID/Any Type of
                              ID</label>
                            <input name="n_id" type="number" id="n_id" value="{{$info->cv_basic->n_id}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="NID/Any Type of ID" required />
                          </div>

                          <!-- Passport -->
                          <div>
                            <label for="passport"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passport No.</label>
                            <input name="passport" type="number" id="passport" value="{{$info->cv_basic->passport}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passport No." />
                          </div>

                          <!-- EmergencyContact -->
                          <div>
                            <label for="EmergencyContact"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emergency Contact
                              No.</label>
                            <input name="emergency" type="number" id="emergency" value="{{$info->account->emergency}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Emergency Contact No." />
                          </div>

                          <!-- Email -->
                          <div>
                            <label for="email"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" readonly value="{{$info->email}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="email" />
                          </div>

                          <!-- WhatsApp -->
                          <div>
                            <label for="whatsup"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">WhatsApp</label>
                            <input name="whatsup" type="number" id="whatsup" value="{{$info->account->whatsup}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="WhatsApp" />
                          </div>

                          <!-- Linkedin -->
                          <div>
                            <label for="linkedin"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Linkedin Link</label>
                            <input name="linkedin" type="text" id="linkedin" value="{{$info->cv_basic->linkedin}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Linkedin Link" />
                          </div>

                          <!-- Facebook -->
                          <div>
                            <label for="facebook"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook Link</label>
                            <input name="facebook" type="text" id="facebook" value="{{$info->cv_basic->facebook}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Facebook Link" />
                          </div>

                          <!-- GitHub -->
                          <div>
                            <label for="gitHub"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GitHub
                              Link</label>
                            <input name="github" type="text" id="github" value="{{$info->cv_basic->github}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="GitHub Link" />
                          </div>

                          <!-- Behance/Dribble Link -->
                          <div>
                            <label for="Behance/Dribble Link"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Behance/Dribble
                              Link</label>
                            <input type="text" name="behance" id="behance" value="{{$info->cv_basic->behance}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Behance/Dribble Link" />
                          </div>

                          <!-- Portfolio Website -->
                          <div>
                            <label for="Portfolio Website"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Portfolio
                              Website</label>
                            <input type="text" name="portfolio" id="portfolio" value="{{$info->cv_basic->portfolio}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Portfolio Website" />
                          </div>

                          <!-- Candidate Image -->
                          <div class="flex items-center md:p-2 rounded-b dark:border-gray-600">
                            <div class="min-w-2/12">
                              <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                                src="{{$info->account->img}}" alt="Candidate Picture">
                              
                                <input name="img" type="file" value="{{$info->account->img}}">
                            </div>
                          </div>

                          <!-- Save Button -->
                          <div class="flex items-center pt-2 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            <a href="{{url('#')}}" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                      class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                      data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                      aria-controls="accordion-collapse-body-2">
                      <span>Educational Information</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5" />
                      </svg>
                    </button>
                  </h2>
                  <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">

                      <!-- CV Education Information -->
                      <form method="POST" action="{{url('cvEducation')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <!-- Degree -->
                          <div>
                            <label for="degree"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree
                              Type</label>
                            <select name="degree" id="degree"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option value="{{$info->cv_education->degree}}">{{$info->cv_education->degree}}</option>
                              <option value="Secondary (SSC)">Secondary (SSC)</option>
                              <option value="Higher Secondary (HSC)">Higher Secondary (HSC)</option>
                              <option value="Bachelore of Science">Bachelore of Science</option>
                              <option value="Bachelore of Arts">Bachelore of Arts</option>
                              <option value="Degree">Degree</option>
                              <option value="Masters of Science">Masters of Science</option>
                              <option value="Masters">Masters</option>
                              <option value="PhD">PhD</option>
                            </select>
                          </div>

                          <!-- Institute Name -->
                          <div>
                            <label for="school_university"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institute
                              Name</label>
                            <input name="school_university" type="text" id="school_university" value="{{$info->cv_education->school_university}}" 
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Institute Name" required />
                          </div>

                          <!-- Department -->
                          <div>
                            <label for="department"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department/Subject</label>
                            <input name="department" type="text" value="{{$info->cv_education->department}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Department or Subject" required />
                          </div>

                          <!-- Group -->
                          <div>
                            <label for="group"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group</label>
                            <input name="group" type="text" id="group" value="{{$info->cv_education->group}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Group" />
                          </div>

                          <!-- Passing Year -->
                          <div>
                            <label for="Passing Year"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passing Year</label>
                            <input name="passing_year" type="number" id="passing_year" value="{{$info->cv_education->passing_year}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passing Year" required />
                          </div>

                          <!-- CGPA -->
                          <div>
                            <label for="CGPA"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CGPA</label>
                            <input name="CGPA" type="number" id="CGPA" value="{{$info->cv_education->CGPA}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="CGPA" required />
                          </div>
                          <div>
                            <!-- For coloumn maching -->
                          </div>

                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            <a href="{{url('#')}}" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <h2 id="accordion-collapse-heading-3">
                    <button type="button"
                      class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                      data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                      aria-controls="accordion-collapse-body-3">
                      <span>Professional Trainings (if any)</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5" />
                      </svg>
                    </button>
                  </h2>
                  <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">

                      <!-- CV Training Information -->
                      <form method="POST" action="{{url('cvTraining')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <!-- Hidden field -->
                          <input name="user_id" type="text" class="" value="{{$info->id}}" />

                          <!-- Training Name -->
                          <div>
                            <label for="Training Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Training Name</label>
                            <input name="training_name" type="text" id="training_name" value="{{$info->cv_training->training_name}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Training Name" required />
                          </div>

                          <!-- Organization Name -->
                          <div>
                            <label for="organization"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization
                              Name</label>
                            <input name="organization" type="text" id="organization" value="{{$info->cv_training->organization}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Organization Name" required />
                          </div>

                          <!-- Training Duration -->
                          <div>
                            <label for="Training Duration"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Training
                              Duration</label>
                            <input name="duration" type="text" id="duration" value="{{$info->cv_training->duration}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Type month or year" required />
                          </div>

                          <!-- Passing Year -->
                          <div>
                            <label for="Passing Year"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passing Year</label>
                            <input name="passing_year" type="number" id="passing_year" value="{{$info->cv_training->passing_year}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passing Year" required />
                          </div>

                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            <a href="{{url('#')}}" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <h2 id="accordion-collapse-heading-4">
                    <button type="button"
                      class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                      data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                      aria-controls="accordion-collapse-body-4">
                      <span>Job Experiences (if any)</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5" />
                      </svg>
                    </button>
                  </h2>
                  <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-4">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">

                      <!-- Job Experiences -->
                      <form method="POST" action="{{url('cvExperience')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <!-- Hidden Field -->
                          <input name="user_id" type="text" value="2" class="" id="user_id" />

                          <!-- Company Name -->
                          <div>
                            <label for="Company Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                            <input name="company_name" type="text" id="company_name" value="{{$info->cv_experience->company_name}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Company Name" required />
                          </div>

                          <!-- Designation -->
                          <div>
                            <label for="Designation"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <input name="designation" type="text" id="designation" value="{{$info->cv_experience->designation}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Designation" required />
                          </div>

                          <!-- Joining Date -->
                          <div>
                            <label for="Joining Date"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Joining Date</label>
                            <input name="joining_date" type="date" id="joining_date" value="{{$info->cv_experience->joining_date}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>

                          <!-- Departure Date -->
                          <div>
                            <label for="departure_date"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departure
                              Date</label>
                            <input name="departure_date" type="date" id="departure_date" value="{{$info->cv_experience->departure_date}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>

                          <!-- Save Button -->
                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            <a href="{{url('#')}}" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>

                  <h2 id="accordion-collapse-heading-5">
                    <button type="button"
                      class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                      data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                      aria-controls="accordion-collapse-body-5">
                      <span>Skill & Axpected Salary</span>
                      <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M9 5 5 1 1 5" />
                      </svg>
                    </button>
                  </h2>
                  <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                      
                      <!-- CV Skills -->
                      <form method="POST" action="{{url('cvSkills')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <!-- Hidden Field -->
                          <input name="user_id" type="text" id="user_id" value="2"/>
                          
                          <div>
                            <label for="skills"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type your skill
                              within comma</label>
                            <textarea name="skills" id="skills" rows="1" 
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Write your skill with comma">{{$info->cv_skill->skills}}</textarea>
                          </div>

                          <!-- Current Salary -->
                          <div>
                            <label for="Current Salary"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Salary (if
                              any)</label>
                            <input name="current_salary" type="text" value="{{$info->cv_skill->current_salary}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Current Salary" />
                          </div>

                          <!-- Axpected Salary -->
                          <div>
                            <label for="Expected Salary"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expected Salary</label>
                            <input name="expected_salary" type="text" id="expected_salary" value="{{$info->cv_skill->expected_salary}}"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Expected Salary" required />
                          </div>

                          <div></div>

                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <button type="submit"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            <a href="{{url('#')}}" type="button"
                              class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Close</a>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Accrodion end -->
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection