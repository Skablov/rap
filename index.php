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
    <title>Главная страница</title>

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
    <a class="p-2 text-dark" href="/index.php">Главная</a>
    <a class="p-2 text-dark" href="#">Помощь</a>
    <a class="p-2 text-dark" href="#">О нас</a>
  </nav>
  <a class="btn btn-outline-primary" href="/sign_up.php">Sign up</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Добро пожаловать!</h1>
  <p class="lead">Бонг — инструмент для курения, который охлаждает и фильтрует проходящий через него дым. Фильтром является шахта, на охлажденных стенках которой собираются примеси, и колба с жидкостью, в которой растворяются до 38 % содержащихся в дыме веществ.</p>
</div>
<div class="container">
  <div class="row " id="main">


  </div>
</div>
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
                   <label>Ваш контактный телефон</label>
                   <input type="text" id="num" placeholder="+71234567890" class="form-control">
                   <label>Способ оплаты</label><br>
                     <select class="form-control" id="option">
                       <option>Онлайн оплата</option>
                       <option>Наличными</option>
                   </select>
                 </div>
               </form>
           </div>
           <div class="modal-footer">
             <button class="btn btn-success" onclick='modal_window()'>Купить</button>
             <button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
       </div>
     </div>
   </div><br><br><br>
  <script src="index.js">

  </script>

</body>
