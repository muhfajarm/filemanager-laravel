<x-app-layout>
  <x-slot name="header" class="dark:bg-slate-700">

    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-100">

      {{ __('Akreditasi') }}
    </h2>
  </x-slot>
  <x-container>
    <section class="w-full first-letter:mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
      <div class="max-w-4xl my-6 p-6">
        <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row">
          <form action="{{ route('collage.criteria.update', $criteria->id) }}" method="POST">
            @csrf
            @method('put')

            <input id="name" name="name" type="text" class="px-4 py-2 text-gray-700 bg-white border rounded-md sm:mx-2 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" placeholder="Nama Kriteria" value="{{ old('criteria', $criteria->name) }}">

            <button class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-700 rounded-md sm:mx-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
              Ubah
            </button>
          </form>
        </div>
      </div>
    </section>
  </x-container>
</x-app-layout>
