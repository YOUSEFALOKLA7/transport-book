 
    <?php
    
       session_start();
    
    $Dname = $_SESSION['Dname'];
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
        
    
    
    ?>

<?php include 'header.php'; 


if($Dname == 'admin') {

if(isset($_POST['submit'])){

$Dname = $_POST['Dname'];
    $Dcar = $_POST['Dcar'];
    $Dcarid = $_POST['Dcarid'];
    $Did = $_POST['Did'];
$Dpass = $_POST['Dpass'];

 


    
     
      $query = "INSERT INTO admin (Dname,Dcar,Dcarid,Did,Dpass) VALUE('$Dname','$Dcar','$Dcarid','$Did','$Dpass')";
      $resault = mysqli_query($con,$query);
    

} } else echo "<div class='alert alert-danger text-center'>ليس لديك الاذن لرؤية هذه الصفحة</div>";
?>




















<div class="container-fluid page-body-wrapper">
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						
             
                        <hr>
                        <br>
                        <form action="newdriver.php" method="POST">
  <div class="form-row">

      
      <?php
    if($Dname == 'admin') { 
       ?>
       <div class="col">
      <input type="text" name="Dname" value="" class="form-control" placeholder="اسم السائق">
    </div>
        <div class="col">
      <input type="text" name="Did" value="" class="form-control" placeholder="رقم البطاقة">
    </div>
        <div class="col">
      <input type="text" name="Dcar" value="" class="form-control" placeholder="نوع السيارة">
    </div>
        <div class="col">
      <input type="text" name="Dcarid" value="" class="form-control" placeholder="رقم لوحة السيارة">
    </div>
        <div class="col">
      <input type="text" name="Dpass" value="" class="form-control" placeholder="كلمة السر للدخول">
    </div>
      
      
      
      
      
     

      
      <br>
      
   
      
      
      
  </div>
                            <br>
                            <div class="">
                            <input name="submit" class="btn btn-primary" type="submit" />
                            </div>
</form>
                   
                        
						
					</div>
				</div>


                
                <hr>
                
                
                <p class="text-center">بطاقات السائقون في هذة المؤسسة</p>
       
                
                
                <div class="container-fluid">
<div class="container"> 
  <div class="row">
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
       <?php
      
        
            
          $query = "SELECT * FROM admin ORDER BY id DESC";
        $resault = mysqli_query($con,$query);
           
        while($row = mysqli_fetch_assoc($resault)){
            ?>
            
            
      
       <div class="col-lg-4">  

      
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6 text-center">بطاقة السائق </h3>
   
          <hr>&nbsp;
            
    
              
          <b>اسم السائق :</b>&nbsp; <span><?php echo $row['Dname'];?></span> <br>
           <b>رقم البطاقة :</b>&nbsp; <span><?php echo $row['Did'];?></span> <br>
            <b>
              <b>سيارة السائق :</b> &nbsp; <span><?php echo $row['Dcar'];?></span>
              <br>
               <b>رقم اللوحة :</b> &nbsp; <span><?php echo $row['Dcarid'];?></span> <br>
                   <b>كلمة السر للدخول :</b> &nbsp; <span><?php echo $row['Dpass'];?></span> <br>
         
            </b>
           
        </div>
         
      </div>
    </div>

      
      
      
      <?php
        
        
        }
         
      ?>
  
      
    </div></div></div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      



<?php } ?>













































<?php } ?>


<?php include 'footer.php'; ?>