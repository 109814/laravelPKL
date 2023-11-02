let slideIndex = 0;
      const slideContent = document.querySelector('.slide-content');
      const slideCards = document.querySelectorAll('.slide-card');
      let isMobile = window.innerWidth <= 768;
      
      function showSlide(index) {
        if (index < 0) {
          index = slideCards.length - 1;
        } else if (index >= slideCards.length) {
          index = 0;
        }
        
        slideIndex = index;
        const translateValue = isMobile ? -slideIndex * 0 : -slideIndex * 50;
        slideContent.style.transform = isMobile ? `translateY(${translateValue}%)` : `translateX(${translateValue}%)`;
      }
  
      function autoSlide() {
        if (slideIndex >= slideCards.length - 2) {
        showSlide(0);
      }else{
        showSlide(slideIndex + 1);
        
      }
      // setTimeout(() => {showSlide(0);}, 300);}
    }
      

      if (!isMobile) {
          setInterval(autoSlide, 3000);
        }
  
      
      showSlide(slideIndex);
  
      window.addEventListener('resize', function() {
          isMobile = window.innerWidth <= 768;
          showSlide(slideIndex); // Update slide position on resize
      });


// delete
function deleteJurusan(id) {
  if (confirm('Apakah Anda yakin ingin menghapus jurusan ini?')) {
      // Jika user mengonfirmasi penghapusan
      axios.delete('/createjurusan/' + id)
          .then(function (response) {
              // Hapus elemen slide-card dari tampilan jika penghapusan berhasil
              document.querySelector('.slide-card[data-id="' + id + '"]').remove();
              alert('Jurusan berhasil dihapus');
          })
          .catch(function (error) {
              console.error(error);
              alert('Terjadi kesalahan saat menghapus jurusan');
          });
  }
}