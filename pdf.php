<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/path/to/print.css" media="print" rel="stylesheet" />

    <title>نظام مؤسسة الهدذلي الالكتروني </title>
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
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
      
      
      <style>
      
          p {
              color: black;
          }
          
          
          body {
  font-family: "Cairo", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "slnt" 0;
              
              color: black;
}
          
          
          @media print {
input {
    display: none !important;
  }
}
          
          
          
        
input {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: fff;
  color: white;
  text-align: center;
    padding: 20px;
}


  



          
          
      </style>
     
  </head>
    
    
    <body style="border: 3px solid black; padding: 2px; margin: 6px;">
    
        
   
        
        <br>
        
        
        <div class="container">
  <div class="row text-center">
      <div class="col-4">
      <p>س.ت : 4031253475</p>
      <p style="color:#5E17EB">مكة المكرمة - الشرائع</p>
     <p>ج /.055554955</p>
    </div>
    <div class="col-4">
        <img src="images/qr.png" style="height: 100px; width: 100px;">
           
      </div>
    <div class="col-4">
      <p>مؤسسة</p>
      <p style="color:#5E17EB">نائف عبدالله الهذلي</p>
      <p>للنقل المتخصص</p>
    </div>
  </div>
            <hr>
            
                <?php include 'connection.php'; session_start();
            
            $Dname = $_SESSION['Dname'];
            
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
        
            
            
            ?>
            
            <?php 
                                    $query = "SELECT * FROM book Where dname='$Dname' ORDER BY id DESC";
                                    $res = mysqli_query($con,$query);
                                $row = mysqli_fetch_assoc($res)
                                   
                                        
                                    
      
                          ?>
            <div class="row text-center">
                
                  <div class="col">
                 <span class="text-center">  التاريخ :   <span><?php echo $row['dtime']; ?></span></span>
               
            </div>
                
            <div class="col">
                <span class="text-center">  اليوم :   <span><?php echo $row['dday']; ?></span></span>
                </div>
                
              
            
            </div>
            
            
            
            <div class="row text-center">
            
                <div class="col">
               
                    <p class="text-center">ابرام عقد</p>
                    <p class="text-center" style="color:#5E17EB">لمؤسسة نائف عبد الله الهذلي</p>
                    <p class="text-center">لنقل ركاب وتاجير سيارة مع سائق</p>
                    
                    
                </div>
            
            
            </div>
            
            <br>
            
 
            
            
                <?php 
            
          
                include 'connection.php';
          
             
          $query = "SELECT * FROM admin WHERE Dname='$Dname'";
          $result = mysqli_query($con,$query);
          $row = mysqli_fetch_assoc($result);
          ?>
            
           
                    
            
            
            
            <table class="table table-bordered text-center" style="border: 1px solid black; border-radius:12px 10px 12px 10px">
  <thead style="border: 1px solid black;">
    <tr style="border: 1px solid black; border-radius: 5px;">
      <th scope="col" class="thh">رقم الهوية</th>
      <th scope="col">اسم السائق</th>
      <th scope="col">رقم اللوحة</th>
      <th scope="col">نوع السيارة</th>
    </tr>
  </thead>
  <tbody style="border:1px solid black;">
    <tr style="border:1px solid black;">
      <th><?php echo $row['Did']; ?></th>
      <td><?php echo $row['Dname']; ?></td>
      <td><?php echo $row['Dcarid']; ?></td>
      <td><?php echo $row['Dcar']; ?></td>
    </tr>
    
   
  </tbody>
</table>
            <br>
           
             <div class="row text-center">
            
                <div class="col">
               
                    <span style="border: 1px solid #5E17EB; padding: 7px; border-radius: 5px;">معلومات الضيف</span>
                    
                    
                </div>
            
            
            </div>
            
            <br>
            
               <?php 
                                    $query = "SELECT * FROM book WHERE dname='$Dname' ORDER BY id DESC";
                                    $res = mysqli_query($con,$query);
                                $row = mysqli_fetch_assoc($res)
                                   
                                        
                                    
      
                          ?>
            
            
            <table class="table table-bordered text-center" style="border: 1px solid black;">
  <thead style="border: 1px solid black;">
    <tr style="border: 1px solid black; border-radius: 5px;">
      <th scope="col">رقم الجوال</th>
      <th scope="col">جهة الوصول</th>
      <th scope="col">جهة القدوم</th>
      <th scope="col">اسم الضيف</th>
    </tr>
  </thead>
  <tbody style="border:1px solid black;">
    <tr style="border:1px solid black;">
      <th><?php echo $row['vnumber']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vname']; ?></td>
    </tr>
     
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumbera']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamea']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberb']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnameb']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberc']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamec']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberd']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamed']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumbere']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamee']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberf']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamef']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberg']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnameg']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberh']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnameh']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberi']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamei']; ?></td>
    </tr>
         <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberj']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamej']; ?></td>
    </tr>
      
          <tr style="border:1px solid black;">
      <th><?php echo $row['vnumberk']; ?></th>
      <td><?php echo $row['vcome']; ?></td>
      <td><?php echo $row['vout']; ?></td>
      <td><?php echo $row['vnamek']; ?></td>
    </tr>
    
    
   
  </tbody>
</table>
            
     
      
            
            <div class="row text-center">
            
                <p>*** ملاحظة هامة ***</p>
                <p>فى حال عدم تطابق بيانات الضيف مع الاثبات نكن عرضه للجزاء وهذا تعهد منا بذلك</p>
               
            
            </div>
          
            
             
            <div class="row">
            
            <img src="images/s.png" style="height: 200px; width: 260px;">
          
            </div>
            
            <br>
            
            
            <div class="row text-center">
            
                
<div class="footerr">
    <input type="button" class="btn btn-primary" value="طباعة" onClick="window.print()">
</div>
             
            
            
            </div>
            <br><br>
            
</div>
        
    
        
    

    
    
    </body>



</html>

<?php
    }
?>