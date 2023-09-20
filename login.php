<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id(); //Prevents session fixation attack
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<style>
  /* Reset default browser styles */
  body,
  h1,
  h2,
  h3,
  p,
  ul,
  li {
    margin: 0;
    padding: 0;
    list-style: none;
    color: black;
  }

  /* Global styles */
  body {
    font-family: Arial, sans-serif;
    line-height: 1.5;
    background-color: #f2f2f2;
    color: #d0caca;
    background-image: url(./pic1.png);
    background-position: center;
    background-size: cover;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  /* Navigation bar */
  header {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  nav ul {
  display: flex;
  justify-content: center;
  padding: 10px 0;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333333;
}

nav ul li a:hover {
  color: #ff5500;
}

nav ul li a.active {
  color: #ff5500;
  font-weight: bold;
}

nav ul li a:hover span {
  text-decoration: underline;
}

/* nav ul li a:hover:before {
  content: "> ";
}

nav ul li a:hover:after {
  content: " <";
}

nav ul li a:hover span:before {
  content: "[ ";
}

nav ul li a:hover span:after {
  content: " ]";
} */


  /* Login section */
  .login {
    background-color: #ffffff;
    padding: 20px;
    margin-top: 30px;
    opacity: 0.8;
    max-width: 400px;
    margin: 0 auto;
    background-image: url(./pic1.png);
    background-position: center;
    background-size: cover;
  }

  .login h2 {
    margin-top: 50px;
    font-size: 28px;
    color: #333333;
    margin-bottom: 30px;
  }

  .login h1 {
    text-align: center;
    color: #ff5500;
    font-size: 40px;
  }

  .login input[type="text"],
  .login input[type="password"] {
    width: 100%;
    padding: 9px;
    margin-bottom: 30px;
    border: 1px solid #d0caca;
    border-radius: 8px;
  }

  .login input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #ff5500;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .login input[type="submit"]:hover {
    background-color: #ff7733;
  }

  .login p {
    text-align: center;
    margin-top: 10px;
    color: #333333;
  }

  .login p a {
    color: #ff5500;
    font-weight: bold;
    text-decoration: none;
  }
</style>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="./index..php">Home</a></li>
        <li><a href="./About.html">About Us</a></li>
        <li><a href="./contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
  <section class="login">
    <h1>Mero Clothes!</h1>
    <h2>Login</h2>
    <form id="loginForm" method="post">
      <input type="text" name="email" id="username" placeholder="email" required>
      <input type="password" name="password" id="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
    <p>If you don't have an account, <a href="signup.html">Sign up </a></p>
  </section>
<!-- 
  <script>
    document.getElementById("loginForm").addEventListener("submit", function (event) {
      event.preventDefault(); // Prevent form submission

      // Retrieve input values
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      // Retrieve user data from local storage
      var userData = localStorage.getItem(username);

      if (userData) {
        // User found in local storage
        var savedPassword = JSON.parse(userData).password;

        if (password === savedPassword) {
          // Redirect to shop.html upon successful login
          window.location.href = "shop.html";
        } else {
          // Display an error message
          alert("Invalid password. Please try again.");
        }
      } else {
        // User not found in local storage
        alert("Invalid username. Please try again.");
      }
    });
  </script> -->
</body>

</html>