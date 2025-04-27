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
      <section class="hero-section">
        
        <div class="hero-heading">
          <h1>Buy your next <br>Book for an adventure</h1>
          <p>Find, buy, rent and enjoy the journey of your read</p>
        </div>
        <div class="search-container">
          <span class="icon"><img src="img/openbook.png" alt=""></span>
          <input type="text" placeholder="Book name, Author, date published">
          <span class="icon"><img src="img/location.png" alt=""></span>
          <input type="text" placeholder="Suburb or Zip Code">
          <button class="search-button">🔍</button>
      </div>
          <div class="top-genres">
            <strong>Top searches</strong>
            <div class="top-searches">
              <div class="genre-card">
                <div class="img-div"><img src="img/sci-fi.png" alt=""></div>
                <p>Science fiction</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/fiction.png" alt=""></div>
                <p>Fantasy</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/romance.png" alt=""></div>
                <p>Romance</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/erotic.png" alt=""></div>
                <p>Erotic</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/health.png" alt=""></div>
                <p>Health</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/philosophy.png" alt=""></div>
                <p>Philosophy</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/education.png" alt=""></div>
                <p>Education</p>
              </div>
              <div class="genre-card">
                <div class="img-div"><img src="img/kids.png" alt=""></div>
                <p>Kids</p>
              </div>
            </div>
          </div>

      </section>



      <section class="trending">

        <div class="trending-now">
          <strong>Trending now</strong>
          <div class="trending-container">
            <div class="trending-card">
              <div class="img-div-trending"><a  href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a></div>
              <strong class="title">The Hobbits</strong>
              <p class="price">1000Rs</p>
              <button class="btn">Add to cart</button>
              <button class="btn">View</button>
            </div>
            <div class="trending-card">
              <div class="img-div-trending"><a  href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a></div>
              <strong class="title">The Hobbits</strong>
              <p class="price">1000Rs</p>
              <button class="btn">Add to cart</button>
              <button class="btn">View</button>
            </div>
            <div class="trending-card">
              <div class="img-div-trending"><a  href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a></div>
              <strong class="title">The Hobbits</strong>
              <p class="price">1000Rs</p>
              <button class="btn">Add to cart</button>
              <button class="btn">View</button>
            </div>
            <div class="trending-card">
              <div class="img-div-trending"><a  href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a></div>
              <strong class="title">The Hobbits</strong>
              <p class="price">1000Rs</p>
              <button class="btn">Add to cart</button>
              <button class="btn">View</button>
            </div>
          </div>
        </div>



      </section>


<section class="cart">
  
  <div class="cart-container">
    <h2>Cart</h2>
    <div class="cart">
        <table>
            <thead>
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a>
                        <span>Hobbit</span>
                    </td>
                    <td>Rs 1000</td>
                    <td>
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </td>
                    <td>Rs 1000</td>
                </tr>
                <tr>
                    <td>
                        <a  href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a>
                        <span>Hobbit</span>
                    </td>
                    <td>Rs 1000</td>
                    <td>
                        <button class="qty-btn">-</button>
                        <span>1</span>
                        <button class="qty-btn">+</button>
                    </td>
                    <td>Rs 1000</td>
                </tr>
                <tr>
                    <td>
                        <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit"></a>
                        <span>Hobbit</span>
                    </td>
                    <td>Rs 1000</td>
                    <td>
                        <button class="qty-btn">-</button>
                        <span>2</span>
                        <button class="qty-btn">+</button>
                    </td>
                    <td>Rs 2000</td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div class="cart-footer">
            <button class="buy-btn">Buy</button>
            <span class="total-amount">Rs 4000</span>
        </div>
    </div>
</div>


</section>


<section class="trending">

  <div class="trending-now">
    <strong>New Additions</strong>
    <div class="trending-container">
      <div class="trending-card">
        <div class="img-div-trending"> <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit" ></a></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"> <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit" ></a></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"> <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit" ></a></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"> <a href="book.php" target="_blank"><img src="img/hobbit.jfif" alt="Hobbit" ></a></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
    </div>
  </div>



</section>




<section class="message">

  <div class="message-container">
    <strong class="message-logo">Book Haven</strong>
    <h2>A price to suit everyone</h2>
    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore nam corporis repellat deserunt vel repudiandae, porro qui earum numquam. </p>
    <p class="delivery-price">Rs 50</p>
    <p class="description">For delivery</p>
  </div>

  <div class="calltoregister">
    <p>See, one price. Simple.</p>
    <a href="signup.php" class="register">Register</a>
  </div>
</section>




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
