    <?php
    
       session_start();
    
    $Dname = $_SESSION['Dname'];
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
        
    
    
    ?>


<?php include 'header.php';?>




<div class="container">
<div class="container-fluid">
<div class="container"> 
  <div class="row">  
      
      
         <?php 
        
        
        $query = "SELECT * FROM admin WHERE Dname='$Dname'";
        $res = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($res);     ?>
    <div class="col-12 text-cneter">  
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6 text-center">معلومات السائق</h3>
          
          <span><a href="#" class="text-decoration-underline" target="_blank"></a> <i class="bi bi-box-arrow-up-right"></i> </span>
          <hr>
         <span>اسم السائق :</span>  &nbsp; <strong> <span class=""><?php echo $row['Dname'];?></span> </strong> <br>
             <span>رقم البطاقة :</span>  &nbsp;    <b>  <span class=""><?php echo $row['Did'];?></span> </b> <br>
          <span>نوع السيارة :</span>  &nbsp;  <b>  <span class=""><?php echo $row['Dcar'];?></span> </b> <br> 
       <span>رقم اللوحة :</span>  &nbsp;     <b>  <span class=""><?php echo $row['Dcarid'];?></span> </b> <br>
       
            
           
          
        
             
        </div>
         
      </div>
         <a href="edit-car.php"><inpyt type="submit" class="btn btn-primary">تغيير السيارة</a>
    </div>
      
      
      
     
      
      

      
      
      
      
      
      
      
      
      
  </div>
</div>
  </div>
    
    
    
</div>






<?php
    }
?>



<?php include 'footer.php';?>