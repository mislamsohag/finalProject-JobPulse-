@extends('layouts.app')

@section('title', 'CV_Update')
@section('content')

<!-- content -->
<div>
  <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 mt-6 lg:w-full md:flex-none">
      <div
        class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <!-- Edit Button -->
          <div class="flex items-center mx-5 p-2 md:p-2 rounded-b dark:border-gray-600">
            <div class="min-w-2/12">
              <img class=" object-cover w-32 rounded-t-lg h-32 md:h-32 md:w-32 md:rounded-none md:rounded-s-lg"
                src="{{asset('/images/sohagTech_logo.png')}}" alt="Candidate Picture">
              <input type="file">
            </div>
          </div>
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

                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                            <label for="first_name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" id="first_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="John" required />
                          </div>
                          <div>
                            <label for="last_name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" id="last_name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Doe" required />
                          </div>
                          <div>
                            <label for="Father_Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Father's Name</label>
                            <input type="text" id="Father_Name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Father's Name" required />
                          </div>
                          <div>
                            <label for="Mother_Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mother's Name</label>
                            <input type="text" id="Mother_Name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Mother's Name" required />
                          </div>
                          <div>
                            <label for="DoB" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                              of Birth</label>
                            <input type="text" id="birth_date"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Date of Birth" required />
                          </div>
                          <div>
                            <label for="phone"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                              number</label>
                            <input type="number" name="phone" id="phone"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                          </div>
                          <div>
                            <label for="NID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Social
                              ID(NID/Any Type of ID)</label>
                            <input type="number" name="nid" id="nid"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Social ID(NID/Any Type of ID)" required />
                          </div>
                          <div>
                            <label for="Passport"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passport No.</label>
                            <input type="number" name="passport" id="passport"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passport No." required />
                          </div>
                          <div>
                            <label for="EmergencyContact"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Emergency Contact
                              No.</label>
                            <input type="number" name="emergency_contact"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Emergency Contact No." required />
                          </div>
                          <div>
                            <label for="email"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="email" required />
                          </div>
                          <div>
                            <label for="WhatsApp"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">WhatsApp</label>
                            <input type="number" name="whatsapp"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="WhatsApp" required />
                          </div>
                          <div>
                            <label for="Linkedin Link"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Linkedin Link</label>
                            <input type="text" name="linkedin"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Linkedin Link" required />
                          </div>
                          <div>
                            <label for="Facebook Link"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Facebook Link</label>
                            <input type="text" name="facebook"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Facebook Link" required />
                          </div>

                          <div>
                            <label for="GitHub Link"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">GitHub
                              Link</label>
                            <input type="text" name="github"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="GitHub Link" required />
                          </div>

                          <div>
                            <label for="Behance/Dribble Link"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Behance/Dribble
                              Link</label>
                            <input type="text" name="behance"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Behance/Dribble Link" required />
                          </div>

                          <div>
                            <label for="Portfolio Website"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Portfolio
                              Website</label>
                            <input type="text" name="portfolio"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Portfolio Website" required />
                          </div>

                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <a href="{{url('#')}}" type="button"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
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
                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                            <label for="degree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Degree
                              Type</label>
                            <select id="degree"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option selected>Choose a Degree</option>
                              <option value="SSC">Secondary</option>
                              <option value="HSC">Higher Secondary</option>
                              <option value="Bsc">Bachelore of Science</option>
                              <option value="Bsc">Bachelore of Arts</option>
                              <option value="Bsc">Degree</option>
                              <option value="Msc">Masters of Science</option>
                              <option value="MA">Masters</option>
                              <option value="PhD">PhD</option>
                            </select>
                          </div>
                          
                          <div>
                            <label for="Institute"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Institute Name</label>
                            <input type="text" id="institute"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Institute Name" required />
                          </div>
        
                          <div>
                            <label for="Department"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department/Subject</label>
                            <input type="text" name="department"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Department or Subject" required />
                          </div>
        
                          <div>
                            <label for="Passing Year"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passing Year</label>
                            <input type="number" name="passingYear"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passing Year" required />
                          </div>
        
                          <div>
                            <label for="CGPA" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CGPA</label>
                            <input type="number" name="cgpa"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="CGPA" required />
                          </div>
                          <div>
                            <!-- For coloumn maching -->
                          </div>
        
                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <a href="{{url('#')}}" type="button"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
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
                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                            <label for="training Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Training Name</label>
                            <input type="text" name="training" id="training"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="training Name" required />
                          </div>
        
                          <div>
                            <label for="organization"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Organization Name</label>
                            <input type="text" id="organization"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Organization Name" required />
                          </div>
        
                          <div>
                            <label for="Duration"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duration</label>
                            <input type="text" name="duration"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Type month or year" required />
                          </div>
        
                          <div>
                            <label for="Passing Year"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Passing Year</label>
                            <input type="number" name="passingYear"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Passing Year" required />
                          </div>
        
                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <a href="{{url('#')}}" type="button"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
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
                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                            <label for="Designation"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Designation</label>
                            <input type="text" name="designation" id="designation"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Designation" required />
                          </div>
        
                          <div>
                            <label for="Company Name"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                            <input type="text" name="company" id="company"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Company Name" required />
                          </div>
        
                          <div>
                            <label for="join" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Joining
                              Date</label>
                            <input type="date" name="join_date"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
        
                          <div>
                            <label for="departure"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departure Date</label>
                            <input type="date" name="departure_date"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                          </div>
        
                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <a href="{{url('#')}}" type="button"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
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
                      <form>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                          <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type your skill within comma</label>
                            <textarea id="message" rows="4"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Write your skill with comma"></textarea>  
                          </div>
        
                          <div>
                            <label for="Current Salary"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current Salary (if any)</label>
                            <input type="text" name="currentSalary"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Current Salary" required />
                          </div>
        
                          <div>
                            <label for="Aspect Salary"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aspect Salary</label>
                            <input type="text" name="aspectSalary"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Axpected Salary" required />
                          </div>
        
                          <div></div>        
        
                          <div class="flex items-center p-4 md:p-5 border-gray-200 rounded-b dark:border-gray-600">
                            <a href="{{url('#')}}" type="button"
                              class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</a>
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
      </div>
    </div>
  </div>
</div>
@endsection