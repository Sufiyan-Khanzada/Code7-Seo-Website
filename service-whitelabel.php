
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/service-whitelabel" />
        
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
<section id="white-banner" class="services-banner inner-banner orange-gradient">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-10 mx-auto">
            <div class="inner-banner-text text-center "  data-aos="fade-down" data-aos-duration="1000">
               <h1>Add a competitive edge to your brand with the resellers program</h1>
               <p class="text-white">Our white label resellers program works for entrepreneurs and startups looking forward to starting a new business or expand their endeavors to new markets. Our approach is designed for business growth, leveraging the expertise of our team and the latest technology to innovative software solutions. We equip your business with tools and make efforts to achieve successful results tailoring our services to meet our client???s unique requirements.</p>
               <img src="images/partners.png"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="0" class="brand-img img-responsive" alt="Banner">
            </div>
         </div>
         <div class="col-md-12">
            <form class="banner-form four-inputs"  data-aos="fade-up" data-aos-duration="1000" method="POST" action="https://searchmetop.com/include/sendmail.php">
                                               <input type="hidden" required name="page_url" value="service-whitelabel.php" />
                                
                                <input type="hidden" required name="audit_site_form" value="Yes" />
                                
                              <input type="text" placeholder="Enter Name Here" name="full_name" required>
                              <input type="email" placeholder="Enter Email Here"  name="email_address" required>
                              <input type="tel" placeholder="Enter Phone Number" name="contact_number" required>
                              <input type="text" placeholder="Enter Website" name="own_website_link" required>
               <button class="light-gradient theme-btn" type="submit">Analyse</button>
            </form>
         </div>
      </div>
   </div>
</section>
<!-- END: BANNER SECTIOn -->
<!-- BEGIN: TIMELINE SECTION -->
<section class="logo-rotate timeline-section all-section">
   <div class="container">
      <div class="col-md-10 mx-auto">
         <div class="section-top  text-center"  data-aos="fade-down" data-aos-duration="1000">
            <div class="top-head mx-auto">
               <span class="head-before"></span>
               <span class="head-upper"></span>
               <span class="head-after"></span>
            </div>
            <h3 class="section-head">A reseller Program to Grow Your Business</h3>
         </div>
      </div>
      <div class="timeline-middlepath">
         <div class="row">
            <div class="col-md-2 mx-auto">
               <div class="timeline-middle">
                  <img src="images/timeline-rocket.png" alt="Image" class="img-responsive">
               </div>
            </div>
         </div>
      </div>
      <div class="time-box">
         <div class="row order-change"> 
            <div class="col-md-5 col-sm-6 col-9">
               <div class="time-desc"  data-aos="fade-right" data-aos-duration="1000">
                  <span>01</span>
                  <span class="box-head text-uppercase">Examine</span>
                  <p>We closely work with industry specialists and experts to uncover better opportunities and pathways leading to business growth</p>
               </div>
            </div>
            <div class="col-md-5 col-sm-6 col-3  offset-md-2">
               <figure  data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/timeline1.jpg" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
      </div>
      <div class="time-box  right-time">
         <div class="row ">
            <div class="col-md-5 col-sm-6 col-3">
               <figure  data-aos="zoom-in" data-aos-duration="1000" class="float-right">
                  <img src="images/timeline2.png" alt="Image" class="img-responsive">
               </figure>
            </div>
            <div class="col-md-5 col-sm-6  col-9 offset-md-2">
               <div class="time-desc"  data-aos="fade-left" data-aos-duration="1000">
                  <span>02</span>
                     <span class="box-head text-uppercase">strategize</span>
                  <p>Our professionals deliver master plans enabling the clients to drive more traffic and engagement through modern marketing. </p>
               </div>
            </div>
         </div>
      </div>
      <div class="time-box">
         <div class="row order-change">
            <div class="col-md-5 col-sm-6 col-9">
               <div class="time-desc"  data-aos="fade-right" data-aos-duration="1000">
                  <span>03</span>
                  <span class="box-head text-uppercase">Process</span>
                  <p>Providing effective marketing solutions to increase business ROI for clients from a broad spectrum of industries</p>
               </div>
            </div>
            <div class="col-md-5 col-sm-6 col-3  offset-md-2">
               <figure  data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/timeline3.png" alt="Image" class="img-responsive">
               </figure>
            </div>
         </div>
      </div>
      <div class="time-box  right-time">
         <div class="row ">
            <div class="col-md-5 col-sm-6 col-3">
               <figure  data-aos="zoom-in" data-aos-duration="1000" class="float-right">
                  <img src="images/timeline4.png" alt="Image" class="img-responsive">
               </figure>
            </div>
            <div class="col-md-5 col-sm-6 col-9 offset-md-2">
               <div class="time-desc"  data-aos="fade-left" data-aos-duration="1000">
                  <span>04</span>
                  <span class="box-head text-uppercase">Conclude</span>
                  <p>Working with our clients, we make sure to deliver effective results while meeting all their white label reseller program requirements</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <span  class="rotate-gsap logo-body" data-aos="fade-up" data-aos-duration="1000"> 
   <img src="images/ranking-img-bg.png" alt="Image" class="img-responsive">
   </span> -->
</section>
<!-- END: TIMELINE SECTION -->
<!-- BEGIN: STRUGGLE SECTION -->
<section  class="grey-bg struggle-section all-section">
   <div class="container">
      <div class="row align-items-center order-change">
         <div class="col-sm-6">
            <div data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/white-img.png" alt="Image" class="img-responsive">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="struggle-text" data-aos="fade-left" data-aos-duration="1000">
               <div class="top-head">
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Driving business success with superlative reseller service </h3>
               <p>At SEO TOP SEARCH, we partner up with experts procuring a client-centric strategy to crave a path leading to our client???s success. We work with our clients to increase their business reach and traffic with creative solutions to drive results. From online marketing, SEO, new-age web designs, and digital marketing, we ensure to reach your customers with bespoke strategies and solutions crafted according to your needs. </p>
               <ul class="theme-list">
                  <li><p>Elevating business growth </p></li>
                  <li><p>Enhancing client retention rate</p></li>
                  <li><p>Creative development services </p></li>
                  <li><p>Enhancing customer engagement</p></li>
                  <li><p>Proven statistics</p></li>
                  
               </ul>
               <a class="theme-btn light-gradient" href="grow-form.php">Lets Grow Your Business</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END: STRUGGLE SECTION -->
<!-- BEGIN: PACKAGES SECTION -->
<section class="packages-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top  text-center"  data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Partner up with budget-friendly reseller program 
               </h3>
               <p>We are experts working with clients to increase business ROI with a pocket-friendly reseller program. </p>
            </div>
         </div>
      </div>
      <nav class="package-tabs"  data-aos="fade-right" data-aos-duration="1000">
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
         <a class="nav-item nav-link  active" id="nav-seo-tab" data-toggle="tab" href="#nav-seo" role="tab" aria-controls="nav-seo" aria-selected="true">SEO</a>
         <a class="nav-item nav-link" id="nav-smm-tab" data-toggle="tab" href="#nav-smm" role="tab" aria-controls="nav-smm" aria-selected="false">SMM</a>
         <!-- <a class="nav-item nav-link" id="nav-local-tab" data-toggle="tab" href="#nav-local" role="tab" aria-controls="nav-local" aria-selected="false">Local Search Marketing</a> -->
         <a class="nav-item nav-link" id="nav-web-tab" data-toggle="tab" href="#nav-web" role="tab" aria-controls="nav-web" aria-selected="false">Web Content</a>
         <a class="nav-item nav-link" id="nav-link-tab" data-toggle="tab" href="#nav-link" role="tab" aria-controls="nav-link" aria-selected="false">Link Building</a>
      </div>
      </nav>
      <!-- BEGIN: PACKAGE SECTION -->
<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
   <!-- BEGIN: SEO TAB -->
   <div class="tab-pane fade show active" id="nav-seo" role="tabpanel" aria-labelledby="nav-seo-tab">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Kick Starter Package </h4>
                  <span class="h6"><del>$400.00 </del>Only</span>
                  <span class="h5">$199.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">Suitable for newly formed organizations or small incubated startups</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li class="heading">Campaign Setup And Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Website Audit</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Pages Optimized (5 pages) </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>5 Selected Keywords Targeting </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Keyword Grouping </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Keyword Mapping </li>
                     <li class="heading">On-Page Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>SEO Road Map</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Blog Creation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Webpage Copywriting (3 pages, 350 words per page)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Title Tag Optimization (10 titles)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Description Optimization (10 meta description)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Keyword Optimization (10 meta keywords)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Domain Redirect Optimization (10 domain redirects)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>xml Sitemap Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Robots.txt Check</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>URL Rewrites (10 URL rewrites)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Broken Link Report</li>
                     <!-- <li class="heading">Rich Snippet Recommendations  </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Breadcrumbs</li> -->
                     <li class="heading">Initial Off-Page SEO </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Breadcrumbs</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Bookmarking</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Slide Share Marketing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ???s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                 <!--  <p class="suit-text">$950 ??? Quarterly Plan
                     $300 ??? Recurring Monthly Payment
                  </p> -->

                      <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SEO - Kick Starter Package  - $199/m" data-price="199.00">Order Now </button>
        
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Start-up Package </h4>
                   <span class="h6"><del>$700.00 </del>Only</span>
                  <span class="h5">$349.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li class="heading">Prior Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Consumer Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Competitor Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>15 Selected Keywords Targeting </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>15 Pages Keyword Targeted</li>
                     <li class="heading">Webpage Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Tags Creation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Keyword Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Image Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Inclusion of anchors Tags</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Inclusion of anchors</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Indexing Modifications</li>
                     <li class="heading">Tracking &amp; Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Google Analytics Installation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Google Analytics Installation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Google Webmaster Installation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Call To Action Plan</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Creation of Sitemaps</li>
                     <li class="heading">Reporting </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Monthly Reporting</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Recommendation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Email Support</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Phone Support</li>
                     <li class="heading">Off Page Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Bookmarking</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Slide Share Marketing </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ???s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1600 ??? Quarterly Plan
                     $450 ??? Recurring Monthly Payment
                  </p> -->
                  <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SEO - Start-up Package - $349/m" data-price="349.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Professional Package</h4>
                   <span class="h6"><del>$1500.00 </del>Only</span>
                  <span class="h5">$749.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li class="heading">Prior Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Consumer Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Competitor Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>35 Selected Keywords Targeting </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>35 Pages Keyword Targeted</li>
                     <li class="heading">Webpage Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Tags Creation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Keyword Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Image Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Inclusion of anchors</li>
                     <li class="heading">Tracking &amp; Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Google Analytics Installation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Google Webmaster Installation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Call To Action Plan</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Creation of Sitemaps</li>
                     <li class="heading">Reporting </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Monthly Reporting</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Recommendation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Email Support</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Phone Support</li>
                     <li class="heading">Off Page Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Bookmarking</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Slide Share Marketing </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ???s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$2600 ??? Quarterly Plan
                     $700 ??? Recurring Monthly Payment
                  </p> -->
                <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SEO - Professional Package - $749/m" data-price="749.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="tab-pane fade" id="nav-smm" role="tabpanel" aria-labelledby="nav-smm-tab">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Kick Starter Package </h4>
                  <span class="h6"><del>$400.00 </del>Only</span>
                  <span class="h5">$199.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">Suitable for newly formed organizations or small incubated startups</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>12/Month Unique Social Media Content Posting</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Marketing Plan</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Post Design Scheduling</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Profile Keyword Optimization - 3 Keywords </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Performance Report</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>2 Platforms</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                 <!--  <p class="suit-text">$950 ??? Quarterly Plan
                     $300 ??? Recurring Monthly Payment
                  </p> -->
                <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SMM - Kick Starter Package  - $199/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Scaling<br> Package </h4>
                  <span class="h6"><del>$700.00 </del>Only</span>
                  <span class="h5">$449.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>20/Month Unique Social Media Content Posting</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Competitor Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Community Management</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Moderation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Strategy</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Monitoring & Responding</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Marketing Plan</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Post Design Scheduling</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Profile Keyword Optimization - 6 Keywords</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Performance Report</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>4 Platforms</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1600 ??? Quarterly Plan
                     $450 ??? Recurring Monthly Payment
                  </p> -->
                <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SMM - Scaling Plan - $349/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Venture<br> Package </h4>
                  <span class="h6"><del>$1400.00 </del>Only</span>
                  <span class="h5">$699.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>40/Month Unique Social Media Content Posting</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Competitor Analysis</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Community Management</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Moderation</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Strategy</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Monitoring & Responding</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Analysis </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Page Optimization</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Marketing Plan</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Post Design Scheduling</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Profile Keyword Optimization - 8 Keywords</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Performance Report</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Unlimited Platforms</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$2600 ??? Quarterly Plan
                     $700 ??? Recurring Monthly Payment
                  </p> -->
                <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="SMM - Venture Plan - $699/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- END: SMM TAB -->
   <!-- BEGIN: LOCAL TAB -->
   <div class="tab-pane fade" id="nav-local" role="tabpanel" aria-labelledby="nav-local-tab">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Startup<br> Plan</h4>
                  <span class="h6"><del>$1200.00 </del>Only</span>
                  <span class="h5">$600.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">Suitable for newly formed organizations or small incubated startups</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>3 postings per week (per network) Facebook + Twitter + Instagram + Google+ </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Content Creation </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Page Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Strategy (Overview) </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Facebook Likes Campaign </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Monthly Progress report </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Copy Writing</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1800 ??? Quarterly Plan
                     $600 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Web Content - Startup Plan - $500/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Scaling<br> Plan</h4>
                  <span class="h6"><del>$2000.00 </del>Only</span>
                  <span class="h5">$1000.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Copywriting &amp; Visual designs </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Page Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Ad Campaign Management </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Spam monitoring </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Monthly Progress report </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>5 postings per week Facebook + Twitter + Instagram + Google+ </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Reputation Management </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Account Setup </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Content Creation </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Listening </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Query and comments reply</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$3000 ??? Quarterly Plan
                     $1000 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Professional Website Development - $199.00" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Venture<br> Plan</h4>
                  <span class="h6"><del>$4000.00 </del>Only</span>
                  <span class="h5">$2000.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Copywriting &amp; Visual designs </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Business Page Optimization </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Ad Campaign Management </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Spam monitoring </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>6 postings per week Facebook + Twitter + Instagram + Google+  </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Reputation Management </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Account Setup </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Content Creation </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Social Media Hearing </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Query and comments reply</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                 <!--  <p class="suit-text">$6000 ??? Quarterly Plan
                     $2000 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Professional Website Development - $199.00" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <!-- END: LOCAL TAB -->
   <!-- BEGIN: WEB TAB -->
   <div class="tab-pane fade" id="nav-web" role="tabpanel" aria-labelledby="nav-web-tab">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Kick Starter Package </h4>
                  <span class="h6"><del>$400.00 </del>Only</span>
                  <span class="h5">$199.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">Suitable for newly formed organizations or small incubated startups</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li>5 Well Written Articles per month</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>500 Words Per Page</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>5 Social Media Post Content </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>5 Revisions Included</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100% Plagiarism Checked</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>SEO ready content</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Titles and Descriptions included</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1500 ??? Quarterly Plan
                     $500 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Web Content - Startup Plan - $199/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Scaling<br> Package </h4>
                  <span class="h6"><del>$800.00 </del>Only</span>
                  <span class="h5">$475.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>8 Well Written Articles per month</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>500 Words Per Page</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>10 Social Media Post Content</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>3 Infographics </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>15 Revisions Included</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100% Plagiarism Checked</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>SEO ready content</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Titles and Descriptions included</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Content Research Plan </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$3000 ??? Quarterly Plan
                     $1000 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Web Content - Scaling Plan - $399/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Venture<br> Package </h4>
                  <span class="h6"><del>$1400.00 </del>Only</span>
                  <span class="h5">$749.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>15 Well Written Articles per month</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>500 Words Per Page</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>15 Social Media Post Content</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>5 Infographics </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Unlimited Revisions Included</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100% Plagiarism Checked</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>SEO ready content</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Meta Titles and Descriptions included</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Content Research Plan </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100% Satisfaction Guarantee</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$6000 ??? Quarterly Plan
                     $2000 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Web Content - Venture Plan - $699/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                    <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
    <!-- END: WEB TAB -->
     <!-- BEGIN: LINK TAB -->
   <div class="tab-pane fade" id="nav-link" role="tabpanel" aria-labelledby="nav-link-tab">
      <div class="row">
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Kick Starter Package</h4>
                  <span class="h6"><del>$400.00 </del>Only</span>
                  <span class="h5">$199.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">Suitable for newly formed organizations or small incubated startups</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li>3 Blogs Content Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>3 Blog Published Links (DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>1 High Quality Press Release Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>8 Press Release Published Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>05 Classifieds With Crafted Image</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>25 Social Bookmarking Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>05 Directory Links (DA 30+ DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>1 High Quality Article Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>2 Article Published Links</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1500 ??? Quarterly Plan
                     $500 ??? Recurring Monthly Payment
                  </p> -->
                  <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Link Building - Kick Starter Package  - $199/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Scaling<br> Package</h4>
                  <span class="h6"><del>$800.00 </del>Only</span>
                  <span class="h5">$399.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For medium-sized stable organizations looking to climb up the corporate ladder.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>6 Blogs Content Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>6 Blog Published Links (DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>2 High Quality Press Release Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>16 Press Release Published Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>10 Classifieds With Crafted Image</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>50 Social Bookmarking Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>10 Directory Links (DA 30+ DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>2 High Quality Article Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>4 Article Published Links</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                 <!--  <p class="suit-text">$3000 ??? Quarterly Plan
                     $1000 ??? Recurring Monthly Payment
                  </p> -->
                <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Link Building - Scaling Plan - $399/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-6">
            <div class="package-box grey-bg"  data-aos="fade-up" data-aos-duration="1000">
               <div class="plan-head text-center">
                  <h4>Venture<br> Package</h4>
                  <span class="h6"><del>$1400.00 </del>Only</span>
                  <span class="h5">$699.00 USD</span class="h5">
               </div>
               <div class="package-list">
                  <p class="suit-text">For pre-established businesses that aim to maintain their presence and claim the crown.</p>
                  <ul class="pkg-opt mt-3 mb-3">
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>14 Blogs Content Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>14 Blog Published Links (DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>4 High Quality Press Release Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>32 Press Release Published Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>20 Classifieds With Crafted Image</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>100 Social Bookmarking Links</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>20 Directory Links (DA 30+ DoFollow)</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>4 High Quality Article Writing</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>8 Article Published Links</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$6000 ??? Quarterly Plan
                     $2000 ??? Recurring Monthly Payment
                  </p> -->
                 <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Link Building - Venture Plan - $699/m" data-price="199.00">Order Now </button>
                  <!-- <p class="h4">First Month Payment</p> -->
               </div>
               <div class="package-footer d-flex justify-content-between">
                  <div class="bd-right">
                     <p>Share your idea?</p>
                     <a href="tel:+1-212-913-9084">+1-212-913-9084</a>
                  </div>
                  <div>
                     <p>Want to discuss?</p>
                     <a class="live-btn" href="javascript:;" onclick="$zopim.livechat.window.toggle()">Live Chat Now...</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>
</div>
</section>
   <!-- END: LINK TAB -->
<!-- END: PACKAGE SECTION   </div>
</section>
<!-- END: PACKAGES SECTIOn -->
<!-- BEGIN: CUSTOM PACKAGE SECTION -->
<div class="grey-bg black-text">
   <!-- BEGIN: CUSTOM SECTION -->
<div class="content-out">
   <section class="custom-section ">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="custome-text"  data-aos="fade-right" data-aos-duration="1000">
                  <h3>Looking for  <strong>Professional SEO Services?</strong> <br> <strong>Discuss Your Project</strong>  With Our SEO Consultant</h3>
                  <a class="theme-btn orange-gradient"  href="grow-form.php">Lets Grow Your Business</a>
               </div>
            </div>
         </div>
      </div>
      <span class="blue-wave"  >
      <img src="images/box-top-img.png" alt="Image" class="img-responsive">
      </span>
   </section>
   <span class="obj-span"  data-aos="zoom-in" data-aos-duration="1000">
   <img src="images/obj1.png" alt="Image" class="img-responsive">
   </span>
   <div class="custom-img"  data-aos="zoom-in" data-aos-duration="1000">
      <img src="images/custom-img.png" alt="Image" class="img-responsive">
   </div>
</div>
<!-- BEGIN: CUSTOM SECTION --></div>
<div class="dark-gradient">
   <!-- BEGIN: CASE STUDY SECTION -->
<!-- <div class="content-out">
   <section class="case-study all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top text-center">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head text-white">Our Case Studies</h3>
               <p class=" text-white">Check out how we???re helping businesses to fill up their sales funnel 10 faster with our awarding winning SEO team on-page and off-page optimization strategies.</p>
            </div>
         </div>
      </div>
      <div class="case-slider">
         <div class="case-box grey-bg" data-aos="fade-up" data-aos-duration="1000">
            <img src="images/case1.jpg" alt="Image" class="img-responsive">
            <div class="case-text">
               <h3 class="box-head">Just Buy Online Store</h3>
               <p>Just Buy eCommerce store sees 200 increase in traffic and conversion rate after implementing our best strategies. 
               </p>
               <span class="dark-gradient"><a class="text-white" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            </div>
         </div>
         <div class="case-box grey-bg" data-aos="fade-up" data-aos-duration="1000">
            <img src="images/case2.jpg" alt="Image" class="img-responsive">
            <div class="case-text">
               <h3 class="box-head">KS Healthcare</h3>
               <p>We help KS Healthcare to increase local traffic by 100 percent and improve their website user interface. 
               </p>
               <span class="orange-gradient"><a class="text-white" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            </div>
         </div>
         <div class="case-box grey-bg" data-aos="fade-up" data-aos-duration="1000">
            <img src="images/case3.jpg" alt="Image" class="img-responsive">
            <div class="case-text">
               <h3 class="box-head">Houston Students Center</h3>
               <p>As the main focus of the Houston student center was homeschooling, we help them to target the right audience in their neighborhood.
               </p>
               <span class="dark-gradient"><a class="text-white" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></span>
            </div>
         </div>
      
      </div>
   </div>
</section>
 <span class="obj2" data-aos="zoom-in" data-aos-duration="1000">
   <img src="images/obj2.png" alt="Image" class="img-responsive">
   </span>
</div> -->
<!-- END: CASE STUDY SECTION --></div>
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
               <h3 class="section-head">We Help Startups & Brands Increase Profits & Customer Engagement</h3>
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

<div class="orange-gradient orange-seo">
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
<!-- BEGIN: FAQ SECTION -->
<section class="faq-section all-section">
   <div class="container">
      <div class="row">
         <div class="col-md-10 mx-auto">
            <div class="section-top text-center"  data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Frequently Asked Questions</h3>
               <p>Take a look below to find answers to the questions we get asked the most about reseller services.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-7">
            <div id="accordion" class="my-5"  data-aos="fade-right" data-aos-duration="1000">
               <div class="card  first-bd">
                  <div class="card-header" id="headingOne">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-left w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       How Can Reseller Program Benefit Our Business?
                        <i class="fa fa-minus float-right" aria-hidden="true"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                     <div class="card-body">
                        Web reseller programs provide the best opportunity to enhance business ROI in a short time span. At SEO TOP SEARCH, we help businesses to reach new heights through a growth-driven reseller program.
                     </div>
                  </div>
               </div>
               <div class="card  second-bd">
                  <div class="card-header" id="headingTwo">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-left w-100 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Does Reseller Website Generate More Revenue for Businesses?
                        <i class="fa fa-minus float-right" aria-hidden="true"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                     <div class="card-body">
                       When it comes to generating revenue through digital platforms, a reseller-website is an ideal choice. At SEO TOP SEARCH, we help businesses to keep up with the latest technologies through new-age solutions.
                     </div>
                  </div>
               </div>
               <div class="card  third-bd">
                  <div class="card-header" id="headingThree">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-left w-100 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Which Type of Website Reseller Program Is Appropriate for Us?
                        <i class="fa fa-minus float-right" aria-hidden="true"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                     <div class="card-body">
                     Through the web and hosting reseller program, we help startups and establish businesses to drive more leads and ROI. If you want to experience next-level performance then you should acquire our services.
                     </div>
                  </div>
               </div>
               <div class="card  forth-bd">
                  <div class="card-header" id="headingfour">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-left w-100 collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                       How to Figure Out Best Servers Reseller?
                        <i class="fa fa-minus float-right" aria-hidden="true"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                     <div class="card-body">
                      We help businesses to experience the next-level performance through reseller websites. If you want to improve your business operations then must connect with our experienced team.
                     </div>
                  </div>
               </div>
               <div class="card  fifth-bd">
                  <div class="card-header" id="headingfive">
                     <h5 class="mb-0">
                        <button class="btn btn-link text-left w-100 collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                       I Want to Learn About Hosting Reseller Program?
                        <i class="fa fa-minus float-right" aria-hidden="true"></i>
                        </button>
                     </h5>
                  </div>
                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                     <div class="card-body">
                       For any query related to hosting or web reseller service feel free to contact us on call, chat, or email.
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-5">
            <figure  data-aos="zoom-in" data-aos-duration="1000">
               <img alt="Image" class="img-fluid" src="images/faq-img.png">
            </figure>
         </div>
      </div>
   </div>
   <span class="faq-logo">
   <img alt="Image" class="img-fluid" src="images/faq-logo.png">
   </span>
</section>
<!-- END: FAQ SECTION -->
<!-- END: CUSTOM PACKAGE SECTION -->



<!-- BEGIN: RANKING SECTION -->
    <div id="ftr-frm"></div>
<!-- BEGIN: RANKING SECTION -->
<section class="logo-rotate4 get_consultancy_sec all-section">

   <div class="container">
      <div class="row">
         <div class="col-lg-10 center_web_sec">
            <div class="web_content_Sec text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
               <h3 class="section-head text-white">Let???s Get Ranked</h3>
               <p class="text-white">Connect with our customer support team right away if you aim to rank on page#1 of Google on budget.</p>
            </div>
<div class="consultancy_form" >
   <form data-aos="fade-right" data-aos-duration="1000" id="contact-form" method="POST" action="https://searchmetop.com/include/sendmail.php">
               <input type="hidden" required name="page_url" value="service-whitelabel.php" />
        
        <input type="hidden" required name="contact_form" value="Yes" />
      
      <div class="row">
         <div class="col-sm-6">
            <input type="text" name="full_name" class="form-control" required="" placeholder="Full Name*">
         </div>
         <div class="col-sm-6">
            <input type="email" name="email_address" class="form-control" required="" placeholder="Email*">
         </div>
         <div class="col-sm-6">
            <input type="text" name="contact_number" class="form-control" required="" placeholder="Phone*">
         </div>
         <div class="col-sm-6">
            <input type="text" name="country" class="form-control" required="" placeholder="Country*">
         </div>
         <div class="col-sm-6">
            <select class="select-box" name="user_interest" required>
               <option disabled="" value="" selected>I am Interested in</option>
               <option value="Social Media Marketing">Social Media Marketing </option>
               <option value="Ecommerce SEO">Ecommerce SEO</option>
               <option value="Local SEO Optimization">Local SEO Optimization</option>
               <option value="Content Marketing">Content Marketing </option>
               <option value="Link Building">Link Building </option>
               <option value="White-Label Reseller Program">White-Label Reseller Program</option>
               <option value="Website Content">Website Content </option>
            </select>
         </div>
         <div class="col-sm-6">
            <select class="select-box" name="budget_range" required>
               <option value="" disabled="" selected>Forecasted-Budget</option>
               <option value="Less than $1000">Less than $1000</option>
               <option value="$1000 to $2000">$1000 to $2000</option>
               <option value="$2000 to $5000">$2000 to $5000</option>
               <option value="$5000 to $10,000">$5000 to $10,000 </option>
               <option value="$20,000 to $30,000">$20,000 to $30,000</option>
               <option value="$35,000 to $50,000">$35,000 to $50,000</option>
               <option value="$50,000 and above">$50,000 and above</option>
            </select>
         </div>
         <div class="col-md-12">
            <textarea name="message" required placeholder="Message" class="form-control"></textarea>
         </div>
         <div class="col-md-12">
            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="yes" required>
            <label for="styled-checkbox-1">By clicking the submit button below, I hereby agree to your terms and conditions.</label>
         </div>
         <div class="col-md-12">
            <div class="form_btn">
               <input class="orange-gradient theme-btn border-0 text-white text-uppercase" type="submit" value="Contact Our Team">
            </div>
         </div>
      </div>
   </form>
</div>
</div>

         </div>
      </div>
   </section>


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
          <!-- <a href="tel:15127177466"><span>Support</span>+1 (512) 717-7466</a> -->
        </span>
      </div>
    </div>
  </div>
</div>
</div>
</section>  
<!-- END: CONTACT SECTION -->
<?php require 'footer.php'; ?>