<html>
<head>
</head>
<body>

<?php


$servername = "localhost";
$username = "root";
$password = "admin";
$database = "ulm";

$fname = $_POST['lname'];
$lname = $_POST['fname'];
$gender = $_POST['gender'];
$dni = $_POST['dni'];

// Create connection
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}


// Get max user id
$query_max ="SELECT  MAX(USER_ID) as maxuser FROM USER";
$result_max = mysqli_query($link, $query_max);

$row = mysqli_fetch_array($result_max, MYSQLI_ASSOC);
$maxid =  $row['maxuser'] +1;


// Performing SQL query
$query = "INSERT INTO USER (USER_ID,FIRST_NAME,LAST_NAME,GENDER,CUST_ID) VALUES ($maxid,'$fname','$lname','$gender', $dni)";
//$result=mysqli_query($link, $query);

/*while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<li>{$row['USER_ID']} {$row['LAST_NAME']}</li>";
}*/

//mysqli_free_result($result);

// Closing connection
mysqli_close($link);

?>

<br/>
<strong>User created suscessfully</strong> <br/>
<form action="index.php">
<input type="submit" name="back" value="back">
</form>


</body>
