   <?php
    ob_start();
       session_start();
    
    $Dname = $_SESSION['Dname'];
    
    if(!isset($_SESSION['Dname'])){
        header('Location:login.php');
    }
    
    else {
    
    ?>
    
    


<?php include 'header.php'; ?>

<?php

           $query = "SELECT * FROM admin WHERE Dname ='$Dname'";
            $resault = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($resault);
        

?>


<?php
            if($_SERVER["REQUEST_METHOD"] == "POST" ) {
               $Dcar = $_POST['Dcar'];
                $Dcarid = $_POST['Dcarid'];
               $query = "UPDATE admin SET Dcar='$Dcar' WHERE Dname='$Dname'";
                 $queryq = "UPDATE admin SET Dcarid='$Dcarid' WHERE Dname='$Dname'";
             $editq = mysqli_query($con,$query);
               $editqq = mysqli_query($con,$queryq);
               
               header('location:mycar.php');
               ob_end_flush();
            }

?>

<div class="container">
    <div class="row">
<form action="edit-car.php?name=<?php echo $row['Dname'];?>" method="POST">
<div class="form-grop" dir="rtl">
   <h3 class="text-center"> <label for="cat" class="">تعديل السيارة</label></h3>
    <br>
    <label>اسم السيارة : </label>
    <input type="text" name="Dcar" class="form-control" id="cat" value="<?php echo $row['Dcar']; ?>">
    <br>    <label>رقم اللوحة : </label>
        <input type="text" name="Dcarid" class="form-control" id="cat" value="<?php echo $row['Dcarid']; ?>">
    <br>
    <button class="btn btn-primary">تعديل</button>

</div>
</form>
</div>
</div>

<?php include('footer.php'); ?>
<?php
    }
?>