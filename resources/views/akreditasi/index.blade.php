<x-guest-layout>
  <div class="py-10">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div x-data="{ openTab: 'criteria 1' }" class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex">
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 1'" :class="{ 'text-blue-600 border-blue-500': openTab === 'criteria 1' }" href="#">
              Kriteria 1
            </a>
          </li>
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 2'" :class="{ 'text-blue-600 border-blue-500': openTab === 'criteria 2' }" href="#">
              Kriteria 2
            </a>
          </li>
          <li>
            <a class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" @click="openTab = 'criteria 3'" :class="{ 'text-blue-600 border-blue-500': openTab === 'criteria 3' }" href="#">
              Kriteria 3
            </a>
          </li>
        </ul>

        <div class="w-full pt-6 pb-4 px-4">
          <div x-show="openTab === 'criteria 1'">
            <h3 class="dark:text-gray-100">Kriteria 1</h3>
            <ul class="mt-2">
              <li class="text-blue-600">
                <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">AMI Tahun 2018</a>
                <p class="text-gray-600 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
              </li>
            </ul>
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
  </div>
</x-guest-layout>
