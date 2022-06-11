<x-app-layout>
  <x-slot name="header" class="dark:bg-slate-700">

    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-100">

      {{ __('Akreditasi') }}
    </h2>
  </x-slot>
  <x-container>
    <section class="w-full first-letter:mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
      <div class="max-w-4xl my-6 p-6 mx-auto">
        <form method="POST">
          @csrf
          <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label class="text-gray-700 dark:text-gray-200" for="file-path">Alamat Berkas</label>
              <input type="text" id="file-path" class="block w-full px-3 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" name="file-path" aria-label="File Path">
            </div>

            <div>
              <label class="text-gray-700 dark:text-gray-200" for="username">Username</label>
              <input id="username" type="text" class="block w-full px-3 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

            <div>
              <label class="text-gray-700 dark:text-gray-200" for="emailAddress">Email Address</label>
              <input id="emailAddress" type="email" class="block w-full px-3 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>
          </div>

          <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
          </div>
        </form>
      </div>
    </section>
  </x-container>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById('file-path').addEventListener('click', openFM);
    });

    function openFM(e) {
      e.preventDefault()

      return window.open('/file-manager/fm-button', 'fm', 'width=screen.availWidth,height=screen.availHeight')

    }

    // set file link
    function fmSetLink($url) {
      document.getElementById('file-path').value = $url;
    }

  </script>
</x-app-layout>