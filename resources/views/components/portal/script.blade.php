 <script src={{ asset('portal/assets/vendor/jquery/jquery-3.2.1.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/bootstrap/js/popper.js') }}></script>
 <script src={{ asset('portal/assets/vendor/bootstrap/js/bootstrap.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/select2/select2.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/tilt/tilt.jquery.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/php-email-form/validate.js') }}></script>
 <script src={{ asset('portal/assets/vendor/aos/aos.js') }}></script>
 <script src={{ asset('portal/assets/vendor/glightbox/js/glightbox.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
 <script src={{ asset('portal/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}></script>
 <script src={{ asset('portal/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
 <script src={{ asset('portal/assets/js/swiper.js') }}></script>
 <!-- Main JS File -->
 <script src={{ asset('portal/assets/js/main.js') }}></script>

 <script>
     var swiper = new Swiper(".mySwiper", {
         loop: true,
         speed: 600,
         autoplay: {
             delay: 1000,
         },
         pagination: {
             el: ".swiper-pagination",
             clickable: true,
         },
         breakpoints: {
             320: {
                 slidesPerView: 2,
                 spaceBetween: 40,
             },
             480: {
                 slidesPerView: 3,
                 spaceBetween: 60,
             },
             640: {
                 slidesPerView: 4,
                 spaceBetween: 80,
             },
             992: {
                 slidesPerView: 6,
                 spaceBetween: 120,
             },
         },
     });
 </script>
 <script>
     $('.js-tilt').tilt({
         scale: 1.1
     })
 </script>
 </body>

 </html>
