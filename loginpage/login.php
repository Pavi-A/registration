
<html>
    <head>
        <title>LoginPage</title>
        <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh; /* 100% of the viewport height */
            margin: 0;
            background-color: #f0f0f0; /* Optional: for better visibility */
        }

        .a {
            background-color: black;
            color: aliceblue;
            text-align: center;
            padding: 20px 50px;
            border-radius: 10px; /* Optional: for rounded corners */
        }

        input[type="text"] {
            margin-top: 10px;
        }
    </style></head>
    <form method="post" action="register.php">
        <div class="a">
        <label>UserName:</label>
        <input type="text" name="user" placeholder="Enter your User Name"><br><br>
        <label >Password</label>
        <input type="text" name="password" placeholder="Enter your password"><br><br>
        <button type="submit" name="submit" class="">Login</button>
        </div>
        </form>
        <?php  
       include("db.php") ;
       session_start();

       if(isset($_POST['submit'])) { 
    $user_name=$_POST['user'];
$pass_word=$_POST['password'];
$insert=mysqli_query($conn,"insert into `sample`(`user`,`password`) values "."('$user_name','$pass_word')");

if ($insert) {
    echo '<p style="color: green; text-align: center;">Registration Successful!</p>';
} else {
    echo '<p style="color: red; text-align: center;">Registration Failed!</p>';
}
}
        ?>
        
    </body>
    

</html>