@include('components.head_tag')

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
  <!-- Side Nav -->
  @include('backend.components.sideNav')

  <main class="ease-soft-in-out xl:ml-68.5 relative h-full min-h-screen rounded-xl transition-all duration-200">
    <!-- Top Nav -->
    @include('backend.components.topNav')

    <div class="w-full px-6 py-6 mx-auto">
      <!-- Main Content Inject here -->
      <!-- ============================================== -->      
      @yield('content')
      <!-- ============================================== -->

      <!-- footer on dashboard -->
      @include('backend.components.footer')
    </div>
  </main>
</body>
@include('components.footer_link')