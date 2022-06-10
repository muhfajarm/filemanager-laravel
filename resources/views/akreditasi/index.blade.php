<x-app-layout>
  <x-slot name="header" class="dark:bg-slate-700">

    <h2 class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">

      {{ __('Akreditasi') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="input-group">
        <input type="text" id="image_label" class="form-control" name="image" aria-label="Image" aria-describedby="button-image">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {

      document.getElementById('button-image').addEventListener('click', (event) => {
        event.preventDefault();

        window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
      });
    });

    // set file link
    function fmSetLink($url) {
      document.getElementById('image_label').value = $url;
    }

  </script>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div x-data="{tab: 'criteria 1'}" class="flex border-b border-gray-200 dark:border-gray-700">
        <button class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" :class="{ 'text-blue-600 border-blue-500': tab === 'criteria 1' }" x-on:click.prevent="tab = 'criteria 1'" href="#">Kriteria 1</button>
        <button class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" :class="{ 'text-blue-600 border-blue-500': tab === 'criteria 2' }" x-on:click.prevent="tab = 'criteria 2'" href="#">Kriteria 2</button>
        <button class="h-10 px-4 py-2 -mb-px text-sm text-center text-gray-700 bg-transparent border-b-2 border-transparent sm:text-base dark:text-white whitespace-nowrap cursor-base focus:outline-none hover:border-gray-400" :class="{ 'text-blue-600 border-blue-500': tab === 'criteria 3' }" x-on:click.prevent="tab = 'criteria 3'" href="#">Kriteria 3</button>
        <div class="absolute mt-5">
          <div x-show="tab === 'criteria 1'">
            <h3 class="dark:text-gray-100">Kriteria 1</h3>
            <ul>
              <li>
                <a href="{{ asset('storage/LPMI/AMI Tahun 2018/AMI TAHUN 2018.pdf') }}" target="_blank()" class="dark:text-gray-100">AMI Tahun 2018</a>
              </li>
            </ul>
          </div>
          <div x-show="tab === 'criteria 2'">
            <h3 class="dark:text-gray-100">Kriteria 2</h3>
            <p class="dark:text-gray-100">
              Donec placerat ullamcorper sodales. Nam congue justo sit amet erat luctus
              faucibus.
            </p>
          </div>
          <div x-show="tab === 'criteria 3'">
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
</x-app-layout>
