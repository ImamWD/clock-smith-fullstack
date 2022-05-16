<?php 
session_start();
require_once("./includes/connect.php");
require_once('./includes/getProducts.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Table with Add and Delete Row Feature</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/crud-css.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script>

$(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
            var actions = $("table td:last-child").html();
            // Append table with add row form on add new button click
            $(".add-new").click(function(){
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"> </td>' +
                    '<td><input type="file" class="form-control" name="phone" id="phone"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
            });
            // Add row on add button click
            $(document).on("click", ".add", function(){
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                var input1 = $(this).parents("tr").find('input[type="file"]');

                input.each(function(){
                    if(!$(this).val()){
                        $(this).addClass("error");
                        empty = true;
                    } else{
                        $(this).removeClass("error");
                    }
                });
                input1.each(function(){
                    if(!$(this).val()){
                        $(this).addClass("error");
                        empty = true;
                    } else{
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if(!empty){
                    input.each(function(){
                        $(this).parent("td").html($(this).val());
                    });
                    input1.each(function(){
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
            });
            // Edit row on edit button click
            // $(document).on("click", ".edit", function(){
            //     $names = ['name', 'price', 'image'];
            //     var html = '';
            //     $(this).parents("tr").find("td:not(:last-child)").each(function(){
            //         html +='<td><input type="text" class="form-control"  name="'+$names[2]+'" value="' + $(this).text() + '"></td>';
            //     });

            //     html+=`<td><button type="submit" class="btn btn-primary">EDIT</button></td>`;

            //     console.log(html)
            //     $(this).parents("tr").html("<form method='post' action='edit.php'>"+html+"</form>")
                

            //     $(this).parents("tr").find(".add, .edit").toggle();
            //     $(".add-new").attr("disabled", "disabled");
            // });
            // Delete row on delete button click
            $(document).on("click", ".delete", function(){
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });
    </script>
</head>
<body>
<!-- start navbar  -->
<?php  
require_once('./navbar.php');
?>
<!-- end navber  -->
<div class="container-lg" style="padding-top: 100px;padding-bottom:50px ">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row p-3" style="background-color:#5c636a">
                    <div class="col-sm-8 text-white"><h2>Curd <b>Page</b></h2></div>
                    <div class="col-sm-4">
                        <a href="#add"  class="btn btn-primary add-new"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>
            </div >
            <table class="table table-bordered" style="border: black 5px solid">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php 
            foreach($products as $prod) {
                ?>
                <tr>
                    <td><?=$prod[1]?></td>
                    <td><?=$prod[2]?></td>
                    <td>
                        <img src="imgs/<?=$prod[3]?>" style="width:60px; height:60px" alt="">
                    </td>
                    <td>
                    <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                        <a href="edit.php?id=<?=$prod[0]?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="includes/deleteProduct.php?id=<?=$prod[0]?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
                </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>


    <form id="add" action="includes/addProduct.php" method="post" enctype="multipart/form-data" class="my-4 py-5">
        <h3 class="text-center text-primary text-capitalize">add products</h3>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">product name</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">product price</label>
            <input type="number" class="form-control" name="price" >
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

        <button type="submit" class="btn btn-primary">add</button>
    </form>
</div>
<footer class="w-100">
    <div class="container-lg ">
        <div class="row">
            <div class="col-3">
                <a class="clock" href="index.html">Clock <span class="smith-header">smith</span></a>

                <a href="#" class="footer-para">Asorem ipsum adipolor sdit amet, consectetur adipisicing elitcf sed do eiusmod tem.</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title">Quick Links</h4>
                <a href="#" class="footer-item">About</a>
                <a href="#" class="footer-item">Offers & Discounts</a>
                <a href="#" class="footer-item">Get Coupon</a>
                <a href="#" class="footer-item">Contact Us</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title"> New Products</h4>
                <a href="#" class="footer-item">Woman Cloth</a>
                <a href="#" class="footer-item">Fashion Accessories</a>
                <a href="#" class="footer-item"> Man Accessories</a>
                <a href="#" class="footer-item">Rubber made Toys</a>
            </div>
            <div class="col-3">
                <h4 class="footer-title">Support</h4>
                <a href="#" class="footer-item">Frequently Asked Questions</a>
                <a href="#" class="footer-item">Terms & Conditions</a>
                <a href="#" class="footer-item">Privacy Policy</a>
                <a href="#" class="footer-item">Report a Payment Issue</a>
            </div>
        </div>
    </div>
    <hr class="footer-item footer-line">
    <div class="copyright">Copyright ©2022 All rights reserved </div>
</footer>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>