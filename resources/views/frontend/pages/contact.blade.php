@extends('layouts.master')

@section('title', 'Contact')

@section('content')

@include('frontend.components.header')

<div class="container mx-auto p-4 pt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <div>
            <h2 class="text-2xl text-fuchsia-900 font-bold mb-4">Contact Us</h2>
            <form action="#" method="post">
                <!-- Name Input -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name"
                        class="w-full p-2 border rounded-md">
                </div>

                <!-- Email Input -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email"
                        class="w-full p-2 border rounded-md">
                </div>

                <!-- Subject Input -->
                <div class="mb-4">
                    <label for="subject" class="block text-gray-700 text-sm font-bold mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject"
                        class="w-full p-2 border rounded-md">
                </div>

                <!-- Message Input -->
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="Your Message"
                        class="w-full p-2 border rounded-md"></textarea>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="button"
                        class="py-2.5 px-5 me-2 mb-2 font-semibold text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-900 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-fuchsia-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Submit</button>

                </div>
            </form>
        </div>

        <!-- Google Map Location -->
        <div>
            <h2 class="text-2xl text-fuchsia-900 font-bold mb-4">Location</h2>
            <!-- Replace YOUR_GOOGLE_MAPS_EMBED_API_KEY with your actual API key -->
            <iframe class="w-full h-full" frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14615.632747419084!2d90.47855065!3d23.67924115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1708766974752!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>    

</div>

<div class="max-w-screen-xl px-4 py-4 mx-auto lg:pb-16">

    <h2 class="text-2xl py-6 font-extrabold tracking-tight text-fuchsia-900 dark:text-white">Companies believe in
        us</h2>

    <!-- Add overflow-x-auto to make the container horizontally scrollable -->
    <div
        class="grid overflow-x-auto grid-cols-1 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-3 lg:grid-cols-6 dark:text-gray-400 overflow-x-auto">
        <!-- Companies -->
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
        <div
            class="w-full text-center max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="#" alt="Company image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-fuchsia-900 dark:text-white">Company
                        Name</h5>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="container mx-auto py-4">

    <!-- Contact Information -->
    <div class="my-4">
        <h2 class="text-2xl text-fuchsia-900 font-bold">Contact Information</h2>
        <p class="text-gray-700">Feel free to reach out to us through the following contact information:</p>

        <!-- Address -->
        <div class="mt-4">
            <h3 class="text-xl text-fuchsia-900 font-semibold">Address</h3>
            <p>123 Example Street, Cityville, State, 12345</p>
        </div>

        <!-- Email -->
        <div class="mt-4">
            <h3 class="text-xl text-fuchsia-900 font-semibold">Email</h3>
            <p>info@example.com</p>
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <h3 class="text-xl text-fuchsia-900 font-semibold">Phone</h3>
            <p>(123) 456-7890</p>
        </div>
    </div>
<!-- Footer -->
@include('frontend.components.footer')

@endsection