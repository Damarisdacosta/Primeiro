<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
      
    <div class="px-4">
        @include('arquivo.partials.update-profile-information-form')
    </div>
    
               

          

      
    </div>
</x-app-layout>
