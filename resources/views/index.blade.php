@extends('layouts.master')

@section('content')

<!--banner section-->
    <section class="banner-section bg-clr py-2 py-md-5">
        <div class="container">
         <div class="row align-items-center">
             <div class="col-md-6">
                 <div class="banner-text text-white text-center text-md-start">
                     <h1 class="hero__title fw-bold">Turn prospects<br> into sales</h1>
                     <p class="hero__subtitle">Build accurate prospect lists from<strong> 100M+ contacts</strong>.<br>Reach out with direct dials and emails.</p>
                     <div class="banner-email mt-4">
                     <form class="d-flex position-relative">
                        <input class="form-control me-2 py-3" type="search" placeholder="Enter your work email" aria-label="Search">
                        <button class="btn submit-btn py-3" type="submit">Start for free</button>
                      </form> 
                 </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="banner-img">
                     <img src="{{url('public/assets/images/ban-img.png.png')}}" alt="Image"/ class="img-fluid">
                 </div>
             </div>
         </div>
        </div>
    </section>
    
<!--benefits section-->
    <section class="benefits-section block-space">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> Here’s why 800,000 sales pros love Lusha </h1>
                 </div>
             </div>
         </div>
         <div class="row pt-4 pt-md-5">
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100">
                    <img src="{{url('public/assets/images/price-list.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2 mt-3"> Amazing accuracy </h5>
                    <p class="mb-0 px-4"> Lusha's database provides 81% accurate phone numbers and emails </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100">
                    <img src="{{url('public/assets/images/integration.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> One-click integrations </h5>
                    <p class="mb-0 px-4"> Integrate with Salesforce, Outreach, or your favorite tool to instantly automate your workflow </p>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="benefits-blk-content mb-3 mb-md-0 text-center shadow p-4 heigth-100">
                    <img src="{{url('public/assets/images/terms-of-use.png')}}" alt="Image"/ class="img-fluid">
                    <h5 class="fw-bold mb-0 py-2  mt-3"> Easy to use </h5>
                    <p class="mb-0 px-4"> Start using Lusha in 60 seconds and find more qualified leads right away </p>
                 </div>
             </div>
         </div>
     </div>
    </section>

<!--number counter section-->
   <section class="number-counter-section block-space block-space-bottom">
       <div class="container">
          <div class="row">
              <div class="col-md-12">
                 <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold"> The most accurate data you'll find </h1>
                 </div>
             </div> 
          </div>
          <div class="row pt-5">
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                      <div class="item-icon"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 100M </h2>
                      <p> Business Profiles </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 60M </h2>
                      <p> Email Addresses </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 50M </h2>
                      <p> Direct Dials </p>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="number-count-content text-center">
                       <div class="item-icon"> <i class="fa fa-building-o" aria-hidden="true"></i> </div>
                      <h2 class="fw-bold pt-3"> 15M </h2>
                      <p> Company Profiles </p>
                  </div>
              </div>
          </div>
       </div>
   </section>
   
<!--ccpa-gdpr section-->
 <section class="ccpa-gdpr-section block-space block-space-bottom">
    <div class="container">
     <div class="row align-items-center">
         <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-md-end text-center">
                <img src="{{url('public/assets/images/gdpr.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
         <div class="col-md-4 col-sm-6 col-12">
             <div class="main-title text-center text-white">
                     <h1 class="main-title-text fw-bold pb-3 pb-md-4 pt-3 mb-0"> Work in line with CCPA and GDPR </h1>
                     <p class="px-3 px-md-0"> Lusha is ISO 27001 certified and CCPA compliant and GDPR aligned for total peace of mind.</p>
                 </div>
         </div>
           <div class="col-md-4 col-sm-3 col-12">
             <div class="img-blk text-center">
                <img src="{{url('public/assets/images/ccpa.png')}}" alt="Image"/ class="img-fluid">
             </div>
         </div>
     </div>
    </div>
 </section>
   
<!--Get Started section-->
  <section class="get-startred-section block-space mb-md-5 pb-5">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
               <div class="started-content p-4 p-md-5 bg-img" style="background-image:url('public/assets/images/fbgbx2.png')">
                   <div class="main-title text-center">
                     <h1 class="main-title-text fw-bold text-white pb-4 pt-3"> Get Started with Lusha </h1>
                 </div> 
                 <div class="email-send-blk">
                     <form class="d-flex position-relative">
                        <input class="form-control me-2 py-3" type="search" placeholder="Enter email" aria-label="Search">
                        <button class="btn submit-btn py-3" type="submit">Start for free</button>
                      </form> 
                 </div>
               </div>  
             </div>
         </div>
      </div>
  </section>
@endsection
