
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/blog-detail2.php" />
        
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
        <h4>Search Me Top Agency for Startup,
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
<!-- BEGIN: BLOG PAGE -->
<section class="details-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 col-12 mx-auto">
            <div class="detail-box">
               <h3 class="text-center" data-aos="fade-down" data-aos-duration="1000">How to Build A Million Dollar Brand like a PRO?</h3>
               <h5 class="text-center" data-aos="fade-down" data-aos-duration="1000"><span>Writing - </span>May 01, 2021</h5>
               <img src="images/detail-1.jpg" data-aos="flip-left" data-aos-duration="1000" alt="Image" class="img-responsive">
               <p  data-aos="fade-right" data-aos-duration="1000">Almost every business operator wishes to reach an optimum height of their business. But it is not an easy task as it requires an ample amount of patience, result-driven strategy, and next-level creativity. The great news is that in this post we are going to share strategies that help to reach millions of people. Therefore, if you want to drive endless opportunities from your brands then you are the right hub. Have a look below to figure out constructive approaches to develop a million-dollar brand.
               </p>
            </div>
            <div class="desc-box"  data-aos="fade-up" data-aos-duration="1000">
               <h3>Sell Globally Via Ecommerce</h3>
               <p>There is no denying the fact that e-commerce sites are the most powerful platform for next-level business branding and growth. Ensure to build a million-dollar brand through an eCommerce store that can constantly target leads and fulfill your dreams. In this way, you will not only cater to all your business needs but also elevate your ROI at double speed. Surely by following the techniques shared in the above passage, you can develop a multi-dollar brand with no haste.
               </p>

               <h3>Google Your Business</h3>
               <p>Gone are days when you need to hire conventional marketing teams to reach millions of people. Now with the availability of search engines, companies are driving leads from across the globe in a super-sonic manner. By ranking your site on Google, you can scale up your sales graph in a robust manner. In a nutshell, you will need to move beyond magazines, television, and billboard advertisements to promote your brand all over the globe.
               </p>

               <h3>Conversion-Optimized Content</h3>
               <p>With no doubt, content offers the best growth opportunities to both small businesses and giant enterprises. Nowadays, almost every online platform demands unique content. Therefore, ensure to take the opportunity of conversion-optimized content if you want to take your business to a new height effortlessly. Else, you will miss a great chance to elevate your brand popularity over every socializing platform through the power of words.
               </p>
               <h3>Leverage Social Media Marketing</h3>
               <p>No matter if you are running a company or shop, you can leverage social media to maximize the popularity of your business across the globe. Due to the advancement of social medial platforms, it has become convenient for business owners to maximize their popularity and return on investment. By employing the right social media marketing strategies, you can get noticed instantly across the world. So, if you want to appeal more leads to your brand, then you must connect with your audience over social media.
               </p>

            
               <div class="row">
                  <div class="col-sm-6">
                     <ul class="list-inline tags">
                        <li class="list-inline-item">
                           <a href="#">camera</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">photography</a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#">tips</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-6">
                     <ul class="list-inline social float-right">
                        <li class="list-inline-item">
                           Share
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item">
                           <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="blog-detail-slider"  data-aos="fade-right" data-aos-duration="1000">
               <div class="box-slider d-flex">
                  <img src="images/box-sli1.png" alt="Image" class="img-responsive">
                  <a href="#">
                     <h4>Previous Post:</h4>
                     <p>The Personality Trait That Makes People Happier</p>
                  </a>
               </div>
               <div class="box-slider d-flex">
                  <a class="text-right" href="#">
                     <h4>Next Post</h4>
                     <p>The Personality Trait That Makes People Happier</p>
                  </a>
                  <img src="images/box-sli2.png" alt="Image" class="img-responsive">
               </div>
               <div class="box-slider d-flex">
                  <img src="images/box-sli1.png" alt="Image" class="img-responsive">
                  <a href="#">
                     <h4>Previous Post:</h4>
                     <p>The Personality Trait That Makes People Happier</p>
                  </a>
               </div>
               <div class="box-slider d-flex">
                  <a class="text-right" href="#">
                     <h4>Next Post</h4>
                     <p>The Personality Trait That Makes People Happier</p>
                  </a>
                  <img src="images/box-sli2.png" alt="Image" class="img-responsive">
               </div>
            </div>
            <div class="comment-box">
               <div class="row align-items-center">
                  <div class="col-sm-4">
                     <figure  data-aos="fade-right" data-aos-duration="1000">
                        <img src="images/comment-img.png" alt="Image" class="img-responsive">
                     </figure>
                  </div>
                  <div class="col-sm-8">
                     <div class="comment-desc"  data-aos="fade-left" data-aos-duration="1000">
                        <h4>Shane Lynch</h4>
                        <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. </p>
                        <ul class="list-inline social">
                           <li class="list-inline-item">
                              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                           </li>
                           <li class="list-inline-item">
                              <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="comment-form"  data-aos="fade-up" data-aos-duration="1000">
               <h3>Leave A Comment </h3>
               <form>
                  <div class="row">
                     <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required="" placeholder="Name*">
                     </div>
                     <div class="col-md-6">
                        <input type="email" name="email" class="form-control" required="" placeholder="Email*">
                     </div>
                     <div class="col-md-12">
                        <textarea name="message" placeholder="Message" class="form-control"></textarea>
                     </div>
                     <div class="col-md-3">
                        <div class="form_btn2 mt-3">
                           <input class="light-gradient theme-btn border-0 text-white text-uppercase" type="submit" value="Send Message">
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END: BLOG PAGE -->
<div class="grey-bg">
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
            <a href="mailto:info@searchmetop.com">info@searchmetop.com</a>
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
            <a href="#" target="_blank">7000 N Mopac Expy #200
Austin, TX 78731, USA</a>
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
          <a href="tel:+1-737-241-5425"><span>Sales</span>+1-737-241-5425</a>
          <a href="tel:15127177466"><span>Support</span>+1 (512) 717-7466</a>
        </span>
      </div>
    </div>
  </div>
</div>
</div>
</section>  
<!-- END: CONTACT SECTION -->
<?php require 'footer.php'; ?>