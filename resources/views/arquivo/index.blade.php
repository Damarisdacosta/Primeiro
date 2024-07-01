<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-4">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1 class="text-[60px] text-white font-semibold mb-2">Todos os arquivos</h1>
                <div class="flex justify-end">
                    <a href="{{ url('/arquivos/register') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-black font-bold py-2 px-4 rounded mr-2 border">
                        Adicionar novo
                    </a>
                </div>


                <div class="relative overflow-x-auto py-4">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>

                                <th scope="col" class="p-6">
                                    Código
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ficheiro
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Título
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    Categoria
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Subcategoria
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Data de Registro
                                </th>
                                <th scope="3"  class="px-6 py-3">
                                    Ações
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($arquivos as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    
                            <td scope="row"
                                class="text-center">
                                {{ $item->arquivo_codigo }}
                            </td>
                            <td  class="text-center">
                                @if ($item->arquivo_ficheiro)
                             <a target="_blank"
                                    href="{{ url("storage/{$item->arquivo_ficheiro}") }}"> <i
                                        class="fa-solid fa-eye"></i></a>
                    @endif
                    </td>
                            <td  class="text-center">
                                {{ $item->arquivo_titulo }}
                            </td>

                            <td  class="text-center">
                                {{ $item->categoria }}
                            </td>
                            <td  class="text-center">
                                {{ $item->subcategoria }}
                            </td>
                            <td  class="text-center">
                                {{ $item->created_at }}
                            </td>
                            <td  class="text-center">
                                <button class="bg-blue-500 hover:bg-blue-600  font-bold py-2 px-4 rounded "><a href="/edit/{{ $item->id }}">
                                    <i
                                        class="fa-solid fa-pen-to-square"></i></a></button>
                                <button class="bg-red-500 hover:bg-red-600  font-bold py-2 px-4 rounded"><a href="/remove/{{ $item->id }}"><i
                                    class="fa-solid fa-trash"></i></a></button>
                            </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
