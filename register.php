<html>

<head>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
  <title>mymuslim - register</title>
</head>

<body>
  <div class="main1">
    <p class="sign" align="center">REGISTER</p>
    <form class="form1" action="" method="post">
      <input class="un " type="text" align="center" name="username" placeholder="Username">
      <input class="un " type="text" align="center" name="email" placeholder="Email">
      <input class="pass" type="password" align="center" name="password" placeholder="Password">
      <input class="pass" type="password" align="center" name="confirm" placeholder="Repeat Password">
      <button class="submit" name="submit" align="center">REGISTER</button>      
    </div>
     
</body>

</html>
<?php 
require_once 'function.php'; 
session_start(); 
if (isset($_SESSION['login'])) { 
    header('Location: index1.php'); 
    exit; 
} 
 
$alert = ''; 

if (isset($_POST['submit'])) { 
    if ($_POST['password'] != $_POST['confirm']) { 
        $alert = "Password confirm doesn't match!"; 
    } else { 
        $result = register($_POST); 
        if ($result) { 
            echo "<script> 
                alert('Registration Success!'); 
                document.location.href = 'login.php'; 
            </script>"; 
        } else { 
            echo "<script> 
                alert('Registration Failed!'); 
                document.location.href = login.php; 
            </script>"; 
        } 
    } 
} 
 
?>