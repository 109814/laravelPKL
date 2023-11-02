
{{-- @extends('all') --}}
{{-- @section('berita') --}}
<style>
    .textberita{
        /* border: 2px solid black */
        margin-left: 20px;
    }
    .penulis{
        margin-left: 10px;
        color: grey;
    }


</style>
<div style="margin-bottom: 100px">
<h1 class="" style="text-align: center; font-style:montserrat; margin-top:30px;">Informasi Terkini</h1>
@foreach ($berita as $item)
        <article class="textberita">
            <div class="pt-10">
                <h3>{{ $item->judul }}</h3>
                <p class="penulis ml-2 text-sm text-gray-600 dark:text-gray-400">Created By : {{ $item->penulis }}</p>
                {!! $item->body !!}
                <br>
                <hr>
            </div>
        </article>
@endforeach
</div>
{{-- @endsection --}}