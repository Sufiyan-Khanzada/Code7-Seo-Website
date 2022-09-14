
   <body>
   
     <!-- BEGIN: HEADER SECTION -->
      <?php require 'header.php'; ?>
      <!-- END: HEADER SECTION -->






 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">
<section class="section-padding gray_bg get_quote">
<div class="row">
   <div class="col-md-12">
      <h3 id="heading" class="text-center">We would like to hear from you</h3>
      <p class="text-center grey">
         Heads up! We require that you sign up for Weblogies services and packages. We make all your dreams come true in a successful project.
      </p>
    
      <form  id="package_form" method="POST" action="https://searchmetop.com/include/sendmail.php">
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/testimonial" />
        
        <input type="hidden" required name="package_form" value="Yes" />
       
     
            <div class="step-form">
               <section data-view="1">
                  <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                     <input type="text" autocomplete="off" class="form-control" placeholder="Full Name" name="full_name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"  required="required"/>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
                     <input type="email" autocomplete="off" class="form-control" placeholder="Email" name="email_address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"  required="required"/>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                     <input type="number" min="1" autocomplete="off" class="form-control" placeholder="Contact Number" name="contact_number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" required="required" />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                     <select name="budget_range" id="form-your-budget" aria-invalid="false" required="" class="form-control">
                      <option value="" selected disabled>Budget range</option>
                      <option value="less than $1000">less than $1000</option>
                      <option value="from $1000 to $5000">from $1000 to $5000</option>
                      <option value="from $5000 to $15000">from $5000 to $15000</option>
                      <option value="from $15000 to $50000">from $15000 to $50000</option>
                      <option value="from $50 000 to $100000">from $50000 to $100000</option>
                      <option value="more than $100000">more than $100000</option>
                    </select>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 field-mergedleft">
                     <select name="package_name" id="packages" class="valid safari_only form-control" aria-invalid="false" required="">
                        <option value="" pack="0">Package Name</option>
                              <optgroup class="pack_select">
                                <option disabled="" value="" pack="0" class="colr">SEARCH ENGINE OPTIMIZATION</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="SEO - Kick Starter Package  - $199/m" pack="1">SEO - Kick Starter Package  - $199/m</option>
                                <option value="SEO - Start-up Package - $349/m" pack="2">SEO - Start-up Package  - $349/m</option>
                                <option value="SEO - Professional Package - $749/m" pack="3">SEO - Professional Package  - $749/m</option>
                              </optgroup>

                              <optgroup class="pack_select">
                                <option disabled="" value="" pack="0" class="colr">SOCIAL MEDIA MARKETING</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="SMM - Kick Starter Package  - $199/m" pack="4">SMM - Kick Starter Package  - $199/m</option>
                                <option value="SMM - Scaling Plan - $349/m" pack="5">SMM - Scaling Plan - $349/m</option>
                                <option value="SMM - Venture Plan - $699/m" pack="6">SMM - Venture Plan - $699/m</option>
                              </optgroup>
                              
                              <!-- <optgroup>
                                <option disabled="" value="" pack="0" class="colr">LOCAL SEARCH MARKETING</option>
                              </optgroup>
                              <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Local Search Marketing - Startup Plan - $600/m" pack="7">Local Search Marketing - Startup Plan - $600/m</option>
                                <option value="Local Search Marketing - Scaling Plan - $1000/m" pack="8">Local Search Marketing - Scaling Plan - $1000/m</option>
                                <option value="Local Search Marketing - Venture Plan - $2000/m" pack="9">Local Search Marketing - Venture Plan - $2000/m</option>
                              </optgroup> -->

                              <optgroup class="pack_select">
                                <option disabled="" value="" pack="0" class="colr">WEB CONTENT</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Web Content - Startup Plan - $199/m" pack="10">Web Content - Kick Starter Package  - $199/m</option>
                                <option value="Web Content - Scaling Plan - $399/m" pack="11">Web Content - Scaling Package  - $399/m</option>
                                <option value="Web Content - Venture Plan - $699/m" pack="12">Web Content - Venture Plan - $699/m</option>
                              </optgroup>

                              <optgroup class="pack_select">
                                <option disabled="" value="" pack="0" class="colr">LINK BUILDING</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Link Building - Kick Starter Package  - $199/m" pack="13">Link Building - Kick Starter Package  - $199/m</option>
                                <option value="Link Building - Scaling Plan - $399/m" pack="14">Link Building - Scaling Plan - $399/m</option>
                                <option value="Link Building - Venture Plan - $699/m" pack="15">Link Building - Venture Plan - $699/m</option>
                              </optgroup>
                              
                              <optgroup class="pack_select">
                                <option disabled="" value="" pack="0" class="colr">BLOG POST</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Blog Post - Startup Plan - $69.75/m" pack="34">Blog Post - Startup Plan - $69.75/m</option>
                                <option value="Blog Post - Startup Plan - $115/m" pack="16">Blog Post - Startup Plan - $115/m</option>
                                <option value="Blog Post - Scaling Plan - $119.5/m" pack="35">Blog Post - Scaling Plan - $119.5/m</option>
                                <option value="Blog Post - Scaling Plan - $200/m" pack="17">Blog Post - Scaling Plan - $200/m</option>
                                <option value="Blog Post - Venture Plan - $164.25/m" pack="36">Blog Post - Venture Plan - $164.25/m</option>
                                <option value="Blog Post - Venture Plan - $900/m" pack="18">Blog Post - Venture Plan - $900/m</option>
                              </optgroup>

                              <optgroup>
                                <option disabled="" value="" pack="0" class="colr">Infographic Package</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Infographic Package - Startup Plan - $600" pack="19">Infographic Package - Startup Plan - $600</option>
                                <option value="Infographic Package - Scaling Plan - $1200" pack="20">Infographic Package - Scaling Plan - $1200</option>
                                <option value="Infographic Package - Venture Plan - $1800" pack="21">Infographic Package - Venture Plan - $1800</option>
                              </optgroup>

                              <optgroup>
                                <option disabled="" value="" pack="0" class="colr">Product Description Package</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Product Description - Startup Plan - $300" pack="22">Product Description - Startup Plan - $300</option>
                                <option value="Product Description - Startup Plan - $600" pack="23">Product Description - Startup Plan - $600</option>
                                <option value="Product Description - Scaling Plan - $450" pack="24">Product Description - Scaling Plan - $450</option>
                                <option value="Product Description - Scaling Plan - $900" pack="25">Product Description - Scaling Plan - $900</option>
                                <option value="Product Description - Venture Plan - $600" pack="26">Product Description - Venture Plan - $600</option>
                                <option value="Product Description - Venture Plan - $1200" pack="27">Product Description - Venture Plan - $1200</option>
                              </optgroup>


                              <optgroup>
                                <option disabled="" value="" pack="0" class="colr">Long Form Articles Package</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                <option value="Long Form Articles - Startup Plan - $1999/m" pack="28">Long Form Articles - Startup Plan - $1999/m</option>
                                <option value="Long Form Articles - Scaling Plan - $3450/m" pack="29">Long Form Articles - Scaling Plan - $3450/m</option>
                                <option value="Long Form Articles - Venture Plan - $4999/m" pack="30">Long Form Articles - Venture Plan - $4999/m</option>
                              </optgroup>
                              
                              <optgroup>
                                <option disabled="" value="" pack="0" class="colr">Website Content Package</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                 <option value="Web Content - Startup Plan - $500/m" pack="10">Web Content - Kick Starter Package  - $199/m</option>
                                <option value="Web Content - Scaling Plan - $399/m" pack="11">Web Content - Scaling Package  - $399/m</option>
                                <option value="Web Content - Venture Plan - $699/m" pack="12">Web Content - Venture Plan - $699/m</option>
                              </optgroup>
                              <optgroup class="pack_select" label="&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------">
                                 <option value="Combo Package - $1,200.00" pack="10">Combo Package - $1,200.00</option>
                              </optgroup>
            
              
            </select>
                  </div>
                  
                  <!--<div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20 field-mergedleft">-->
                  <!--   <div class="drop-img">-->
                  <!--     <input type="file" name="">-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="col-md-12 col-xs-12 margin-bottom-20 clearfix">
                     <textarea class="form-control" name="message" placeholder="*Business Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Business Description'" required="required"></textarea>
                     <p class="pull-left">Please tell us briefly about your business or the services you provide</p>
                  </div>
                  
                  <div class="text-center mdl-btnn">
                     <!--<a class="btn-fill btn-quote btn-step-next" style="cursor:pointer;" id="package_submit" >Submit</a>-->
                     <button type="submit" class="btn-quote btn-step-next" style="cursor:pointer;border=0" >Submit</button>
                  </div>
                  
               </section>
            </div>
      
         </div>
      </form>
    
   </div>
</div>
</section>
</div>
</div>     






<!-- Roi Modal -->
<div id="roiModal" class="modal roimdll">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container">
      <div class="model-title">
        <h4>SEO TOP SEARCH Agency for Startup,
Midsize and Enterprise Companies</h4>
        <p>Audit Your Site - More Sales, More Leads, More Happy Customers...</p>
      </div>
      <div class="model-bdy">
        <form method>
          <div class="row">
              <div class="col-md-6">
                <input type="text" name="" required="" class="form-control" placeholder="Enter Your Name">
              </div>
              <div class="col-md-6">
                <input type="text" name="" required="" class="form-control" placeholder="Enter Email Address">
              </div>
              <div class="col-md-6">
                <select>
                  <option>Phone Number</option>
                </select>
              </div>
              <div class="col-md-6">
                <select>
                  <option>Search Engine Optimization</option>
                </select>
              </div>
              <div class="col-md-12">
                <input type="text" name="" required="" class="form-control" placeholder="Enter Email Address">
              </div>
               <div class="col-md-12">
                <textarea required="" placeholder="Enter Message Here"></textarea>
              </div>
              <div class="col-md-12 roi-bntt">
                <button>Submit</button>
              </div>

          </div>
        </form>
      </div>
    </div>
  </div>

</div>

</div>


</div>
<!-- BEGIN: BANNER SECTION -->
<section id="testimonial-banner" class="inner-banner dark-gradient">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-7">
            <div class="inner-banner-text" data-aos="fade-right" data-aos-duration="1000">
               <h1><span>How Do We Achieve</span> 100% Customers Satisfaction?</h1>
               <p class="text-white">At SEO TOP SEARCH, we assist clients to bring in more business with exclusive ideas and an extensive skill set. We are creative enough to provide full-stack digital services and solutions to businesses from a vast spectrum of industries. Connect with us if you want to stay ahead of the curve.</p>
               <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                  <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-5">
            <div class="inner-banner-img" data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/test-banner.png" alt="Image" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
   <span class="blue-wave" data-aos="fade-right" data-aos-duration="1000">
   <img src="images/box-top-img.png" alt="Image" class="img-responsive">
   </span>
</section>
<!-- END: BANNER SECTIOn -->
<!-- BEGIN: TESTIMONIAL SECTION -->
<section class="testimonial-section testimonial-inner-page all-section">
   <div class="container">
      <div class="test-box">
         <div class="row align-items-center test-order">
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Completely Satisfied</span>
                  <p>Their team is supportive and provides complete privacy so you could easily your project ideas with them without a hitch. They hold exceptional skills in digital branding and helped me a lot to target organic leads. I must say that they have completely satisfied me.</p>
                  <p><span>Vicky Kelly</span>
                  </p>
               </div>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/test-img.jpg" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img.png" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
      </div>
      <div class="test-box left-test">
         <div class="row align-items-center">
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img2.png" alt="Image" class="img-responsive">
               </figure>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/test-img2.jpg" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Brilliant Services</span>
                  <p>It’s now been more than a year with SEO TOP SEARCH and it was an amazing experience of working with their search engine optimization team. Their team helped me to drive leads more than expected through the appropriate on-page and off-page techniques. Highly Recommend!</p>
                  <p><span>Helen Gibson</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="test-box border-0">
         <div class="row align-items-center test-order">
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Magnificent Experience</span>
                  <p>I searched about the best web content services and SEO TOP SEARCH popped up so I decided to opt for them. I just want to say thanks to their experienced team for providing me exceptional conversion-optimized content.</p>
                  <p><span>Linda Sam</span>
                  </p>
               </div>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/jessica.png" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img3.png" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
      </div>
        <div class="test-box left-test">
         <div class="row align-items-center">
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img2.png" alt="Image" class="img-responsive">
               </figure>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/shanon.png" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Highly Skilled</span>
                  <p>I came to know about the digital marketing services of SEO TOP SEARCH from trust pilot, so I decided to give them a try. Their marketing team impresses me with their marketing strategies and expertise.</p>
                  <p><span>Shannon Robinson</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
       <div class="test-box border-0">
         <div class="row align-items-center test-order">
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Matchless!</span>
                  <p>The team of SEO TOP SEARCH has a highly professional search engine optimization team providing exceptional SEO services at competitive prices. I am amazed by their quick services.</p>
                  <p><span>Karen Thomas</span>
                  </p>
               </div>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/karen.png" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img3.png" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
      </div>
        <div class="test-box left-test">
         <div class="row align-items-center">
            <div class="col-md-5">
               <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img2.png" alt="Image" class="img-responsive">
               </figure>
            </div>
            <div class="col-md-2 col-sm-3">
               <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/test-img2.jpg" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="col-md-5 col-sm-8">
               <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                  <div class="top-head">
                     <span class="head-upper"></span>
                     <span class="head-after"></span>
                  </div>
                  <span class="section-head">Dedicated Team</span>
                  <p>The experts of SEO TOP SEARCH understand our requirements and promoted our product across social media at the precise time. They have excellent skills in social media marketing and provided unbounded support throughout the campaign.</p>
                  <p><span>Shirley Smith</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END: TESTIMONIAL SECTION -->



<!-- BEGIN: RANKING SECTION -->
    <div id="ftr-frm"></div>
<!-- BEGIN: RANKING SECTION -->
<?php require 'contact-form.php'; ?>

<!-- BEGIN: CONTACT SECTION -->
<section class="contact_footer_details" >  
  <div class="container"> 
    <div class="row"> 
      <div class="col-sm-4  bd-left"> 
        <div class="contact_footer_box py-5"> 
          <span  data-aos="fade-right" class="h4" data-aos-duration="1000">Email</span>
          <div class="d-flex"  data-aos="fade-up" data-aos-duration="1000"> 
            <i class=" fa fa-envelope-o" aria-hidden="true"></i>
            <span>  
            <a href="mailto:info@searchmetop.com">info@seotopsearch.com</a>
            </span>
          </div>
        </div>
      </div>
      <div class="col-sm-4 "> 
        <div class="contact_footer_box py-5"> 
          <span  data-aos="fade-right" class="h4" data-aos-duration="1000">Contact Us</span>
          <div class="d-flex"  data-aos="fade-up" data-aos-duration="1000"> 
           <i class="fa fa-map-o" aria-hidden="true"></i>
           <span>  
            <a href="#" target="_blank">3522 Gray Ridge Ct, Houston, TX 77082, USA</a>
          </span>
        </div>
      </div>
    </div>
    <div class="col-sm-4 "> 
      <div class="contact_footer_box py-5"> 
        <span  data-aos="fade-right" class="h4" data-aos-duration="1000">Phone</span>
        <div class="d-flex"  data-aos="fade-up" data-aos-duration="1000"> 
         <i class="fa fa-phone" aria-hidden="true"></i>
         <span>  
          <a href="tel:+1-212-913-9084"><span>Sales</span>+1-212-913-9084</a>
          <!-- <a href="tel:15127177466"><span>Support</span>+1-212-913-9084</a> -->
        </span>
      </div>
    </div>
  </div>
</div>
</div>
</section>  
<!-- END: CONTACT SECTION -->
<?php require 'footer.php'; ?>