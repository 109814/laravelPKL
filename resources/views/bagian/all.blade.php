{{-- @extends('index') --}}
{{-- @include('layouts.navigation') --}}
@include('bagian.banner')
@include('bagian.visimisisekolah')
@include('bagian.jumlah')
@include('bagian.jurusan')
{{-- <h1 style="text-align:center">Berita Terbaru</h1>  --}}
@include('bagian.berita')
@include('bagian.footer')

{{-- Admin Bisa bUat Role Akun Kepala Program --}}








{{-- Bagian Jurusan --}}
{{-- @section('jurusan')    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Slide Text Cards</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
       .slide-container {
            position: relative;
            overflow: hidden;
          }

          .slide-content {
               display: flex;
               transition: transform 0.5s ease-in-out;
    }

    .slide-card {
      flex: 0 0 50%;
      /* padding: 0 15px; */
    }

    .slide-card h1{
         margin-top: 60px;
         text-align: center;
     }
     .slide-card h5{
          
          text-align: center;
     }
     .card-body{
          height: 400px;
          /* border: solid 4px black; */
          background-color: antiquewhite;
          padding: 30px;
          text-align: center

     }
     </style>
</head>
<body>
     
  
       <div class="slide-container">
      <div class="slide-content">
        @foreach ($jurusan as $item)
            
        <div class="slide-card">
          <div class="card mb-4 row">
            <div class="card-body col-12">
              <h1 class="card-title ">{{ $item->jurusan }}</h1>
              <h5>( {{ $item->excerptjurusan }} )</h5>
              {{ $item->ringkasan }}
              <br>
              <br>
              <br>
              <br>
              <p>Kepala Program {{ $item->kaprog }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  

  <script>
    let slideIndex = 0;
    const slideContent = document.querySelector('.slide-content');
    const slideCards = document.querySelectorAll('.slide-card');
    
    function showSlide(index) {
      if (index < 0) {
        index = slideCards.length - 1;
      } else if (index >= slideCards.length) {
        index = 0;
      }
      
      slideIndex = index;
      const translateValue = -slideIndex * 50;
      slideContent.style.transform = `translateX(${translateValue}%)`;
    }

    function autoSlide() {
      showSlide(slideIndex + 1);
    }

    // Set interval for auto slide
    setInterval(autoSlide, 3000); // Change the duration as needed

    // Show the initial slide
    showSlide(slideIndex);
    console.log(index);
  </script>
</body>
</html>
@endsection --}}

{{-- Bagian Berita --}}
{{-- @section('berita')
@foreach ($berita as $item)
        <article class="mb-5 border-bottom pb-3">
            <div class="pt-10">
                <h3>{{ $item->judul }}</h3>
                <h6>{{ $item->penulis }}</h6>
                {!! $item->body !!}
                <br>
                <hr>
            </div>
        </article>
@endforeach
@endsection --}}
