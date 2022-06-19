<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>

<?php
//1. POSTデータ取得
$name = $_POST['name'];
$place = $_POST['place'];
$price = $_POST['price'];
$perpose = $_POST['perpose'];
$link = $_POST['link'];
$point = $_POST['point'];

try {
    $pdo = new PDO('mysql:dbname=nm_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DBConnection Error:'.$e->getMessage());
  }

$stmt = $pdo->prepare("insert into nm_res_table(name, place, price, perpose, link, point) values(:name, :place, :price, :perpose, :link, :point)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':place', $place, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':price', $price, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':perpose', $perpose, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':link', $link, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':point', $point, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt -> execute();

if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQL_ERROR:".$error[2]);
  }else{
    header("Location: data.php");
    exit();
  }
  ?>