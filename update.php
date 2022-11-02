<?php include 'connection.php'; 
$id=$_GET['id'];
$select="select * from student where id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<div>
        <form action="" method="POST">
            <lable>Enter Your FirstName :</lable>
            <input value="<?php echo $row['firstname']?>"type="text" name="firstname" placeholder="firstname"><br><br>
            <lable>Enter Your LastName :</lable>
            <input value="<?php echo $row['lastname']?>"type="text" name="lastname" placeholder="lastname"><br><br>
            <lable>Enter Your Age :</lable>
            <input value="<?php echo $row['age']?>"type="number" name="age" placeholder="age" required><br><br>

            <input type="submit" name="update_btn" value="Update">
            <button><a href="view.php">Back</a></button>

        </form>
    </div>
    <?php
    if(isset($_POST['update_btn']));
    {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];

        $update="update student set firstname='$fname',lastname='$lname',age='$age' where id='$id'";
        $data=mysqli_query($conn ,$update);
        
        if($data){
            ?>
            <script type="text/javascript">
                alert("Data Updated Successfully");
                </script>
            <?php
        }else
        {
            ?>
            
            <?php
        }
    }
    ?>