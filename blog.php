
   <body>
   
      <!-- BEGIN: HEADER SECTION -->
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/blog" />
        
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
<!-- BEGIN: BLOG PAGE -->
<section class="blogs-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="blog-box">
               <figure data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/blog1.jpg" alt="Image" class="img-responsive">
               </figure>
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000" >
                  <h3><a href="blog-detail1.php">4 Content Marketing Tactics You Have to Try</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle blue-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>In today’s modern era, it’s no surprise that content strategy plays a key part in the success of the brand. With an effective content strategy, you can promote your brand message across the globe in a risk-free manner.  </p>
               </article>
            </div>
            <div class="blog-box">
               <div class="single-slider" data-aos="flip-left" data-aos-duration="1000">
                  <figure >
                     <img src="images/blog2.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <figure >
                     <img src="images/blog2.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <figure >
                     <img src="images/blog2.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <figure >
                     <img src="images/blog2.jpg" alt="Image" class="img-responsive">
                  </figure>
                  <figure >
                     <img src="images/blog2.jpg" alt="Image" class="img-responsive">
                  </figure>
               </div>
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000"> 
                  <h3><a href="blog-detail2.php">How to Build A Million Dollar Brand like a PRO?</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle green-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>Almost every business operator wishes to reach an optimum height of their business. But it is not an easy task as it requires an ample amount of patience, result-driven strategy, and next-level creativity. </p>
               </article>
            </div>
            <div class="blog-box">
               <div class="row">
                  <div class="col-sm-4 col-6">
                     <figure data-aos="flip-left" data-aos-duration="1000">
                        <img src="images/blog3.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </div>
                  <div class="col-sm-4 col-6">
                     <figure data-aos="flip-left" data-aos-duration="1000">
                        <img src="images/blog4.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </div>
                  <div class="col-sm-4 col-6">
                     <figure data-aos="flip-left" data-aos-duration="1000">
                        <img src="images/blog5.jpg" alt="Image" class="img-responsive">
                     </figure>
                  </div>
               </div>
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000"> 
                  <h3><a href="blog-detail3.php">5 Weird Marketing Tactics That Actually Work</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle grey-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>Undeniably showcasing your brand message out into the world exclusively is significant in today’s stiffening competition world. Unfortunately, a great chunk of modern business entrepreneurs and markets fails to utilize the right techniques to hold the attention of every passerby.  </p>
               </article>
            </div>
            <div class="blog-box">
               <figure data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/blog6.jpg" alt="Image" class="img-responsive">
               </figure>
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000"> 
                  <h3><a href="blog-detail4.php">Sneaky Ways to Fuel Brand Awareness</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle lg-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>Usually, online marketers need to come up with ideas to display their products exclusively to their targeted audience.  </p>
               </article>
            </div>
            <div class="blog-box">
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000"> 
                  <h3><a href="blog-detail.php">Lorem Ipsum is simply dummy .</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle pink-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
               </article>
            </div>
            <div class="blog-text-box orange-gradient " data-aos="fade-left" data-aos-duration="1000">
               <h3>“Last year, the market witnessed a real fever" of land, pushing up the land price level to a very high level,”</h3>
               <h4>Donald Mills</h4>
               <p class="text-uppercase text-white">manager</p>
            </div>
            <div class="blog-box">
               <figure data-aos="flip-left" data-aos-duration="1000">
                  <img src="images/blog7.jpg" alt="Image" class="img-responsive">
               </figure>
               <article class="blog-text" data-aos="fade-up" data-aos-duration="1000"> 
                  <h3><a href="blog-detail5.php">The Hard-to-Ignore Benefits of Digital Marketing</a></h3>
                  <ul class="list-inline">
                     <li class="list-inline-item">
                        <span class="circle purple-circle">  								
                        </span>
                        Lucas Norman
                     </li>
                     <li class="list-inline-item">February 17, 2019</li>
                     <li class="list-inline-item hashtag">#tech</li>
                  </ul>
                  <p>In today’s fast-paced world, digital marketing has revamped the way businesses connect with their potential buyers.  </p>
               </article>
            </div>
            <!-- <div class="load-btn text-center">
               <a class="theme-btn light-gradient" href="#">Load More</a>
            </div> -->
         </div>
      </div>
   </div>
</section>
<!-- END: BLOG PAGE -->
<div class="grey-bg">
   

<?php require 'footer.php'; ?>
