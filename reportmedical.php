
<!DOCTYPE html>
<html lang="ar"dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> استفسار عن مريض</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>



  
<?php


require 'connection.php';
?>
<body>
<?php  'connection.php';
  
  $result = mysqli_query($conn, "SELECT * FROM reports");
  ?>

<div class="bg-contact2" style="background-image: url('images/hhh.png');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <div class="contact2-form validate-form">
                    <span class="contact2-form-title">
                    استفسار عن مريض 
                    </span>
 <div>
    


 </div>


<form  action= "reportmedical.php" method= "POST"   enctype="multipart/form-data">

<div class="wrap-input2 validate-input" >
                        <input class="input2" type="text" name="npatient" data-validate = " المستشفى   ">
                        <span class="focus-input2" data-placeholder="اسم المريض "
                        ></span>
                    </div>
                
                    <div class="form-row">
                            <div  class="wrap-input2 validate-input"> الفئة


                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="category[]">
                                            <option disabled="disabled" selected="selected">اختيار</option>
                                            <option name="category[]"> طلب  تقرير ملخص خروج من التنويم</option>
                                            <option name= "category[]"> طلب تقرير إجازة مرضية</option>
                                            <option name= "category[]"> طلب تقرير طبي مفصل </option>
                                           
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>

           
                    


                    <!-- data-validate = -->
                    

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <input class="contact2-form-btn"   name="first"  type= "submit"  value="إرسال">

                          

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST['first'])) {
        $npatient=$_POST['npatient'];
        $category=$_POST['category'];
        $b2=implode(',',$category);
        $nfile=$_POST['nfile'];
        $idnum=$_POST['idnum'];
        $contactnum=$_POST['contactnum'];
        $datebirth=$_POST['datebirth'];

        $query = mysqli_query($conn," INSERT INTO  reportmedical(npatient,category,nfile,idnum,contactnum,datebirth)
        values ('$npatient','$b2','$nfile','$idnum','$contactnum','$datebirth')");
                                      echo "<script>window.open('/index.php','_self')</script>";

    }

    ?>
    

<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>

</body>



</html>
