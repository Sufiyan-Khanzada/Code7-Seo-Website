
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
        
                 <input type="hidden" required name="page_url" value="https://searchmetop.com/refund" />
        
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

<!-- BEGIBN: PRIVCY SECTION -->
<section class="privacy-section all-section">
   <div class="container">
         <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="section-top text-center"  data-aos="fade-down" data-aos-duration="1000">
               <div class="top-head mx-auto">
                  <span class="head-before"></span>
                  <span class="head-upper"></span>
                  <span class="head-after"></span>
               </div>
               <h3 class="section-head">Refund Policy</h3>
               <p>Our refund policy has been devised to define the situations under which a will provide a refund, the procedure for claiming a refund and the responsibility of Searchmetop in circumstances resulting in such a claim. By registering for any of our services you are declaring that you accept and agree with all the terms and conditions outlined in the refund policy.</p>
            </div>
       
         </div>
   </div>

        <div class="privacy-content"> 
               <span class="section-head">The Information We Access</span>
               <p>All the information that we collect is utilized for bettering our web site’s content, to notify the clients about our website updates or to look into the problem with their request. In case you do not want to receive any email from us in the future, please inform us by writing in to us either through e-mail or letter.</p>
               <span class="section-head">Coverage & Scope</span>
               <p>Our refund policy covers the refunds by Searchmetop and/or a website owned and managed by Searchmetop a creative digital agency. This policy does not have any application for companies which are not owned or controlled by Searchmetop or for persons not employed or managed by Searchmetop. This includes any third party service and / or product providers bound by contract and also, any third-party websites to which Searchmetop’s website link.</p>
               <span class="section-head">Filing a Complaint</span>
               <p>At Searchmetop a creative digital agency we take every project with the final product in sight. It is as much our responsibility as the client’s. So, we believe that every effort should be made to reach a solution that is fully acceptable reciprocally in case of any situation where dissatisfaction related to services comes. Only when things are completely out of hand that refund should be considered.</p>
               <p>Our final aim is to come to a mutually acceptable solution. Even then if for some reason you are not satisfied and think about going for a refund claim, it is our request that you take out a few precious minutes to write to us at <a href="mailto:info@searchmetop.com" style="color: #d8236c;">info@searchmetop.com</a> for a final dialogue prior to requesting a refund. Only if we are unable to reach a common ground with you after talks should a refund claim be filed.</p>
               <span class="section-head">Backup and Data Loss</span>
               <p>Through this statement of terms and conditions, SEARCH ME TOP make it clear that users’ use of the website is solely at their own risk. In any case SEARCH ME TOP do not ensure any data loss encountered. Through this statement of terms and conditions, the users of SEARCH ME TOP agree to take full responsibility for using the website and the consequences dealt with in.</p>
               
               <span class="section-head">Eligibility for refund</span>
               <p>At Searchmetop a creative digital agency every project is important to us and we make sure that we handle each project with utmost care and professionalism. Our aim is to provide the results as per the terms and conditions of the proposal. However, despite every measure if the client is not satisfied with the results and chooses to go for the dispute resolution process, we consider refund requests as per the following program in which our services and refund policy related to each service is very clearly listed:</p>
               <ul>
                  <li><p>Full refund: In cases where the project has not been started or if the initial design style has not been approved. The Full Refund policy will initiate after receive the upfront payment date and will take 180 Days to refund the amount. Partial refund: If there is a failure to deliver as per our delivery policy after the approval of the initial design style. The partial refund will be in proportion to the work completed. No refunds: If the project has been completed and uploaded on the server.</p></li>
<li><span class="section-head">Logo design / brochure design</span><p>Full refund: In cases where the project has not been started or if the initial design style has not been approved. Partial refund: If there is a failure to deliver as per our delivery policy after the approval of the initial design style. The partial refund will be in proportion to the work completed. No refunds: If the project has been completed and uploaded on the server.</p></li>

<li><span class="section-head">Web programming</span><p>Full refund: If the project has not been initiated. There is an agreement for every web programming project. However, if there is no agreement and no clear discussion of refund policy, the following delivery policy will hold true. Partial refund will be issued as per the judgement of the service provider if we fail to complete the project in accordance with the delivery policy and contract of agreement. The amount will be calculated by Searchmetop taking into account the proportion of the project completed and the proportion yet to be completed as per the pre-defined scope of the project.</p></li>
</ul>
               <span class="section-head">Dedicated Hiring (Offshore staffing solution)<br>NOTE: Searchmetop’s delivery commitment is subject to:</span>
               <p>Full refund: If the project has not been initiated by the programmer/ designer/ content writer/ SEO expert or any other resource and/or staff. Proportionate refund: In accordance with the amount of work done till the time client decides to cancel the order. No refund: For the time that the services have already been provided. If the client is not satisfied with any level of work, he must immediately bring it to the notice of our project manager and ask for any discounts for the work loss. Any negotiations at a later date will not be entertained.</p>
               <span class="section-head">Applicability of the Delivery Policy <br>NOTE: Searchmetop’s delivery commitment is subject to:</span>
               <p>A project is not taken to be void unless the agreed upon payments are clear. Refund policy is not applicable if the required information for the successful completion of the project is not given to us at proper time. If there is delay or failure in completion of the project due to improper communication from client, it cannot be attributed to Searchmetop. If the information provided by the client is incomplete and/or complete information regarding the project is not provided at the initiation of the project, Searchmetop is not liable to follow its delivery or refund commitments. There is no provision for compensation for the delay of delivery under any conditions, until and unless there is an agreement signed with a penalty clause for delay in delivery.</p>
               <span class="section-head">Limitation of Liability</span>
               <p>Searchmetop’s liability is bound by the value of the chunk of the project (as per our proposal) which remains incomplete at a given point point of time. Searchmetop is not obligated for losses due to the services provided/ not provided or the delay in the same at any point of time. The liability to refund holds only if the project has been cancelled by the client and such cancellation has been communicated to Searchmetop in writing.</p>
               <span class="section-head">Processing of Refunds</span>
               <p>The partial refunds will be processed and mailed within 180 business days of the date of cancellation and will be brought about using the method of payment agreed upon in the beginning of the project ie; refund by check or refund by credit card.</p>
               <p>And The full refunds will be processed and mailed within 50 business days of the date of cancellation and will be brought about using the method of payment agreed upon in the beginning of the project ie; refund by check or refund by credit card.</p>
               
               <span class="section-head">Changes</span>
               <p>Searchmetop may at any time, without prior notice under its sole discretion, amend this policy from time to time. You are therefore requested to review this policy periodically. Your continued use of Searchmetop website after any such amendments automatically implies your acceptance of the same thereof.</p>
            </div>
            <p>Contacting us regarding our refund policy
If you have queries or suggestions regarding our refund policies kindly e–mail us at <a href="mailto:info@searchmetop.com" style="color: #d8236c;">info@searchmetop.com</a></p>
   </div>

</section>
<!-- END: PRIVACY SECTIOn -->

<!-- END: FAQ SECTION -->
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