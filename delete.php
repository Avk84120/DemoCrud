<?php include 'connection.php';
$id=$_GET['id'];
$query="delete from student where id='$id'";
$data=mysqli_query($conn,$query);

if($data){
    ?>
    <script type="text/javascript">
        alert("Data Deleted Successfully")
        window.open("http://localhost/DemoCrud/view.php" ,"_self");
    </script>
    <?php
}
else
{
    ?>
    <script type="text/javascript">
        alert("Please try again")
    </script>
    <?php
}

?>
