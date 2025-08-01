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
        <li class="nav-item"><a href="about.php" class="nav-link">Login/signup</a></li>
        <li class="nav-item nav-item-cart"><a href="contact.php" class="nav-link">Cart</a></li>
      </ul>
    </nav>
    <main>
      <section class="hero-section-book">
       <div class="book">
        <img src="img/hobbit.jfif" alt="">
       </div>


       <div class="aside-book">
        <div class="description-book">
            <h1>The Hobbit</h1>
            <p class="description-text">For the first time ever, a special enhanced edition of the enchanting prelude to The Lord of the Rings, illustrated throughout with over 50 sketches, drawings, paintings and maps by J.R.R. Tolkien himself.
                Bilbo Baggins is a hobbit who enjoys a comfortable, unambitious life, rarely travelling further than the pantry of his hobbit-hole in Bag End. But his contentment is disturbed when the wizard, Gandalf, and a company of thirteen dwarves arrive on his doorstep one day to whisk him away on an unexpected journey ‘there and back again.’ They have a plot to raid the treasure hoard of Smaug the Magnificent, a large and very dangerous dragon . . .
                Written for J.R.R. Tolkien’s own children, The Hobbit was published on 21 September 1937. With a beautiful cover design, a handful of black & white drawings and two maps by the author himself, the book became an instant success and was reprinted shortly afterwards with five color plates.
                Tolkien’s own selection of finished paintings and drawings have become inseparable from his text, adorning editions of The Hobbit for more than 85 years. </p>
        </div>
        <div class="purchase-book">
        <div class="purchase-container">
    <div class="options">
        <label class="option">
            <input type="radio" name="price" value="1000" checked>
            <span class="option-content">
                <strong>New</strong><br>
                Rs 1,000<br>
                <small>same day delivery</small>
            </span>
        </label>

        <label class="option">
            <input type="radio" name="price" value="500">
            <span class="option-content">
                <strong>Second hand</strong><br>
                Rs 500
            </span>
        </label>
    </div>

    <h2 id="selected-price">Rs 1,000</h2>

    <button class="purchase-btn">Purchase</button>

    <p class="terms">
        By placing your order, you're purchasing a license to the content and you agree
        to the <a href="#">Kindle Store Terms of Use.</a>
    </p>
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
                        <img src="img/hobbit.jfif" alt="Hobbit">
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
                        <img src="img/hobbit.jfif" alt="Hobbit">
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
                        <img src="img/hobbit.jfif" alt="Hobbit">
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
    <strong>Suggested books</strong>
    <div class="trending-container">
      <div class="trending-card">
        <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
      <div class="trending-card">
        <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
        <strong class="title">The Hobbits</strong>
        <p class="price">1000Rs</p>
        <button class="btn">Add to cart</button>
        <button class="btn">View</button>
      </div>
    </div>
  </div>

    <div class="trending-now">
      <strong>New additions</strong>
      <div class="trending-container">
        <div class="trending-card">
          <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
          <strong class="title">The Hobbits</strong>
          <p class="price">1000Rs</p>
          <button class="btn">Add to cart</button>
          <button class="btn">View</button>
        </div>
        <div class="trending-card">
          <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
          <strong class="title">The Hobbits</strong>
          <p class="price">1000Rs</p>
          <button class="btn">Add to cart</button>
          <button class="btn">View</button>
        </div>
        <div class="trending-card">
          <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
          <strong class="title">The Hobbits</strong>
          <p class="price">1000Rs</p>
          <button class="btn">Add to cart</button>
          <button class="btn">View</button>
        </div>
        <div class="trending-card">
          <div class="img-div-trending"><img src="img/hobbit.jfif" alt=""></div>
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
