<!DOCTYPE html>
<?php
include 'include/db.php';
$page = 1;
$offset = 0;
if($_GET['page'] and $_GET['page'] != null){
  $page = $_GET['page'];
  $offset = ($page-1)*6;
}
if($offset == 0){
  $sql = "select * from news ORDER BY id desc limit 6";
}else{
  $offset = $offset - 1;
  $sql = "select * from news ORDER BY id desc limit 6,".$offset;
}
$result = $conn->query($sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$sql = "select * from news";
$result = $conn->query($sql);
$total_count = $result->num_rows;
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QubeHealth</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/green.css">
    <script src="./assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TXX38PS');</script>
    <!-- End Google Tag Manager -->
    <style>
        .bg-soft-primary{
          background: #454955!important;
        }
    </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TXX38PS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="content-wrapper">
        <header class="wrapper bg-soft-primary">
            <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
              <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                  <a href="https://www.qubehealth.com/">
                    <img class="logo-dark" src="./assets/img/logo.svg" srcset="./assets/img/logo.svg" alt="" />
                    <img class="logo-light" src="./assets/img/logo-light.svg"
                        srcset="./assets/img/logo-light.svg" alt="" />
                </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                  <div class="offcanvas-header d-lg-none">
                      <!-- <h3 class="text-white fs-30 mb-0">QubeCrew</h3> -->
                      <a href="https://www.qubehealth.com/" style="width: 100%;">
                        <img class="logo-light" src="./assets/img/logo-light.svg"
                        srcset="./assets/img/logo-light.svg" alt="" />
                      </a>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                          aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                      <ul class="navbar-nav">
                          <li class="nav-item">
                              <a class="nav-link" href="careers.html">Join the #QubeCrew</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="partners.html">Healthcare Provider Partners
                              </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="news.html">In the News
                                <div class="activeLine" id="inthenewsline"></div>
                            </a>
                          </li>
                      </ul>
                      <!-- /.navbar-nav -->
                      <div class="offcanvas-footer d-lg-none">
                          <div>
                              <a href="mailto:contact@qubehealth.com" class="link-inverse">contact@qubehealth.com</a>
                              <nav class="nav social social-white mt-4">
                                  <a href="https://www.linkedin.com/company/qubehealth/" target="_blank"><i class="uil uil-linkedin"></i></a>
                                  <a href="https://www.facebook.com/QubeHealth" target="_blank"><i class="uil uil-facebook-f"></i></a>
                                  <a href="https://www.instagram.com/qube.health/" target="_blank"><i class="uil uil-instagram"></i></a>
                                  <a href="https://www.youtube.com/@qubehealth" target="_blank"><i class="uil uil-youtube"></i></a>
                              </nav>
                              <!-- /.social -->
                          </div>
                      </div>
                      <!-- /.offcanvas-footer -->
                  </div>
                  <!-- /.offcanvas-body -->
                </div>
                <div class="navbar-other ms-lg-4">
                  <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                      <!-- Employer Login -->
                      <a href="#" id="employer_login" class="btn btn-sm btn-primary rounded-pill roll-link">
                        <span data-title="Coming Soon" href="#">Employer Login</span>
                      </a>
                    </li>
                    <li class="nav-item d-lg-none">
                      <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                  </ul>
                  <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
              </div>
              <!-- /.container -->
            </nav>
            <!-- /.navbar -->
          </header>
          <!-- /header -->

        <section class="wrapper bg-soft-primary">
            <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
              <div class="row" id="margintop10">
                <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
                    <h1 class="display-1 mb-3" style="color: white;">Qube In The News</h1>
                  <p class="lead px-lg-5 px-xxl-8 mb-1" style="color: white;">We’re regularly featured in the media. Take a look.</p>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </section>
          <!-- /section -->
          <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
              <div class="row">
                <div class="col-lg-10 mx-auto">
                  <div class="blog classic-view mt-n17">
                    <?php
                    if(isset($data) and is_array($data) and isset($data[0])){ ?>
                      <article class="post">
                          <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                              <a href="NW-<?=$data[0]['id'].'-'.$data[0]['url']?>.html"><img src="<?php echo $base_url.$data[0]['image']; ?>" alt="" /></a>
                              <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                              </figcaption>
                            </figure>
                            <div class="card-body">
                              <div class="post-header">
                                <div class="post-category text-line">
                                  <a class="hover" rel="category"><?=$data[0]['title']?></a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title mt-1 mb-0">
                                  <a class="link-dark" href="NW-<?=$data[0]['id'].'-'.$data[0]['url']?>.html">
                                    <?=$data[0]['main_title']?>
                                  </a>
                                </h2>
                              </div>
                              <!-- /.post-header -->
                              <div class="post-content">
                                <!-- <p> -->
                                  <?php
                                  // $description = substr($data[0]['description'], 0, 400);
                                  // $description = trim($description);
                                  // $description = htmlspecialchars_decode($description);
                                    // echo $description;
                                  ?>
                                <!-- </p> -->
                              </div>
                              <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                          </div>
                          <!-- /.card -->
                      </article>
                      <!-- /.post -->
                    <?php }
                    if(isset($data) and is_array($data) and isset($data[1])){ ?>
                      <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                              <a href="NW-<?=$data[1]['id'].'-'.$data[1]['url']?>.html"><img src="<?php echo $base_url.$data[1]['image']; ?>" alt="" /></a>
                              <figcaption>
                                  <h5 class="from-top mb-0">Read More</h5>
                              </figcaption>
                            </figure>
                            <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                  <a class="hover" rel="category"><?=$data[1]['title']?></a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title mt-1 mb-0">
                                  <a class="link-dark" href="NW-<?=$data[1]['id'].'-'.$data[1]['url']?>.html">
                                    <?=$data[1]['main_title']?>
                                  </a>
                                </h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-content">
                              <?php
                              // $description = substr($data[1]['description'], 0, 400);
                              // $description = trim($description);
                              // $description = htmlspecialchars_decode($description);
                                // echo $description;
                              ?>
                            </div>
                            <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                        </div>
                      <!-- /.card -->
                      </article>
                      <!-- /.post -->
                    <?php } ?>
                  </div>
                  <!-- /.blog -->
                   <!-- /.blog -->
                   <?php if(isset($data) and is_array($data) and count($data) > 2){ ?>
                     <div class="blog grid grid-view">
                        <div class="row isotope gx-md-8 gy-8 mb-8">
                          <?php  for ($x = 2; $x < 6; $x++) {
                            if(isset($data[$x]) and $data[$x] != NULL and is_array($data[$x])){
                            ?>
                              <article class="item post col-md-6">
                                <div class="card">
                                  <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="NW-<?=$data[$x]['id'].'-'.$data[$x]['url']?>.html"><img src="<?php echo $base_url.$data[$x]['image']; ?>" alt="" /></a>
                                    <figcaption>
                                      <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                  </figure>
                                  <div class="card-body">
                                    <div class="post-header">
                                      <div class="post-category text-line">
                                        <a class="hover" rel="category"><?=$data[$x]['title']?></a>
                                      </div>
                                      <!-- /.post-category -->
                                      <h2 class="post-title mt-1 mb-0" style=" min-height: 150px; ">
                                        <a class="link-dark" href="NW-<?=$data[$x]['id'].'-'.$data[$x]['url']?>.html">
                                          <?=$data[$x]['main_title']?>
                                        </a>
                                      </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <?php
                                          // $description = substr($data[$x]['description'], 0, 100);
                                          // $description = trim($description);
                                          // $description = htmlspecialchars_decode($description);
                                          // echo $description;
                                        ?>
                                    </div>
                                    <!-- /.post-content -->
                                  </div>
                                  <!--/.card-body -->
                                </div>
                                <!-- /.card -->
                              </article>
                              <?php
                            }
                          } ?>
                        </div>
                      <!-- /.row -->
                      </div>
                    <?php }
                    $page_count = ceil($total_count/6);
                    ?>
                  <!-- /.blog -->

                    <nav class="d-flex" aria-label="pagination">
                      <ul class="pagination">
                        <li class="page-item <?php if($page == 1){ echo 'disabled'; } ?>">
                          <a class="page-link" href="news.html?page=<?=$page-1?>" aria-label="Previous">
                            <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                          </a>
                        </li>
                        <?php
                        $last_page_disable = '';
                        for ($x = 0; $x < $page_count; $x++) { ?>
                          <li class="page-item <?php if($page == ($x+1)){ echo "active"; } ?>">
                            <a class="page-link" href="news.html?page=<?=$x+1?>"><?=$x+1?></a>
                          </li>
                        <?php } ?>
                        <li class="page-item <?php if($page >= $page_count){ echo 'disabled'; } ?>">
                          <a class="page-link" href="news.html?page=<?=$x+1?>" aria-label="Next">
                            <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                          </a>
                        </li>
                      </ul>
                      <!-- /.pagination -->
                    </nav>
                </div>
                <!-- /column -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container -->
          </section>
          <!-- /section -->

    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-navy text-inverse fut-bg">
        <div class="container pt-12 pt-lg-15 pb-13 pb-md-15 centerinmobile">
            <div class="d-lg-flex flex-row align-items-lg-center">
                <h3 class="display-3 mb-6 mb-lg-0 pe-lg-20 pe-xl-22 pe-xxl-25 text-white"> Take control of the way you
                    pay for healthcare. “Qube Karo!” </h3>
                <a href="#" class="btn btn-white  rounded-pill mb-0 text-nowrap" data-bs-toggle="modal"
                    data-bs-target="#modal-02">Contact Us</a>
            </div>
            <!--/div -->
            <hr class="mt-11 mb-12" />
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-3 col-lg-3">
                    <div class="widget">
                        <!-- <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light.png"
                            alt="" /> -->
                        <p class="mb-4">Copyright © QB Health <br class="d-none d-lg-block" /> Technologies Private Ltd.
                        </p>
                        <div class="row align-items-center">
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                                <img width="100%" src="./assets/img/amazone.png" srcset="./assets/img/amazone.png"
                                    alt="" />
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                                <img width="100%" src="./assets/img/ayush.png" srcset="./assets/img/ayush.png" alt="" />
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 col-4">
                                <img width="100%" src="./assets/img/certin-security.png"
                                    srcset="./assets/img/certin-security.png" alt="" />
                            </div>
                        </div>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-2 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Learn More</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="https://www.qubehealth.com/">Home</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="partners.html">Healthcare Provider</a></li>

                            <li><a href="terms.html#privacy-policy"> Privacy Policy</a></li>
                            <li><a href="terms.html#terms-conditions">Terms and Conditions</a></li>
                            <li><a href="terms.html#user-policy"> Our Financing Partners</a> </li>
                            <li><a href="terms.html#copyrights"> Our Banking Partner</a> </li>
                            <li><a href="terms.html#cookies"> Most Important Terms of Product</a> </li>
                            <li><a href="terms.html#termsyesbank"> Terms and Conditions for Yes Bank Prepaid Instruments </a> </li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-2 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Get in Touch</h4>
                        <a href="https://goo.gl/maps/5CBs2mgLLNpscupT6" target="_blank">
                        <address class="pe-xl-15 pe-xxl-17">QubeHealth,
                            Mumbai,<br>
                            India
                        </address>
                    </a>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-3 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Download Now</h4>
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                                <a href="https://play.google.com/store/search?q=qubehealth&c=apps" target="_blank">
                                    <img width="100%" src="./assets/img/google-playstore.svg" srcset="./assets/img/google-playstore.svg"  alt="" />
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                                <a href="https://apps.apple.com/in/app/qubehealth-care-now-pay-later/id1659360783" target="_blank">
                                    <img width="100%" src="./assets/img/apple-store.svg" srcset="./assets/img/apple-store.svg" alt="" />
                                </a>
                            </div>
                        </div>
                        <br>
                        <!-- /.social -->
                        <nav class="social social-white centerinmobile">
                            <a href="https://www.linkedin.com/company/qubehealth/" target="_blank"><i class="uil uil-linkedin"></i></a>
                            <a href="https://www.facebook.com/QubeHealth" target="_blank"><i class="uil uil-facebook-f"></i></a>
                            <a href="https://www.instagram.com/qube.health/" target="_blank"><i class="uil uil-instagram"></i></a>
                            <a href="https://www.youtube.com/@qubehealth" target="_blank"><i class="uil uil-youtube"></i></a>
                        </nav>
                    </div>
                    <!-- /.widget -->
                </div>
                <div class="col-md-1 col-lg-1">

                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>



    <div class="modal fade" id="modal-02" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="row">
                        <div id="contact_form_div" class="col-lg-12  col-xl-12">
                            <h2 class="display-4 mb-3 text-center" style="margin-bottom: 5px !important;">Drop Us a Line</h2>
                            <p class="lead text-center mb-5">Reach out to us from our contact form and we will get back
                                to you shortly.</p>
                            <form id="contact_form" class="contact-form needs-validation" method="post" action="#"
                                novalidate="">
                                <!-- ./assets/php/contact.php -->
                                <div class="messages"></div>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Full Name" required=""
                                                onkeyup="this.value = this.value.replace(/[^a-zA-Z ]/g, '')">
                                            <label for="form_name">Full Name</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your full name. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_number" type="tel" name="number" class="form-control"
                                                placeholder="Mobile Number" required="" maxlength=10
                                                onkeyup="this.value = this.value.replace(/[^0-9]/g,'')">
                                            <label for="form_lastname">Mobile Number *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your mobile number. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="jane.doe@example.com" required=""
                                                onkeyup="this.value = this.value.replace(/[^a-zA-Z0-9@._]/g, '')">
                                            <label for="form_email">Email *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid email address. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="text" name="company" class="form-control"
                                                placeholder="Company Name" required="">
                                            <label for="form_lastname">Company Name *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your company name. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-5">
                                            <textarea id="form_message" name="message" class="form-control"
                                                placeholder="Your message" style="height: 150px" required=""></textarea>
                                            <label for="form_message">Message *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your messsage. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12 text-center">
                                        <input id="send_message" type="submit"
                                            class="btn btn-primary rounded-pill btn-send" value="Send message">
                                        <img id="form_submit_loader" class="logo-dark" src="./assets/img/loader.gif"
                                            srcset="./assets/img/loader.gif" alt="" style="display:none;" />
                                        <!-- <p class="text-muted" style="margin-bottom: 0px;" ><strong>*</strong> These fields are required.</p> -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <div id="thank_you_div" class="col-lg-12  col-xl-12">
                            <img class="logo-dark" src="./assets/img/confirmed-tick.png"
                                srcset="./assets/img/confirmed-tick.png" alt="" />
                            <h2 class="display-4 mb-3 text-center"> Thank You</h2>
                            <p class="lead text-center mb-10">
                                We Are Trusted By Over 5000+ Clients. Join Them By Using Our Service And Grow Your
                                Business.
                            </p>

                            <input data-bs-dismiss="modal" id="ok_button" type="button"
                                class="btn btn-primary rounded-pill btn-send mb-3" value="OK">
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->


    <div class="modal fade" id="thankyou_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div id="joinus_form_div" class="col-lg-12  col-xl-12">
                            <h2 class="display-4 mb-3 text-center" style="margin-bottom: 5px !important;">Join the #QubeCrew</h2>
                            <p class="lead text-center mb-5">
                              <!-- Reach out to us from our contact form  -->
                              Do you want to work with us? please fill the form below..</p>
                            <form id="joinus_form" class="joinus-form needs-validation" method="post" action="#"
                                novalidate="">
                                <!-- ./assets/php/contact.php -->
                                <div class="messages"></div>
                                <div class="row gx-4">
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_first_name" type="text" name="first_name" class="form-control"
                                                placeholder="First Name" required=""
                                                onkeyup="this.value = this.value.replace(/[^a-zA-Z ]/g, '')">
                                            <label for="form_name">First Name</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your first name. </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form__last_name" type="text" name="last_name" class="form-control"
                                                placeholder="Last Name" required=""
                                                onkeyup="this.value = this.value.replace(/[^a-zA-Z ]/g, '')">
                                            <label for="form_name">Last Name</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your last name. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_number" type="tel" name="number" class="form-control"
                                                placeholder="Mobile Number" required="" maxlength=10
                                                onkeyup="this.value = this.value.replace(/[^0-9]/g,'')">
                                            <label for="form_lastname">Mobile Number *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your mobile number. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="jane.doe@example.com" required=""
                                                onkeyup="this.value = this.value.replace(/[^a-zA-Z0-9@._]/g, '')">
                                            <label for="form_email">Email *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please provide a valid email address. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-md-6">
                                        <div class="form-select-wrapper mb-4">
                                            <select class="form-select" name="department" aria-label="Default select example">
                                              <option selected>Select the Department</option>
                                              <option value="Engineering & Technology">Engineering & Technology</option>
                                              <option value="Sales"> Sales </option>
                                              <option value="Marketing"> Marketing </option>
                                              <option value="Operations"> Operations </option>
                                              <option value="Finance"> Finance </option>
                                              <option value="Partners"> Partners </option>
                                              <option value="Human Resources"> Human Resources </option>
                                              <option value="Design"> Design </option>
                                              <option value="Customer Experience"> Customer Experience </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-4">
                                            <input id="form_portfoliolink" type="text" name="portfoliolink" class="form-control"
                                                placeholder="Portfolio Link (Optional)">
                                            <label for="form_lastname">Portfolio Link (Optional)</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your Portfolio Link</div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12">
                                        <div class="form-floating mb-5">
                                            <textarea id="form_message" name="message" class="form-control"
                                                placeholder="Your message" style="height: 150px" required=""></textarea>
                                            <label for="form_message">Message *</label>
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your messsage. </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-4">
                                            <input id="form_lastname" type="file" name="resume" class="form-control"
                                                placeholder="Company Name" required="">
                                            <div class="valid-feedback"> Looks good! </div>
                                            <div class="invalid-feedback"> Please enter your company name. </div>
                                        </div>
                                    </div>
                                    <!-- /column -->
                                    <div class="col-12 text-center">
                                        <input id="send_message_join" type="submit" class="btn btn-primary rounded-pill btn-send" value="Submit">
                                        <img id="form_submit_loader_join" class="logo-dark" src="./assets/img/loader.gif"
                                            srcset="./assets/img/loader.gif" alt="" style="display:none;" />
                                        <p class="text-muted" style="margin-bottom: 0px;" ><strong>*</strong> These fields are required.</p>
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </form>
                            <!-- /form -->
                        </div>
                        <div id="thank_you_div_partner" class="col-lg-12  col-xl-12">
                            <img class="logo-dark" src="./assets/img/confirmed-tick.png"
                                srcset="./assets/img/confirmed-tick.png" alt="" />
                            <h2 class="display-4 mb-3 text-center"> Thank You</h2>
                            <p class="lead text-center mb-10">
                                Thank you for visiting our website. Currently, we don't have any job openings available. However, we are always looking for talented individuals to join our team. We encourage you to share your CV to <a href="mailto:hr@qubehealth.com">hr@qubehealth.com</a>, so we can consider you for future career opportunities that align with your skills and experience.
                            </p>

                            <input data-bs-dismiss="modal" id="ok_button" type="button"
                                class="btn btn-primary rounded-pill btn-send mb-3" value="OK">
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    <!--/.modal -->

    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
    <script type="text/javascript">
        $("#contact_form").submit(function (e) {
            e.preventDefault();
        });
    </script>
</body>

</html>
