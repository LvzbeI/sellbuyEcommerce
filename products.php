<?php 

session_start();

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/hnet.com-image.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title>Products</title>
</head>

<body>

  <!-- Navigation -->
  
  <?php include("backend/layouts/_nav.php")?>

  <!-- PRODUCTS -->

  <section class="section products">
 
    <div class="products-layout container">

      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h3>Category</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="radio" name="category_list" value="1" id="category_all" onclick="checkCategory(1)">
              <label for="category_all">
                <span>All</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="radio" name="category_list" value="2" id="category_bags"  onclick="checkCategory(3)">
              <label for="category_bags">
                <span>Bags</span>
                <small>(7)</small>
              </label>
            </li>
            
            <li>
              <input type="radio" name="category_list"  value="3" id="category_accesories"  onclick="checkCategory(4)">
              <label for="category_accesories">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="radio" name="category_list" id="category_shirts" value="4" onclick="checkCategory()">
              <label for="category_shirts">
                <span>Clothings</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="radio" name="category_list" id="category_shoes" value="5" onclick="checkCategory()">
              <label for="category_shoes">
                <span>Shoes</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div>

        <!-- BRANDS -->
        <!-- <div>
          <div class="block-title">
            <h3>Brands</h3>
          </div>

          <ul class="block-content">
            <li>
              <input type="radio" name="" id="">
              <label for="">
                <span>Gucci</span>
                <small>(10)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Burberry</span>
                <small>(7)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span> Accessories</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Valentino</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Dolce & Gabbana</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Hogan</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Moreschi</span>
                <small>(3)</small>
              </label>
            </li>

            <li>
              <input type="checkbox" name="" id="">
              <label for="">
                <span>Givenchy</span>
                <small>(3)</small>
              </label>
            </li>
          </ul>
        </div> -->

      </div>
      <div class="col-3-of-4">
        <form action="">

          <div class="item">
            <label for="sort-by">Sort By</label>
            <select name="sort-by" id="sort-by">
              <option value="title" selected="selected">Name</option>
              <option value="number">Price</option>
              <option value="search_api_relevance">Relevance</option>
              <option value="created">Newness</option>
            </select>
          </div>

          <div class="item">
            <label for="order-by">Order</label>
            <select name="order-by" id="sort-by">
              <option value="ASC" selected="selected">ASC</option>
              <option value="DESC">DESC</option>
            </select>
          </div>
          <a href="">Apply</a>
        </form>

        <div class="product-layout" id="product_area">

          <!-- <div class="product">
            <div class="img-container">
              <a href="productDetails.html">
              <img src="./images/products/product1.jpg" alt="" />
            </a>
              <div class="addCart">
                <i class="fas fa-shopping-cart"></i>
              </div>

              <ul class="side-icons">
                <span><i class="fas fa-search"></i></span>
                <span><i class="far fa-heart"></i></span>
                <span><i class="fas fa-sliders-h"></i></span>
              </ul>
            </div>
            <div class="bottom">
              <a href="productDetails.html">Bambi Print Mini Backpack</a>
              <div class="price">
                <span>$150</span>
              </div>
            </div>
          </div> -->


        </div>

        <!-- PAGINATION -->
        <ul class="pagination">
          <span>1</span>
          <span>2</span>
          <span class="icon">››</span>
          <span class="last">Last »</span>
        </ul>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include("backend/layouts/_footer.php")?>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="js/dark.js"></script>
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
  <script  type="text/javascript" src="js/search.js"></script>

  <script type="text/javascript">
   let charge=1;

    $(document).ready(function(){
     console.log(charge)
              $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
        
    });

    function checkCategory(p1) {
          var p1=charge;      


          if (document.getElementById("category_all").checked) {
          charge=1;
          console.log(charge);

          $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
          }
            if (document.getElementById("category_bags").checked) {
            charge=2;
             console.log(charge);
             $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
          }
          if (document.getElementById("category_accesories").checked) {
            charge=3;
          console.log(charge);


          $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
          }


          if (document.getElementById("category_shirts").checked) {
          charge=4;
          console.log(charge);

          $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
          }
          if (document.getElementById("category_shoes").checked) {
          charge=5;
          console.log(charge);

          $.ajax({
            url:'backend/product/get_all_products.php',
            type:'POST',
            data:{
                  charge:charge
                 
            },
            success:function(data){
                console.log(data);

                let html3='';
               

                for (var i = 0; i < data.datos.length; i++) {
                    html3+=
                    '<div class="product">'+
            '<div class="img-container">'+
            '<a href="productDetails.php?p='+data.datos[i].code_prod+'"><img src="./images/products/'+data.datos[i].image_route+'" alt="" /></a>'+
              '<div class="addCart">'+
              ' <a href="productDetails.php?p='+data.datos[i].code_prod+'"><i class="fas fa-shopping-cart"></i></a>'+
              '</div>'+
              '<ul class="side-icons">'+
                '<span><i class="fas fa-search"></i></span>'+
                '<span><i class="far fa-heart"></i></span>'+
                '<span><i class="fas fa-sliders-h"></i></span>'+
              '</ul>'+
            '</div>'+
            '<div class="bottom">'+
              '<a href="productDetails.php?p='+data.datos[i].code_prod+'">'+data.datos[i].name_prod+'</a>'+
              '<div class="price">'+
                '<span>$'+data.datos[i].price_prod+'</span>'+
              '</div>'+
            '</div>'+
          '</div>';         
                }
           document.getElementById("product_area").innerHTML=html3;
             },
            error:function(err){
                console.error(err);
            }
        });
          }

          return charge;
    }

</script>




    
    





</body>

</html>