<x-guest-layout>
  <div class="py-10">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div x-data="{ openTab: 'criteria 1' }">
        <ul class="flex">
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap border-transparent cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 1'" :class="{ 'text-blue-600 !border-blue-500': openTab === 'criteria 1' }" href="#">
              Kriteria 1
            </a>
          </li>
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap border-transparent cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 2'" :class="{ 'text-blue-600 !border-blue-500': openTab === 'criteria 2' }" href="#">
              Kriteria 2
            </a>
          </li>
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap border-transparent cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 3'" :class="{ 'text-blue-600 !border-blue-500': openTab === 'criteria 3' }" href="#">
              Kriteria 3
            </a>
          </li>
        </ul>

        <div class="w-full pt-6 px-4">
          <div x-show="openTab === 'criteria 1'">
            <div class="w-full">
              <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Visi</h3>

              <div class="space-y-8 my-4">
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800" x-data="{selected:null}">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                    <span class="text-blue-600">
                      <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">Visi Perguruan Tinggi</a>
                    </span>
                    <span class="rounded-full transition-all duration-700" :class="selected==1 ? 'text-gray-700 bg-gray-200' : 'text-white bg-blue-500'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" :d="selected == 1 ? 'M18 12H6': 'M12 6v6m0 0v6m0-6h6m-6 0H6'" />
                      </svg>
                    </span>
                  </button>

                  <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" :style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px !important' : ''">
                    <div class="mt-6 text-sm text-gray-500 dark:text-gray-300 px-4">
                      <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                      <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their traffic, and for use cases in which it is not appropriate to show a challenge to the user.</p>
                      <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction challenge, whereas more common actions like sign-in, searches, comments, or voting might use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                    </div>
                  </div>
                </div>
              </div>

              <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Misi</h3>

              <div class="space-y-8 my-4">
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800" x-data="{selected:null}">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                    <span class="text-blue-600">
                      <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">Misi Perguruan Tinggi</a>
                    </span>
                    <span class="rounded-full transition-all duration-700" :class="selected==1 ? 'text-gray-700 bg-gray-200' : 'text-white bg-blue-500'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" :d="selected == 1 ? 'M18 12H6': 'M12 6v6m0 0v6m0-6h6m-6 0H6'" />
                      </svg>
                    </span>
                  </button>

                  <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" :style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px !important' : ''">
                    <div class="mt-6 text-sm text-gray-500 dark:text-gray-300 px-4">
                      <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                      <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their traffic, and for use cases in which it is not appropriate to show a challenge to the user.</p>
                      <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction challenge, whereas more common actions like sign-in, searches, comments, or voting might use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                    </div>
                  </div>
                </div>
              </div>

              <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Tujuan</h3>

              <div class="space-y-8 my-4">
                <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800" x-data="{selected:null}">
                  <button type="button" class="flex items-center justify-between w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                    <span class="text-blue-600">
                      <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">Tujuan Perguruan Tinggi</a>
                    </span>
                    <span class="rounded-full transition-all duration-700" :class="selected==1 ? 'text-gray-700 bg-gray-200' : 'text-white bg-blue-500'">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" :d="selected == 1 ? 'M18 12H6': 'M12 6v6m0 0v6m0-6h6m-6 0H6'" />
                      </svg>
                    </span>
                  </button>

                  <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" :style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px !important' : ''">
                    <div class="mt-6 text-sm text-gray-500 dark:text-gray-300 px-4">
                      <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                      <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their traffic, and for use cases in which it is not appropriate to show a challenge to the user.</p>
                      <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction challenge, whereas more common actions like sign-in, searches, comments, or voting might use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Strategi</h3>

            <div class="space-y-8 my-4">
              <div class="p-4 bg-gray-100 rounded-lg dark:bg-gray-800" x-data="{selected:null}">
                <button type="button" class="flex items-center justify-between w-full text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                  <span class="text-blue-600">
                    <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">Strategi Perguruan Tinggi</a>
                  </span>
                  <span class="rounded-full transition-all duration-700" :class="selected==1 ? 'text-gray-700 bg-gray-200' : 'text-white bg-blue-500'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" :d="selected == 1 ? 'M18 12H6': 'M12 6v6m0 0v6m0-6h6m-6 0H6'" />
                    </svg>
                  </span>
                </button>

                <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" :style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px !important' : ''">
                  <div class="mt-6 text-sm text-gray-500 dark:text-gray-300 px-4">
                    <p>reCAPTCHA v2 is not going away! We will continue to fully support and improve security and usability for v2.</p>
                    <p>reCAPTCHA v3 is intended for power users, site owners that want more data about their traffic, and for use cases in which it is not appropriate to show a challenge to the user.</p>
                    <p>For example, a registration page might still use reCAPTCHA v2 for a higher-friction challenge, whereas more common actions like sign-in, searches, comments, or voting might use reCAPTCHA v3. To see more details, see the reCAPTCHA v3 developer guide.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div x-show="openTab === 'criteria 2'">
          <h3 class="dark:text-gray-100">Kriteria 2</h3>
          <p class="dark:text-gray-100">
            Donec placerat ullamcorper sodales. Nam congue justo sit amet erat luctus
            faucibus.
          </p>
        </div>

        <div x-show="openTab === 'criteria 3'">
          <h3 class="dark:text-gray-100">Kriteria 3</h3>
          <p class="dark:text-gray-100">
            Sed hendrerit imperdiet accumsan. Nunc venenatis sit amet diam vel rutrum.
            Quisque interdum dui et molestie tristique.
          </p>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>
