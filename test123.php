<?php include('include/header.php');?>
<style>
    .page-header{
        padding:0px !important;
        max-height:80vh;
    }
    .banner-img-service{
        width:100%;
        height:auto;
    }
    .modify-service-list li{
            font-size: 22px;
    line-height: 36px;
    }
    .features-card{
        cursor:pointer;
        border-radius:18px;
        border:2px solid white;
        /* border:1px solid #212529; */
        box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1);
        /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); Shadow effect */
        transition: box-shadow 0.3s ease;

    }
    .features-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        border:none !important;
       
    }

    /* testimonials card */
    .testimonial-card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  padding: 20px;
}

.testimonial-img {
  border-radius: 50%;
  overflow: hidden;
  margin: 0 auto 10px;
  width: 100px;
  height: 100px;
}

.testimonial-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.testimonial-name {
  font-size: 18px;
  color: #333;
  margin-bottom: 5px;
}

.testimonial-description {
  font-size: 14px;
  color: #666;
}
.owl-prev{
    margin-right:'10px !important'
}
    

/* industry section */
.card {
  position: relative;
 padding:10px;
 display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
  height: 200px;
  background-color: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  text-align:center;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
}

.card img {
  width: 100px;
  height: 100px;
}

.card h2 {
  padding: 20px;
  font-size: 1.5rem;
  color: #333333;
}

/* fancybox gallery */
.fancybox-gallery{
    width: 300px !important;
    height:270px;
    padding: 14px !important;
    display:block;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow:hidden;
    background-color: #F5F5F5;
    border-radius:10px;
    margin:2px 2px;
    
}
.fancybox-gallery img{
    width:90%;
    height:230px;
    object-fit:cover;
}
.item{
    text-align: -webkit-center !important;
}
   
/* brand logo */
.brand-cart{
    display:flex;
    width:220px;
    height:140px;
    justify-content:center;
    align-items:center;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    overflow:hidden;
    /* background-color: #F5F5F5; */
    border-radius:10px;
    margin:2px 2px;
}
.brand-cart img{
    width:90%;
    height:120px;
}

</style>
             
			<div role="main" class="main">

                <section style="background-color:white" class="page-header">
                         
                         <div class="row">
                           <img class="banner-img-service" src="img/crm-banner.png">
                        </div>                                     
                </section>

                <div class="container">
                <!-- abojut crm page -->
                <section class="section custom-section-full-width bg-color-transparent border-0 mt-0 mb-1">
                     <div class="container">
                     <div class="col-12">
                                <hr class="my-5">
                                <h2 class="text-color-dark pb-4 text-center font-weight-bold text-8 line-height-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">About Our CRM Solutions</h2>
                            </div>
                        <div class="row">
                           
                            <!-- <div class="col-12">
                              <h2 class="text-color-dark font-weight-bold text-8 line-height-2 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">About Our CRM Solutions </h2>
                          </div> -->
                              <div class="col-12 col-md-6">
                                  <h4 class="appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">Enhancing IT Services through Seamless Customer Relationship Management:</h4>
                                  <p class="custom-text-size-1 pt-3 pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                  Welcome to Techninza's About CRM page. Our CRM seamlessly integrates with our diverse IT services, including web development, Android app creation, and AI development. We believe that successful IT services go beyond technology; they're about fostering strong customer relationships.
                                  </p>
                                  <p class="custom-text-size-1 pt-3 pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                  Our CRM acts as the nexus between your business and customers, melding data-driven insights with strategic engagement. It empowers you to elevate customer experiences across touchpoints while adapting to your evolving IT needs. Whether you're exploring AI, Android app creation, or other domains, our CRM fuels personalized communication, streamlined processes, and growth acceleration.
                                  </p>
                                  <!-- <p class="custom-text-size-1 pt-3 pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                  Customizable to fit your industry's uniqueness, our CRM remains innovative with AI and automation. Delve into our About CRM page to witness how [Company Name] is reshaping business technology, emphasizing meaningful connections, and driving exceptional results.
                                  </p> -->
                                  <p class="custom-text-size-1 pt-3 pb-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                  <strong>Elevate Your IT Services: Explore Our CRM Solutions Today.</strong>
                                  </p>
                            </div>
                            <div class="col-12 col-md-6 p-3">
                                   <div class="pb-4 px-4">
                                   <img src="/img/crm-about2.png" class="img-fluid appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800" alt="">
                                   </div>
                            </div>
                        </div>
                     </div>
                 </section>
                
                   <div class="container-fluid py-3">
                        <div class="row pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                                 <div class="col-12">
                                 <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-2 mb-md-4">Features & Benefits</h2>
                                    
                                 </div>
                        </div>
                        <div class="row pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                        <!-- features1 -->
                                <div class="col-12 col-md-3 d-flex justify-content-center">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 mb-md-5 features-card p-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                                              <div>
                                              <img src="/img/icons/lead.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Lead Management</strong></p>
                                              <p class="text-center px-2">Maximize Conversions with Our Expert Lead Management Solutions."</p>
                                        </div>                                     
                               </div>
                               <!-- features2 -->
                               <div class="col-12 col-md-3 d-flex justify-content-center">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 mb-md-5 features-card p-3">
                                              <div>
                                              <img src="/img/icons/project.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Project Management</strong></p>
                                              <p class="text-center px-2">Achieve Success through Streamlined Project Management with Our Solutions.</p>
                                        </div>                                     
                               </div>
                               <!-- features3 -->
                               <div class="col-12 col-md-3 d-flex justify-content-center">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 mb-md-5 features-card p-3">
                                              <div>
                                              <img src="/img/icons/task.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Task Management</strong></p>
                                              <p class="text-center px-2">Achieve More with Seamless Task Management through Our CRM Solution.</p>
                                        </div>                                     
                               </div>
                               <!-- features4 -->
                               <div class="col-12 col-md-3 d-flex justify-content-center">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 mb-md-5 features-card p-3">
                                              <div>
                                              <img src="/img/icons/real-time.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Real-Time data </strong></p>
                                              <p class="text-center">Empower Decisions with Real-Time Data Integration in Our CRM Solution.</p>
                                        </div>                                     
                               </div>
                                <!-- features4 -->
                                <div class="col-12 col-md-3 d-flex justify-content-center">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 features-card p-3">
                                              <div>
                                              <img src="/img/icons/easy.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Esy to setup</strong></p>
                                              <p class="text-center px-2">Seamlessly Begin Your CRM Journey with Easy Configuration Options.</p>
                                        </div>                                     
                               </div>
                                <!-- features4+1 -->
                                <div class="col-12 col-md-3 d-flex justify-content-center ">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 features-card p-3">
                                              <div>
                                              <img src="/img/icons/third.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Third part integration</strong></p>
                                              <p class="text-center px-2">Elevate CRM with Seamless Third-Party Integrations for Enhanced Functionality.</p>
                                        </div>                                     
                               </div>
                                <!-- features4+2 -->
                                 <div class="col-12 col-md-3 d-flex justify-content-center ">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 features-card p-3">
                                              <div>
                                              <img src="/img/icons/area.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Multi industry friendly</strong></p>
                                              <p class="text-center px-2">Powering Success Across Diverse Industries with Customizable Solutions and Seamless Integration.</p>
                                        </div>                                     
                               </div> 
                               <!-- features7 -->
                               <div class="col-12 col-md-3 d-flex justify-content-center ">
                                        <div class="text-center d-flex flex-column justify-content-center mb-3 features-card p-3">
                                              <div>
                                              <img src="/img/icons/login1.png" style="width:90px; height:90px" class="img-fluid" alt="">
                                              </div>
                                              <p class="text-center px-2 pt-3"><strong>Multi login area</strong></p>
                                              <p class="text-center px-2">Seamlessly Connect Teams with Multi-Login Capabilities for Enhanced Collaboration and Efficiency.</p>
                                        </div>                                     
                               </div> 
   
                        </div>
                        </div>

                         <!-- features and benefites end -->
                                       
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- brands we have serve -->
                <section>
                        <div class="container">
                             <div class="row">
                                <div class="col-12 py-4">
                                <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-2 mb-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Band We Have Served For</h2>
                                </div>

                                     <div class="col-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                     <div class="owl-carousel2 owl-carousel owl-theme p-3">
                                      <!-- brand1-->
                                        <div class="item"> 
                                        <div class="brand-cart">     
                                            <img src="/img/logos/company1.png" class="brand" alt="">
                                       </div>
                                        </div>
                                        <!-- brand2-->
                                        <div class="item"> 
                                            <div class="brand-cart">
                                            <img src="/img/logos/company2.png" class="brand" alt="">
                                            </div>     
                                            
                                        </div>
                                        <!-- brand3-->
                                        <div class="item">
                                            <div class="brand-cart">
                                            <img src="/img/logos/company3.png" class="brand" alt="">
                                            </div>      
                                            
                                        </div>
                                        <!-- brand4-->
                                        <div class="item">
                                            <div class="brand-cart">
                                            <img src="/img/logos/company4.png" class="brand" alt="">
                                            </div>      
                                            
                                        </div>
                                        <!-- brand1-->
                                        <div class="item">  
                                            <div class="brand-cart">
                                            <img src="/img/logos/company33.png" class="brand" alt="">
                                            </div>    
                                            
                                        </div>
                                        <!-- brand1-->
                                        <div class="item"> 
                                            <div class="brand-cart">
                                            <img src="/img/logos/company44.png" class="brand" alt="">
                                            </div>     
                                            
                                        </div>
                                        <!-- brand1-->
                                        <!-- <div class="item">      
                                            <img src="/img/logos/company7.png" class="brand" alt="">
                                        </div> -->
                                        <!-- brand1-->
                                        <!-- <div class="item">      
                                            <img src="" alt="">
                                        </div> -->
                                    </div> 
                               </div>  


                             </div>
                        </div>
                </section>
                      <!-- brands we have serve -->
                      
                <!-- fancybox -->
                    <section>
                        <div class="container">
                         <div class="row">
                         <div class="col-12">
                                 <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-2 mb-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">CRM Work</h2>
                                    
                                 </div>
                            <div class="col-12 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                   <div class="owl-carousel owl-theme p-3">
                            <!-- card1-->
                             <div class="item">       
                             <a href="/img/gallery/crm1.png" class="fancybox fancybox-gallery" data-fancybox="gallery1">
                                <img src="/img/gallery/crm1.png" alt="">
                            </a>
                            </div>
                            <!-- card2-->
                            <div class="item">       
                             <a href="/img/gallery/crm2.png" class="fancybox fancybox-gallery" data-fancybox="gallery1">
                                <img src="/img/gallery/crm2.png" alt="">
                            </a>
                            </div>
                            <!-- card3-->
                            <div class="item">       
                             <a href="/img/gallery/crm3.png" class="fancybox fancybox-gallery" data-fancybox="gallery1">
                                <img src="/img/gallery/crm3.png" alt="">
                            </a>
                            </div>
                            <!-- card4-->
                            <div class="item">       
                             <a href="/img/gallery/crm4.png" class="fancybox fancybox-gallery" data-fancybox="gallery1">
                                <img src="/img/gallery/crm4.png" alt="">
                            </a>
                            </div>
                            <!-- card4+1-->
                            <div class="item">       
                             <a href="/img/gallery/crm5.png" class="fancybox fancybox-gallery" data-fancybox="gallery1">
                                <img src="/img/gallery/crm5.png" alt="">
                            </a>
                            </div>
                            <!-- card4+2-->
                            <div class="item">       
                             <a href="/img/gallery/crm6.png" class="fancybox fancybox-gallery" data-fancybox="gallery1" >
                                <img src="/img/gallery/crm6.png" alt="">
                            </a>
                            </div>
                             <!-- card7-->
                             <div class="item">       
                             <a href="/img/gallery/crm7.png" class="fancybox fancybox-gallery" data-fancybox="gallery1" >
                                <img src="/img/gallery/crm7.png" alt="">
                            </a>
                            </div>
                             <!-- card8-->
                             <div class="item">       
                             <a href="/img/gallery/crm8.png" class="fancybox fancybox-gallery" data-fancybox="gallery1" >
                                <img src="/img/gallery/crm8.png" alt="">
                            </a>
                            </div>
                            <div class="item">       
                             <a href="/img/gallery/crm9.png" class="fancybox fancybox-gallery" data-fancybox="gallery1" >
                                <img src="/img/gallery/crm9.png" alt="">
                            </a>
                            </div>
                         </div>
                    </div>
                 </div>
                 </div>
            </section>
                

                <!-- fancybox end -->



                <!-- industry section -->
                <section class=" border-0 m-0">
                    <div class="container-lg">
                    <div class="row pb-md-5 my-md-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                                 <div class="col-12">
                                 <h2 class="text-color-dark text-center font-weight-bold text-8 line-height-2 mb-2 mb-md-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Industries</h2>
                                    
                                 </div>
                        </div>
                    <div class="row appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250">
                        
                        <div class="col-12 col-md-4 col-lg-3">
                        <div class="card mb-4 mb-md-3">
                          <img src="/img/industry1.png" alt="Card Image">
                          <h2 class="text-center"><strong>Manufacturing</strong></h2>
                        </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                        <div class="card mb-4 mb-md-3">
                          <img src="/img/automobile1.png" alt="Card Image">
                          <h2 class="text-center"><strong>Automobile Management</strong></h2>
                        </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                        <div class="card mb-4 mb-md-3">
                          <img src="/img/product.png" alt="Card Image">
                          <h2 class="text-center"><strong>Product Based CRM</strong></h2>
                        </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                        <div class="card mb-4 mb-md-3">
                          <img src="/img/hospitality1.png" alt="Card Image">
                          <h2 class="text-center"><strong>Hospitality Mangement</strong> </h2>
                        </div>
                        </div>
                    </div>
                    </div>
            </section>
                   
            <!-- industry section end -->


                </div>
			</div>

                  





 <!-- testimonial -->
                <section class="section section-height-3 border-0 m-0">
                    <div class="container-lg">
                       <div class="row "> 
                            <div class="col-12 py-4">
                                <hr class="my-5">
                                <h2 class="text-color-dark text-center text-center font-weight-bold text-8 line-height-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">Testimonial</h2>
                            </div> 
                        
                                                      
    <div class="owl-carousel owl-theme p-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
        <!-- card1 -->
    <div class="item">       
         <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial11.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">AAXEL</h4>
          <p class="testimonial-description">"We used to have a very manual CRM system that was difficult to use and didn't give us the insights we needed to close more deals. Since switching to Salesforce, we've seen a 20% increase in sales. The system is easy to use and the reporting tools are incredibly powerful. We can now track our leads and opportunities in real time and make better decisions about where to focus our sales efforts."</p>
        </div>
    </div>
    <!-- card2 -->
    <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial2.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">Pajasa</h4>
          <p class="testimonial-description">"Our old CRM system was a nightmare to use. It was difficult to find information about our customers and it was impossible to track our interactions with them. Since switching to Zoho CRM, our customer service has improved dramatically. We can now easily access customer information and history, and we're able to provide better service to our customers. We've also seen a decrease in customer churn"</p>
        </div>
    </div>
    <!-- card3 -->
    <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/tesimonial3.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">AMA(advance market analysis)</h4>
          <p class="testimonial-description">"It was difficult to keep track of our leads, opportunities, and sales orders. Since switching to HubSpot CRM, our sales process has been streamlined and we're able to close deals more quickly. The system is easy to use and the automation features are incredibly helpful. We've also seen a decrease in administrative overhead."</p>
        </div>
    </div>
    <!-- card4 -->
    <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial4.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">Crossrods</h4>
          <p class="testimonial-description">"Before we implemented CRM, our sales team was spending a lot of time tracking leads and opportunities in spreadsheets. This was time-consuming and inefficient. Since implementing CRM, our sales team has been able to increase their productivity by 25%. They can now focus on closing deals instead of managing data. This has resulted in a significant increase in sales."</p>
        </div>
    </div>
    <!-- card5 -->
    <div class="item">
         <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial77.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">Sooprs</h4>
          <p class="testimonial-description">"We were skeptical about the ROI of CRM at first, but we've been pleasantly surprised. Since implementing CRM, we've seen a 30% increase in ROI on our marketing and sales campaigns. We're also closing more deals faster and with less effort. We're confident that CRM has been a key factor in our growth."</p>
        </div>
    </div>
    <!-- card6 -->
    <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial8.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">Budget logistics and packers</h4>
          <p class="testimonial-description">"We were looking for a CRM system that would help us improve our sales process and customer service. We tried a few different systems, but none of them were a good fit for our needs. Then we tried Salesforce, and it was like a breath of fresh air. The system is easy to use, the reporting tools are incredibly powerful, and the customer support is top-notch. We've seen a significant increase in sales and customer satisfaction since we started using Salesforce. We're so glad we made the switch!"</p>
        </div>
    </div>
    <!-- card7 -->
    <!-- <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial1.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">John Doe</h4>
          <p class="testimonial-description">"A winning combination – website and app. Their attention to detail and dedication shine through, elevating our digital presence significantly."</p>
        </div>
    </div> -->
    <!-- card8 -->
    <!-- <div class="item">
    <div class="testimonial-card mx-2">
          <div class="testimonial-img">
            <img src="/img/testimonial1.png" alt="Testimonial Image">
          </div>
          <h4 class="testimonial-name">John Doe</h4>
          <p class="testimonial-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in bibendum quam."</p>
        </div>
    </div> -->
</div>
                         
                         </div>
                    </div>
                </section> 
                 <!-- testimonials end -->

            

	<?php include('include/footer.php');?>


   
    <!-- fancybox cdn -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	
        <script>
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
    </script>

<script>
        $('.owl-carousel2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
    
    
    
    
    </body>


</html>
