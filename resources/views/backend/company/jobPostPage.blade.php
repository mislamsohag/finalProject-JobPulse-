@extends('layouts.app')
@section('title', 'Job Post')

@section('content')

<div class="flex flex-col justify-between p-2 leading-normal w-full">
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
        <form method="POST" action="{{url('jobPost')}}">
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Title</label>
                    <input name="title" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job title" required />
                </div>

                <div>
                    <label for="Job description"
                        class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Description</label>
                    <textarea name="description" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Description"></textarea>
                </div>

                <div>
                    <label for="response" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        response</label>
                    <textarea name="response" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job response"></textarea>
                </div>

                <div>
                    <label for="Benefits"
                        class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Benefits</label>
                    <textarea name="benefits" rows="1"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Benefits"></textarea>
                </div>

                <div>
                    <label for="Education"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Education</label>
                    <input name="education" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Education" required />
                </div>

                <div>
                    <label for="Qualification"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Qualification</label>
                    <input name="qualification" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Qualification" required />
                </div>

                <div>
                    <label for="Experience"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Experience</label>
                    <input name="experience" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Experience" required />
                </div>

                <div>
                    <label for="Job Location"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Job
                        Location</label>
                    <input name="job_location" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Job Location" required />
                </div>

                <div>
                    <label for="Salary"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Salary</label>
                    <input name="salary" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Salary" required />
                </div>

                <div>
                    <label for="deadline"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
                    <input name="deadline" type="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="deadline" required />
                </div>

                <div>
                    <label for="Category ID"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Category
                        ID</label>
                    <input name="category_id" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Category ID" required />
                </div>

                <div>
                    <label for="Company ID"
                        class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Company
                        ID</label>
                    <input name="company_id" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Company ID" required />
                </div>

                <div>
                    <label for="User ID" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">User
                        ID</label>
                    <input name="user_id" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="User ID" required />
                </div>

                <div></div>
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