<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DemoCrud</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <lable>Enter Your FirstName :</lable>
            <input type="text" name="firstname" placeholder="firstname"><br><br>
            <lable>Enter Your LastName :</lable>
            <input type="text" name="lastname" placeholder="lastname"><br><br>
            <lable>Enter Your Age :</lable>
            <input type="number" name="age" placeholder="age" required><br><br>

            <input type="submit" name="save_btn" value="Save">
            <button><a href="view.php">View</a></button>

        </form>
    </div>
    <?php
    if(isset($_POST['save_btn']));
    {
        $fname=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['age'];

        $query="insert into student(firstname , lastname , age) values ('$fname' , '$lname' ,'$age')";
        $data=mysqli_query($conn ,$query);
        
        if($data){
            ?>
            <script type="text/javascript">
                alert("Save Data Successfully");
                window.open("http://localhost/DemoCrud/view.php", "_self");
                </script>
            <?php
        }else
        {
            ?>
            
            <?php
        }
    }
    ?>
</body>
</html>


