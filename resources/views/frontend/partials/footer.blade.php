 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="row g-5">
             <div class="col-lg-3 col-md-6 text-left"> <!-- Tambahkan class text-left di sini -->
                 <h5 class="text-light mb-4">Address</h5>
                 <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Depok, Cimanggis</p>
                 <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62857-9988-1818</p>
                 <p class="mb-2"><i class="fa fa-envelope me-3"></i>sobatsehat@gmail.com</p>
             </div>
             <div class="col-lg-3 col-md-6 text-center"> <!-- Tambahkan class text-center di sini -->
                 <h5 class="text-light mb-4">Ikuti Kami</h5>
                 <div style="display: flex; justify-content: center;">
                     <!-- Tambahkan style justify-content: center; di sini -->
                     <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                             class="fab fa-instagram"></i></a>
                     <a class="btn btn-outline-light btn-social rounded-circle" href=""><i
                             class="fab fa-facebook-f"></i></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 ms-auto">
                 <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                     <img src="{{ asset('frontend') }}/img/logo.png" alt="" width="200">
                 </a>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="copyright">
             <div class="row">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     &copy; <a class="border-bottom" href="#">Sobat Sehat</a>, All Right Reserved.
                 </div>
                 <div class="col-md-6 text-center text-md-end">
                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a class="border-bottom" href="{{ route('home') }}">Kelompok 06 - Alpukat</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Footer End -->


 <!-- Back to Top -->
 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
         class="bi bi-arrow-up"></i></a>


 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/wow/wow.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/waypoints/waypoints.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/counterup/counterup.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/tempusdominus/js/moment.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="{{ asset('frontend') }}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('frontend') }}/js/main.js"></script>
 </body>

 </html>
