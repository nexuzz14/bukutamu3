@if (Auth::check() && Auth::user()->role == 'admin')
<nav class="top-0 absolute z-50 w-full">
@else
<nav class="top-0 absolute z-50 w-full bg-gray-800">
@endif
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="foto/logo.png" class="h-8" alt="Buku Tamu Logo" />
    </a>
    <button id="navbarCollapse" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto navbarContent" id="navbar-default">
      @if (Auth::check() && Auth::user()->role == 'admin')
      <ul class="font-medium flex lg:items-center flex-col p-4 md:p-0 mt-4 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        <li>
          <a href="/admin" class="block nav_foo home_nav py-2 px-3 text-gray-500 rounded md:bg-transparent  md:p-0" aria-current="page">NonVerified</a>
        </li>
        <li>
          <a href="/verified" class="block nav_foo verified_nav py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white md:dark:hover:bg-transparent">Verified</a>
        </li>
        @if (!Auth::check())
        <li>
          <a href="/login" class="block  py-2 px-3 lg:text-sm text-gray-500 md:rounded-md hover:bg-violet-600 hover:text-white lg:text-white lg:bg-blue-700 rounded md:border-0">Login</a>
        </li>
        @else
        <li>
          <a href="/logout" class="block  py-2 px-3 lg:text-sm text-gray-500 md:rounded-md hover:bg-violet-600 hover:text-white lg:text-white lg:bg-blue-700 rounded md:border-0">Logout</a>
        </li>
        @endif
      </ul>
      @else

      <ul class="font-medium flex lg:items-center flex-col p-4 md:p-0 mt-4 rounded-lg  md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
        <li>
          <a href="/" class="block nav_foo home_nav py-2 px-3 text-white rounded md:bg-transparent  md:p-0" aria-current="page">Home</a>
        </li>
        @if (Auth::check())
        <li>
          <a href="#reader" class="block nav_foo scan_nav py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white md:dark:hover:bg-transparent">Scan</a>
        </li>
        @else
        <li>
          <a href="#pendaftaran" class="block nav_foo pendaftaran_nav py-2 px-3 text-gray-500 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0  md:dark:hover:text-blue-500 dark:hover:bg-blue-500 dark:hover:text-white md:dark:hover:bg-transparent">Pendaftaran</a>
        </li>
        @endif
        @if (!Auth::check())
        <li>
          <a href="/login" class="block  py-2 px-3 lg:text-sm text-gray-500 md:rounded-md hover:bg-violet-600 hover:text-white lg:text-white lg:bg-blue-700 rounded md:border-0">Login</a>
        </li>
        @else
        <li>
          <a href="/logout" class="block  py-2 px-3 lg:text-sm text-gray-500 md:rounded-md hover:bg-violet-600 hover:text-white lg:text-white lg:bg-blue-700 rounded md:border-0">Logout</a>
        </li>
        @endif
      </ul>
      @endif
    </div>
  </div>
</nav>
<script>
  $(document).ready(function() {
    $('#navbarCollapse').click(function() {
      $('.navbarContent').toggleClass('hidden');
      console.log('clicked');
    })

    function markActiveNavbar() {
      var currentPath = window.location.pathname;

      if (currentPath === '/' || currentPath === '/home' || currentPath === '/admin') {
        $('.home_nav').css('color', 'blue');
        if ($(window).width() < 768) {
          $('.home_nav').css('background-color', 'blue');
          $('.home_nav').css('color', 'white');
        } else {
          $('.home_nav').css('background-color', 'transparent');
        }
        $('.pendaftaran_nav').css('color', '#6b7280');
      } else if (currentPath === '/pendaftaran') {

        if ($(window).width() < 768) {
          $('.pendaftaran_nav').css('background-color', 'blue');
          $('.pendaftaran_nav').css('color', 'white');
        } else {
          $('.pendaftaran_nav').css('background-color', 'transparent');
          $('.pendaftaran_nav').css('color', 'blue');
        }

        $('.home_nav').css('color', '#6b7280');
      } else if (currentPath === '/scans') {
        if ($(window).width() < 768) {
          $('.scan_nav').css('background-color', 'blue');
          $('.scan_nav').css('color', 'white');
        } else {
          $('.scan_nav').css('background-color', 'transparent');
          $('.scan_nav').css('color', 'blue');
        }

        $('.home_nav').css('color', '#6b7280');
      } else if (currentPath === '/verified') {
        if ($(window).width() < 768) {
          $('.verified_nav').css('background-color', 'blue');
          $('.verified_nav').css('color', 'white');
        } else {
          $('.verified_nav').css('background-color', 'transparent');
          $('.verified_nav').css('color', 'blue');
        }

        $('.home_nav').css('color', '#6b7280');
      }
    }

    markActiveNavbar();

    $(window).on('popstate', function() {
      markActiveNavbar();
    });

  })
</script>
