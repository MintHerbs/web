<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Deploy your websites in less than 60 seconds.">
    <meta property="og:title" content="MoonBean...">
    <meta property="og:description" content="Deploy your websites in less than 60 seconds.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.moonbean.com">
    <title>Book Haven - Rent your book</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar collapsible">
      <div class="logo-div">
        <a href="index.php">Book <br>Haven</a>
      </div>
      <div class="nav-toggler"><span class="fa-solid fa-list"></span></div>
  
      <ul class="nav-list collapsible__content">
        <li class="nav-item"><a href="index.php" class="nav-link">Rent your book</a></li>
        <li class="nav-item"><a href="loginf.php" class="nav-link">Log-in</a></li>
        <li class="nav-item nav-item-cart"><a href="cart.php" class="nav-link">Cart</a></li>
      </ul>
    </nav>
    <main>
      <section class="login-section">
        <div class="login-left">
          <img src="img/circle.jfif" alt="">
        </div>
        <div class="login-right">
          <form action="" method="post">
            <h1>Sign up</h1>
            <p>Sign up to access any of our products</p>
            <label for="email">Email address</label><input type="email" id="email" name="email">
            <label for="password">Password</label><input type="password"id="password" name="password">
            <p>Use 8 or more characters with a mix of letters, numbers & symbols</p>
            <label class="checkbox-container">
                <input type="checkbox" checked />
                Agree to our <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a>
              </label>
              
              <label class="checkbox-container">
                <input type="checkbox" checked />
                Subscribe to our monthly newsletter
              </label>
              
            <button type="submit" class="btn">Sign up</button>
            <p>Already have an account? <a href="loginf.php">Sign in</a></p>

          </form>
        </div>
      </section>

    </main>


<footer>
  <p>&copy;2024 Book Store</p>
  <a href="signup.php" class="register">Register</a>
</footer>








    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/93d6ecbf67.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
