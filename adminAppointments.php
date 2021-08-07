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
?>
<?php
$result = mysqli_query($conn, "SELECT * FROM Complaints ");
?>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a href="/patientservicee/patientservice/Login-System-hosptail/logout.php">خروج </a></li>

          <li><a class="active" href="index.html">الخدمات الالكترونية</a></li>
         

  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="logo float-left">
              
              <a href="/imaun-hosptail/index.php" class="scrollto"><img src="assets/img/logo-light.gif" alt="" class="img-fluid">
                  </a>
          </div>

    </div>

  </header>

  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>  المواعيد</h1>
     
    </div>
  </section>


  <main id="main">

   

  </main>


  <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: right;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
                     
<th>
                         الاسم 
                        </th>
                       
                        <th>
                      الفئة
                       </th>
                        <th>
                        رقم الملف
                        </th>
                          <th>
                         رقم الهوية 
                        </th>
                        <th>
                         رقم التواصل     
                        </th> 
                        
                        <th>
                       العيادة
                      </th>          
                     

                        
                      </thead>
                      <tbody>
                      <?php
                            $result = mysqli_query($conn, "SELECT * FROM appointments");

                            while($row = mysqli_fetch_assoc($result)) 
{ ?>
                        <tr>
                       

                          <td>
                        <?php echo $row["npatient"]?>
                          </td>
                          <td>
                        <?php echo $row["category"]?>
                          </td>

                          <td>
                        <?php echo $row["nfile"]?>
                          </td>
                          <td>
                        <?php echo $row["idnum"]?>
                          </td>
                          <td>
                        <?php echo $row["contactnum"]?>
                          </td>
                          <td>
                        <?php echo $row["clinic"]?>
                          </td>
    
                        </tr>
                        <?php } ?> 
                      </tbody>
                    </table>
</table>

</br>
</br>
</br>
</br>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>imaun-hosptail</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">manal alareqi</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>


  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>