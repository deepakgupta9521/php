<html>
    <head>
        <title>

        </title>
    </head>

    <?php

    if($_SERVER['REQUEST_METHOD']=='POST'){
    $firstName=$_POST['first'];
    $lastName=$_POST['last'];
    $subject=$_POST['subject'];


$servername="localhost";
$username="root";
$password="";
$db="new";

$con=mysqli_connect($servername, $username, $password, $db);

if($con){
    echo "connection established";

}
else{
    echo "not established";
}
 echo "<br>";

$sql="INSERT INTO `table`(`First Name`, `Last Name`, `Subject`) VALUES ('$firstName',' $lastName','$subject' )";
$result=mysqli_query($con, $sql);

if($result){
    echo "data inserted";

}
else{
    echo "data not inserted" . mysqli_error($con);
}

}

?>
 
    <body>
        <form action="form.php" method = "post">
            
         <label for="name">First name:</label>
         <input type="text" name="first">
         <br>
         <br>

         <label for="name">Last Name:</label>
         <input type="text" name="last">
         <br>
         <br>

        <input type="radio" id="dbms" name="subject" value="dbms">
        <label for="dbms">dbms</label>
        <br>
        <br>
        <input type="radio" id="numerical" name="subject" value="numerical">
        <label for="nm">nm</label><br>
         <br>
         <br>

        <input type="radio" id="operating" name="subject" value="operating">
        <label for="os">Os</label><br>
         <br>
         <br>
          

         <button>Submit</button>

        </form>
    </body>

  
</html>