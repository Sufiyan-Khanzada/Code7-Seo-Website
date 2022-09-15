
   <body>

   
      <!-- BEGIN: HEADER SECTION -->
      <?php include 'header.php'; ?>
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/about" />
        
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
<!-- BEGIN: HEADER -->
<!-- BEGIN: BANNER SECTION -->
<section id="about-banner" class="inner-banner dark-gradient">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-7">
            <div class="inner-banner-text" data-aos="fade-right" data-aos-duration="1000">
               <h1>Data-Driven Digital Agency With The Aim To Help Your Business Grow</h1>
               <p class="text-white">SEO TOP SEARCH is here to provide your business with the digital marketing ROI you have never witnessed before. </p>
               <a data-toggle="modal" data-target="#analyse-modal" class="theme-btn mb-4 orange-gradient" href="#">Analyse Your Website</a>
               <img src="images/partners.png"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="0" class="brand-img img-responsive" alt="Banner">
            </div>
         </div>
         <div class="col-sm-5">
            <div class="inner-banner-img" data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/about-banner.png" alt="Image" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
   <span class="blue-wave" data-aos="fade-right" data-aos-duration="1000">
   <img src="images/box-top-img.png" alt="Image" class="img-responsive">
   </span>
</section>
<!-- END: BANNER SECTIOn -->
<!-- BEGIN: STRUGGLE SECTIOn -->
<section  class="logo-rotate struggle-section about-section all-section">
   <div class="container">
      <div class="row order-change align-items-center">
         <div class="col-sm-6">
            <div data-aos="zoom-in" data-aos-duration="1000">
               <figure> 
                  <img src="images/about-inner.png" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="struggle-text" data-aos="fade-left" data-aos-duration="1000">
               <div class="top-head">
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Give Your Web Organic Search Results A Boost!</h3>
               <p>SEO TOP SEARCH Has housed a great number of qualified and hardworking individuals to help your business grow incredibly. Our focus is to take every measure required to enhance and maximize your brand awareness over the most pre-eminent and leading platforms on the internet. Our solicitous approach towards implementing the latest techniques in our strategies is what makes us look different from other digital agencies.</p>
               <a class="theme-btn light-gradient" href="grow-form.php">Lets Grow Your Business</a>
            </div>
         </div>
      </div>
   </div>
   <span  class="rotate-gsap logo-body" data-aos="fade-up" data-aos-duration="1000"> 
   <img src="images/about-logo.png" alt="Image" class="img-responsive">
   </span>
</section>
<!-- END: STRUGGLE SECTIOn -->
<!-- BEGIN: HELP SECTION -->
<div class="grey-bg about-help">
   <!-- BEGIN: HELP SECTION -->
<div class="help-out">
   <section class="help-section  all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top  text-center" data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Our Process</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 d-flex d-md-block col-sm-12">
            <div class="help-box" data-aos="fade-right" data-aos-duration="1000">
               <figure class="d-flex align-items-end justify-content-between">
                  <img src="images/help1.png" alt="Image" class="img-responsive">
                  <span class="float-right">01</span>
               </figure>
               <span class="box-head">Content</span>
               <p>We curate high-quality SEO-friendly content after going through profound keyword research and topic creation. We create content impressive enough to entice the target audience.</p>
            </div>
            <div class="help-box" data-aos="fade-right" data-aos-duration="1000">
               <figure class="d-flex align-items-end justify-content-between">
                  <img src="images/help3.png" alt="Image" class="img-responsive">
                  <span class="float-right">03</span>
               </figure>
               <span class="box-head"> Strategizing</span>
               <p>We follow the latest and most trending strategies and incorporate them in our plan to ensure that our content can attract relevant traffic and elevate your business</p>
            </div>
         </div>
         <div class="col-md-6">
            <figure class="help-rocket" >
               <img src="images/help-rocket.png" data-aos="fade-up" data-aos-duration="1000" alt="Image" class="rocket img-responsive">
               <span class="help-icons">
                  <div class="shape-1" >
                     <img alt="Image" class="img-fluid" src="images/help-icon1.png">
                  </div>
                  <div class="shape-2" >
                     <img alt="Image" class="img-fluid" src="images/help-icon2.png">
                  </div>
                  <div class="shape-3" >
                     <img alt="Image" class="img-fluid" src="images/help-icon3.png">
                  </div>
               </span>
            </figure>
         </div>
         <div class="col-md-3 d-flex d-md-block">
            <div class="help-box" data-aos="fade-left" data-aos-duration="1000">
               <figure class="d-flex align-items-end justify-content-between">
                  <img src="images/help2.png" alt="Image" class="img-responsive">
                  <span class="float-right">02</span>
               </figure>
               
                <span class="box-head">Link Building</span>
               <p>Our team of excellent SEO experts is highly experienced in building links that can redirect the visitor directly to your website’s homepage and main pages.</p>
            </div>
            <div class="help-box" data-aos="fade-left" data-aos-duration="1000">
               <figure class="d-flex align-items-end justify-content-between">
                  <img src="images/help4.png" alt="Image" class="img-responsive">
                  <span class="float-right">04</span>
               </figure>
               <span class="box-head">Analyze & Optimize</span>
               <p>Once the links are updated and traffic increases, our team ensures to look into your site rankings, analyze them and make sure to improve the results over time.</p>
            </div>
         </div>
      </div>
   </div>

</section>
 <span class="obj-span">
   <img src="images/obj1.png" alt="Image" class="img-responsive">
   </span>
</div>


  
<!-- END: HELP SECTION -->   <span class="obj2 aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
   <img src="images/obj2.png" alt="Image" class="img-responsive">
   </span>
</div>
<!-- END: HELP SECTION -->
<!-- BEGIN: COMPANY SECTION -->
<section class="company-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top text-center"  data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">We Help Startups & Brands Boost Visibility on Google</h3>
               <p>From the Health sector to Education, Automobile, E-commerce, Entertainment, Consultation, Hotel, Law, and Fintech, we are serving clients from a vast spectrum of industries.</p>
            </div>
         </div>
      </div>
      <!-- BEGIN: COMPANY SECTION -->
   <div class="row align-top">
      <div class="col-sm-4 ">
         <ul class="theme-list pink-list"  data-aos="fade-up" data-aos-delay="100" data-aos-offset="0" data-aos-duration="1000">
            <li><p>Food</p></li>
            <li><p>Beauty</p></li>
            <li><p>Education</p></li>
            <li><p>Healthcare</p></li>
            <li><p>Automobile</p></li>
         </ul>
      </div>
      <div class="col-sm-4 ">
         <ul class="theme-list purple-list"  data-aos="fade-up" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1000">
            <li><p>E-commerce</p></li>
            <li><p>Entertainment</p></li>
            <li><p>Medical & Drug</p></li>
            <li><p>Business & Consulting</p></li>
            <li><p>Construction</p></li>
         </ul>
      </div>
   <div class="col-sm-4 ">
         <ul class="theme-list pink-list"  data-aos="fade-up" data-aos-delay="600" data-aos-offset="0" data-aos-duration="1000">
            <li><p>Financial</p></li>
            <li><p>Clothing & Garments</p></li>
            <li><p>Hotels & Restaurants</p></li>
            <li><p>Film & Studio</p></li>
            <li><p>Law</p></li>
         </ul>
      </div>
   </div>
<!-- END: COMPANY SECTION --> 
   </div>
</section>
<!-- END: COMPANY SECTION -->
<div class="grey-bg"> 
   <!-- BEGIN: ROI SECTION -->
<div class="roi-top-part">
   <section class="roi-section logo-rotate3 ">
      <div class="container">
         <div class="row">
            <div class="col-md-8 mx-auto">
               <div class="roi-text text-center" data-aos="fade-left" data-aos-duration="1000">
                  <h4 >Looking for Visible Upgrades In ROI? </h4>
                  <h3 >Get A Free Quote Today!</h3>
                  <div class="ex-btns text-center mt-5">
                     <!-- <a class="dark-gradient theme-btn" href="contact.php" data-toggle="modal" data-target="#analyse-modal">Request Now</a> -->
                     <!-- <a class="dark-gradient theme-btn" id="roiBtn" href="#ftr-frm">Request Now</a> -->
                     <a class="dark-gradient theme-btn" href="#ftr-frm">Request Now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <span  class="rotate-gsap3 roi-right">
         <img src="images/ranking-smg-bg.png" alt="Image" class="img-responsive">
      </span>
   </section>
   <span class="roi-left">
      <img src="images/roi-left.png" alt="Image" class="img-responsive">
   </span>
</div>
<!-- END: ROI SECTION --></div>
<!-- BEGIN: EXPERIENCE SECTION -->
<section class="logo-rotate2 exp-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top text-center" data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">You think of a Rank — We know a Way to get you there!</h3>
               <p>SEO TOP SEARCH is a professional and leading SEO company with the goal of providing the most reliable and promising local SEO services to our clients. Our SEO marketing experts have a vision in their eyes, and that is to ensure that they gain success, which is only possible with the success of your brand.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center">
               <img src="images/exp1.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Personalized Solutions</span>
                  <p>Our SEO marketing experts and local SEO expert joined their heads together to develop the finest solutions to help your site rank better. </p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center">
               <img src="images/exp2.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Seamless Site Optimization</span>
                  <p>SEO TOP SEARCH share its fair part among the top-tier SEO service company to offer you optimization and SEO consulting services.  </p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center border-0">
               <img src="images/exp3.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Advanced Tools</span>
                  <p>We ensure to utilize the advanced tools and equipment to provide seamless basic SEO services to drive more traffic to your website. </p>
               </div>
            </div>
         </div>
      </div>
      <div class="ex-btns text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
         <a class="dark-gradient theme-btn" href="#" data-toggle="modal" data-target="#analyse-modal">Request a Custom Quote</a>
         <p>Any Question? <a href="#" data-toggle="modal" data-target="#analyse-modal">Talk to our Expert</a></p>
      </div>
   </div>
  <!--  <span class="rotate-gsap2 logo-body" > 
   <img src="images/ranking-img-bg.png" alt="Image" class="img-responsive">
   </span> -->
</section>
<!-- END: EXPERIENCE SECTION -->
<!-- BEGIN: TESTIMONIAL SECTION -->
<section class="testimonial-section slider-test orange-gradient all-section">
   <div class="container">
      <div class="test-ss">
         <div class="test-box">
            <div class="row align-items-center">
               <div class="col-md-5 col-sm-8">
                  <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                     <div class="top-head">
                        <span class="head-upper"></span>
                        <span class="head-after"></span>
                     </div>
                     <h3 class="section-head">That’s what our Clients Says</h3>
                     <p>The professional SEO team of SEO TO PSEARCH is driving results from search engines that have a real impact on the business’s return on investment. Highly Recommended!</p>
                     <p>Warren Norman</p>
                  </div>
               </div>
               <div class="col-md-2 col-sm-3">
                  <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                     <img src="images/test-img4.jpg" alt="Image" class="img-responsive">
                  </div>
               </div>
               <div class="col-md-5">
                  <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                     <img src="images/wesite-img.png" alt="Image" class="img-responsive">
                  </figure>
               </div>
            </div>
         </div>
         <div class="test-box">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                     <div class="top-head">
                        <span class="head-upper"></span>
                        <span class="head-after"></span>
                     </div>
                     <h3 class="section-head">That’s what our Clients Says</h3>
                     <p>Their on-page and off-page optimization strategies were a game-changer for our newly launched eCommerce store. I want to recommend SEO TOP SEARCH to every startup.</p>
                     <p>Lois Manley
                     </p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                     <img src="images/test-img3.jpg" alt="Image" class="img-responsive">
                  </div>
               </div>
               <div class="col-md-5">
                  <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                     <img src="images/wesite-img2.png" alt="Image" class="img-responsive">
                  </figure>
               </div>
            </div>
         </div>
         <div class="test-box">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <div class="review-text" data-aos="fade-right" data-aos-duration="1000">
                     <div class="top-head">
                        <span class="head-upper"></span>
                        <span class="head-after"></span>
                     </div>
                     <h3 class="section-head">That’s what our Clients Says</h3>
                     <p>I just want to say that SEO TOP SEARCH provides a transparent and collaborative environment to quickly show up websites on search engines by SEO content creation and technical troubleshooting.</p>
                     <p>Sara Connie
                     </p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="test-user" data-aos="flip-left" data-aos-duration="1000">
                     <img src="images/test-img2.jpg" alt="Image" class="img-responsive">
                  </div>
               </div>
               <div class="col-md-5">
                  <figure class="web-img" data-aos="zoom-in" data-aos-duration="1000">
                     <img src="images/wesite-img3.png" alt="Image" class="img-responsive">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
</section><!-- END: TESTIMONIAL SECTION -->
<!-- BEGIN: BEST SECTIOn -->
<section class="best-section all-section">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div class="best-text" data-aos="fade-right" data-aos-duration="1000">
               <div class="top-head">
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">We’re a Team of SEO Ninjas</h3>
               <p>Our team of incredible individuals follows one belief when it comes to serving our clients with promising results—Total Transparency. We acknowledge how transparency is important when it comes to digital advertising campaigns and data of your brand.</p>
               <p>SEO TOP SEARCH is more than just talking. We work with a goal in our mind, and that is to show our clients the outcomes they expect. Every action we perform is fully integrated with Google Analytics, ensuring to drive increased traffic to your website.</p>
            </div>
         </div>
         <div class="col-sm-6">
            <figure data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/best-img2.png" alt="Image" class="img-responsive">
            </figure>
         </div>
      </div>
   </div>
   <span class="trans-logo">
   <img src="images/trans-logo.png" alt="Image" class="img-responsive">
   </span>
</section>
<!-- END: BEST SECTION -->



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
            <a href="contact.php" target="_blank">3522 Gray Ridge Ct, Houston, TX 77082, USA</a>
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