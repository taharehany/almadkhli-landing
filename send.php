<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta property="og:title" content="">
   <meta property="og:type" content="The type">
   <meta property="og:url" content="http://url.com/">
   <meta property="og:image" content="http://image.jpg">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="../images/favicon.png">
   <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js">
      </script>
    <![endif]-->
   <title>المدخلي</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700&amp;display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../css/style.css">
</head>

<body>
   <div class="main-wrapper">
      <!--header-->
      <header>
         <div class="middle-part">
            <div class="container">
               <div class="middle-part-content">
                  <div class="box"><a class="brand" href="index.html"> <img class="img-fluid" data-src="images/logo.png" alt=""></a></div>
                  <div class="box">
                     <div class="info phone">
                        <div class="icon"><i class="bi bi-telephone"> </i></div>
                        <div class="text">
                           <h4>اتصل الآن</h4>
                           <p>‎<a href="tel:+9660118101008">+9660118101008</a></p>
                        </div>
                     </div>
                     <div class="info address">
                        <div class="icon"><i class="bi bi-pin-map"> </i></div>
                        <div class="text">
                           <h4>العنوان</h4>
                           <p>‎عمارة التورن، شارع زيادة القرطبي، حي الملز، الرياض</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--navbar desktop-->
         <nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
               <div class="navbar-content">
                  <div class="group">
                     <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger-menu"><span></span><span></span><span></span></div>
                     </button>
                     <div class="login"><a class="btn" href="#contact">راسلنا الآن <i class="bi bi-arrow-left-circle"></i></a></div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" aria-current="page" href="/">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
         <!--navbar desktop-->
         <!--side menu in mobile only-->
         <div class="offcanvas offcanvas-end" id="side_menu" data-bs-scroll="true" tabindex="-1" aria-labelledby="side_menu_label">
            <div class="offcanvas-header">
               <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
               <div class="navbar"><a class="brand" href="index.html"> <img class="img-fluid" data-src="images/logo.png" alt=""></a>
                  <div class="collapsed navbar-collapse" id="navbarNavSide">
                     <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" aria-current="page" href="/">الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">تواصل معنا</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!--header-->
      <style>
         body {
            text-align: center;
            height: auto;
         }

         header .navbar .navbar-nav .nav-link {
            /* color: #222; */
         }

         header .navbar .navbar-nav .nav-link:hover {
            /* color: #000; */
         }

         header .navbar {
            box-shadow: 0 4px 10px 0 rgb(115 115 115 / 5%), 0 7px 10px -5px rgb(126 126 126 / 5%);
            background-color: #34508a;
         }

         header .navbar .navbar-collapse {
            justify-content: flex-start;
         }

         /* header .navbar .colored {
          display: block;
      }
      header .navbar .white {
          display: none;
      } */

         .main {
            height: 50vh;
            display: flex;
            align-items: center;
            justify-content: center
         }

         h3 {
            line-height: 2;
            text-align: center;
            direction: rtl;
            padding-top: 50px;
         }

         /* footer {
         position: absolute;
         height: auto;
         width: 100%;
         bottom: 0;
      } */
      </style>
      
      <!-- main -->
      <main class="main">
         <div class="container">
            <h3> 
               <?php
                  $email = "ryhanytaha@gmail.com";
                  if (!empty($_POST)) {
                     if (empty($_POST['name']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['message'])) {
                        echo ("تأكد من ملئ جميع الحقول!");
                     } else {
                        $message  = "name :\n{$_POST["name"]}\n";
                        $message .= "number :\n{$_POST["phone"]}\n";
                        $message .= "email :\n{$_POST["email"]}\n";
                        $message .= "message :\n{$_POST["message"]}\n";
                        $message .= "IP :\n{$_SERVER['REMOTE_ADDR']}\n";
                        $message = stripslashes($message);
                        $message = wordwrap($message, 70);
                        mail($email, "Qaswarah", $message, "From: {$_POST["name"]} <{$_POST["email"]}>");
                        echo ("تم إرسال رسالتك بنجاح وسيتم التواصل معك في أقرب وقت، شكرا لك :(");
                     }
                  }
                  ?> 
               </h3>
         </div>
      </main>
      <!-- main -->

      <!--footer part-->
      <footer>
         <div class="container">
            <div class="footer-content">
               <div class="row">
                  <div class="col-lg-5 col-md-6">
                     <div class="footer-box">
                        <div class="text"><a class="footer-logo" href="index.html"> <img class="img-fluid mb-4" data-src="images/logo.png" alt=""></a>
                           <p>يقدم مكتب المدخلي (محامون ومستشارون قانونيون) خدمات قانونية سريعة وفعالة للعملاء ولديه نهج استباقي وإيجابي نحو إيجاد حلول جذرية للمشكلات القانونية عند ظهورها. يتمتع كل عضو من أعضاء فريق العمل المحترف بخبرة وتعمق كبيرين وفق منهجيات قانونية راسخة في كافة المجالات وذلك عبر سجل حافل بالإنجازات في المهام التي تم إسنادها إليهم. يلتزم المكتب بإيجاد الحلول القانونية التي تحقق نتائج ملموسة وفعالة من حيث التكلفة لعملائه.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="footer-box">
                        <h3>روابط سريعة</h3>
                        <ul class="map-links">
                           <li><a href="#!">الرئيسية</a></li>
                           <li><a href="about.html">من نحن</a></li>
                           <li><a href="services.html">الخدمات</a></li>
                           <li><a href="contact.html">تواصل معنا</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="footer-box">
                        <h3>معلومات التواصل</h3>
                        <div class="contact">
                           <p> <i class="bi bi-pin-map"></i>عمارة التورن، شارع زيادة القرطبي، حي الملز، الرياض</p>
                           <p> <i class="bi bi-telephone"></i><a dir="ltr" href="tel:+9660118101008">+9660118101008</a></p>
                           <p> <i class="bi bi-telephone"></i><a dir="ltr" href="tel:+966503442232">+966503442232</a></p>
                           <p> <i class="bi bi-telephone"></i><a dir="ltr" href="tel:+966547740703">+966547740703 </a></p>
                           <p> <i class="bi bi-envelope"></i><a href="mailto:Info@almadkhli.com">Info@almadkhli.com</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="copy-text">
                  <p>جميع الحقوق محفوظة &copy; 2022</p>
               </div>
            </div>
         </div>
      </footer>
      <!--footer part-->
   </div>
   <!--scripts-->
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/jquery.lazy.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/script.js"></script>
   <!-- GetButton.io widget-->
   <!-- /GetButton.io widget-->
</body>

</html>