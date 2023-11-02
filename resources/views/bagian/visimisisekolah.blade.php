{{-- @extends('index')
@section('visidanmisi') --}}


<section id="blog">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="intro">
                    @foreach ($visimisisekolah as $misivisi)
                    @auth
                    @if (auth()->user()->hasRole('superadmin') || auth()->user()->hasRole('admin'))
                        
                    <a href="/tampilkandata/{{ $misivisi->id }}"><button
                        class="edit-button inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-wides"
                        >Edit Keduanya</button></a>
                        @endif
                    @endauth
                    <h1>Visi</h1>
                    <p class="mx-auto">{{ $misivisi->visi }}</p>
                </div>
             </div>
             <div class="col-6">
               <div class="intro">
                   <h1>Misi</h1>
                   <p class="mx-auto">{{ $misivisi->misi }}</p>
                   @endforeach
                </div>
           </div>
         </div>
     
     </div>
 </section>
{{-- @endsection  --}}