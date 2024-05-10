<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>نظام استرو سوفت </title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
      
      
      
     
  </head>
    
    
<body>
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="https://wa.me/+963953223683"> <img src="images/logo.PNG" style="width:70px; hight:20px;"> </a>
  </div>
</nav>
    
    <br>
    
        <h3 class="text-center">اهلا بك عزيزي السائق </h3>
    <p class="text-center">ادخل اسمك وكلمة السر الخاصة بك لإنشاء رحلة جديدة </p>
    

<?php include 'connection.php';
    
    session_start();
    
    if(isset($_SESSION['Dname'])){
        header('Location:./index.php');
    }
    
    else {
        
    
    
    ?>




<?php 

  if(isset($_POST['log']))
  {
    $Dname = $_POST['Dname'];
    $Dpass =$_POST['Dpass'];

  }

?>


<br><br><br><br>
<div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-box">
            <div class="row">
              <div class="col-12 mb-3">
                <input type="text" class="form-control" name="Dname" placeholder="اسم السائق">
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" name="Dpass" placeholder="كلمة السر">
              </div>

              <div class="col-12 mb-3">
                
              </div>

              <div class="col-12 mb-3">
                <input type="submit" name="log" value="تسجيل الدخول" class="btn btn-primary form-control">
                        <br><br>
                <?php 
                    //chech if inputs are not empty 

                    if(empty($Dname) || empty($Dpass) )
                    {
                      echo '<div class="alert alert-danger text-center"> الرجاء ملى الحقول </div>';
                    } 

                    // check if valus are match 

                    else {
                            $query = "SELECT * FROM admin WHERE Dname='$Dname' AND Dpass='$Dpass'";
                            $result = mysqli_query($con,$query);
                            $row = mysqli_num_rows($result);

                            if ($row > 0) {
                              
                              $_SESSION['Dname']=$Dname;
                             echo '<div class="alert alert-success text-center" role="alert">
                             معلومات صحيحة!
                           </div>';
                          header('Location:./index.php');
                          ob_end_flush();
                              
                            }

                            else {
                              echo '<div class="alert alert-danger text-center"> البيانات غير متطابقة </div>';
                            }
                    }

                ?>


              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> 


     <p class="text-center">نظام حجوزات الهدى الاولى للنقليات الالكتروني </p>
    
    
    
    	<footer class="footer">
         
        </footer>
    <!-- base:js -->
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/progressbar.js/progressbar.min.js"></script>
		<script src="vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
		<script src="vendors/justgage/raphael-2.1.4.min.js"></script>
		<script src="vendors/justgage/justgage.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>


<?php 
    }
?>