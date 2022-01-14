@extends('layouts.master')

@section('content')
    <section class="app py-5"> 
     <div class="container container-width">
         <div class="row">
             <div class="col-md-12 mb-2 mb-md-5">
                 <div class="main-title text-center">
                     <h4 class="main-title-text fw-bold"> Instantly connect with your leads </h4>
                 </div>
             </div>
             
             <!--1-->
             @foreach($plan as $upgrade_plan)
               <div class="col-lg-3 col-md-6 col-12">
                <div class="pricing-plan-content shadow-inner p-4 mb-5 mb-lg-0 heigth-100 position-relative">
                   <div class="pricing-title text-center pb-1">
                       <h4 class="main-clr m-0 fw-bold">{{$upgrade_plan->plan_name}}</h4>
                       <p class="fs-12 pt-1">{{$upgrade_plan->plan_type}}</b></p>
                       @if(empty($upgrade_plan->price))
                        <h4 class="my-3 fw-bold">{{$upgrade_plan->billing_style}} </h4>
                       @elseif(empty($upgrade_plan->price))
                        <h4 class="my-3 fw-bold">{{$upgrade_plan->billing_style}} </h4>
                       @else
                       <h4 class="my-3 fw-bold"> ${{$upgrade_plan->price}}/<span class="fs-12 fw-normal"> {{$upgrade_plan->billing_style}}  <del class="badge bg-danger fw-normal"> ${{$upgrade_plan->actual_price}}/mo </del> </span> </h4>
                      @endif
                   </div>
                   <div class="plan-button text-center">
                        <h6 class="pricing-plan-title py-2 mb-3"> <i class="fa fa-credit-card pe-2" aria-hidden="true"></i> <b> {{$upgrade_plan->credits}}</b></h6>
                       <a href="{{url('/checkout',$upgrade_plan->id)}}"><button class="btn app-btn-primary w-100"> Choose plan </button></a>
                   </div>
                   <div class="pricing-body pt-4">
                       <p> <b> {{$upgrade_plan->plan_name}} </b> plan includes : </p>
                       <ul class="list-unstyled list-cstm m-0">
                        <?php
                            echo $upgrade_plan->description;
                         ?>
		                  </ul>
                   </div>
                   @if($upgrade_plan->discount)
                   <div class="sticker-wrapper">
                      <div class="sticker text-uppercase fw-bold text-center">Get {{$upgrade_plan->discount}}% off</div>
                   </div>
                   @endif
                </div>
              </div>
            @endforeach

  
            
         </div>
     </div>
    </section>
    
    <!--faq section-->
     <section class="faq-section mb-5">
      <div class="container">
        <div class="row">
               <div class="col-md-12 mb-2 mb-md-4">
                 <div class="main-title text-center">
                     <h4 class="main-title-text fw-bold"> Questions you might have </h4>
                 </div>
             </div>
            <div class="col-md-12">
             <div class="faq-content">
                    <div class="accordion" id="accordionfaq">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             What are Lusha credits? 
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                              <p>Lusha credits are a system of currency at Lusha.</p><p>1 Lusha credit = 1 profile contact details.</p><p>Every time you hit the Show contact button, you have used one Lusha credit.<br> Depending on the information in Lusha’s DB, a credit entitles you to all phone numbers and email addresses we have for that contact.</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             What is the difference between price plans? 
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                            <p>Each plan offers a different number of credits and features, depending on your company’s needs</p>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             Why can't I sign up to Lusha with my email address?
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                            To sign up for Lusha all you need is a business email address, which looks like this: john@pearrr.com.
                            If you find you’re not able to sign up to Lusha, it’s probably because you’re using Gmail, Yahoo, Hotmail, or general business emails like admin@pearrr.com, info@pearrr.com, or team@pearrr.com (which Lusha does not accept.) If you have more questions, feel free to reach out to our friendly support team.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              Does Lusha integrate with my CRM? 
                          </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                            Lusha integrates with HubSpot, Salesforce, Pipedrive, Outreach, SalesLoft and Zoho. We’re constantly working on adding more integrations. Contact us for any requests.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingfive">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                               Do you have any larger plans, or plans for large team sizes?  
                          </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                            Absolutely. Lusha has plans for teams of every size. If you’re 5+ users, please contact our sales team to discuss your business needs. We’d love to create your perfect plan.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingsix">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Will my plan renew automatically?  
                          </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                           Yes, your plan renews automatically and your monthly or annual credits are issued automatically.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingseven">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                Do unused credits roll over to the next month?   
                          </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                           Yes, your unused credits will continue to roll over each month, for up to 12 months, as long as you are subscribed to Lusha.
                                On annual plans, you will get all your credits upon purchase. Any unused credits will be reset at the end of the annual cycle.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingeight">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                Is Lusha's data GDPR aligned & CCPA compliant? 
                          </button>
                        </h2>
                        <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight" data-bs-parent="#accordionfaq">
                          <div class="accordion-body">
                           Yes, our data is fully committed and aligned to the GDPR & CCPA requirements.
                          </div>
                        </div>
                      </div>
                    </div>
                                </div>
            </div>
        </div>
      </div>
     </section>



@endsection
