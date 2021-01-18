<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

 <!-- End of Header area=-->
    <!-- Start hero slider/ Owl Carousel Slider -->
    <div class="tw-hero-slider owl-carousel">

        <div class="slider-3">
            <div class="slider-arrow"></div>
            <div class="slider-wrapper d-table">
                <div class="slider-inner d-table-cell">
                    <div class="container">
                        <div class="row justify-content-center">
                            <!--<div class="col-md-6">
                        <img src="<?php bloginfo('template_url'); ?>/images/clis/slider/slider3.png" alt="Social Media Marketing" class="img-fluid slider-img">
                     </div>-->
                            <!-- Col end -->
                            <div class="col-md-12">
                                <div class="slider-content">
                                    <h2 style="color: #000;">WE <br>
                                        <span style="text-shadow: 2px 2px 2px #000;" class="txt-rotate" data-period="2000" data-rotate='[ "DRIVE TRAFFIC.", "GENERATE LEADS.", "INCREASE SALES." ]'>
                              </span>
                                    </h2>

                                </div>
                                <!-- End Slider Content -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- Row End -->
                    </div>
                    <!-- COntainer End -->
                </div>
                <!-- Slider Inner End -->
            </div>
            <!-- Slider Wrapper End -->
        </div>
        <!-- Slider 3 end -->

        <!--<div class="slider-2">
         <div class="slider-arrow">
            <img src="images/slider/pattern_arrow2.png" alt="sliderArrow1">
            <img src="images/slider/pattern_arrow1.png" alt="sliderArrow2">
            <img src="images/slider/pattern_arrow3.png" alt="sliderArrow3">
         </div>
         <div class="slider-wrapper d-table">
            <div class="slider-inner d-table-cell">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-6">
                        <div class="slider-content">
                            <h1>Let's Make Your Ads
                              <span>Interesting !</span>
                           </h1>
                           <p>" The Real Fact of The matter is that nobody reads ads. People reads what interest them, and sometimes it's an ad "</p>
                           
                           <a href="#" class="btn btn-dark">Free Analysis</a>
                        </div>
                     </div>
                     
                     <div class="col-md-6">
                        <img src="images/slider/Brain.png" alt="Social Media Marketing" class="img-fluid slider-img">
                     </div>
                     
                  </div>
                  
               </div>
               
            </div>
            
         </div>
         
      </div>-->



    </div>
    <!-- End Carousel -->

    <div id="mySidenav" class="sidenav">
        <a href=" " id="about">Talk To Us<i style="-webkit-transform: scaleX(-1);" class="fa fa-phone"></i> </a>
        <a href=" " id="blog"> Chat With Us <i class="fab fa-whatsapp"></i> </a>
        <a href=" " id="projects">Email us at<i class="fa fa-envelope"></i> </a>
    </div>

    <section id="tw-features" class="tw-features-area">
        <div class="container">
            <div class="row tw-mb-65">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s">
                    <h2 class="column-title text-sm-center">Welcome To<br/> TG Connect Media Services!</h2>
                    <p>Welcome to TG Connect Media Services, a digital marketing Agency in Vashi, Mumbai</p>
                    <p class="features-text">We really trust that advertising online can work for anyone. We get you before your clients at the right time they are searching for your products and services. Our team of highly qualified, passionate & dedicated people aims to deliver
                        the higher value and Returns on Investment.
                        <br/> That means, we have a singular core interest – making your online marketing campaign a success.</p>
                </div>
                <!-- Col End -->
                <div class="col-md-6 ml-md-auto wow fadeInRight" data-wow-duration="1s">
                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/18-ShEB2zzQ?start=1&autoplay=1&playlist=QgFFve5PmNs&loop=1&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <!-- Col End -->
            </div>
            <!-- End Row 1 -->
            <div class="row">
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/feature1.png" alt="digital marketing agency vashi" width="55" height="55">
                            </div>
                            <!-- End Features icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Search Engine Marketing</h3>
                        <p>SEM are instant and relatively cost-effective ways to attract more traffic and optimize conversion. 50% Of Businesses Invest In PPC But Not All Of Them See The Maximum Results. Why?
                        </p>
                        <a href="/search-engine-marketing.php" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- Col End -->
                <div class="col-lg-4 col-md-12  wow fadeInUp" data-wow-duration="1.6s" data-wow-delay=".4s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/feature2.png" alt="digital marketing company vashi" width="58" height="58">
                            </div>
                            <!-- End Features Icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Social Media Marketing</h3>
                        <p>We makes you interact with your prospects, increase brand visibility and earn measurable outcomes SMM.Why Our Clients Keep Choosing Our SMM Strategies?
                        </p>
                        <a href="/social-media-marketing.php" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-12  wow fadeInUp" data-wow-duration="1.9s" data-wow-delay=".6s">
                    <div class="features-box">
                        <div class="features-icon d-table">
                            <div class="features-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/feature3.png" alt="digital marketing services " width="58" height="58">
                            </div>
                            <!-- End Features Icon inner -->
                        </div>
                        <!-- End Features Icon -->
                        <h3>Search Engine Optimisation </h3>
                        <p>Second 50% of digital marketing and it is all alright to consider it a marketing insurgency. This reality makes SEO a fruitful marketing technique, far better than old marketing strategies
                        </p>
                        <a href="<?php bloginfo('template_url'); ?>/search-engine-optimisation.php" class="tw-readmore">Read More
                     <i class="fa fa-angle-right"></i>
                  </a>
                    </div>
                    <!-- End Single Features -->
                </div>
                <!-- End col -->
            </div>
            <!-- End Row 2 -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End Features section -->


    <div class="container" id="google">
        <div class="row text-center">
            <div class="col section-heading wow fadeInDown">
                <h2>
                    Awards
                    <span>& Accreditation</span>
                </h2>
                <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
            </div>
            <!-- Title Col End -->
        </div>
        <section class="google-logos slider">
            <div class="slide"><a href=" " target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/google.png" alt="google partners"></a></div>
            <div class="slide"><a target="_blank" href=" "><img style="width: 110px;" src="<?php bloginfo('template_url'); ?>/images/bing.png" alt="bing partners"></a></div>
            <div class="slide"><a target="_blank" href=" "><img src="<?php bloginfo('template_url'); ?>/images/adobe.png" alt="adobe partners"></a></div>
            <div class="slide"><img src="<?php bloginfo('template_url'); ?>/images/fbb.png" alt="facebook certify"></div>
            <div class="slide"><a target="_blank" href=" "><img src="<?php bloginfo('template_url'); ?>/images/glassdoor.png" alt="glassdoor reviews"></a></div>
            <div class="slide"><a target="_blank" href=" "><img src="<?php bloginfo('template_url'); ?>/images/silicon1.png" alt="silicon india startup"></a></div>
            <div class="slide"><a target="_blank" href=" "><img src="<?php bloginfo('template_url'); ?>/images/trustpilot.png" alt="trust pilot"></a></div>
        </section>
    </div>

    <section id="tw-analysis" class="tw-analysis-area">
        <div class="analysis-bg-pattern d-none d-md-inline-block">
            <img class="wow fadeInUp" src="<?php bloginfo('template_url'); ?>/images/check-seo/cloud.png" alt="Website Performance" width="364" height="139">
            <img class="wow fadeInUp" src="images/check-seo/cloud2.png" alt="Website Performance" width="203" height="169">
            <img class="wow fadeInUp" src="<?php bloginfo('template_url'); ?>/images/check-seo/announce.png" alt="Website Performance" width="342" height="249">
            <img class="wow fadeInUp" src="images/check-seo/chart.png" alt="Website Performance" width="107" height="309">
        </div>
        <!-- End Analysis Pattern img -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center wow fadeInDown">
                    <h2 class="column-title">
                        Check your
                        <span class="text-white">Website Performance</span>
                    </h2>
                    <div class="analysis-form">
                        <form class="form-vertical" method="post" action="thank-you.php">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-md-12 no-padding">
                                    <div class="form-group tw-form-round-shape">
                                        <input type="hidden" name="name" value="anonymous">
                                        <input type="hidden" name="service_request" value="free website analysis">
                                        <input type="text" id="url" name="url" placeholder="Type website URL" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 no-padding">
                                    <div class="form-group tw-form-round-shape">
                                        <input type="text" name="phone" placeholder="Mobile No." class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 no-padding">
                                    <div class="form-group tw-form-round-shape">
                                        <input type="email" id="email" name="email" placeholder="Your Email" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-12 no-padding">
                                    <div class="form-group">
                                        <button type="Submit" class="btn btn-dark">SUBMIT NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Analysis form -->
                </div>
                <!-- Col End -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End Analysis Section -->


    <section id="tw-intro" class="tw-intro-area">
        <div class="tw-ellipse-pattern">
            <img src="<?php bloginfo('template_url'); ?>/images/about/about_ellipse.png" alt="Digital Marketing Strategy">
        </div>
        <!-- End Ellipse Pattern -->
        <div class="container">
            <div class="row">

                <!--<div class="col-lg-12 col-md-12 text-lg-right text-md-center wow fadeInLeft" data-wow-duration="1s">
               <img src="images/about/about_image.png" alt="" class="img-fluid">
            </div> -->
                <!-- End Col -->
                <div class="col-lg-12 ml-auto col-md-12 wow fadeInRight" data-wow-duration="1s">
                    <h2 class="column-title">Why formulating a Digital Marketing Strategy is a must?</h2>
                    <span class="animate-border tw-mb-40"></span>
                    <p>
                        Digital marketing is a very rapidly growing field & makes for a huge part of an organization’s overall marketing & business strategy. Ad platforms continuously work on evolving the targeting strengths & tools to reach potential users at the right time.
                    </p>
                    <p>
                        Online user behaviour is changing quickly, thanks to the increase in mobile usage and increase in vernacular language. This makes digital marketing a very dynamic field, where there are no standard answers.
                    </p>
                    <!-- End Intro list -->
                    <!-- Default Round Btn -->
                    <a href="contact.php" class="btn btn-secondary">contact us</a>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- Intro section End -->


    <section id="tw-facts" class="tw-facts">
        <div class="facts-bg-pattern d-none d-lg-block">
            <img class="wow fadeInLeft" src="<?php bloginfo('template_url'); ?>/images/funfacts/arrow_left.png" alt="arrwo_left" width="160" height="153">
            <img class="wow fadeInRight" src="<?php bloginfo('template_url'); ?>/images/funfacts/arrow_right.png" alt="arrow_right" width="209" height="170">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="tw-facts-box">
                        <div class="facts-img wow zoomIn" data-wow-duration="1s">
                            <img src="<?php bloginfo('template_url'); ?>/images/icon/fact1.png" alt="Active Clients" class="img-fluid" width="60" height="60">
                        </div>
                        <!-- End Fatcs image -->
                        <div class="facts-content wow fadeInUp" data-wow-duration="1s">
                            <h4 class="facts-title">Active Clients</h4>
                            <span class="counter">50</span>
                            <sup>+</sup>
                        </div>
                        <!-- Facts Content End -->
                    </div>
                    <!-- Facts Box End -->
                </div>
                <!-- Col End -->
                <div class="col-md-4 text-center">
                    <div class="tw-facts-box">
                        <div class="facts-img wow zoomIn">
                            <img src="<?php bloginfo('template_url'); ?>/images/icon/fact2.png" alt="digital marketing services " class="img-fluid" width="50" height="59">
                        </div>
                        <!-- End Facts Image -->
                        <div class="facts-content wow slideInUp">
                            <h4 class="facts-title">Projects Done</h4>
                            <span class="counter">150</span>
                            <sup>+</sup>
                        </div>
                        <!-- End Facts Content -->
                    </div>
                    <!-- End Facts Box -->
                </div>
                <!-- Col End -->
                <div class="col-md-4 text-center">
                    <div class="tw-facts-box">
                        <div class="facts-img wow zoomIn">
                            <img src="<?php bloginfo('template_url'); ?>/images/icon/fact3.png" alt="Leads Generated" class="img-fluid" width="58" height="58">
                        </div>
                        <!-- End Facts Image -->
                        <div class="facts-content wow slideInUp">
                            <h4 class="facts-title">Leads Generated</h4>
                            <span class="counter">1,000,000</span>
                            <sup>+</sup>
                        </div>
                        <!-- End Facts Content -->
                    </div>
                    <!-- End Facts Box -->
                </div>
                <!-- Col End -->

            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </section>
    <!-- Facts End -->


    <section id="tw-service" class="tw-service">
        <div class="container">
            <div class="row text-center">
                <div class="col section-heading wow fadeInDown">
                    <h2>
                        <small>Our Best</small> Digital Marketing
                        <span>Services</span>
                    </h2>
                    <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
                </div>
                <!-- Title Col End -->
            </div>
            <!-- Title Row End -->
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="service-icon service-icon-bg-2 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/ppc.svg" alt="digital marketing company in navi mumbai" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service icon end -->
                        <div class="service-content">
                            <h3>Pay-Per-Click (PPC) </h3>
                            <p>Synonymous as the epitome of affiliate marketing, Pay Per Click is renowned for delivering highly instantaneous results.</p>
                            <a href="ppc.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service content end -->
                    </div>
                    <!-- Service box End -->
                </div>
                <!-- Col End -->
                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="service-icon service-icon-bg-1 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/website.svg" alt="digital marketing consultant" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service icon end -->
                        <div class="service-content">
                            <h3>Website Development</h3>
                            <p>A user-friendly, responsive and device optimized website design has all the power to acquire and retain your customers.</p>
                            <a href="/website-development.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service Content end -->
                    </div>
                    <!-- Service box end -->
                </div>
                <!-- Col End -->

                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="service-icon service-icon-bg-3 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/google.svg" alt="digital marketing company" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service Icon End -->
                        <div class="service-content">
                            <h3>Google Analytics Consulting</h3>
                            <p>Our interconnected teams go beyond a basic installation to recommend and implement advanced measurement strategies.</p>
                            <a href="google-analytics.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service content end -->
                    </div>
                    <!-- Service box End -->
                </div>
                <!-- Col end -->
            </div>
            <!-- Row end -->
            <div class="tw-mb-60"></div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="service-icon service-icon-bg-4 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/email.svg" alt="digital marketing agency vashi" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service icon end -->
                        <div class="service-content">
                            <h3>Email Marketing</h3>
                            <p>We not only know which options work and which ones don’t, but we also have the technology and support ready to help you make every email count.</p>
                            <a href="email-marketing.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service content end -->
                    </div>
                    <!-- Service Box end -->
                </div>
                <!-- Col end -->
                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="service-icon service-icon-bg-5 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/content.svg" alt="digital marketing agency" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service icon end -->
                        <div class="service-content">
                            <h3>Content Writing</h3>
                            <p>We’ve all heard it before, content is king. But what is rarely said is that it can only rule if it is created in a way that connects with your audience.</p>
                            <a href="content-writing.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service content end -->
                    </div>
                    <!-- Service box end -->
                </div>
                <!-- Row End -->
                <div class="col-md-4 text-center">
                    <div class="tw-service-box wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s">
                        <div class="service-icon service-icon-bg-6 d-table">
                            <div class="service-icon-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/services/influencer.svg" alt="digital marketing company vashi" class="img-fluid">
                            </div>
                        </div>
                        <!-- Service Icon end-->
                        <div class="service-content">
                            <h3>Influencer Marketing</h3>
                            <p>Influencers have access to a large audience across multiple social media platforms who trusts what they have to say and engages with their content.</p>
                            <a href="influencer-marketing.php" class="tw-readmore">Read More
                        <i class="fa fa-angle-right"></i>
                     </a>
                        </div>
                        <!-- Service Content end -->
                    </div>
                    <!-- Service box end-->
                </div>
                <!-- Col end -->
            </div>
            <!-- Row End -->
        </div>
        <!-- container -->
    </section>
    <!-- Tw Service End -->

    <!--  <section id="teampage">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s">
               <h2>
                  Our Excellent <span>Leaders</span></h2>
               <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
            </div>
         </div>
      </div>
      <div class="">
         <img src="images/banner/teampageimage.jpg" alt="" class="img-responsive">
         <div id="btn-team" class="team-button">
            <a data-toggle="popover" title="PAWAN DHERA (Co-Founder)" data-placement="bottom" data-content="Digital Marketing Evangelist and Technology lover, extremely excited and passionate to explore most recent MarTech & AdTech.">+</a>
         </div>
         <div id="btn-team1" class="team-button">
            <a data-toggle="popover" title="AJIT SHARMA (Co-Founder)" data-placement="bottom" data-content="A stern vision regarding the evolution of digital media.">+</a>
         </div>
         <div id="btn-team2" class="team-button">
            <a data-toggle="popover" title="VIREN SACHDEV (Co-Founder)" data-placement="bottom" data-content="A passionate digital marketer with hands-on experience on the most powerful marketing platforms. ">+</a>
         </div>
      </div>

      <div class="col-md-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: zoomIn;"><a href="team.php" class="btn btn-primary btn-lg tw-mt-80">view full team</a></div>
      
   </section> -->

    <section id="work-process" class="work-process">
        <div class="work-bg-pattern d-none d-lg-inline-block">
            <img src="<?php bloginfo('template_url'); ?>/images/process/work_process.png" alt="Working Process" width="1396" height="106" class="img-fluid wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.2s">
        </div>
        <!-- End Work BG Pattern -->
        <div class="container">
            <div class="row text-center">
                <div class="col section-heading wow fadeInDown" data-wow-duration="1s">
                    <h2>
                        Our Working <span>Process</span></h2>
                    <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="tw-work-process">
                        <div class="process-wrapper d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="process-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/process1.png" alt="Research Project" class="img-fluid" width="87" height="87">
                            </div>
                        </div>
                        <!-- End process wrapper -->
                        <p>01. Research Project</p>
                    </div>
                    <!-- End Tw work process -->
                </div>
                <!-- End Col -->
                <div class="col-md-3">
                    <div class="tw-work-process">
                        <div class="process-wrapper bg-orange d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="process-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/process2.png" alt="Find Ideas" class="img-fluid" width="62" height="105">
                            </div>
                        </div>
                        <!-- End Process Wrapper -->
                        <p>02. Find Ideas</p>
                    </div>
                    <!-- End Word Process -->
                </div>
                <!-- End Col -->
                <div class="col-md-3">
                    <div class="tw-work-process">
                        <div class="process-wrapper bg-blue d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="process-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/process3.png" alt="Start Optimize" class="img-fluid" width="96" height="90">
                            </div>
                        </div>
                        <!-- End Process Wrapper -->
                        <p>03. Start Optimize</p>
                    </div>
                    <!-- End Work Process -->
                </div>
                <!-- End Col -->
                <div class="col-md-3">
                    <div class="tw-work-process">
                        <div class="process-wrapper bg-yellow d-table wow zoomIn" data-wow-duration="1s" data-wow-delay=".8s">
                            <div class="process-inner d-table-cell">
                                <img src="<?php bloginfo('template_url'); ?>/images/icon/process4.png" alt="Reach Target" class="img-fluid" width="96" height="95">
                            </div>
                        </div>
                        <!-- End PRocess Wrapper -->
                        <p>04. Reach Target</p>
                    </div>
                    <!-- End Work Process -->
                </div>
                <!-- End Col -->
                <div class="col-md-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1.2s"><a href="contact.php" class="btn btn-primary tw-mt-80">Get Started</a></div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End Word Process -->

    <section>
        <div class="container">
            <div class="row text-center">
                <div class="col section-heading wow fadeInDown">
                    <h2>
                        FAQs
                    </h2>
                    <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
                </div>
                <!-- Title Col End -->
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="tw-faq-content">

                        <div id="accordion" role="tablist">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" itemscope="" itemtype="http://schema.org/Question">
                                    <h4 itemprop="text">
                                        <a>
                                 What is digital Marketing agency?
                                 <i class="faq-indicator fa fa-minus"></i>
                              </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne" itemscope="" itemtype="http://schema.org/Answer">
                                    <div class="card-block" itemprop="text">
                                        A Digital Agency is an advertising agency that has evolved to meet the changing needs of marketing in the digital age. Digital Agencies bring graphic design and copywriting together with new technology and modern marketing techniques.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingtwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" itemscope="" itemtype="http://schema.org/Question">
                                    <h4 itemprop="text">
                                        <a class="collapsed">
                                 What are the digital marketing services ?
                              <i class="faq-indicator fa fa-plus"></i>
                           </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo" itemscope="" itemtype="http://schema.org/Answer">
                                    <div class="card-block" itemprop="text">
                                        A combination of online marketing services, from SEO to PPC, can help your business achieve extraordinary growth. TG Connect Media Services is a Digital Marketing Agency in Navi Mumbai, which means we offer everything from Clicks to conversion analysis.
                                        A few examples of the digital marketing services we offer include:
                                        <div>
                                            <ul>
                                                <li>Search Engine Optimization</li>
                                                <li>Pay-Per-Click Advertising </li>
                                                <li>Social Media Management</li>
                                                <li>Content Marketing</li>
                                                <li>Email Marketing</li>
                                                <li>Copywriting</li>
                                                <li>Conversion Rate Optimization</li>
                                                <li>Website Design</li>
                                                <li>Voice Search Content Optimization</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingthree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" itemscope="" itemtype="http://schema.org/Question">
                                    <h4 itemprop="text">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                 Why do you need a digital marketing agency?
                                 <i class="faq-indicator fa fa-plus"></i>
                              </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthree" itemscope="" itemtype="http://schema.org/Answer">
                                    <div class="card-block" itemprop="text">
                                        The results of online marketing go beyond revenue, but towards your growth as a company. With a digital marketing plan, your business can expand into new areas, reach out to the potential users, generating quality business leads, driving sales, achieving
                                        the positive ROI and achieve tremendous accomplishments in your industry. You can see the impact of Internet marketing in the revenue and success of our clients.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingfour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" itemscope="" itemtype="http://schema.org/Question">
                                    <h4 itemprop="text">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                 What are benefits of digital marketing services?
                                 <i class="faq-indicator fa fa-plus"></i>
                              </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" itemscope="" itemtype="http://schema.org/Answer">
                                    <div class="card-block" itemprop="text">
                                        The benefit of digital marketing is that a targeted audience can be reached in a cost-effective and measurable way. Other digital marketing advantages include increasing brand loyalty and driving online sales. The benefits of digital marketing include:
                                        <ul>
                                            <li>Why is digital marketing important ? Digital marketing is an easy way for companies to tell their brand’s story and brings companies to life on an online platform. Social media, email, and websites give companies
                                                the ability to reach consumers directly, which means customers are receiving more information in digital form than ever before.</li>
                                        </ul>
                                        <ul>
                                            <li>Integrated Digital Marketing Solutions : One of the reasons we’re so confident in our ability to deliver excellent outcomes is that we've got experts in each key digital channel. From pay-per-click and search
                                                engine optimization services to content & social media marketing, and SEM, we work together to ensure our clients see the high-quality outcomes across each campaign via Digital Marketing strategies. At TG
                                                Connect Media Services performance and outcomes are the name of the game.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingfive" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" itemscope="" itemtype="http://schema.org/Question">
                                    <h4 itemprop="text">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                 What is the role of digital marketing ?
                                 <i class="faq-indicator fa fa-plus"></i>
                              </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" itemscope="" itemtype="http://schema.org/Answer">
                                    <div class="card-block" itemprop="text">
                                        Unlike most offline advertising efforts, digital marketing allows marketers to see correct results in real time. If you've ever placed an ad in a newspaper, you will understand how tough it is to estimate what number of people really flipped to that page
                                        and paid attention on your advert. There's no sure-fire manner to know if that advert became liable for any sales at all. On the alternative hand, with digital marketing, you can track the impressions to your advertisement,
                                        traffic to the website, measure the desired actions of the users on the website and ROI of pretty much any aspect of your advertising and marketing efforts.

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                    </div>
                    <!-- Faq content end -->
                </div>
                <!-- Content Col end -->

            </div>
            <!-- Main row end -->
        </div>
    </section>

    <section id="teampage">
        <div class="container">
            <div class="row text-center">
                <div class="col section-heading wow fadeInDown" data-wow-duration="1s">
                    <h2>
                        Our Excellent <span>Leaders</span></h2>
                    <span class="animate-border ml-auto mr-auto tw-mt-20"></span>
                </div>
            </div>
            <!-- <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="images/team/tushar.jpg" alt="tushar gogri">
                <div class="team-content">
                    <h3 class="title">Tushar Gogri</h3>
                    <span class="post">Director</span>
                    <p class="description">Two decades on experience in innovative OOH, across the nation. He has conceptualised and launched first OOH in Navi Mumbai and much more.</p>
                    <ul class="social">
                        <li><a class="fab fa-facebook" href="#"></a></li>
                        <li><a class="fab fa-twitter" href="#"></a></li>
                        <li><a class="fab fa-google-plus" href="#"></a></li>
                        <li><a class="fab fa-youtube" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="images/team/pawan.jpg" alt="Pawan Dhera">
                <div class="team-content">
                    <h3 class="title">Pawan Dhera</h3>
                    <span class="post">Co-Founder</span>
                    <p class="description">A Digital Marketing Evangelist and Technology lover, very extremely excited and passionate to explore most recent MarTech & AdTech.</p>
                    <ul class="social">
                        <li><a class="fab fa-facebook" href="#"></a></li>
                        <li><a class="fab fa-twitter" href="#"></a></li>
                        <li><a class="fab fa-google-plus" href="#"></a></li>
                        <li><a class="fab fa-youtube" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <img src="images/team/ajit.png" alt="Ajit Sharma">
                <div class="team-content">
                    <h3 class="title">Ajit Sharma</h3>
                    <span class="post">Co-Founder</span>
                    <p class="description">The brainchild behind TG Connect Media Services, has remotely worked with all the departments of the agency.</p>
                    <ul class="social">
                        <li><a class="fab fa-facebook" href="#"></a></li>
                        <li><a class="fab fa-twitter" href="#"></a></li>
                        <li><a class="fab fa-google-plus" href="#"></a></li>
                        <li><a class="fab fa-youtube" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
         -->

            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="our-team">
                            <div class="pic"><img src="<?php bloginfo('template_url'); ?>/images/team/tushar.jpg" alt="tushar gogri"></div>
                            <h3 class="title">Tushar Gogri</h3>
                            <span class="post">Director</span>
                            <ul class="icon">
                                <li><a href="https://www.linkedin.com/in/tushar-gogri-802651108/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="our-team">
                            <div class="pic"><img src="images/team/pawan.jpg" alt="Pawan Dhera"></div>
                            <h3 class="title">Pawan Dhera</h3>
                            <span class="post">Co-Founder</span>
                            <ul class="icon">
                                <li><a href="https://www.linkedin.com/in/pawandhera/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="our-team">
                            <div class="pic"><img src="<?php bloginfo('template_url'); ?>/images/team/ajit.png" alt="Ajit Sharma"></div>
                            <h3 class="title">Ajit Sharma</h3>
                            <span class="post">Co-Founder</span>
                            <ul class="icon">
                                <li><a href="https://www.linkedin.com/in/digitalmarketer-08402863/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="our-team">
                            <div class="pic"><img src="images/team/viren.jpg" alt="Viren Sachdev"></div>
                            <h3 class="title">Viren Sachdev</h3>
                            <span class="post">Co-Founder</span>
                            <ul class="icon">
                                <li><a href="https://www.linkedin.com/in/viren-sachdev/" class="fab fa-linkedin"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="swiper-slide">
         <div class="our-team">
            <div class="pic"><img src="images/team/murtaza.jpg" alt="Murtaza Adenwala"></div>
                <h3 class="title">Murtaza Adenwala</h3>
               <span class="post">Advisor</span>
                <ul class="icon">
                    <li><a href="https://www.linkedin.com/in/murtaza-adenwala-6207865/" class="fab fa-linkedin"></a></li>
                </ul>
         </div>
      </div>
      <div class="swiper-slide">
         <div class="our-team">
            <div class="pic"><img src="images/team/vishnu.jpg" alt="Vishnu Kanth Gokul"></div>
                <h3 class="title">Vishnu Kanth Gokul</h3>
               <span class="post">Advisor</span>
                <ul class="icon">
                    <li><a href="https://www.linkedin.com/in/vkgokul/" class="fab fa-linkedin"></a></li>
                </ul>
         </div>
      </div> -->

                </div>

                <!-- Add Arrows 
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>-->
            </div>
        </div>
    </section>

    <section id="tw-testimonial" class="tw-testimonial">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s">
                    <div class="tw-testimonial-content text-center">
                        <h2 class="section-title">Love From Clients</h2>
                        <span class="animate-border border-green tw-mt-20 tw-mb-40 ml-auto mr-auto"></span>
                    </div>
                    <div class="tw-testimonial-carousel owl-carousel">
                        <div class="tw-testimonial-wrapper">
                            <div class="testimonial-bg testimonial-bg-orange">
                                <div class="testimonial-icon">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon-image/testimonial1.png" alt="Regnum Group Testimonial">
                                </div>
                            </div>
                            <!-- End Testimonial bg -->
                            <div class="testimonial-text">
                                <p>One of the best things about working with TG connect is communication, what is not possible and what is. This really helps bussiness in setting up right investment and setting up the right product. This has been shown in
                                    all the campaigns we have done together.</p>
                                <div class="testimonial-meta">
                                    <h4>
                                        Yogesh lala
                                        <small>Director Regnum Group</small>
                                    </h4>
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <!-- End Testimonial Meta -->
                            </div>
                            <!-- End testimonial text -->
                        </div>
                        <!-- End Tw testimonial wrapper -->
                        <div class="tw-testimonial-wrapper">
                            <div class="testimonial-bg testimonial-bg-orange">
                                <div class="testimonial-icon">
                                    <img src="images/icon-image/testimonial1.png" alt="Ankit Agarwal Testimonial" class="img-fluid" width="45" height="44">
                                </div>
                            </div>
                            <!-- End Testimonial bg -->
                            <div class="testimonial-text">
                                <p>We are happy to share that we are receiving good quality leads from Google Ads managed by TG Connect. We have also done respectable number of closures. Hope to make TgConnect our one & only Real estate marketing partner
                                    in future.</p>
                                <div class="testimonial-meta">
                                    <h4>
                                        Ankit Agarwal
                                        <small>Director Key Mansions</small>
                                    </h4>
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <!-- End Testimonial meta -->
                            </div>
                            <!-- End Testimonial Text -->
                        </div>
                        <!-- End Tw testimonial wrapper -->
                        <div class="tw-testimonial-wrapper">
                            <div class="testimonial-bg testimonial-bg-orange">
                                <div class="testimonial-icon">
                                    <img src="images/icon-image/testimonial1.png" width="45" height="44" alt="M.P. Madhusudhan Testimonial" class="img-fluid">
                                </div>
                            </div>
                            <!-- end testimonial bg -->
                            <div class="testimonial-text">
                                <p>I am particularly writing to appreciate you for the recent delivery of work in short notice. We are highly impressed to see the quality of the lead generation through Google Ads. As a token of appreciation, we would like
                                    to certify your agency as "The best Digital Marketing Agency."</p>
                                <div class="testimonial-meta">
                                    <h4>
                                        M.P. Madhusudhan
                                        <small>Director Cemacon</small>
                                    </h4>
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <!-- End testimonial meta -->
                            </div>
                            <!-- End testimonial text -->
                        </div>
                        <!-- End tw testimonial wrapper -->
                    </div>
                    <!-- End Tw testimonial carousel -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->
    </section>
    <!-- End TW testimonial -->

    <!-- <section id="tw-blog" class="tw-blog">
      <div class="container">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2>
                  <small>our blog</small>
                  Latest <span>Blog</span>
               </h2>
               <span class="animate-border border-offwhite ml-auto mr-auto tw-mt-20"></span>
            </div>

         </div>
         <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="col-lg-4 col-md-12">
               <div class="tw-latest-post">
                  <div class="latest-post-media text-center">
                     <img src="images/news/post1.jpg" alt="blog_image_one" class="img-fluid">
                  </div>
                  
                  <div class="post-body">
                     <div class="post-item-date">
                        <div class="post-date">
                           <span class="date">29</span>
                           <span class="month">May</span>
                        </div>
                     </div>
                     
                     <div class="post-info">
                        <div class="post-meta">
                           <span class="post-author">
                              Posted by <a href="#">Admin</a>
                           </span>
                        </div>
                        
                        <h3 class="post-title"><a href="#">SEO trend to look for the best in 2018</a></h3>
                        <div class="entry-content">
                           <p>
                              One of the top 100 advertising of a marketing agencies know that how to grow your busines
                           </p>
                        </div>
                        
                     </div>
                     
                  </div>
               
               </div>
              
            </div>
            
            <div class="col-lg-4 col-md-12">
               <div class="tw-latest-post">
                  <div class="latest-post-media text-center">
                     <img src="images/news/post2.jpg" alt="blog_image_one" class="img-fluid">
                  </div>
                 
                  <div class="post-body">
                     <div class="post-item-date">
                        <div class="post-date">
                           <span class="date">29</span>
                           <span class="month">May</span>
                        </div>
                     </div>
                     
                     <div class="post-info">
                        <div class="post-meta">
                           <span class="post-author">
                              Posted by <a href="#">Admin</a>
                           </span>
                        </div>
                        
                        <h3 class="post-title"><a href="#">SEO trend to look for the best in 2018</a></h3>
                        <div class="entry-content">
                           <p>
                              One of the top 100 advertising of a marketing agencies know that how to grow your busines
                           </p>
                        </div>
                        
                     </div>
                     
                  </div>
               
               </div>
              
            </div>
            
            <div class="col-lg-4 col-md-12">
               <div class="tw-latest-post">
                  <div class="latest-post-media text-center">
                     <img src="images/news/post3.jpg" alt="blog_image_one" class="img-fluid">
                  </div>
                 
                  <div class="post-body">
                     <div class="post-item-date">
                        <div class="post-date">
                           <span class="date">29</span>
                           <span class="month">May</span>
                        </div>
                     </div>
                     
                     <div class="post-info">
                        <div class="post-meta">
                           <span class="post-author">
                              Posted by <a href="#">Admin</a>
                           </span>
                        </div>
                        
                        <h3 class="post-title"><a href="#">SEO trend to look for the best in 2018</a></h3>
                        <div class="entry-content">
                           <p>
                              One of the top 100 advertising of a marketing agencies know that how to grow your busines
                           </p>
                        </div>
                        
                     </div>
                     
                  </div>
               
               </div>
              
            </div>
            
            <div class="col-md-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="1s"><a href="#" class="btn btn-primary btn-lg tw-mt-80">view all</a></div>
         </div>
         
      </div>
     
   </section>
   -->
 

<?php
get_footer();
