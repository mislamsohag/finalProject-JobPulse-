<div class="ml-auto">
  <div class="block space-y-4 md:flex md:space-y-0 md:space-x-4 rtl:space-x-reverse">
    <!-- Modal toggle -->
    <button data-modal-target="small-modal" data-modal-toggle="small-modal"
      class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 my-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"
      type="button">
      Details
    </button>
  </div>

  <!-- Modal -->
  <div id="small-modal" tabindex="-1"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-3xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <!-- Modal header -->
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
          <h3 class="text-xl font-medium text-gray-900 dark:text-white">Full Name:</h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-hide="small-modal">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>

        <!-- Modal body -->
        <div class="p-4 md:p-5 space-y-1">
          <h6>Basic Info</h6>
          <div class="flex flex-col">
            <span class="mb-2 leading-tight text-xs">Father's Name: <span
                class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
            <span class="mb-2 leading-tight text-xs">Mother's Name: <span
                class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
            <span class="mb-2 leading-tight text-xs">Date Of Birth: <span
                class="font-semibold text-slate-700 sm:ml-2">Viking Burrito</span></span>
            <span class="mb-2 leading-tight text-xs">Blood Group: <span
                class="font-semibold text-slate-700 sm:ml-2">A+</span></span>
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
          </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
          <button data-modal-hide="small-modal" type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Select</button>
          <button data-modal-hide="small-modal" type="button"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Reject</button>
        </div>
      </div>
    </div>
  </div>
</div>