<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                <h1 class="text-[60px] text-white font-semibold mb-2">Todos os utilizadores</h1>
                <div class="flex justify-end">
                    <a href="{{ url('/register') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded mr-2 border">
                        Adicionar novo
                    </a>
                </div>
                <div class="relative overflow-x-auto py-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="p-6">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nome
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>

                    
                                <th scope="3" class="px-6 py-3">
                                    Ações
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                    <td scope="row" class="text-center">
                                        {{ $item->id }}
                                    </td>
                                    <td class="text-center">
                                        {{ $item->name }}

                                    </td>
                                    <td class="text-center">
                                     {{ $item->email }}
                                    </td>

                                    <td class="text-center">
                                        <button class="bg-blue-500 hover:bg-blue-600  font-bold py-2 px-4 rounded "><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        <button class="bg-red-500 hover:bg-red-600  font-bold py-2 px-4 rounded"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
               


            </div>
        </div>


    </div>
    </div>
</x-app-layout>
