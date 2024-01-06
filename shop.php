<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vheadssamani</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/lightslider.css">
    <script src="./js/jquery.js"></script>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="./js/jquery.js"></script>
      <script src="./js/lightslider.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('shows');
            });
        });
    </script>
</head>
<body>
      
    <header>          
       </div>
       <?php include "nav.php" ?>

    </header>
    <section>
        <div class="shop-header">
            <h1>accessories</h1>
            <p><a href="./index.html">HOME</a> / <span>ACCESSORIES</span></p>
        </div>
    </section>
    <section>
            <!-- Sidebar -->
    <aside class="sidebar">
        <ul class="categories">
            <h1>CATEGORIES</h1>
            <li class="category-item"><a href="./shop.php">Accessories</a> </li>
            <li class="category-item"><a href="./decoration.html">Decorations</a> </li>
            <li class="category-item"><a href="./featured.html">Featured</a> </li>
            <li class="category-item"><a href="./newarrival.html">New Arrivals</a> </li>
        </ul>
        <ul class="categories">
            <h1>PRODUCT TYPES</h1>
            <li class="category-item"><a href="./sofas.html">Sofas</a> </li>
            <li class="category-item"><a href="./tables.html">Tables</a></li>
            <li class="category-item"><a href="./chairs.html">Chairs</a> </li>
        </ul>
    </aside>

    <!-- Product Grid -->
    <section class="products">
        <!-- Products will be dynamically added here -->
        <div class="section-container">
            <div class="card-container">
                <div class="cards">
                  <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                  <div class="card-content">
                    <small>CHAIR</small><br>
                    <small>2500/=</small><br>
                     <span class=" cart-button"><button><a href="product.php?product=<?php echo $row['ID'] ?>" class="cart-link">Buy Now</a></button>  </span>           
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="cards">
                  <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                  <div class="card-content">
                    <small>CHAIR</small><br>
                    <small>2500/=</small><br>
                     <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="cards">
                  <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                  <div class="card-content">
                    <small>CHAIR</small><br>
                    <small>2500/=</small><br>
                     <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                  </div>
                </div>
              </div>
              <div class="card-container">
                <div class="cards">
                  <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                  <div class="card-content">
                    <small>CHAIR</small><br>
                    <small>2500/=</small><br>
                     <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                  </div>
                </div>
              </div>
                <div class="card-container">
                    <div class="cards">
                      <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                      <div class="card-content">
                        <small>CHAIR</small><br>
                        <small>2500/=</small><br>
                         <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                      </div>
                    </div>
                  </div>
                  <div class="card-container">
                    <div class="cards">
                      <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                      <div class="card-content">
                        <small>CHAIR</small><br>
                        <small>2500/=</small><br>
                         <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                      </div>
                    </div>
                  </div>
                  <div class="card-container">
                    <div class="cards">
                      <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                      <div class="card-content">
                        <small>CHAIR</small><br>
                        <small>2500/=</small><br>
                         <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                      </div>
                    </div>
                  </div>
                  <div class="card-container">
                    <div class="cards">
                      <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                      <div class="card-content">
                        <small>CHAIR</small><br>
                        <small>2500/=</small><br>
                         <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                      </div>
                    </div>
                  </div>
                  <div class="card-container">
                    <div class="cards">
                      <img src="./images/chair-image-1.jpg" alt="chair"width="250px" height="300px" class="card-image">
                      <div class="card-content">
                        <small>CHAIR</small><br>
                        <small>2500/=</small><br>
                         <span class=" cart-button"><button><a href="" class="cart-link">Buy Now</a></button>  </span>           
                      </div>
                    </div>
                  </div>

                  
              
        </div>
    </section>

    </section>



    <footer  class="footer">
        <div class="footer-container">
        <div class="contact-info">
            <h1>CONTACT INFO</h1>
            <p>Address:Nairobi,Kenya.</p>
            <p>Phone: 0701234567</p>
            <p>Email: vheadsamani@gmail.com</p>
    
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="footer-links">
            <h1>ACCOUNTS</h1>
            <div> <a href="">HOME</a></div>
           <div><a href="">ABOUT US</a></div>
            <div><a href="">STORE INFORMATION</a></div>
            
    
        </div>
        <div class="footer-news">
            <h1>NEWSLETTERS</h1>
            <p style="width: 350px;">Do you want to get information about our offers and new unique furniture!!JOIN THE CHAT BY  SUBSCRIBING TO OUR CHANNEL INFORMATION</p>
            <input type="email" placeholder="Your emailaddress" class="email">
            <p><button type="submit" name="nameInput" required>Subscribe</button></p>
    
        </div>
    </div>
    <div class="copyright">
    
    &#169 copyright v heads samani.all rights reserved 2023 <br>designed by Job Mutuku.
    
    </div>
      </footer>
      <script src="./js/app.js"></script>
</body>
</html>