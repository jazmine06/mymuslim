<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/login.css">
  <title>mymuslim - login</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">LOGIN</p>
    <form class="form1" action="" method="post">
      <input class="un " type="text" align="center" name="username" placeholder="Username">
      <input class="pass" type="password" align="center" name="password" placeholder="Password">
      <button class="submit" name="submit" align="center">LOGIN</button>      
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
 
if (isset($_POST['submit'])) { 
    if (is_null(login($_POST))) { 
        echo "<script> 
            alert('Username not registered!'); 
        </script>"; 
    } else if (!login($_POST)) { 
        echo "<script> 
            alert('Wrong username/ password!'); 
        </script>"; 
    } else { 
        $_SESSION['login'] = true; 
        $userData = getUserData($_POST['username']); 
        $_SESSION['level'] = $userData['level']; 
        $_SESSION['name'] = $userData['username']; 
        // $_SESSION['photo'] = $userData['image']; 
        $_SESSION['login'] = true; 
        header('Location: index1.php'); 
        // if ($userLevel == 'admin') { 
        //     header('Location: admin.php'); 
        // } 
 
        exit; 
    } 
} 
?>