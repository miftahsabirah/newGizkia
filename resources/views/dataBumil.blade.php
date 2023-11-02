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

    <div class="flex items-center p-4">
        <button class="text-sm font-normal text-gray-900 dark:text-black mr-2 bg-white-500 text-white px-4 py-2 rounded-lg border border-blue-500 hover:bg-blue-600">
            Tombol 1
        </button>
        <button class="text-sm font-normal text-gray-900 dark:text-black mr-2 bg-white-500 text-white px-4 py-2 rounded-lg border border-green-500 hover:bg-green-600">
            Tombol 2
        </button>
        <button class="text-sm font-normal text-gray-900 dark:text-black bg-white-500 text-white px-4 py-2 rounded-lg border border-red-500 hover:bg-red-600">
            Tombol 3
        </button>
    </div>
    
    
    
    <div class="flex items-center justify-between py-1 bg-white">
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
              Tampilkan Data
          </button>
        </div>      
    </div>
    </div>
    <table class="w-full text-sm text-gray-500">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          {{-- NIP --}}
          <th scope="col" class="w-auto text-center">
            No. Index
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Tgl Reg
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Nama
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Tgl Lahir
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            BB Awal
          </th>

          <th scope="col" class="w-auto p-3 text-center">
            Umur
          </th>
          
          <th scope="col" class="w-auto p-3 text-center">
            Umur Hamil
          </th>
          
          <th scope="col" class="w-auto p-3 text-center">
            Opsi
          </th>
          
        </tr>
      </thead>

        <tbody>
          <tr class="bg-F7F6FE border-b hover:bg-gray-50">
            <td class="px-6 py-4 text-center">
              89094
            </td>

            <td class="w-auto text-center">
                09-08-2023
            </td>
          
            <td class="w-auto text-center">
                Rania Kurnia
            </td>

            <td class="w-auto text-center">
                24/10/2022
            </td>

            <td class="w-auto text-center">
                38 kg
            </td>

            <td class="w-auto text-center">
                25 Tahun
            </td>

            <td class="w-auto text-center">
                7 Bulan
            </td>

            <td class="px-6 py-4 flex items-center justify-between">
                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                    <i class="fi fi-rr-edit" style="font-size: 20px; color: #624DE3;"></i>
                </a>
                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
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

