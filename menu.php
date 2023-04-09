<?php

if (empty($_GET['table'])) {
  $code = "le code QR n'est pas scanner correctement";
} else {
  $code = '';
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Menu</title>
</head>

<body>
  <header>
    <div class="container">



      <div class="searsh">

        <div class="icon">
          <i id="searsh_icon" class="fa-solid fa-magnifying-glass"></i>
        </div>

        <input type="text" id="search" onkeyup="search()" placeholder="search" />


        <div class="dell">
          <h4><i id="delete_searsh" class="fa-solid fa-xmark"></i></h4>
        </div>


      </div>



      <h3><?php echo ($code) ?></h3>

      <a href="">
        <div class="logo"></div>
      </a>
    </div>
  </header>

  <section>
    <div class="container" id="container">
      <div class="category_container" id="category_container">
        <div class="category">
          <a href="#category1">
            <i class="fa-solid fa-burger"></i>
            <h3>Burgers</h3>
          </a>
        </div>
        <div class="category">
          <a href="#category2">
            <i class="fa-solid fa-burger"></i>
            <h3>Salads</h3>
          </a>
        </div>
        <div class="category">
          <a href="#category3">
            <i class="fa-solid fa-burger"></i>
            <h3>Pasta</h3>
          </a>
        </div>
        <div class="category">
          <a href="#category4">
            <i class="fa-solid fa-cookie"></i>
            <h3>cookies</h3>
          </a>
        </div>
      </div>

      <div class="card_holder" id="category1">
        <div class="holder_title">
          <h3>category 1</h3>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="card_holder" id="category2">
        <div class="holder_title">
          <h3>category 2</h3>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="card_holder" id="category3">
        <div class="holder_title">
          <h3>category 3</h3>
        </div>
        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="card_holder" id="category4">
        <div class="holder_title">
          <h3>category 4</h3>
        </div>
        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="img">
            <img src="images/hd-fast-food-gourmet-burger-png-116533297971wik1fvkyz-removebg-preview.png" alt="" />
          </div>
          <div class="title">
            <h3>Burger nadyy</h3>
          </div>
          <div class="prix_plus">
            <h4>50 DH</h4>
            <div class="plus_cont">
              <i class="fa-solid fa-plus"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="cart.php" id="cart2" class="cart-bottom">
      <i class="fa-solid fa-cart-shopping"></i>
      <div class="p">nombre items <span id="point2">( 4 )</span></div>
    </a>


    <a href="#">
      <div class="scrolldown" style="color: skyblue">
        <div class="chevrons">
          <div class="chevrondown"></div>
          <div class="chevrondown"></div>
        </div>
      </div>
    </a>

  </section>

  <footer>
    <div class="footer_logo">
      <h2><span>Foodie</span> Moments</h2>
    </div>

    <div class="footer_menu">
      <div class="cont">
        <a href="#category1">Category1</a>
        <a href="#category2">Category2</a>
        <a href="#category3">Category3</a>
        <a href="#category4">Category4</a>
      </div>
    </div>

    <div class="footer_media">
      <div class="cont">
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-solid fa-envelope"></i></a>
      </div>
    </div>

    <div class="copyright">
      <h3>copyright © 2023 .By <span>ATREX</span></h3>
    </div>
  </footer>

  <script>
    var searsh = document.getElementById("searsh_icon");
    var searsh_bar = document.querySelector(".searsh");
    var delete_searsh = document.getElementById("delete_searsh");

    searsh_bar.style.width = "40px";

    searsh.onclick = function() {
      if (searsh_bar.style.width === "40px") {
        searsh_bar.style.width = "45%";
      } else {
        searsh_bar.style.width = "40px";
      }
    };

    delete_searsh.onclick = function() {
      document.getElementById("search").value = '';
    }

    function search() {
      let filter = document.getElementById("search").value.toUpperCase();

      let item = document.querySelectorAll(".card");

      let l = document.getElementsByTagName("h3");

      for (var i = 0; i <= l.length; i++) {
        let a = item[i].getElementsByTagName("h3")[0];

        let value = a.innerHTML || a.innerText || a.textContent;

        if (value.toUpperCase().indexOf(filter) > -1) {
          item[i].style.display = "";
          item[i].style.visibility = "visible";
        } else {
          item[i].style.display = "none";
          item[i].style.visibility = "hidden";
        }
      }
    }


    /*
          const menu_btn = document.getElementById("menu_btn");
          const category_container = document.getElementById("category_container");

          category_container.style.height = "0px";
          category_container.style.visibility = "hidden";
          category_container.style.overflow = "hidden";

          menu_btn.addEventListener("click", menu_show);

          function menu_show() {
            if (category_container.style.height === "0px") {
              category_container.style.visibility = "visible";
              category_container.style.overflow = "visible";
              category_container.style.height = "50px";
            }
          }
    */
  </script>



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>