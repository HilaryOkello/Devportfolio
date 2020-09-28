<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta content="Hilary Okello" name="descriptison">
    <meta content="Hilary, Onyango, Okello, portfolio" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="" rel="apple-touch-icon">
  
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="<?= Url::to(['site/index']) ?>">OkelloPortfolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="<?= Url::to(['site/index']) ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(theme/assets/img/cover.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Hilary Okello</h1>
          <p class="intro-subtitle"><span class="text-slider-items"> Web Developer,Web Designer,Frontend Developer,Graphic Designer</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="theme/assets/img/about.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Hilary Okello</span></p>
                        <p><span class="title-s">Profile: </span> <span>Software Developer</span></p>
                        <p><span class="title-s">Email: </span> <span>hilaryongango96@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>+254738128626</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <span>HTML</span> <span class="pull-right">85%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>CSS3</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>PHP</span> <span class="pull-right">50%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      I am a young passionate web developer well versed in both frontend and backend development.
                    </p>
                    <p class="lead">
                      A Simple and intuitive UI is really important for any organization with an online presence. I create simple to use website layouts and intergrate data from various back-end services and databases.
                    </p>
                    <p class="lead">
                      I also write well-designed, efficient, scalable, and testable code.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                I offer the following professional services:
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Design</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Development</h2>
                <p class="s-description text-center">
                
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-camera"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Photography</h2>
                <p class="s-description text-center">
               
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Responsive Design</h2>
                <p class="s-description text-center">
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Graphic Design</h2>
                <p class="s-description text-center">
                 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Marketing Services</h2>
                <p class="s-description text-center">
               
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counter Section ======= -->
    <div class="section-counter paralax-mf bg-image" style="background-image: url()">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">15</p>
                <span class="counter-text">WORKS COMPLETED</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">2</p>
                <span class="counter-text">YEARS OF EXPERIENCE</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">11</p>
                <span class="counter-text">TOTAL CLIENTS</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter">4</p>
                <span class="counter-text">AWARDS WON</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
              
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/manyatta.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/manyatta.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Manyatta Co</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/nyadhi.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/nyadhi.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">House of Nyadhi</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/qikwetu.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/qikwetu.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Qikwetu Investments</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/work-4.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Triple V</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/construct.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/construct.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Construct.Africa</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="work-box">
              <a href="theme/assets/img/blasio.jpg" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="theme/assets/img/blasio.jpg" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">St.Blasio</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="testimonials paralax-mf bg-image" style="background-image: url()">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="data:image/png;base64,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" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Mumo Kithemba</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Despite being on a tight schedule, Hilary delivered our online store project in record time for the festive season. The UI design was simple and easy to use, and we haven't heard complaints from customers.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
              <div class="testimonial-box">
                <div class="author-test">
                  <img src="data:image/png;base64,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" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Wekesa Were</span>
                </div>
                <div class="content-test">
                  <p class="description lead">
                    Hilary was very professional and easy to work with. He provided updates every now and then and always consulted to ensure he met our needs. I would definitely recomment him to anyone.
                  </p>
                  <span class="comit"><i class="fa fa-quote-right"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Testimonials Section -->

  
    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(theme/assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send a Message
                      </h5>
                    </div>
                    <div>
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                          </div>
                          <div class="col-md-12 text-center">
                            <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                       
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> PO BOX 2345-21000 NAIROBI, KENYA</li>
                        <li><span class="ion-ios-telephone"></span> (+254) 738128626</li>
                        <li><span class="ion-email"></span> hilaryongango96@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://www.facebook.com/okello.hj"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        
                        <li><a href="https://twitter.com/HilaryOnyango"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

 <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong>Okello</strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a>Hilary Okello</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
