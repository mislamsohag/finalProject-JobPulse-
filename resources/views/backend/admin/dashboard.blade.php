@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<!-- Rules add One times -->
<div class="flex flex-wrap -mx-3">
  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
    <div class="flex-auto mb-10">
      <form method="POST" action="{{url('addRule')}}" role="form">
        @csrf

        <label for="rules" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select a rule</label>
        <select name="name" id="rules"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>Choose a rule</option>
          <option value="admin">Admin</option>
          <option value="editor">Editor</option>
          <option value="user">User</option>
        </select>
        <div class="text-center">
          <button type="submit"
            class="inline-block w-full px-6 py-3 mt-4 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-fuchsia-600 to-cyan-600 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Add</button>
        </div>
      </form>
    </div>
  </div>

  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/2">
    <div class="flex-auto mb-10">
      <form method="POST" action="{{url('addCategory')}}" role="form">
        @csrf

        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Add</label>
        <input name="name" id="category" placeholder="Category Name"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        <div class="text-center">
          <button type="submit"
            class="inline-block w-full px-6 py-3 mt-4 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-fuchsia-600 to-cyan-600 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="flex flex-wrap -mx-3">
  <!-- card1 -->
  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Kalker Money</p>
              <h5 class="mb-0 font-bold">
                00
                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card2 -->
  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Users</p>
              <h5 class="mb-0 font-bold">
                2,300
                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+3%</span>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card3 -->
  <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans text-sm font-semibold leading-normal">New Clients</p>
              <h5 class="mb-0 font-bold">
                +3,462
                <span class="text-sm leading-normal text-red-600 font-weight-bolder">-2%</span>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card4 -->
  <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
    <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
      <div class="flex-auto p-4">
        <div class="flex flex-row -mx-3">
          <div class="flex-none w-2/3 max-w-full px-3">
            <div>
              <p class="mb-0 font-sans text-sm font-semibold leading-normal">Sales</p>
              <h5 class="mb-0 font-bold">
                $103,430
                <span class="text-sm leading-normal font-weight-bolder text-lime-500">+5%</span>
              </h5>
            </div>
          </div>
          <div class="px-3 text-right basis-1/3">
            <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-purple-700 to-pink-500">
              <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- setting bar-->
@endsection