<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dairy Product</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />

  <style>
        .hi-slide .hi-next,
    .hi-slide .hi-prev {
      top: 56%;
      height: 40px;
      margin-top: -40px;
      border-radius: 50px;
      line-height: 42px;
      background-color: #f82249;
      font-size: 30px;
    }

    .hover-underline-animation {
      display: inline-block !important;
      position: relative !important;
      color: #ffffff !important;
    }

    .hover-underline-animation:after {
      content: '' !important;
      position: absolute !important;
      width: 100% !important;
      transform: scaleX(0) !important;
      height: 3px !important;
      bottom: 0 !important;
      left: 0 !important;
      background-color: #f82249 !important;
      transform-origin: bottom right !important;
      transition: transform 0.25s ease-out !important;
    }

    .hover-underline-animation:hover:after {
      transform: scaleX(1) !important;
      transform-origin: bottom left !important;
    }

    .hover-underline-animation:hover {
      color: #f82249 !important;
    }

    .tug-1 {
      text-underline-offset: 3px !important;
    }

    .tug-2 {
      text-underline-offset: 6px !important;
    }

    .tug-3 {
      text-underline-offset: 9px !important;
    }
  </style>

  <!-- =======================================================
  * Template Name: TheEvent - v4.8.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload="myFunction()">

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="assets/img/logonew.png" alt="" title=""></a>
      </div>

      <a class="rounded-0 btn btn-sm btn-danger shadow-none" data-bs-toggle="offcanvas" href="#offcanvasExample"
        role="button" aria-controls="offcanvasExample"><i class="bi bi-list"></i></a>

    </div>
  </header>
  <!-- End Header -->

  <div class="offcanvas offcanvas-end w-auto" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
  aria-labelledby="offcanvasExampleLabel" style="background: rgba(6, 12, 34, 0.4);">
  <div class="offcanvas-header">
    <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
    <!-- <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas"
      aria-label="Close"></button> -->
  </div>
  <div class="offcanvas-body pt-0">
    <div class="container-fluid mb-4 text-center">
      <img src="assets/img/logonew.png" alt="" class="img-fluid" width="200">
    </div>
    <ul class="navbar-nav text-center">
    <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page" href="adminhome.php">Home</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="vendors.php">Vendors</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="manvendors.php">Manage Vendors</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="manusers.php">Manage Users</a>
      </li>
      <li class="nav-item d-block">
        <a class="nav-link hover-underline-animation active fs-4 text-start" aria-current="page"
          href="login.html">Logout</a>
      </li>
    </ul>
  </div>
</div>

  <main id="main" class="main-page">

    <!-- ======= Speaker Details Sectionn ======= -->
    <section id="contact" class="section-bg" style="background-color: #99ebff;">

      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Create A New Vendor</h2>
        </div>

        <div class="row">

          <div class="col-md-6">
            <img src="./assets/img/ven.png" class="col-lg-12" style="height:500px" />
          </div>

          <div class="col-md-6">
            <form id="f1" action="savevendata.php" style="font-weight:bolder;">
            Vendor Name :
            <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                               
              <input type="text" class="form-control" id="name" name="name"  runat="server" placeholder="Enter Name" onchange="valuname()" />
           </div>
           Vendor Userid:
            <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                               
              <input type="text" class="form-control" id="uname" name="uname"  runat="server" placeholder="Enter UserName" readonly />
           </div>
           Vendor Password :
           <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                              
             <input type="password" class="form-control" id="pswd" name="pswd"  runat="server" placeholder="Enter Password" />
          </div>
          Vendor Email :
          <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                             
            <input type="email" class="form-control" id="email" name="email"  runat="server" placeholder="Enter Email" />
         </div>
         Vendor Phone # :
         <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                            
           <input type="phone" class="form-control" id="phone" name="phone"  runat="server" placeholder="Enter phone" />
        </div>
         Vendor Address :
         <div class="form-group col-lg-12" style="font-size:20px;padding-bottom:10px;">
                            
           <textarea class="form-control" id="addr" name="addr"  runat="server" placeholder="Enter addr" cols="30"></textarea> 
        </div>
         
        <div class="form-group col-lg-5" style="font-size:20px;padding-bottom:10px;float:left;margin-right: 5px;">
          <input type="submit" value="Create Account" class="btn col-lg-12" onclick="return Validator();" style="background-color:#081b37;color:white" />
       </div>
        
       <div class="form-group col-lg-5" style="font-size:20px;padding-bottom:10px;float:left;">
         <input type="reset" value="Clear Data" class="btn btn-danger col-lg-12" />
      </div>
    </form>

          </div>

          
  <script>
    function Validator() {
        debugger;
        var flag = true;

        var unamer = document.getElementById('uname').value;
        var intRegexunamer = /^[A-Za-z0-9 ]+$/;
        if (!intRegexunamer.test(unamer)) {
            alert('Please enter a valid username.');
            flag = false;
            return flag;
        }
        else {
            flag = true;
        }

        var namer = document.getElementById('name').value;
        var intRegexnamer = /^[A-Za-z ]+$/;
        if (!intRegexnamer.test(namer)) {
            alert('Please enter a valid name.');
            flag = false;
            return flag;
        }
        else {
            flag = true;
        }


        var phone = document.getElementById('phone').value;
        var intRegex = /^(6|7|8|9)[0-9]{9}$/;
        if (!intRegex.test(phone)) {
            alert('Please enter a valid phone number.');
            flag = false;
            return flag;
        }
        else {
            flag = true;
        }


        var email = document.getElementById('email').value;
        var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!emailReg.test(email) || email == '') {
            alert('Please enter a valid email id.');
            flag = false;
            return flag;
        }
        else {
            flag = true;
        }



        var pswd = document.getElementById('pswd').value;
        var pswdPattern = /^[A-Za-z0-9]{5,8}$/;
        if (!pswdPattern.test(pswd)) {
            alert('Please enter valid password between 5 to 8 characters.');
            flag = false;
            return flag;
        }
        else {
            flag = true;
        }



        return flag;
    }
</script>


        </div>

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row justify-content-between">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="assets/img/logonew.png" alt="TheEvenet" width="100">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4 class="mt-5">Contact Us</h4>
            <p>
              Vilco Centre, B Wing, 1st Floor,<br>
              Subhash Road, Vile Parle (E),<br>
              Mumbai 400 057 <br>
              <strong>Phone:</strong> +919999999999<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Dairy Product</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.js"></script>

  <script>
    $(function(){
      $(".lb-details").addClass("text-center")
    })

    function myFunction()
		{
		debugger;
		document.getElementById('uname').value="Ven"+Math.floor((Math.random() * 1234) + 1);
		}
  </script>

</body>

</html>