<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Posting Berita Terbaru") }}
                </div>
            </div>
            <form method="POST" action="{{ route('createjurusan') }}">
                @csrf
                @method('POST')
        
                <!-- judul berita -->
                <div>
                    <x-input-label for="kaprog" :value="__('kaprog')" />
                    <x-text-input id="kaprog" class="block mt-1 w-full" type="text" name="kaprog" :value="old('kaprog')" required autofocus autocomplete="kaprog" />
                    <x-input-error :messages="$errors->get('kaprog')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="excerptjurusan" :value="__('singkatan')" />
                    <x-text-input id="excerptjurusan" class="block mt-1 w-full" type="text" name="excerptjurusan" :value="old('excerptjurusan')" required autofocus autocomplete="excerptjurusan" />
                    <x-input-error :messages="$errors->get('excerptjurusan')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="jurusan" :value="__('jurusan')" />
                    <x-text-input id="jurusan" class="block mt-1 w-full" type="text" name="jurusan" :value="old('jurusan')" required autofocus autocomplete="jurusan" />
                    <x-input-error :messages="$errors->get('jurusan')" class="mt-2" />
                </div>
                
                {{-- <div>
                    <x-input-label for="penulis" :value="__('penulis')" />
                    <x-text-input id="penulis" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                </div> --}}
        
                <!-- Isi Berita -->
                <div class="mt-4">
                    <x-input-label for="ringkasan" :value="__('ringkasan')" />
        
                    <textarea name="ringkasan" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="body" rows="3" placeholder="Ringkasan Jurusan"></textarea>
                    <x-input-error :messages="$errors->get('ringkasan')" class="mt-2" />
                </div>
                {{-- <label for="exampleFormControlTextarea 1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Example textarea</label> --}}
                <input type="color" name="color" required/>
                {{-- <button id="ubahWarnaButton{{ $item->id }}"> --}}
                
                <hr>
                <br>
                    <x-primary-button class="ml-4">
                        {{ __('Posting') }}
                    </x-primary-button>
                </div>
            </form>
            {{-- <input type="color" name="" id="colorPicker">
                <button id="ubahWarnaButton"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Ubah warna
                </button> --}}
        </div>
    </div>

    {{-- edit --}}
        <div class="slide-container">
        <div class="slide-content">
          @foreach ($jurusan as $item)
              
          <div class="slide-card">
            <div class="card mb-4 row">
              <div class="card-body col-12" id="card">
                <td class="border px-4 py-2">
                    <button
                    class="delete-button inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides"
                    data-id="{{ $item->id }}"
                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();"
                    >Delete
                  </button>
              </td>
                <h1 class="card-title ">{{ $item->jurusan }}</h1>
                <h5>( {{ $item->excerptjurusan }} )</h5>
                {{ $item->ringkasan }}
                
                <p style="margin-top: 25px">Kepala Program {{ $item->kaprog }}</p>
              </div>
            </div>
          </div>
          <form id="delete-form-{{ $item->id }}" action="{{ route('jurusan.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
          @endforeach
        </div>
      </div>
    
</x-app-layout>











{{-- <x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Tulisan') }}
         </h2>
     </x-slot>
 
     <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 <div class="p-6 text-gray-900">
                     <table class="table-auto mx-auto">
                         <thead>
                             <tr>
                                 <th class="px-4 py-2">No</th>
                                 <th class="px-4 py-2">Title</th>
                                 <th class="px-4 py-2">Aksi</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td class="border px-4 py-2">1</td>
                                 <td class="border px-4 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                     Porro, et?</td>
                                 <td class="border px-4 py-2">
                                     <button type="submit"
                                         class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Lihat
                                     </button>
                                     <button type="submit"
                                         class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Edit
                                     </button>
                                     <button type="submit"
                                         class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides">Delete
                                     </button>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </x-app-layout> --}}