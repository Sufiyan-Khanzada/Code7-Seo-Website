
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/" />
        
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



<style>

</style>

<!-- BEGIN: BANNER SECTION -->
<section class="main_banner">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div class="banner-text" data-aos="fade-down" data-aos-duration="1000">
               <h2>Bring In</h2>
               <h1>Generating New Customers and Boosting Revenue Daily!</h1>
               <p>When it comes to SEO services, SEO TOP SEARCH is among the most successful and 
well-respected digital businesses in the industry. When thinking about how to promote your 
business online, search engine optimization (SEO) is essential. If your site is optimized 
properly, you will see an increase in visitors and customers, which in turn will boost your 
revenue. SEOTOPSEARCH is a digital ad firm that places a whole marketing team, 
consisting of SEO experts, content strategists, and content writers, in charge of your 
campaign. We are well-versed in the best practices for optimizing your website for Google's 
ever-evolving algorithm, allowing it to thrive through even the most current updates.</p>
               <ul>
                  <li>
                     <p>Visibility for Business Grows</p>
                  </li>
                  <li>
                     <p>Maximize the Profits of Your Company</p>
                  </li>
                  <li>
                     <p>Generate More Interest in Your Products or Services</p>
                  </li>
                  <li>
                     <p>Realize a Higher Rate of Conversion</p>
                  </li>
               </ul>
               <img src="images/partners.png"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="0" class="img-responsive" alt="Banner">
            </div>
         </div>
         <div class="col-sm-6">
             
            <div class="banner-img">
               <img src="images/banner-laptop.png" class="img-responsive" alt="Banner">
              <!--  <span class="blue-shape">
               <img src="images/banner-blue-shape.png" class="img-responsive" alt="Banner">            
               </span> -->
               <span class="small-screen"  data-aos="fade-left" data-aos-duration="1000">
               <img src="images/banner-small-screen.png" class="img-responsive" alt="Banner">            
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-10 mx-auto">

            <form class="banner-form three-input" method="POST" action="https://searchmetop.com/include/sendmail.php">
                                <input type="hidden" required name="page_url" value="https://searchmetop.com/" />
                <input type="hidden" required name="audit_site_form" value="Yes" />
                <input type="text" placeholder="Enter Name Here" name="full_name" required>
                <input type="email" placeholder="Enter Email Here"  name="email_address" required>
                <input type="tel" placeholder="Enter Phone Number" name="contact_number" required>
                <input type="text" placeholder="Enter Website" name="own_website_link" required>
                <button class="orange-gradient theme-btn" type="submit">Analyse</button>
            </form>
         </div>
      </div>
      <span class="banner-side" >
      <img src="images/banner-side.png" class="img-responsive" alt="Banner">
      </span>
      <!-- <span class="rocket banner-rocket">
      <img src="images/rocket.png" id ="b-rocket" class="img-responsive" alt="Rocket">
      </span> -->
   </div>
   <!--<img src="images/banner-shape1.png" class="banner-shape shape-1" alt="">-->
   <!--      <img src="images/banner-shape2.png" class="banner-shape shape-2" alt="">-->
   <!--      <img src="images/banner-shape1.png" class="banner-shape shape-5" alt="">-->
   <!--      <img src="images/banner-shape2.png" class="banner-shape shape-6" alt="">-->
</section>
<!-- END: BANNER SECTION -->
<!-- BEGIN: BOXES SECTIOn -->
<section class="box-section dark-gradient">
   <div class="container">
      <div class="row">
         <div class="col-sm-4 p-0">
            <div class="box-content d-md-flex d-block align-items-center bd-left">
               <figure class="w-25" data-aos="zoom-in" data-aos-duration="1000"> 
                  <img src="images/box-img1.png" alt="Image" class="img-responsive">
               </figure>
               <div class="box-text w-75" data-aos="fade-left" data-aos-duration="1000">
                  <span>1800+</span>
                  <p class="text-white">Happy Customers Worldwide</p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="box-content d-md-flex d-block align-items-center">
               <figure class="w-25" data-aos="zoom-in" data-aos-duration="1000"> 
                  <img src="images/box-img2.png" alt="Image" class="img-responsive">
               </figure>
               <div class="box-text w-75" data-aos="fade-left" data-aos-duration="1000">
                  <span>Affordable</span>
                  <p class="text-white">Digital Branding Packages</p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="box-content d-md-flex d-block align-items-center">
               <figure class="w-25" data-aos="zoom-in" data-aos-duration="1000"> 
                  <img src="images/box-img3.png" alt="Image" class="img-responsive">
               </figure>
               <div class="box-text w-75" data-aos="fade-left" data-aos-duration="1000">
                  <span>Experts</span>
                  <p class="text-white">Industry-Vetted Services</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- END: BOXES SECTION -->

<!-- Choose Our SEO SECTION -->
<section class="choose-our">
   <div class="container">
      <div class="choose-title">
         <h4>So why should you go with us for organic SEO services?</h4>
         <p>For your online presence to shine, our SEO experts work tirelessly to combine their SEO strategy with 
the most recent and cutting-edge technological developments in the fields of SEO, Content Marketing, 
Social Media, and more.</p>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Traffic.png">
               <div class="choose-txt">
                  <h4>Enhanced Footage</h4>
                  <p>You won't find a more effective digital marketing agency to increase your company's visibility, client base, and revenue</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Leads.png">
               <div class="choose-txt">
                  <h4>More Prospects</h4>
                  <p>Start generating new leads and customers, and you'll soon see your company flourish.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Revenue.png">
               <div class="choose-txt">
                  <h4>Increasing Revenue</h4>
                  <p>As we continue to promote your company, you should expect an uptick in traffic and lead creation, which in turn will raise your sales.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Brand-Awareness.png">
               <div class="choose-txt">
                  <h4>Increased Credibility and Authority</h4>
                  <p>When you succeed, we succeed. Your company's growth and prosperity is what drives us.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Business-Growth.png">
               <div class="choose-txt">
                  <h4>Faster Economic Expansion</h4>
                  <p>Our SEO methods are the missing ingredient for your company to flourish and expand into new markets, since they increase traffic and generate more leads.</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="choose-blk" data-aos="fade-up" data-aos-duration="1000">
                  <img src="images/More-Trust-and-Authority.png">
               <div class="choose-txt">
                  <h4>Brand Recognition Grows</h4>
                  <p>We will never stop moving forward in our efforts to promote your company.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- CHOOSE OUR SEO SECTION --> 



<!-- BEGIN: STRUGGLE SECTIOn -->
<section  class="logo-rotate struggle-section all-section">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-6">
            <div data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/struggle-img.png" alt="Image" class="img-responsive">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="struggle-text" data-aos="fade-left" data-aos-duration="1000">
               <div class="top-head">
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Maintaining Branding Is Equal to Business Growth…</h3>
               <p>We are a team of proficient and highly qualified individuals who fully comprehends the significance of branding in enhancing the customer base. We are a professional SEO agency with a primary focus on crafting a strategy that can help you target more leads and enhance your ROI.</p>
               <ul class="theme-list">
                  <li>
                     <p>  Helping your business to establish goals and objectives.
                     </p>
                  </li>
                  <li>
                     <p> Campaign optimization is entirely driven by the available data.
                     </p>
                  </li>
                  <li>
                     <p> Auditing your website to scrutinize technicalities in every manner.
                     </p>
                  </li>
                  <li>
                     <p> Enhancing user experience by testing page loading and UI elements.
                     </p>
                  </li>
                  <li>
                     <p> Creating links that last long enough to maintain your business on the first page of the search engine.
                     </p>
                  </li>
                  <li>
                     <p>Following latest Google and Social, Media trends to keep your website in the game.
                     </p>
                  </li>
               </ul>
               <a class="theme-btn light-gradient" href="contact.php">Lets Grow Your Business</a>
            </div>
         </div>
      </div>
   </div>
   <!-- <span  class="rotate-gsap logo-body" data-aos="fade-up" data-aos-duration="1000"> 
   <img src="images/ranking-img-bg.png" alt="Image" class="img-responsive">
   </span> -->
</section>
<!-- END: STRUGGLE SECTIOn -->
<!-- BEGIN: HELP SECTION -->
<div class="grey-bg">
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


  
<!-- END: HELP SECTION --></div>
<!-- END: HELP SECTION -->
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
               <h3 class="section-head">Fuel Brand Awareness with Affordable Digital Branding Plans
               </h3>
               <p>We are consistently providing effective digital branding at the most competitive packages.</p>
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
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ’s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                 <!--  <p class="suit-text">$950 – Quarterly Plan
                     $300 – Recurring Monthly Payment
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
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ’s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$1600 – Quarterly Plan
                     $450 – Recurring Monthly Payment
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
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Forums/FAQ’s</li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Link Building </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Directory Submission </li>
                     <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Local Business Listings</li>
                  </ul>
               </div>
               <div class="text-center package-mid">
                  <!-- <p class="suit-text">$2600 – Quarterly Plan
                     $700 – Recurring Monthly Payment
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
                 <!--  <p class="suit-text">$950 – Quarterly Plan
                     $300 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$1600 – Quarterly Plan
                     $450 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$2600 – Quarterly Plan
                     $700 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$1800 – Quarterly Plan
                     $600 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$3000 – Quarterly Plan
                     $1000 – Recurring Monthly Payment
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
                 <!--  <p class="suit-text">$6000 – Quarterly Plan
                     $2000 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$1500 – Quarterly Plan
                     $500 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$3000 – Quarterly Plan
                     $1000 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$6000 – Quarterly Plan
                     $2000 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$1500 – Quarterly Plan
                     $500 – Recurring Monthly Payment
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
                 <!--  <p class="suit-text">$3000 – Quarterly Plan
                     $1000 – Recurring Monthly Payment
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
                  <!-- <p class="suit-text">$6000 – Quarterly Plan
                     $2000 – Recurring Monthly Payment
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

<!-- Begin Combo Section -->
<div class="dark-gradient">
   <!-- Combo Package Section -->
 <section class="combo-package">
      <div class="container">
        <div class="combo-head">
            <h4>We Provider Special</h4>
            <h3>Combo Package</h3>
            <p>We offer our services to provide that crucial support your brand needs.</p> 
            <p>You can find your needs met from the following packages.</p>
          </div>
        <div class="row">
          <div class="col-md-3 col-sm-6" style="background-color: #fff" id="packg-fst">
            <div class="design-xt">
              <h4>Prior Analysis</h4>
              <ul>
                <li>Business Analysis</li>
                <li>Consumer Analysis</li>
                <li>Competitor Analysis</li>
                <li>60+ Selected Keywords Targeting</li>
                <li>60 Pages Keyword Targeted</li>
              </ul>
              <h4>Webpage Optimization</h4>
              <ul>
                <li>Meta Tags Creation</li>
                <li>Keyword Optimization</li>
                <li>Image Optimization</li>
                <li>Inclusion of anchors Tags</li>
                <li>Inclusion of anchors</li>
                <li>Indexing Modifications</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" style="background-color: #fff">
            <div class="design-xt">
              <h4>Tracking Analysis</h4>
              <ul>
                <li>Google Analytics Installation</li>
                <li>Google Analytics Installation</li>
                <li>Google Webmaster Installation</li>
                <li>Call To Action Plan</li>
                <li>Creation of Sitemaps</li>
              </ul>
              <h4>SMM Support</h4>
              <ul>
                <li>12/Month Unique Social Media<br> Content Posting</li>
                <li>Social Media Analysis </li>
                <li>Page Optimization</li>
                <li>Social Media Marketing Plan</li>
                <li>Post Design Scheduling</li>
                <li>Profile Keyword Optimization - 3 Keywords</li>
                <li>Performance Report</li>
                <li>2 Platforms</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" style="background-color: #fff">
            <div class="design-xt">
              <h4>Reporting</h4>
              <ul>
                <li>Monthly Reporting</li>
                <li>Recommendation</li>
                <li>Email Support</li>
                <li>Phone Support</li>
              </ul>
              <h4>Off Page Optimization</h4>
              <ul>
                <li>Social Bookmarking</li>
                <li>Slide Share Marketing</li>
                <li>Forums/FAQ’s</li>
                <li>Link Building</li>
                <li>Directory Submission</li>
                <li>Local Business Listings</li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6" style="background-color: #ae90dd" id="packg-lst">
            <div class="badge-txt">
              <h3><del>$2400.00</del> </h3>
              <h4>$1200.00</h4>
              <button type="button" class="btn btn-info btn-lg open_modal" data-pack_id="Combo Package - $1,200.00" data-price="10">ORDER NOW</button>
              <p>Talk with us <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
              <p>View Detail <i class="fa fa-arrow-right" aria-hidden="true"></i></p>
              <img src="images/combo-badge.png">
              <h5>INCLUSIVE OF GST *</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Combo package Section --> </div>
<!-- End Combo Section -->



<!-- BEGIN: CUSTOM PACKAGE SECTION -->
<div class="dark-gradient">
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
<!-- END: CUSTOM PACKAGE SECTION -->
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
               <h3 class="section-head">You think of a Rank — We know a Way to get you there!</h3>
               <p>SEO TOP SEARCH is a professional and leading SEO company with the goal of providing the most reliable and promising local SEO services to our clients. Our SEO marketing experts have a vision in their eyes, and that is to ensure that they gain success, which is only possible with the success of your brand.</p>
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
<!-- BEGIN: ROI SECTION -->
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
<!-- END: ROI SECTION -->
<!-- BEGIN: EXPERIENCE SECTION -->
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
               <h3 class="section-head">You Have a Vision. We Have a Way to Get You There!</h3>
               <p>At SEO TOP SEARCH, we help businesses to boost new visitors’ conversion by showing up websites on the first page of search engines. Let’s have a look below to learn more about our search engine optimization process.</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center">
               <img src="images/exp1.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Personalized Solutions</span>
                  <p>We empower clients to attract and increase qualified lead volumes by effective approaches. </p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center">
               <img src="images/exp2.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Seamless Site Optimization</span>
                  <p>Our SEO marketing experts and local SEO expert joined their heads together to develop the finest solutions to help your site rank better </p>
               </div>
            </div>
         </div>
         <div class="col-sm-4 p-0">
            <div class="exp-box text-center border-0">
               <img src="images/exp3.png" alt="Image" class="img-responsive" data-aos="zoom-in" data-aos-duration="1000">
               <div class="text" data-aos="fade-up" data-aos-duration="1000">
                  <span class="box-head mt-4">Advanced Tools</span>
                  <p>We ensure to utilize the advanced tools and equipment to provide seamless basic SEO services to drive more traffic to your website.</p>
               </div>
            </div>
         </div>
      </div>
      <div class="ex-btns text-center mt-5" data-aos="fade-up" data-aos-duration="1000">
         <!-- <a class="dark-gradient theme-btn" data-toggle="modal" data-target="#analyse-modal">Request a Custom Quote</a> -->
         <a class="dark-gradient theme-btn" href="#ftr-frm">Request a Custom Quote</a>
         <p>Any Question? <a href="#" data-toggle="modal" data-target="#analyse-modal">Talk to our Expert</a></p>
      </div>
   </div>
   <!-- <span class="rotate-gsap2 logo-body" > 
   <img src="images/ranking-img-bg.png" alt="Image" class="img-responsive">
   </span> -->
</section>
<!-- END: EXPERIENCE SECTION -->
<!-- END: EXPERIENCE SECTION -->
<!-- BEGIN: CASE STUDY SECTION -->
<!-- END: CASE STUDY SECTION -->
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
               <h3 class="section-head">Driving Impactful Results with SEOTOPSEARCH</h3>
               <p>SEO TOP SEARCH is a renowned search engine optimization company focused on enhancing business visibility on the first page of search engines. With new-age tools and a specialization team, we provide end-to-end search engine optimization services to local and international clients. Our prime goal is to offers unbounded services to help businesses grow online in a risk-free manner. No matter if you want to double your sales revenue or you want to utilize the best SEO strategies at the lowest rates, we can help.</p>
           
            </div>
         </div>
         <div class="col-sm-6">
            <figure data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/best-img.jpg" alt="Image" class="img-responsive">
            </figure>
         </div>
      </div>
   </div>
     <!--  <span class="trans-logo">
      <img src="images/trans-logo.png" alt="Image" class="img-responsive">
      </span> -->
</section>
<!-- END: BEST SECTION -->
<!-- BEGIN: RANKING SECTION -->

            


<!-- BEGIN: RANKING SECTION -->
    <div id="ftr-frm"></div>

 <?php require 'contact-form.php'; ?>




<?php require 'footer.php'; ?>