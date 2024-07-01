<section>
    <header>
        <h2 class="text-2xl font-medium text-gray-900 dark:text-gray-100">
            {{ __('Registro de arquivos') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Está tela é a tela que tem como responsabilidade de fazer o registro dos arquivos.') }}
        </p>
    </header>

    <div class="py-12">
        <div class="">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                <form method="post" action="{{ route('arquivo.store') }}" class="mt-6 space-y-6"
                    enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Código do Arquivo')" />
                        <x-text-input id="name" name="arquivo_codigo" type="text" class="mt-1 block w-full"
                            required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div>
                        <x-input-label for="name" :value="__('Nome do Ficheiro')" />
                        <x-text-input id="name" name="arquivo_titulo" type="text" class="mt-1 block w-full"
                            required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div >
                        <x-input-label for="name" :value="__('Categoria')" />
                        {{-- <x-text-input id="name" name="categoria" type="text" class="mt-1 block w-full" required
                            autofocus autocomplete="name" /> --}}
                        {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
                            <select class="" id="categoria" style="width: 100%" name="categoria">
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->nome }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                    </div>

                    <div>
                        <x-input-label for="name" :value="__('Subcategoria')" />
                        {{-- <x-text-input id="name" name="subcategoria" type="select" class="mt-1 block w-full"
                            required autofocus autocomplete="name" /> --}}
                            <select class="" id="subcategoria" style="width: 100%" name="subcategoria">
                                @foreach ($subcategorias as $subcategoria)
                                    <option value="{{ $subcategoria->nome }}">{{ $subcategoria->nome }}</option>
                                @endforeach
                            </select>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div>


                        <x-input-label for="name" :value="__('Escolher o arquivo')" />
                        <x-text-input id="name" name="arquivo_ficheiro" type="file" class="mt-1 block w-full"
                            autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                    <div>
                        <x-primary-button>{{ __('Salvar') }}</x-primary-button>
                    </div>

                </form>
            </div>
        </div>
</section>
