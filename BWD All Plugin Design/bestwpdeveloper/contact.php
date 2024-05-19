<?php 
/**
* Template Name: Contact Page
*/  
the_post();
get_header(); 
?>

    <!-- Here have all header and menu section. location another-navigation.php -->
    <?php get_template_part("templates/common/another-navigation"); ?>
    

    <!-- Hero Area Start Here -->
    <section class="service-main-area hero-bg">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-xl-12">
                    <div class="service-main-content text-center">
                        <h1><?php echo get_the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End Here -->
   <!-- Contact Information Start Here -->
   <div class="contact-information">
       <div class="container-fluid">
           <div class="row pt-70 pb-40">
               <div class="col-xl-3 col-xl-3 col-md-6 mb-30">
                   <div class="bd-address text-center">
                       <div class="bd-icon">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/icon4.png" alt="">
                       </div>
                       <div class="bd-content">
                           <h4>Call Today: <br> +8801307607822</h4>
                           <p>B2, 1st Floor, 2536/E, Kuripara, Uttar Khan, Dhaka-1230</p>
                       </div>
                   </div>
               </div>
               <div class="col-xl-3 col-xl-3 col-md-6 mb-30">
                   <div class="bd-address text-center">
                       <div class="bd-icon">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/icon4.png" alt="">
                       </div>
                       <div class="bd-content">
                           <h4>Call Today: <br> +19174730332</h4>
                           <p>New York, NY, 10001, United States of America</p>
                       </div>
                   </div>
               </div>
               <div class="col-xl-3 col-xl-3 col-md-6 mb-30">
                   <div class="bd-address text-center">
                       <div class="bd-icon">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/icon6.png" alt="">
                       </div>
                       <div class="bd-content">
                           <h4>Email Address: </h4>
                           <a href="mailto:info@bestwpdeveloper.com">info@bestwpdeveloper.com</a>
                       </div>
                   </div>
               </div>
               <div class="col-xl-3 col-xl-3 col-md-6 mb-30">
                   <div class="bd-address text-center">
                       <div class="bd-icon">
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/icon5.png" alt="">
                       </div>
                       <div class="bd-content">
                           <h4>Open Hours:</h4>
                           <p>Mon-Sat: 24 /7, Sunday: CLOSED</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- Contact Information End Here -->
   <!-- Contact Details Start here -->
   <section class="contact-details">
       <div class="container-fluid">
           <div class="row mt-130">
               <div class="col-xl-5 col-lg-5 col-md-12">
                   <div class="contact-description">
                        <h4>We’re Here To Help!</h4>
                        <h3><a href="test-contact-form">CONTACT US NOW</a></h3>
                        <p>We’re making legal coverage smart and simple, which means we’re also here to field any and all questions or concerns you may have. You can get in touch with us in a number of ways, whether you’d like to reach our corporate office or your personal firm.</p>
                   </div>
               </div>
               <div class="col-xl-6 offset-xl-1 col-lg-7 col-md-12">
                   <div class="contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-title">
                                        <h2 class="section-title text-center text-uppercase">Get In Touch</h2>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact form here -->
                            <?php 
                            if(get_field("bwd_contact_form")){
                                echo do_shortcode(get_field("bwd_contact_form"));
                            }
                            ?>

                        </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact Details End here -->

<?php get_footer(); ?>







<!-- This code for contact form 7 code -->

<!-- <div class="row mt-50">
    <div class="col-xl-6">
        <div class="input-data">
            [text* name]
            <label for="">Name</label>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="input-data">
            [email* email]
            <label for="">Email</label>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="input-data">
            [url* url]
            <label for="">Sample Link</label>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="input-data">
            [tel* tel]
            <label for="">Phone</label>
        </div>
    </div>
    <div class="col-xl-12">
        <label for="">Services</label>
        [select* services "Choose One" "Website Design" "Website Development" "Website Maintenance" "E-commerce Development" "Wordpress Development" "Website Speed Optimization" "Shopify Development" "Apps Development" "Graphic Design" "Digital Marketing" "SEO" "Consultancy"]
    </div>
    <div class="col-xl-12">
        <label for="">Message</label>
        [textarea* message rows:5 placeholder "Write Message Here"]
    </div>
    <div class="col-xl-12 form-field">
        [file* file]
    </div>
    <div class="col-xl-12  ">
        [submit class:button class:sub-btn "Submit"]
    </div>
</div> -->

