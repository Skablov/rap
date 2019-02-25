<?php
  session_start();
  if($_SESSION['id'] != 2)
  {
    header("Location: /index.php");
    exit;
  }
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Администратор</title>

    <!-- Bootstrap core CSS -->
<link href="/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      img{
        width: 250;
        height: 300;
      }
      h3{
        margin-left: 80;
      }
      small{

      }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Bonjo-Bong</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/admin.php">Главная</a>
    <a class="p-2 text-dark" href="/admin_product.php">Товары</a>
    <a class="p-2 text-dark" href="#">О нас</a>
  </nav>
</div>
<div class="container">
  <div class="row" id="main">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Товар</th>
          <th>Номер телефона</th>
          <th>Тип оплаты</th>
        </tr>
      </thead>
      <tbody id="tbody">
      </tbody>
    </table>
  </div><br><br>
  <label class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Добавить товар</label>
</div><br>

<div id="myModal" class="modal fade">
     <div class="modal-dialog">
       <div class="modal-content">
           <div class="modal-header">
             <h4 class="modal-title">Покупка бонга</h4>
           </div>
           <div class="modal-body">
               <form>
                 <div class="form-group" style="text-align:left">
                   <label id="bong"></label><br>
                   <label>Название товара</label>
                   <input type="text" id="name" placeholder="Bong" class="form-control">
                   <label>Описание товара</label>
                   <input type="text" id="dis" placeholder="Товар хороший.." class="form-control">
                   <label>Путь к изображению</label>
                   <input type="text" id="img" placeholder="example.jpg" class="form-control">
                   <label>Цена</label><br>
                   <input type="text" id="cost" placeholder="200..." class="form-control">
                 </div>
               </form>
           </div>
           <div class="modal-footer">
             <button class="btn btn-success" onclick='modal_window()'>Добавить</button>
             <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
       </div>
     </div>
   </div>
<script src="admin.js">

</script>
