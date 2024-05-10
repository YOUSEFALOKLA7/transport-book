 
    <?php
    
       session_start();
    
    $Dname = $_SESSION['Dname'];
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
        
    
    
    ?>

<?php include 'header.php'; ?>












    
  
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
          <h3 class="h6">معلومات الضيوف</h3>

          
            
                  <br>
             <b>اسم الضيف :</b> &nbsp; <span><?php echo $row['vname'];?></span>
            <br>
            
          <hr>&nbsp; <span>ججز بتاريخ</span> <br> <span><?php echo $row['dday'];?></span>
            <h3 class="h6"><?php echo $row['dtime'];?></h3> 
              
          <b>مع السائق :</b>&nbsp; <span><?php echo $row['dname'];?></span> <br>
           <b>بسيارة :</b>&nbsp; <span><?php echo $row['dcar'];?></span>
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
         else echo "<div class='alert alert-danger text-center'>ليس لديك الاذن لرؤية هذه الصفحة</div>";
      ?>
  
      
    </div></div></div>
            
            
            
            
            






























<?php } ?>


<?php include 'footer.php'; ?>