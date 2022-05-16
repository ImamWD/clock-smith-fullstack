<nav class="navbar navbar-expand-lg navbar-light bg-white position-fixed w-100 h-15 z-index nav-border">
    <div class="container-fluid">

            <a class="navbar-brand fw-bold fs-10 " href="index.php">Clock <span class="smith-header">smith</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto ">
                <li class="nav-item">
                    <a class=" page-link active fw-600 color-black me-4 rounded-3  nav-hover " aria-current="page"  href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="page-link fw-600 color-black nav-hover rounded-3" href="shop.php">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="page-link fw-600 color-black ms-4  rounded-3  nav-hover" href="About.html">About</a>
                </li>

                <li class="nav-item  hover-list dropdown">
                    <a class="page-link fw-600 color-black ms-4  rounded-3  nav-hover" href="#">
                        Latest
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-main-color ">
                            Hot
                        </span>
                    </a>
                    <ul class="dropdown-list">
                        <Li>
                            <a class="list-item" href="#">Product List</a>
                        </Li>
                        <li>
                            <a class="list-item" href="#">product Details</a>
                        </li>
                    </ul>

                </li>



                <li class="nav-item hover-list dropdown">
                    <a class="page-link fw-600 color-black ms-4  rounded-3  nav-hover" href="#">
                        Pages
                    </a>
                    <ul class="dropdown-list">
                    <?php if(isset($_SESSION['user'])){ ?>
                        <Li>
                            <a class="list-item" href="includes/logout.php">Logout</a>
                        </Li>
                    <?php } else
                      {  ?>
                        <Li>
                            <a class="list-item" href="LOGIN.php">Login</a>
                        </Li>
                        <?php } ?>
                        <li>
                            <a class="list-item" href="cart.php">Cart</a>
                        </li>
                        <Li>
                            <a class="list-item" href="Shop.php">Shop</a>
                        </Li>
                    </ul>

                </li>

                <li class="nav-item">
                    <a class="page-link fw-600 color-black ms-4  rounded-3  nav-hover" href="contact.html">Contact</a>
                </li>
                
                <?php
                 if(isset($_SESSION['user'])&& $_SESSION['user']['type']==1){ ?>
                    <li class="nav-item">
                    <a class="page-link fw-600 color-black ms-4  rounded-3  nav-hover" href="Crud.php">add product</a>
                </li>
                <?php } ?>
            </ul>
        </div>

        <div  style="width: 10% ; float: right; display: inline-block ">
            <div class="row">
                <a class=" col-4 nav-hover " href="#"><i class="fa-solid fa-magnifying-glass "></i></a>
                <?php if(isset($_SESSION['user'])){echo $_SESSION['user']['name'];
                 ?>
            
               <a class=" col-4 nav-hover" href="cart.php"> <i class="fa-solid fa-cart-shopping "></i></a>
               <?php }else{
 ?>
                    <a class=" col-4 nav-hover d-flex" href="LOGIN.php">
                    <i class="fa-regular fa-user "></i>
                    </a>
              <?php  } ?>
            </div>

        </div>

    </div>
</nav>