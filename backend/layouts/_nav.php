<nav class="nav">
  <div class="wrapper container">
    <div class="logo"><a href="index.php">
      <img src="images/logonegro.png" alt="" srcset="" id="sellbuy"> 
    </a>
  
    
  </div>
    <ul class="nav-list">
      <div class="top">
        <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
      
      </div>
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>

<!--
      <li>
        <a href="" class="desktop-item">Shop <span>
          <i class="fas fa-chevron-down"></i> 
        
        </span></a>
        <input type="checkbox" id="showMega" />
        <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
         <div class="mega-box">
          <div class="content">
            <div class="row">
              <img src="./images/woman.jpg" alt="" />
            </div>
            <div class="row">
              <header>Shop Layout</header>
              <ul class="mega-links">
                <li><a href="#">Shop With Background</a></li>
                <li><a href="#">Shop Mini Categories</a></li>
                <li><a href="#">Shop Only Categories</a></li>
                <li><a href="#">Shop Icon Categories</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Filter Layout</header>
              <ul class="mega-links">
                <li><a href="#">Sidebar</a></li>
                <li><a href="#">Filter Default</a></li>
                <li><a href="#">Filter Drawer</a></li>
                <li><a href="#">Filter Dropdown</a></li>
              </ul>
            </div>
            <div class="row">
              <header>Product Layout</header>
              <ul class="mega-links">
                <li><a href="#">Layout Zoom</a></li>
                <li><a href="#">Layout Sticky</a></li>
                <li><a href="#">Layout Sticky 2</a></li>
                <li><a href="#">Layout Scroll</a></li>
              </ul>
            </div>
          </div>
        </div> 
      </li>
      <li><a href="">Blog</a></li>
   
      <li>
        <a href="" class="desktop-item">Vendors
            <span><i class="fas fa-chevron-down"></i></span>
          </a>
       <input type="checkbox" id="showdrop1" />
        <label for="showdrop1" class="mobile-item">Vendors <span><i class="fas fa-chevron-down"></i></span></label>
        <ul class="drop-menu1">
          <li><a href="">Vendor Store listings</a></li>
          <li><a href="">Store Details</a></li>
        </ul>
      </li>
      -->
      
      <li>
        <a href="" class="desktop-item">Page <span><i class="fas fa-chevron-down"></i></span></a>
        <input type="checkbox" id="showdrop2" />
        <label for="showdrop2" class="mobile-item">Page <span><i class="fas fa-chevron-down"></i></span></label>
        <ul class="drop-menu2">
          <li><a href="About.php">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
          <li><a href="">Faq</a></li>
          <li><a href="404.php">Page 404</a></li>
         
          
        </ul>
      </li>
     

     
      <!-- <li>  <a href="#"> <i class="fas fa-search" id="search_bar"></i></a></li> -->
 

      <?php
        if (isset($_SESSION['code_user'])) {
        
        // echo '<h5 class="user_name-index">''</h5>';

  
        echo '<li>
                <a href="" class="desktop-item"> 
                    <i class="fas fa-user"> ' .$_SESSION['name_user']. '</i> 
                    <span>
                    <i class="fas fa-chevron-down"></i>
                    </span>
                </a>
                <input type="checkbox" id="showdrop3" />
                <label for="showdrop3" class="mobile-item"> 
                <i class="fas fa-user"> ' .$_SESSION['name_user']. '</i> 
                    <span><i class="fas fa-chevron-down"></i>
                    </span>
                </label>
                    <ul class="drop-menu3">
                              <li><a href="userInfo.php">My Profile</a></li>
                          <li><a href="boughtProducts.php">Buy History</a></li>
                          <li><a href="cart.php">My Cart</a></li>
                          <li><a href="order.php">My Pendient Orders</a></li>
                          <li><a href="">Faq</a>
                          </li><li><a href="_logout.php">Log out</a></li>
                    </ul>
             </li>';


      //  echo'<li><a href="#" ><i class="fas fa-user"> </i> ' .$_SESSION['name_user'].'</a></li>';
          echo ' <li>  <a href="cart.php" > <i class="fas fa-shopping-cart"></i></a></li>';
      }else{
        ?>
        <li>
                <a href="signin.php" class="desktop-item"> 
                    <i class="fas fa-user"></i> 
                    <span>
                    <i class="fas fa-chevron-down"></i>
                    </span>
                </a>
                <input type="checkbox" id="showdrop3" />
                <label for="showdrop3" class="mobile-item">
                <i class="fas fa-user"></i> 
                    <span><i class="fas fa-chevron-down"></i>
                    </span>
                </label>
                    <ul class="drop-menu3">
                          <li><a href="signin.php">SignIn</a></li>
                          <li><a href="signup.php">SignUp</a></li>
                    </ul>
             </li>
        <!-- <li>  <a href="signin.php" > <i class="fas fa-user"> </i></a></li> -->
      

        <?php
      }
     ?>



    
 
     <li> <button class="switch" id="switch">
       <span><i class="fas fa-sun"></i></span>
       <span><i class="fas fa-moon"></i></span>
       
            </button> 
           
      </li>
  
     
      <!-- icons -->
      <!-- <li class="icons">
        <span>
          <img src="./images/shoppingBag.svg" alt="" />
          <small class="count d-flex">0</small>
        </span>
      <span> <a href="#"> <i class="fas fa-user"></i></a></span>
      </li> -->
    
    </ul>
    <input type="text" class="search_text" placeholder="Search" id="searchID" value="<?php
     if (isset($_GET['text'])) {
      echo $_GET['text'];
     }
     else{
       echo '';
     }
   
     
     ?>">
    <a href="#"> <i class="fas fa-search search_icon" id="search_icon" onclick="searchProduct()"></i></a>
    <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    
  </div>
 


</div>
</nav>
