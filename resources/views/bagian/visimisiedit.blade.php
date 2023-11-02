<x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
             {{ __('Dashboard') }}
         </h2>
     </x-slot>
 
     <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            </div>
         </div>
     </div>

     <form  method="POST" action="/updatedata/{{ $visimisi->id }}">
        @csrf
        <div class="mt-4">
           <x-input-label for="Visi" :value="__('Visi')" />
   
           <textarea value="{{ $visimisi->visi }}" name="visi" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="body" rows="3" placeholder="Visi Sekolah"></textarea>
           <x-input-error :messages="$errors->get('visi')" class="mt-2" />
       </div>
        <div class="mt-4">
           <x-input-label for="Misi" :value="__('Misi')" />
   
           <textarea value="{{ $visimisi->misi }}" name="misi" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="body" rows="3" placeholder="Misi Sekolah"></textarea>
           <x-input-error :messages="$errors->get('misi')" class="mt-2" />
       </div>
       <x-primary-button class="ml-4">
        {{ __('Posting') }}
    </x-primary-button>
     </form>
</x-app-layout>





