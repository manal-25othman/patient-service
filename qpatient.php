
<!DOCTYPE html>
<html lang="ar"dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>خدمات المرضى</title>
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
  
$result = mysqli_query($conn, "SELECT * FROM qupatient");
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


<form  action= "qpatient.php" method= "POST"   enctype="multipart/form-data">

<div class="wrap-input2 validate-input" >
                        <input class="input2" type="text" name="nhosptail" data-validate = " المستشفى   ">
                        <span class="focus-input2" data-placeholder="المستشفى "
                        ></span>
                    </div>
                  

      
                    <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="text" name="nlocation">
                        <span class="focus-input2" data-placeholder="الموقع   "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="text" name="npatient">
                        <span class="focus-input2" data-placeholder="   اسم المريض  "></span>
     
            </div>

           <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="number" name="idnum">
                        <span class="focus-input2" data-placeholder="  رقم الهوية للمريض "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="number" name="nfile">
                        <span class="focus-input2" data-placeholder="  رقم الملف للمريض "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="text" name="namecaller">
                        <span class="focus-input2" data-placeholder="    اسم المتصل  "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="text" name="repatient">
                        <span class="focus-input2" data-placeholder="   علاقة المتصل بالمريض "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="number" name="contactnum">
                        <span class="focus-input2" data-placeholder="     رقم التواصل  "></span>
     
            </div>
            <div class="wrap-input2 validate-input" data-validate = "الجنسية مطلوبة">
                        <input class="input2" type="text" name="desstate">
                        <span class="focus-input2" data-placeholder="     الحالة  "></span>
     
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
        $nhosptail=$_POST['nhosptail'];
        $nlocation=$_POST['nlocation'];
        $npatient=$_POST['npatient'];
        $idnum=$_POST['idnum'];
        $nfile=$_POST['nfile'];
        $namecaller=$_POST['namecaller'];
        $repatient=$_POST['repatient'];
        $contactnum=$_POST['contactnum'];
        $desstate=$_POST['desstate'];



          


    $query = mysqli_query($conn," INSERT INTO  qupatient(nhosptail,nlocation,npatient,idnum,nfile,namecaller,repatient,contactnum,desstate)
    values ('$nhosptail','$nlocation','$npatient','$idnum','$nfile','$namecaller','$repatient','$contactnum','$desstate')");
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
