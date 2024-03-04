@extends('layouts.app')
@section('title', 'Job Post')

@section('content')

<div class="flex flex-col justify-between p-2 leading-normal w-full">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <form method="POST" action="{{url('jobPost')}}">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <!-- Job Title -->
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Title</label>
                    <input name="title" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job title" required />
                </div>

                <!-- Job description -->
                <div>
                    <label for="Job description"
                        class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Description</label>
                    <textarea name="description" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Description"></textarea>
                </div>

                <!-- Job Response -->
                <div>
                    <label for="response" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        response</label>
                    <textarea name="response" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job response"></textarea>
                </div>

                <!-- Job Benefits -->
                <div>
                    <label for="Benefits"
                        class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Benefits</label>
                    <textarea name="benefits" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Benefits"></textarea>
                </div>

                <!-- Education -->
                <div>
                    <label for="Education"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Education Need</label>
                    <input name="education" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Education" required />
                </div>

                <!-- Wrok Mode -->
                <div>
                    <label for="work_mode"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Select Work
                        Mode</label>
                    <select name="work_mode" id="work_mode"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Work Mode</option>
                        <option value="on site">On site</option>
                        <option value="remort">Remort</option>
                    </select>
                </div>

                <!-- Job Type -->
                <div>
                    <label for="job_type"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Select Job
                        Type</label>
                    <select name="job_type" id="job_type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Job Type</option>
                        <option value="part time">Part time</option>
                        <option value="Full time">Full time</option>
                    </select>
                </div>

                <!-- Qualification -->
                <div>
                    <label for="Qualification"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Qualification</label>
                    <input name="qualification" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Qualification" required />
                </div>

                <!-- Experience -->
                <div>
                    <label for="Experience"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Experience</label>
                    <input name="experience" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Experience" required />
                </div>

                <!-- Vacancy -->
                <div>
                    <label for="vacancy"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Vacancy</label>
                    <input name="vacancy" type="text" id="vacancy"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Vacancy" required />
                </div>

                <!-- Age Range -->
                <div>
                    <label for="age_range" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Age
                        Range</label>
                    <input name="age_range" type="text" id="age_range"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Age Range" required />
                </div>

                <!-- Job Location -->
                <div>
                    <label for="Job Location"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Location</label>
                    <input name="job_location" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Location" required />
                </div>

                <!-- Salary -->
                <div>
                    <label for="Salary" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Salary
                        Range</label>
                    <input name="salary" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Salary" required />
                </div>

                <!-- Deadlin -->
                <div>
                    <label for="deadline"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
                    <input name="deadline" type="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="deadline" required />
                </div>

                <!-- Category ID -->
                <div>
                    <label for="Category ID"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select name="category_id" id="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        
                        <option selected>Choose a Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Company ID -->
                <div>
                    <label for="Company ID"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                    <select name="company_id" id="company_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a Company</option>
                        @foreach($companies as $company)
                        <option value="{{$company->id}}">{{$company->company_name}}</option>
                        @endforeach
                    </select>
                </div>
                

                <!-- Button submit -->
                <div class="float-right">
                    <button type="submit"
                        class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 my-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Post</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- setting bar-->
@endsection