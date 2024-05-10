             <?php 

    session_start();       
    $Dname = $_SESSION['Dname'];
    if(!isset($_SESSION['Dname'])){
    header('Location:login.php');
    }
    
    else {
        
            
            
            ?>
            

<?php include 'header.php'; ?>


<div class="container">
<div class="container-fluid">
<div class="container"> 
  <div class="row">  
      
      
             <?php 
        
        
          $query = "SELECT * FROM book WHERE dname ='$Dname' ORDER BY id DESC";
        $resault = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($resault)){
            ?>
    <div class="col-lg-4">  
        
         

          
      
     
     
        
                    
        
      
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6">معلومات الرحلة</h3>
          <strong>رحلة رقم </strong> &nbsp;
          <span><a href="#" class="text-decoration-underline" target="_blank"><?php echo $row['id'];?></a> <i class="bi bi-box-arrow-up-right"></i> </span>
          <hr>&nbsp; <span><?php echo $row['dday'];?></span>
            <h3 class="h6"><?php echo $row['dtime'];?></h3> 
              
          <b>السيارة :</b>&nbsp; <span><?php echo $row['dcar'];?></span> <br>
           <b>اسم الضيف الاول :</b>&nbsp; <span><?php echo $row['vname'];?></span>
              <br>
            <b>
              <b>من :</b> &nbsp; <span><?php echo $row['vcome'];?></span>
              <br>
               <b>الى :</b> &nbsp; <span><?php echo $row['vout'];?></span>
         <br>
          <b>رقم الضيف:</b> &nbsp; <a href="tel:<?php echo $row['vnumber'];?>"><span><?php echo $row['vnumber'];?></span></a>
            </b>
           
        </div>
          <button class="btn btn-primary"> <a href="pdf.php?id=<?php echo $row['id'];?>&&dname=<?php echo $row['dname'];?>" style="color:white;"> طباعة</a></button>
      </div>
    </div>
      
      
      
      
      <?php
      }
        ?>
      
      
      
      
      
      
  
<div class="container-fluid">
<div class="container"> 
  <div class="row">  
      
      <?php
      
        if($Dname == 'admin') {
            
          $query = "SELECT * FROM book ORDER BY id DESC";
        $resault = mysqli_query($con,$query);
           
        while($row = mysqli_fetch_assoc($resault)){
            ?>
            
            
      
       <div class="col-lg-4">  
        
         

          
      
     
     
        
                    
        
      
      <div class="card mb-4">
        <!-- Shipping information -->
        <div class="card-body">
          <h3 class="h6">معلومات الرحلة</h3>
          <strong>رحلة رقم </strong> &nbsp;
      
          <span><a href="#" class="text-decoration-underline" target="_blank"><?php echo $row['id'];?></a> <i class="bi bi-box-arrow-up-right"></i> </span>
            
                  <br>
             <b>اسم السائق :</b> &nbsp; <span><?php echo $row['dname'];?></span>
            <br>
          <hr>&nbsp; <span><?php echo $row['dday'];?></span>
            <h3 class="h6"><?php echo $row['dtime'];?></h3> 
              
          <b>السيارة :</b>&nbsp; <span><?php echo $row['dcar'];?></span> <br>
           <b>اسم الضيف الاول :</b>&nbsp; <span><?php echo $row['vname'];?></span>
              <br>
            <b>
              <b>من :</b> &nbsp; <span><?php echo $row['vcome'];?></span>
              <br>
               <b>الى :</b> &nbsp; <span><?php echo $row['vout'];?></span>
         <br>
          <b>رقم الضيف:</b> &nbsp; <a href="tel:<?php echo $row['vnumber'];?>"><span><?php echo $row['vnumber'];?></span></a>
            </b>
           
        </div>
         
      </div>
    </div>

      
      
      
      <?php
        }
        
        }
         
      ?>
  
      
    </div></div></div>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            

      

      
      
      
      
      
      
      
      
      
  </div>
</div>
  </div>
    
    
    
</div>





<?php include 'footer.php';?>



<?php } ?>



