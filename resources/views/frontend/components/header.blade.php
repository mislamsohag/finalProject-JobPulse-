<header class="fixed w-full">
    <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl">
            <a href="home" class="flex items-center">
                <img src="{{asset('./images/sohagTech_logo.png')}}" class="h-6 mr-3 sm:h-9" alt="Landwind Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap text-fuchsia-900 dark:text-white">Job Pulse</span>
            </a>
            <div class="flex items-center lg:order-2">
                <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                    class="text-white bg-fuchsia-800 hover:bg-fuchsia-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-fuchsia-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800"
                    type="button">Login or Registration<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Login Button Dropdown menu -->
                <div id="dropdownHover"
                    class="hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-80 dark:bg-gray-700">
                    <ul class="py-2 px-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                        <li>
                            <div
                                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                <!-- Candidate Login or Registration -->
                                <div class="flex flex-col items-center pb-2">
                                    <img class="w-10 h-10 m-1 rounded-full shadow-lg"
                                        src="{{asset('./images/sohagTech_logo.png')}}" alt="Logo" />
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Candidate</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Login for Job Seacrch</span>
                                    <div class="flex mt-1 md:mt-2">
                                        <a href="{{url('loginPage')}}"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-fuchsia-700 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800">Login</a>
                                        <a href="{{url('accountPage')}}"
                                            class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-sm border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Registration</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div
                                class="w-full max-w-sm mt-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                                <!-- Company Login or Registration -->
                                <div class="flex flex-col items-center pb-2">
                                    <img class="w-10 h-10 m-1 rounded-full shadow-lg"
                                        src="{{asset('./images/sohagTech_logo.png')}}" alt="Logo" />
                                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Company</h5>
                                    <span class="text-sm text-gray-500 dark:text-gray-400">Login for Job Post</span>
                                    <div class="flex mt-1 md:mt-2">
                                        <a href="{{url('loginPage')}}"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-fuchsia-700 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800">Login</a>
                                        <a href="{{url('companySignupPage')}}"
                                            class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-sm border border-gray-200 hover:bg-gray-100 hover:text-fuchsia-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Registration</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="w-full max-w-sm mt-2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                <!-- Admin Login -->
                                <div class="flex flex-col items-center pb-2">
                                    <h5 class="py-1 text-xl font-medium text-gray-900 dark:text-white">Admin</h5>
                                    <div class="flex mt-1 md:mt-2">
                                        <a href="loginPage"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white bg-fuchsia-700 rounded-lg hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800">Login</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <!-- <a href="{{url('/home')}}"
                            class=" block py-2 pl-3 pr-4 text-white bg-fuchsia-700 rounded lg:bg-transparent lg:text-fuchsia-700 lg:p-0 dark:text-white"
                            aria-current="page">Home</a> -->
                        <a href="{{url('/home')}}"
                            class=" block py-2 pl-3 pr-4 text-white bg-fuchsia-700 rounded lg:bg-transparent lg:text-fuchsia-700 lg:p-0 dark:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{url('/about')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-fuchsia-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="{{url('/jobs')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-fuchsia-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Jobs</a>
                    </li>
                    <li>
                        <a href="{{url('blogs')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-fuchsia-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Blogs</a>
                    </li>
                    <li>
                        <a href="{{url('/contact')}}"
                            class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-fuchsia-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>