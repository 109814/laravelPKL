<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Posting Berita Terbaru") }}
                </div>
            </div>
            <form method="POST" action="{{ route('createberita') }}">
                @csrf
                @method('POST')
        
                <!-- judul berita -->
                <div>
                    <x-input-label for="penulis" :value="__('penulis')" />
                    <x-text-input id="penulis" class="block mt-1 w-full" type="text" name="penulis" :value="old('penulis')" required autofocus autocomplete="penulis" />
                    <x-input-error :messages="$errors->get('penulis')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="judul" :value="__('judul')" />
                    <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" :value="old('judul')" required autofocus autocomplete="judul" />
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div>
                {{-- <div>
                    <x-input-label for="penulis" :value="__('penulis')" />
                    <x-text-input id="penulis" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div> --}}
        
                <!-- Isi Berita -->
                <div class="mt-4">
                    <x-input-label for="body" :value="__('body')" />
                    {{-- <x-text-input id="body" class="block mt-1 w-full" type="text" name="body" :value="old('body')" required autocomplete="body" /> --}}
                    <textarea name="body" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="body" rows="3" placeholder="Tulis Berita Kamu disini"></textarea>
                    <x-input-error :messages="$errors->get('body')" class="mt-2" />
                </div>
                {{-- <label for="exampleFormControlTextarea 1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Example textarea</label> --}}
        
                
                <hr>
                <br>
                    <x-primary-button class="ml-4">
                        {{ __('Posting') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

{{-- <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Ini Berita') }}
         </h2>
     </x-slot>
 
     <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{ __("You're logged in!") }}
                 </div>
             </div>
         </div>
     </div>
 </x-app-layout>
  --}}

  {{-- ganti video role --}}