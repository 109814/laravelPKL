{{-- @extends('all')
@section('jurusan') --}}
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Slide Text Cards</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .slide-content {
            width: 100%;
            height: 100vh; /*Set initial height*/
            display: flex;
            flex-direction: row; /* Horizontal direction by default */
            transition: transform 0.5s ease-in-out;
          }
          
          
          
          @media (max-width: 768px) { /* Adjust the breakpoint as needed */
            .slide-content {
              flex-direction: column; /* Vertical direction on smaller screens */
              height: auto; /* Adjust as needed */
            }
            .card-body{
              /* margin-top: -50px; */
              
            }
          }
          .slide-container {
            position: relative;
            overflow: hidden;
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
          /* height: 400px; */
          /* border: solid 4px black; */
          /* background-color: rgb(148, 250, 122); */
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
            <div class="card-body col-12" id="card{{ $item->id }}" style="background-color: {{ $item->color }};">
              <td class="border px-4 py-2">
                
            </td>
              <h1 class="card-title ">{{ $item->jurusan }}</h1>
              <h5>( {{ $item->excerptjurusan }} )</h5>
              {{ $item->ringkasan }}
              
              <p style="margin-top: 25px;" class="font-weight-bold" >Kepala Program {{ $item->kaprog }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  
    <script>
    //   let slideIndex = 0;
    //   const slideContent = document.querySelector('.slide-content');
    //   const slideCards = document.querySelectorAll('.slide-card');
    //   let isMobile = window.innerWidth <= 768;
      
    //   function showSlide(index) {
    //     if (index < 0) {
    //       index = slideCards.length - 1;
    //     } else if (index >= slideCards.length) {
    //       index = 0;
    //     }
        
    //     slideIndex = index;
    //     const translateValue = isMobile ? -slideIndex * 0 : -slideIndex * 50;
    //     slideContent.style.transform = isMobile ? `translateY(${translateValue}%)` : `translateX(${translateValue}%)`;
    //   }
  
    //   function autoSlide() {
    //     if (slideIndex >= slideCards.length - 2) {
    //     showSlide(0);
    //   }else{
    //     showSlide(slideIndex + 1);
        
    //   }
    //   // setTimeout(() => {showSlide(0);}, 300);}
    // }
      

    //   if (!isMobile) {
    //       setInterval(autoSlide, 3000);
    //     }
  
      
    //   showSlide(slideIndex);
  
    //   window.addEventListener('resize', function() {
    //       isMobile = window.innerWidth <= 768;
    //       showSlide(slideIndex); // Update slide position on resize
    //   });



    //   // ubah warna
      // Ambil elemen card dan input warna
      const card = document.getElementById('card');
        const colorPicker = document.getElementById('colorPicker');

        // Memeriksa apakah ada warna yang tersimpan dalam localStorage
        const savedColor = localStorage.getItem('savedColor');
        console.log(colorPicker)

        // Jika ada warna yang tersimpan, atur warna latar belakang card sesuai dengan warna yang tersimpan
        if (savedColor) {
            card.style.backgroundColor = savedColor;
            colorPicker.value = savedColor;
        }

        // Tambahkan event listener untuk perubahan warna
        colorPicker.addEventListener('input', function() {
            // Set warna latar belakang card sesuai dengan input warna
            const selectedColor = colorPicker.value;
            card.style.backgroundColor = selectedColor;

            // Simpan warna yang dipilih ke dalam localStorage
            localStorage.setItem('savedColor', selectedColor);
        });

    </script>
  
</body>
</html>
{{-- @endsection --}}
