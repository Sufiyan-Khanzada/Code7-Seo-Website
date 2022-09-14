
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/insights" />
        
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
<section id="insight-banner" class="inner-banner">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-7">
            <div class="inner-banner-text" data-aos="fade-right" data-aos-duration="1000">
               <h1><span>Industry Insights</span>“What our clients say about us”</h1>
               <p>Check out how we’re helping businesses to fill up their sales funnel 10 faster with our awarding winning team and result-oriented strategies.</p>
            </div>
         </div>
         <div class="col-sm-5">
            <div class="inner-banner-img" data-aos="zoom-in" data-aos-duration="1000">
               <img src="images/insight-banner.png" alt="Image" class="img-responsive">
            </div>
         </div>
      </div>
   </div>

</section>
<!-- END: BANNER SECTIOn -->

<!-- BEGIN: INSIGHTS SECTION -->
<section class="insight-section">
<div class="insights-box blue-box">
   <div class="container">
      <div class="row">
           <div class="col-sm-6">
            <div class="text-info">
               <div class="text-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img6.png" alt="Image" class="img-responsive">
               </div>
               <div class="white-text" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-part">
                  <h3>MARKETING GOALS</h3>
                  <p>One-Click Chat wanted to ensure that the viewers’ attention would be on their socializing platform. </p>
               </div>
                 <div class="text-part">
                  <h3>SERVICES </h3>
                  <p>Social Media Marketing, Content Creation Services</p>
               </div>
                 <div class="text-part">
                  <h3>STRATEGY</h3>
                  <p>By following their needs, we made sure that the end-users would fully leverage with services displayed on their social media platforms and website.</p>
               </div>
               </div>
             
            </div>
         </div>
         <div class="col-sm-6">
            <div class="logo-info" data-aos="fade-right" data-aos-duration="1000">
               <h4>One-Click Chat </h4>
               <div class="param-list">
                     <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param1.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text orange-bg">
                        <p >Increase in Contracted Sales</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param2.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Targeted Keywords In Rank</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param3.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Increase In Unique Pageviews</p>
                     </div>
                  </div>
               </div>
               </div>
            <div class="comment-box d-flex">
               <i class="fa fa-comments-o" aria-hidden="true"></i>
               <span><p>“The experts of SEO TOP SEARCH understand our requirements and promote our brand across social media at the precise time. They have excellent skills in social media marketing and provided unbounded support throughout the campaign.”</p>
<h4>Shirley Smith</h4></span>

            </div>
            </div>
         </div>
       
      </div>
   </div>
</div>

<div class="insights-box purple-box right-box">
   <div class="container">
      <div class="row change-insight-order">
               <div class="col-sm-6">
            <div class="logo-info" data-aos="fade-left" data-aos-duration="1000">
               <h4>KS Healthcare </h4>
               <div class="param-list">
                     <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param1.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text orange-bg">
                        <p >Increase in Contracted Sales</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param2.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Targeted Keywords In Rank</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param3.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Increase In Unique Pageviews</p>
                     </div>
                  </div>
               </div>
               </div>
            <div class="comment-box d-flex">
               <i class="fa fa-comments-o" aria-hidden="true"></i>
               <span><p>“The team of SEO TOP SEARCH has a highly professional search engine optimization team providing exceptional SEO services at competitive prices. I am amazed by their quick services.”</p>
<h4>Karen Thomas</h4></span>

            </div>
            </div>
         </div>
           <div class="col-sm-6">
            <div class="text-info">
               <div class="text-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img7.png" alt="Image" class="img-responsive">
               </div>
               <div class="white-text" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-part">
                  <h3>MARKETING GOALS</h3>
                  <p>KS Healthcare needed search engine optimization services to target relevant audiences that are looking for the kind of services they do. </p>
               </div>
                 <div class="text-part">
                  <h3>SERVICES </h3>
                  <p>Search Engine Optimization, Web Content Writing</p>
               </div>
                 <div class="text-part">
                  <h3>STRATEGY</h3>
                  <p>We created an edgy SEO strategy to help them offer healthcare services over Google by staying ahead of the competition. </p>
               </div>
               </div>
             
            </div>
         </div>
   
       
      </div>
   </div>
</div>
<div class="insights-box pink-box">
   <div class="container">
      <div class="row">
           <div class="col-sm-6">
            <div class="text-info">
               <div class="text-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img3.png" alt="Image" class="img-responsive">
               </div>
               <div class="white-text" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-part">
                  <h3>MARKETING GOALS</h3>
                  <p>Alpine wanted content marketing services to simply explain what they do to everyone who landed on their website.</p>
               </div>
                 <div class="text-part">
                  <h3>SERVICES </h3>
                  <p>Content Writing Services, Content Marketing Services</p>
               </div>
                 <div class="text-part">
                  <h3>STRATEGY</h3>
                  <p>Our content specialist created result-oriented content to fuel brand awareness and to meet all branding needs of Alpine.</p>
               </div>
               </div>
             
            </div>
         </div>
         <div class="col-sm-6">
            <div class="logo-info" data-aos="fade-right" data-aos-duration="1000">
               <h4>Alpine </h4>
               <div class="param-list">
                     <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param1.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text orange-bg">
                        <p >Increase in Contracted Sales</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param2.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Targeted Keywords In Rank</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param3.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Increase In Unique Pageviews</p>
                     </div>
                  </div>
               </div>
               </div>
            <div class="comment-box d-flex">
               <i class="fa fa-comments-o" aria-hidden="true"></i>
               <span><p>“I searched about the best web content services and SEO TOP SEARCH popped up so I decided to opt for them. I just want to say thanks to their experienced team for providing me exceptional conversion-optimized content.”</p>
<h4>Linda Sam</h4></span>

            </div>
            </div>
         </div>
       
      </div>
   </div>
</div>

<div class="insights-box yellow-box right-box">
   <div class="container">
      <div class="row change-insight-order">
               <div class="col-sm-6">
            <div class="logo-info" data-aos="fade-left" data-aos-duration="1000">
               <h4>Houston Student Center</h4>
               <div class="param-list">
                     <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param1.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text orange-bg">
                        <p >Increase in Contracted Sales</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param2.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Targeted Keywords In Rank</p>
                     </div>
                  </div>
               </div>
                  <div class="row">
                  <div class="col-4">
                     <div class="logo-param">
                         <img src="images/param3.png" alt="Image" class="img-responsive">
                     </div>
                  </div>
                  <div class="col-8">
                     <div class="logo-text">
                        <p>Increase In Unique Pageviews</p>
                     </div>
                  </div>
               </div>
               </div>
            <div class="comment-box d-flex">
               <i class="fa fa-comments-o" aria-hidden="true"></i>
               <span><p>“I came to know about the digital marketing services of SEO TOP SEARCH from trust pilot, so I decided to give them a try. Their marketing team impresses me with their unique strategies and expertise.”</p>
<h4>Shannon Robinson</h4>
</span>

            </div>
            </div>
         </div>
           <div class="col-sm-6">
            <div class="text-info">
               <div class="text-img" data-aos="zoom-in" data-aos-duration="1000">
                  <img src="images/wesite-img2.png" alt="Image" class="img-responsive">
               </div>
               <div class="white-text" data-aos="fade-up" data-aos-duration="1000">
                    <div class="text-part">
                  <h3>MARKETING GOALS</h3>
                  <p>Houston Student Center needed innovative digital marketing solutions to gear up branding. </p>
               </div>
                 <div class="text-part">
                  <h3>SERVICES </h3>
                  <p>Digital Marketing Services, SEO, SMM </p>
               </div>
                 <div class="text-part">
                  <h3>STRATEGY</h3>
                  <p>We take every measure to design a digital marketing strategy that has the potential to hog the visitors’ attention in a blink of an eye. </p>
               </div>
               </div>
             
            </div>
         </div>
   
       
      </div>
   </div>
</div>

<div class="my-5 text-center">
   <a class="dark-gradient theme-btn" href="#">Load More </a>
</div>
</section>
<!-- END: INSIGHTS SECTION -->

<div class="insight-footer">
   
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