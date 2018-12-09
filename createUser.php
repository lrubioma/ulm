<html>
<head>
</head>
<body>

<?php
$DisplayForm = true;

if(isset($_POST['submit'])){
    $DisplayForm = false;
 
    if(empty($_POST['fname']))
    {
        echo "First Name is Requiered";
    }
    if(empty($_POST['lname']))
    {
        echo "Last Name is Requiered";
    }
    if(empty($_POST['gender']))
    {
        echo "Gender is Requiered";
    }
    if(empty($_POST['dni']))
    {
        echo "Gender is Requiered";
    }
    echo $_POST['fname'];
    echo $_POST['lname'];
    echo $_POST['gender'];
    echo $_POST['dni'];
}


if ($DisplayForm) {
?>    
    
<form action="createUserdao.php" method="post">
First Name:<font color=red>*</font> <input type="text" name="fname"><br/><br/>
Last Name: <font color=red>*</font>  <input type="text" name="lname"><br/><br/>
Gender:    <font color=red>*</font> <input type="text" name="gender"><br/><br/>
DNI:    <font color=red>*</font> <input type="text" name="dni"><br/><br/>
<input type="reset" name="reset" value="reset">
<input type="submit" name="submit" value="sumit">
</form>
</body>
</html>

<?php 
}
?>

