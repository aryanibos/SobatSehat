@extends('frontend.appMain')

@section('content')
 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
       <div class="container py-5">
           <h1 class="display-3 text-white mb-3 animated slideInDown">Doctors</h1>
           <nav aria-label="breadcrumb animated slideInDown">
               <ol class="breadcrumb text-uppercase mb-0">
                   <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                   <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                   <li class="breadcrumb-item text-primary active" aria-current="page">Doctors</li>
               </ol>
           </nav>
       </div>
   </div>
   <!-- Page Header End -->


   <!-- Team Start -->
   <div class="container-xxl py-5">
       <div class="container">
           <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
               <h1 class="breadcrumb-item text-primary active">Advice</h1>
               <p class= "breadcrumb-item text-dark active ">Berikan saran kalian disini. kami menerima saran dengan berharap kami dapat berkembang dan menjalankan program ini dengan baik bersama dengan saran yang telah kalian berikan.</p>
           </div>
           <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
              <h1 class="breadcrumb-itemprimary active">Support US</h1>
              <p class="breadcrumb-item text-dark active">Bantu kami dengan memberikan support dengan saran kalian</p>
          </div>
          <div class="row">
              <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                     <div class="bg-light rounded p-5">
                         <h5>Saran</h5>
                         <form>
                                 <div class="col-12" >
                                     <textarea style="background-color: #5CE1E6" class="form-control text-center" rows="5">Saran Kalian membantu dalam perkembangan kami</textarea>
                                 </div>
                         </form><p><p><p>
                         <h5>Dukungan</h5>
                         <form>
                                 <div class="col-12">
                                     <textarea style="background-color: #5CE1E6" class="form-control text-center" rows="5">Dukungan Kalian membantu dalam perkembangan kami</textarea>
                                 </div>
                         </form>
                     </div>
                 </div>   
              </div>
              <div class="col-lg-3"></div>

       </div>
   </div>
   <!-- Team End -->
   @endsection