<nav class="bg-white shadow dark:bg-gray-800">
  <div class="container flex items-center justify-between p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
    <div>
      <a class="font-bold text-gray-800 transition-colors duration-200 transform dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300" href="{{ route('home') }}">
        <x-guest.logo class="w-[50px] h-[50px] fill-current" />
      </a>
    </div>

    <div>
      <x-guest.navlink :href="route('home')" :active="request()->routeIs('home')">
        {{ __('beranda') }}
      </x-guest.navlink>

      <x-guest.navlink :href="route('akreditasi')" :active="request()->routeIs('akreditasi')">
        {{ __('akreditasi') }}
      </x-guest.navlink>
    </div>

    <div>
      @if (Route::has('login'))
      <div class="hidden sm:block">
        @auth
        <a href="{{ route('dashboard') }}" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">
          {{ __('dashboard') }}
        </a>
        @endauth
      </div>
      @endif

    </div>

  </div>
</nav>
