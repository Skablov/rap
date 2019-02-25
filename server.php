<?php
  include('bd.php');

  switch ($_POST['command'])
  {
    case 'read':
      $result = mysql_query("SELECT * FROM product", $db);
      $r = array();
      while($res=mysql_fetch_array($result))
      {
        array_push($r, $res['id'], $res['name'], $res['img'], $res['dis'], $res['cost']);
      }
      echo json_encode($r);
      break;
    case 'client':
      $id = $_POST['id'];
      $num = $_POST['num'];
      $option = $_POST['option'];
      $result = mysql_query("INSERT INTO client (num, opt, product, status) VALUES ('$num', '$option', '$id', '0')", $db);
      echo 'Ваш запрос оставлен, ожидайте звонка';
      break;
    case 'manager':
      $result = mysql_query("SELECT * FROM client", $db);
      $r = array();
      while($res=mysql_fetch_array($result))
      {
        array_push($r, $res['product'], $res['num'], $res['opt'], $res['status']);
      }
      echo json_encode($r);
      break;
    case 'admin':
      $result = mysql_query("SELECT * FROM client WHERE status='0'", $db);
      $r = array();
      while($res = mysql_fetch_array($result))
      {
        array_push($r, $res['id'], $res['product'], $res['num'], $res['opt']);
      }
      echo json_encode($r);
      break;
    case 'close':
      $id = $_POST['id'];
      $result = mysql_query("UPDATE client SET status='1' WHERE id='$id'",$db);
      echo 'Успешно';
      break;
    case 'add':
      $name = $_POST['name'];
      $cost = $_POST['cost'];
      $dis = $_POST['dis'];
      $img = $_POST['img'];
      $result = mysql_query("INSERT INTO product (name, img, dis, cost) VALUES ('$name', '$img','$dis', '$cost')", $db);
      echo 'Товар успешно добавлен в БД';
      break;
    case 'del':
      $id =$_POST['id'];
      $result = mysql_query("DELETE FROM product WHERE id='$id'", $db);
      echo 'Товар успешно удален :)';
      break;
  }


 ?>
