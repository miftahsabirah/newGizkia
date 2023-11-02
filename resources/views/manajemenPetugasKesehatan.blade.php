@extends('layoutsAdmin')

<!-- MAIN -->

@section('isi')
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Akses</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <p class="text-2xl font-bold text-gray-900 dark:text-black p-4">
      Manajemen Petugas Kesehatan
    </p>
    
    <div class="flex items-center justify-between p-4 bg-white">
      <div>
        <div class="flex items-center">
          <p class="mr-2 ml-5">Tampilkan</p>
          <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5" type="button">
              <span class="sr-only">Action button</span>
              10
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
          </button>
          <p class="ml-2">Baris</p>

        </div>
        <!-- Dropdown menu -->
        <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow">
          <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">20</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-gray-100">30</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover-bg-gray-100">40</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="flex items-center justify-between p-4 bg-white">
        <label for="table-search" class="sr-only">Cari</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                </svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-60 bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari">
        </div>
        <div class="flex items-center">
          <button class="ml-5 flex items-center bg-blue-500 text-white rounded-lg p-1.5 hover:bg-blue-600 focus:outline-none">
              <svg class="w-4 h-4 text-white mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
              </svg>
              Tambah Bidan
          </button>
        </div>      
    </div>
    </div>
    <table class="w-full text-sm text-gray-500">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          {{-- NIP --}}
          <th scope="col" class="w-auto text-center">
            NIP
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Nama
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Puskesmas
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Tanggal Lahir
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Jabatan
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Username
          </th>
          
          <th scope="col" class="w-auto p-3 text-center">
            Status
          </th>
          
          <th scope="col" class="w-auto p-3 text-center">
            Action
          </th>
          
        </tr>
      </thead>

        <tbody>
          <tr class="bg-F7F6FE border-b hover:bg-gray-50">
            <td class="px-6 py-4">
              3309010101012
            </td>

            <td class="w-auto text-center">
              <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full" src="url_ke_foto_profil" alt="Nama Anda">
                  <div class="pl-3">
                      <div class="text-base font-normal text-gray-500" style="white-space: nowrap;">Nama Anda</div>
                  </div>
              </div>
            </td>
          
            <td class="w-auto text-center">
              Selo
            </td>

            <td class="w-auto text-center">
              1998-04-21
            </td>

            <td class="w-auto text-center">
              Bidan
            </td>

            <td class="w-auto text-center">
              SaaFitri
            </td>

            <td class="px-6 py-4 text-center">
              <div class="flex justify-center items-center">
                  <span class="bg-green-100 text-green-100 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-500 dark:text-green-300">Diterima</span>
              </div>
            </td>

            <td class="px-6 py-4 flex items-center justify-between">
              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline mx-2">
                <i class="fi fi-rr-edit" style="font-size: 20px; color: #624DE3;"></i>
              </a>
              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline mx-2">
                <i class="fi fi-rr-trash" style="font-size: 20px; color: #A30D11;"></i>
              </a>
            </td>
          </tr>
        </tbody>
    </table>
  
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>
@endsection

