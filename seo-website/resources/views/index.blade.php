<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Tale SEO Agency CSS Template by TemplateMo website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= url('vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?= url('css/fontawesome.css'); ?>">
    <link rel="stylesheet" href="<?= url('css/templatemo-tale-seo-agency.css');?>">
    <link rel="stylesheet" href="<?= url('css/owl.css'); ?>">
    <link rel="stylesheet" href="<?= url('css/animate.css'); ?>">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul>
              <li><a href="#"><i class="fa fa-phone"></i>+<?php if(!empty($companyInfo['mobile'])){ echo $companyInfo['mobile'];} ?></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i><?php if(!empty($companyInfo['email'])){ echo $companyInfo['email'];}?></a></li>
              <li><a href="#"><i class="fa fa-map-marker"></i><?php if(!empty($companyInfo['address'])){ echo $companyInfo['address'];}?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul>
              <li><a href="<?php if(!empty($socailLinks['facebook'])){ echo $socailLinks['facebook'];}?>"><i class="fab fa-facebook"></i></a></li>
              <li><a href="<?php if(!empty($socailLinks['twitter'])){ echo $socailLinks['twitter'];}?>"><i class="fab fa-twitter"></i></a></li>
              <li><a href="<?php if(!empty($socailLinks['linkedin'])){ echo $socailLinks['linkedin'];}?>"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?= url('/')?>" class="logo">
                        <img src="<?= asset('/storage/image/logo.png')?>" alt="" style="max-width: 112px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="about.html">About Us</a></li>
                              <li><a href="faqs.html">FAQs</a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="#infos">Infos</a></li>
                      <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>SEO DIGITAL AGENCY</h6>
            <div class="line-dec"></div>
            <h4><?php if(!empty($homeDescription['title'])){ echo $homeDescription['title']; }?></h4>
            <p><?php if(!empty($homeDescription['description'])) { echo $homeDescription['description'];}?></p>
            <div class="main-button scroll-to-section"><a href="<?php if(!empty($homeButton['button_1_url'])) { echo $homeButton['button_1_url'];} ?>"><?php if(!empty($homeButton['button_1_name'])) { echo $homeButton['button_1_name'];} ?></a></div>
            <span>or</span>
            <div class="second-button"><a href="<a href="<?php if(!empty($homeButton['button_2_url'])) { echo $homeButton['button_2_url'];} ?>"><?php if(!empty($homeButton['button_2_name'])) { echo $homeButton['button_2_name'];} ?></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <?php if(!empty($serviceDetails['title'])) { $ServiceDetails = explode(",",$serviceDetails['title']);}?>
                <h2><?php if(!empty($ServiceDetails[0])){ echo $ServiceDetails[0]; }?><em><?php if(!empty($ServiceDetails[1])){ echo $ServiceDetails[1]; }?></em> &amp;
                  <span><?php if(!empty($ServiceDetails[3])){ echo $ServiceDetails[3]; }?></span> <?php if(!empty($ServiceDetails[4])){ echo $ServiceDetails[4]; }?></h2>
                  <div class="line-dec"></div>
                  <p><?php if(!empty($serviceDetails['description'])) { echo $serviceDetails['description']; }?></p>
              </div>
            </div>
            <?php foreach($services as $data){?>
              <div class="col-lg-6 col-sm-6">
                <a href="<?= $data['url']?>">
                  <div class="service-item">
                    <div class="icon">
                      <img src="<?= asset('/storage/image/'.$data['image'])?>" alt="discover SEO" class="templatemo-feature">
                    </div>
                    <h4><?= $data['description']?></h4>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2><?php if(!empty($projectDescription['title'])){echo $projectDescription['title']; }?></h2>
            <div class="line-dec"></div>
            <p> <?php if(!empty($projectDescription['description'])){ echo $projectDescription['description'];}?></p>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <?php foreach($projects as $projectsData) {?>
            <div class="item">
              <img src="<?= asset('/storage/image/'.$projectsData['image'])?>" alt="">
              <div class="down-content">
                <h4><?= $projectsData['title']?></h4>
                <a href="<?= $projectsData['url']?>"><i class="fa fa-link"></i></a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/left-infos.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2><?php if(!empty($infos['title'])){ echo $infos['title'];} ?></h2>
                  <div class="line-dec"></div>
                  <p><?php if(!empty($infos['titleDescription'])){ echo $infos['titleDescription'];} ?></p>
                </div>
                <div class="skills">
                  <?php foreach($infosBar as $data){?>
                  <div class="skill-slide" style='right: 10%;width: <?= $data['percentage'];?>%;right: 10%;'>
                    <div class="fill"></div>
                    <h6><?= $data['title']; ?></h6>
                    <span><?= $data['percentage']; ?>%</span>
                  </div>
                  <?php } ?>
                </div>
                <p class="more-info"><?php if(!empty($infos['description'])){ echo $infos['description'];} ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="100%" height="670px" frameborder="0" style="border:0; border-radius: 23px;" allowfullscreen=""></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                <form id="contact-form" action="/SaveContact" method="post">
                @csrf
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Contact Us</em> &amp; Get In <span>Touch</span></h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Your Surname..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-phone"></i>
                        <h4><a href="#"><?php if(!empty($companyInfo['mobile'])){ echo $companyInfo['mobile'];} ?></a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope"></i>
                        <h4><a href="#"><?php if(!empty($companyInfo['email'])){ echo $companyInfo['email'];} ?></a></h4>                        
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker"></i>
                        <h4><a href="#"><?php if(!empty($companyInfo['address'])){ echo $companyInfo['address'];} ?></a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 <a href="#">Tale SEO Agency</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?= url('vendor/jquery/jquery.min.js')?> "></script>
  <script src="<?= url('vendor/bootstrap/js/bootstrap.min.js')?> "></script>

  <script src="<?= url('js/isotope.min.js')?>"></script>
  <script src="<?= url('js/owl-carousel.js')?>"></script>
  <script src="<?= url('js/tabs.js')?>"></script>
  <script src="<?= url('js/popup.js')?>"></script>
  <script src="<?= url('js/custom.js')?>"></script>


  </body>

</html>
