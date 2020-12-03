<?php 
if (isset($_POST['login_button'])){
$users = array("username"=>"saeed", "password"=>"12345");
$username = $_POST['user'];
$password = $_POST['password'];
if ($username == $users['username'] && $password == $users['password']) {

echo "<h1>Successful Login</h1>";
echo "<p>Username: $username</p>";
echo "<br>";
echo "<p>Password: $password</p>";
}else{
echo "<h1>Wrong username or password</h1>";
}

}


if (isset($_POST['register_btn'])) {
   
    $FullName = $_POST['name2'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dateofbirth = $_POST['dateofbirth'];
    $ssnumber = $_POST['ssnumber'];
    
    if ($password == $confirmpassword) {
        echo "<h2>Registration DATA</h2>";
        echo $FullName;
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        echo "<br>";
        echo $confirmpassword;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $phone;
        echo "<br>";
        echo $dateofbirth;
        echo "<br>";
        echo $ssnumber;
        
        

        }else{
        
        echo "The two passwords does not match";
        
        }
        }
        








?>
<html>
<head>
        <title> Welcome Aboard </title>
</head>
<style>
body{
background: url(logoo.jpg);
background-size: cover;
background-position: center;
color: black    ;
font-weight: bold;
margin-left:70%;
}

</style>
<body>

</body>
</html>
