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
  
$result = mysqli_query($conn, "SELECT * FROM condoctors");
?>
  



<div class="bg-contact2" style="background-image: url('images/hhh.png');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <div class="contact2-form validate-form">
                    <span class="contact2-form-title">
                    التواصل مع الطبيب
                    </span>
 <div>
    


 </div>

<form  action= "condoctor.php" method= "POST"   enctype="multipart/form-data">

<div class="wrap-input2 validate-input" >
						<input class="input2" type="text" name="nhosptail">
						<span class="focus-input2" data-placeholder="  اسم المستشفى"
                        ></span>
					</div>
                  

					<div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="Specialist">
						<span class="focus-input2" data-placeholder="التخصص"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="ndoctor">
						<span class="focus-input2" data-placeholder="اسم الدكتور"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="npatient">
						<span class="focus-input2" data-placeholder="اسم المريض"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="nfile">
						<span class="focus-input2" data-placeholder="رقم الملف"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="number"  name="idnum">
						<span class="focus-input2" data-placeholder="رقم الهوية\الاقامة"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="inpatient">
						<span class="focus-input2" data-placeholder="صلة قرابة المتصل"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="number"  name="nphone">
						<span class="focus-input2" data-placeholder="رقم الجوال"></span>
					</div>
                    <div class="wrap-input2 validate-input" data-validate="العمر مطلوب">
						<input type="text"  name="desstate">
						<span class="focus-input2" data-placeholder="الحالة"></span>
					</div>
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
  //  $ID=$_POST['ID'];

    $nhosptail=$_POST['nhosptail'];
    $Specialist=$_POST['Specialist'];
    $ndoctor=$_POST['ndoctor'];
    $npatient=$_POST['npatient'];
    $nfile=$_POST['nfile'];
    $idnum=$_POST['idnum'];
    $inpatient=$_POST['inpatient'];
    $nphone=$_POST['nphone'];
    $desstate=$_POST['desstate'];





   
$query = mysqli_query($conn," INSERT INTO  condoctors (nhosptail,Specialist,ndoctor,npatient,nfile,idnum,inpatient,nphone,desstate) 
values ('$nhosptail','$Specialist','$ndoctor','$npatient','$nfile','$idnum','$inpatient','$nphone','$desstate')");
                              echo "<script>window.open('/imaun-hosptail/patientservice/index.php','_self')</script>";

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