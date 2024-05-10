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
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
      
      <style>
      
             .h1 , h1 , .h2 , h2 , .h3 , h3 , .h4 , h4 , .h5 , h5 , .h6 , h6 , p , span , body {
              
               font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
              
          }
          
      </style>
     
  </head>
    
    
    <?php include 'connection.php';
    

    
    

    ?>
    
    
    <?php
    
       session_start();
    
    $Dname = $_SESSION['Dname'];
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
        
    
    
    ?>
    
    
 
    
<?php 

if(isset($_POST['submit'])){

$dname = $_POST['dname'];
    $idn = $_POST['idn'];
    $dcar = $_POST['dcar'];
    $lnumber = $_POST['lnumber'];
$vname = $_POST['vname'];
$vcome = $_POST['vcome'];
$vnumber = $_POST['vnumber'];
$dday = $_POST['dday'];
$dtime = $_POST['dtime'];
$vout = $_POST['vout'];
 

    $vnamea = $_POST['vnamea'];
    $vnameb= $_POST['vnameb'];
    $vnamec = $_POST['vnamec'];
    $vnamed = $_POST['vnamed'];
    $vnamee = $_POST['vnamee'];
    $vnamef = $_POST['vnamef'];
    $vnameg = $_POST['vnameg'];
    $vnameh = $_POST['vnameh'];
    $vnamei = $_POST['vnamei'];
    $vnamej = $_POST['vnamej'];
    $vnamek = $_POST['vnamek'];
    
    $vnumbera = $_POST['vnumbera'];
    $vnumberb = $_POST['vnumberb'];
    $vnumberc = $_POST['vnumberc'];
    $vnumberd = $_POST['vnumberd'];
    $vnumbere = $_POST['vnumbere'];
    $vnumberf = $_POST['vnumberf'];
    $vnumberg = $_POST['vnumberg'];
    $vnumberh = $_POST['vnumberh'];
    $vnumberi = $_POST['vnumberi'];
    $vnumberj = $_POST['vnumberj'];
    $vnumberk = $_POST['vnumberk'];


     
      $query = "INSERT INTO book (dname,idn,dcar,lnumber,vname,vcome ,vnumber ,dday ,dtime,vout, vnamea, vnameb,vnamec , vnamed, vnamee, vnamef,vnameg , vnameh, vnamei,vnamej ,vnamek,vnumbera ,vnumberb ,vnumberc ,vnumberd ,vnumbere ,vnumberf ,vnumberg ,vnumberh ,vnumberi ,vnumberj ,vnumberk ) VALUE('$dname','$idn','$dcar','$lnumber','$vname','$vcome','$vnumber','$dday','$dtime', '$vout' ,'$vnamea' , '$vnameb', '$vnamec','$vnamed','$vnamee','$vnamef','$vnameg','$vnameh','$vnamei','$vnamej','$vnamek' ,'$vnumbera','$vnumberb','$vnumberc','$vnumberd','$vnumbere','$vnumberf','$vnumberg','$vnumberh','$vnumberi','$vnumberj','$vnumberk')";
      $resault = mysqli_query($con,$query);
    

}
?>

    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  <body dir="rtl">
    <div class="container-scroller">
				
		<!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
      <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
           
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="https://wa.me/+963953223683"><img src="images/logo.PNG" style="height: 200px; width: 200px;" alt="logo"/></a>
                <a class="navbar-brand brand-logo-mini" href="https://wa.me/+963953223683"><img src="images/logo.PNG" style="height:100%; width: 100%;" alt="logo"/></a>
            </div>
           
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
            
            
            
        </div>
      </nav>
      <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">لوحة التحكم</span>
                </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="mdi mdi-cube-outline menu-icon"></i>
                    <span class="menu-title">سيارتي</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="submenu text-center">
                      <ul class="text-center">
                          <li class="nav-item text-center"><a class="nav-link text-center" href="mycar.php">المعلومات الشخصية</a></li>
                          <li class="nav-item text-center"><a class="nav-link text-center" href="edit-car.php">تغيير السيارة </a></li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item">
                  <a href="mydrive.php" class="nav-link">
                    <i class="mdi mdi-chart-areaspline menu-icon"></i>
                    <span class="menu-title">جميع الرحلات</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="newdriver.php" class="nav-link">
                    <i class="mdi mdi-finance menu-icon"></i>
                    <span class="menu-title">سائق جديد</span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="clint.php" class="nav-link">
                    <i class="mdi mdi-grid menu-icon"></i>
                    <span class="menu-title">العملاء </span>
                    <i class="menu-arrow"></i>
                  </a>
              </li>
             
             
              <li class="nav-item">
                  <a href="mydrive.php" class="nav-link">
                    <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                    <span class="menu-title">الرحلات</span></a>
              </li>
            </ul>
        </div>
      </nav>
    </div>
    <!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						
                        
                         
                        <?php 
        
        
        $query = 'SELECT * FROM admin';
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($res);
     
     
        
                        ?>
                      
                        <div class="alert alert-success">
                        <h3 class="text-center">اهلا بكم عزيزي السائق </h3>
                        <h3 class="text-center">اسم حضرتكم : <span><?php echo $Dname;?></span></h3>
                        </div>
                        
                   
                        <p class="text-center">لاي استفسارات راسل مدير التشغيل</p><a class="text-center" href="https://wa.me/+966561271275">ابو حمدي</a>
                        
                       
                        <br>
                        <form action="index.php" method="POST">
  <div class="form-row">

      
      
      
             <?php 
        
        
        $query = "SELECT * FROM admin WHERE Dname='$Dname'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($res);
     
     
        
                        ?>
      
       <div class="col">
      <input type="hidden" name="dname" value="<?php echo $Dname;?>" class="form-control" placeholder="">
    </div>
        <div class="col">
      <input type="hidden" name="idn" value="<?php echo $row['Did'];?>" class="form-control" placeholder="">
    </div>
        <div class="col">
      <input type="hidden" name="dcar" value="<?php echo $row['Dcar'];?>" class="form-control" placeholder="">
    </div>
        <div class="col">
      <input type="hidden" name="lnumber" value="<?php echo $row['Dcarid'];?>" class="form-control" placeholder="">
    </div>
      
      
      
      
      
      
      <br>
      <b> <p class="text-center">معلومات الضيف</p></b>
    <div class="col">
    
      <input type="text" name="vname" class="form-control" placeholder=" اسم الضيف الاول">
    
       <div class="col">
      <input type="number" name="vnumber" class="form-control" placeholder="رقم الجوال">
    </div>
      
       <div class="col">
      <input type="text" name="vcome" class="form-control" placeholder="جهة القدوم">
    </div>
      
      
      <div class="col">
      <input type="text" name="vout" class="form-control" placeholder="جهة الوصول">
    </div>
      
      
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamea" class="form-control" placeholder="اسم الضيف الثاني">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumbera" class="form-control" placeholder="رقم الضيف الثاني">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnameb" class="form-control" placeholder="اسم الضيف الثالث">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberb" class="form-control" placeholder=" رقم الضيف الثالث">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamec" class="form-control" placeholder="اسم الضيف الرابع">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberc" class="form-control" placeholder=" رقم الضيف الرابع">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamed" class="form-control" placeholder="اسم الضيف الخامس">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberd" class="form-control" placeholder="رقم الضيف الخامس">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamee" class="form-control" placeholder="اسم الضيف السادس">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumbere" class="form-control" placeholder="رقم الضيف السادس">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamef" class="form-control" placeholder="اسم الضيف السابع">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberf" class="form-control" placeholder="رقم الضيف السابع">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnameg" class="form-control" placeholder="اسم الضيف الثامن">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberg" class="form-control" placeholder=" رقم الضيف الثامن">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnameh" class="form-control" placeholder="اسم الضيف التاسع">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberh" class="form-control" placeholder="   رقم الضيف التاسع">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamei" class="form-control" placeholder="اسم الضيف العاشر">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberi" class="form-control" placeholder="رقم الضيف العاشر">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamej" class="form-control" placeholder="اسم الضيف الاحدا عشر">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberj" class="form-control" placeholder="رقم الضيف الاحدا عشر">
              
    </div> 
         
</details>
    
          
     <details>
  <summary>اضافة</summary>
   <div class="col">
       
      <input type="text" name="vnamek" class="form-control" placeholder="اسم الضيف الاثنا عشر">
              
    </div> 
         
         
           <div class="col">
       
      <input type="text" name="vnumberk" class="form-control" placeholder="  ارقم الضيف الاثنا عشر">
              
    </div> 
         
</details>
    
    
        
     
    
      
      
     
      
      
        <br>
     <b>  <p class="text-center">تاريخ الرحلة</p></b>
      
      
       <div class="col">
          <label>اليوم</label> 
           <select name="dday" class="form-control">
           <option value="الاحد">الاحد</option>
           <option value="الاثنين">الاثنين</option>
           <option value="الثلاثاء">الثلاثاء</option>
           <option value="الاربعاء">الاربعاء</option>
           <option value="الخميس">الخميس</option>
           <option value="الجمعة">الجمعة</option>
           <option value="السبت">السبت</option>
           </select>
           
     
    </div>
      
      <br>
      
      
       <div class="col">
      <input type="date" name="dtime" class="form-control" placeholder="التاريخ">
    </div>
      
      
      
  </div>
                            <br>
                            <div class="">
                            <input name="submit" class="btn btn-primary" type="submit" />
                            </div>
                            </div>
</form>
                        <br>
                        
                        <div class="row text-center">
                            <br>
                            <p class="text-center"> بعد ارسال المعلومات الى السيرفر اضغط على تاكيد الحجز للطباعة</p>
                        
                       
                        
                        </div>
                        
                        
                          <a href="pdf.php">  <button class="btn btn-primary">
                            
                                
                                تأكيد الحجز
                                
                                
                            </button>
                        </a> 
                        
                        
                        
                        
                        
						
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
				<footer class="footer">
         
        </footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
    </div>
		<!-- container-scroller -->
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
      
         <a href="logout.php">   <h4 class="text-center">تسجيل الخروج</h4>  </a>
      <br>
  </body>
</html>


<?php
    }
?>