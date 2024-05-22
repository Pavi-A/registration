<!DOCTYPE html>
<head><title>Registration page</title>
<style>
    .b{
        display: inline-block;
        background-color: brown;
        color: blanchedalmond;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin-left: 600px;
        margin-top: 150px;
    }
   

</style></head>
<html>
  <form method="post">
    <div class="b">
    <label><b>First Name:</b></label>
    <input type="text" placeholder="enter your name" name="fn"><br><br>
    <label><b>Last Name:</b></label>
    <input type="text" placeholder="enter your last name" name="ln"><br><br>
    <label><b>Mobile Number:</b></label>
    <input type="num" placeholder="enter your mob num" name="mn"><br><br>
<label><b>Qualification</b></label>
<input type="text" placeholder="enter your qualification" name="qua"><br><br>
<label><b>Address</b></label>
<textarea row="20" cols="10" name="addr"></textarea>
<button type="submit" name="submit" class="">Submit</button>
</div>
</form>  
<?php
include("db.php");
session_start();
if(isset($_POST['submit'])){
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $mn=$_POST['mn'];
    $qua=$_POST['qua'];
    $add=$_POST['addr'];
    $insert=mysqli_query($conn, "insert into `register`(`fn`,`ln`,`mn`,`qua`,`addr`)values "."('$fn','$ln','$mn','$qua','$add')");
    if($insert){
        echo "Registration successful";
     } else{
            echo "Not Successful";
        }
    }


?>

</html>