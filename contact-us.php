<?php
$page_name = 'Contact Us';
$sub_page_name = '';
$meta_title = 'Contact Us | Client Engager';
$meta_description = 'Contact us to get more details and help regarding client engager app. We are here to help you.';
$meta_keyword = '';
include_once 'header.php';
?>

<section class="inner contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title contactuspg-title wow fadeInUp">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="contact-pgimage wow fadeInUp">
                    <img src="images/contact-pg-image.jpg" alt="Client Engager">
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="contactfrm-rightside wow fadeInUp">
                    <div>
                        <h3>Client Engager <br class="d-none d-lg-block">Online Limited</h3>
                        <p>The Plaza, 100 Old Hall Street <br>St Paul’s Square, Liverpool, L3 9AJ</p>
                        <p>Email: <a href="mailto:contact@engager.app" class="text-color-1"><b>contact@engager.app</b></a></p>
                        <p>Phone: <a href="tel:0151 242 6742" class="text-color-1"><b>0151 242 6742</b></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-frm wow fadeInUp">
                    <h3 class="contactfrm-title">Send us a message</h3>
                    <div class="alert alert-success" role="alert" style="display:none;margin-top: 10px;" id="success-msg"> <strong>Successfully sent your request!</strong></div>
                    <form class="contactForm form" id="enquiry-form0" enctype="multipart/form-data" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="label" class="form-label">Contact Name</label>
                                   
                                    <input type="text" class="form-control frm-in"   name="Enquiry[enquiryFields][name]" id="name" placeholder="Enter your name">
                                    <div class="invalid-feedback name-error">Please enter your name.</div>
                                </div>
                                <div class=" form-group mb-3">
                                    <label for="Business" class="form-label">Business Name</label>
                                    <input type="text" class="form-control" rows="3" placeholder="Enter your business name" name="Enquiry[enquiryFields][businessname]" id="businessname">
                              <div class="invalid-feedback"></div>
                                </div>
                                <div class=" form-group mb-3">
                                    <label for="Business" class="form-label">Number of Clients</label>
                                    <input type="text" class="form-control" rows="3" placeholder="Enter your number of clients" name="Enquiry[enquiryFields][numberofclients]" id="numberofclients">
                              <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="Phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control frm-in"   name="Enquiry[enquiryFields][mobile_number]" id="mobile_number"  placeholder="Enter your phone number">
                                    <div class="invalid-feedback phone-error" >Please provide a valid phone number.</div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="label" class="form-label">Email</label>
                                    <input type="email" class="form-control frm-in"   name="Enquiry[enquiryFields][email_address]" id="email_address"  placeholder="Enter your email">
                                    <div class="invalid-feedback email-error">Please provide a valid email.</div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="Message" class="form-label">Message</label>
                                    <textarea class="form-control"  id="message" cols="30" rows="4" placeholder="Type message..." name="Enquiry[enquiryFields][message]" id="message"></textarea>
                              <div class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-3 text-center">

                                    <!-- <button type="submit" class="btn-style1"><span>Send <img src="images/right-arrow.png" alt="Client Engager" class="img-fluid right-arrow"></span></button> -->

                                    <button  type="button" id="btn_submit" value="Submit" class="btn-style1" onclick="return validate()">Send <img src="images/right-arrow.png" alt="Client Engager" class="img-fluid right-arrow"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wow fadeInUp">
    <div class="gmap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.2171612367647!2d-2.9944195000000002!3d53.410942299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4341298785e0df53!2sClient%20Engager!5e0!3m2!1sen!2sin!4v1658827920191!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
</section>

<section class="register-wrap wow fadeInUp">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="register-block">
                    <h3>Register now for a free 14-day trial.</h3>
                    <a href="https://calendly.com/clientengager/demo-zoom-call" class="btn-style1" target="_blank"><span>Book a Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once 'footer.php' ?>

<script src="js/myscript.js"></script>
    <script type="text/javascript">
        function validate(){       
             name =$("#name").val().trim();
             phone =$("#mobile_number").val().trim();
             email =$("#email_address").val().trim();
             business=$("#businessname").val().trim();
             
             temp =1;
            
             if(name ==""){
                 temp =0;
                 $(".name-error").addClass('d-block');
             }else{
               $(".name-error").removeClass('');
             }
         
             var phone_pattern = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/; 
      
            if( (phone == "") || (phone.length < 10) ){
                $(".phone-error").addClass('d-block');
               temp =0;
             }else if(!phone_pattern.test( phone )){
                $(".phone-error").addClass('d-block');
               temp =0; 
             } else {
                  $(".phone-error").removeClass('d-block');
                
             }
     
             if(email == ""){
                 temp =0;
                  $(".email-error").addClass('d-block');
                 
             }else if(!IsEmail(email)){
                 temp =0;
                   $(".email-error").addClass('d-block');
             }else{
                 $(".email-error").removeClass('d-block');
             }
           
             if(temp == 1){
                 //$("#preloader").show();
                 $.ajax({
                     type: "POST",
                     url: "contact-form.php",
                     data: $("#enquiry-form0").serialize(),          
                     success: function(res){               
                     $('#enquiry-form0').trigger("reset");
                       $('html, body').animate({
                  scrollTop: $("#enquiry-form0").offset().top
              }, 0);
                         $("#success-msg").show();
                         setTimeout(function() {
                             $('#success-msg').fadeOut('slow');
                         }, 3000);


                     }
                 });
             }
             return false;
         }
         function IsEmail(email) {
           var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           return regex.test(email);
         }
 

$(".frm-in").change(function(){
     $(this).next(".invalid-feedback").removeClass('d-block');
})
     </script>