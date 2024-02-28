@extends('layouts.app')

@section('title', 'Job Post')

@section('content')
<!-- cards -->
<!-- <button
  class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center  font-bold uppercase leading-none text-white">
  Admin
</button> -->

<!-- card1 -->
<div class="flex flex-wrap -mx-3">
    <form class="w-full max-w-full px-3 my-2 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2 mx-auto">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
        <input name="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Job title" required />

        <label for="Job description" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Job Description</label>
        <textarea rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Job Description">
        </textarea> 

        <label for="Benefits" class="block my-2 text-sm font-medium text-gray-900 dark:text-white">Benefits</label>
        <textarea rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Job Benefits">
        </textarea>        

        <label for="Education" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Education</label>
        <input name="education" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Education" required />

        <label for="Experience" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Experience</label>
        <input name="experience" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Experience" required />

        <label for="Job Location" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Job Location</label>
        <input name="location" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Job Location" required />

        <label for="deadline" class="block mb-2 my-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
        <input name="deadline" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="deadline" required />
        
        <div class="float-right">
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 my-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Post</button>
        </div>
    </form>


    <!-- setting bar-->
    @endsection