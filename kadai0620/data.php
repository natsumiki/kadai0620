<?php
try {
    $pdo = new PDO('mysql:dbname=nm_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
    exit('DBConnection Error:'.$e->getMessage());
}


$stmt = $pdo->prepare("SELECT*FROM nm_res_table");
$status = $stmt->execute();

$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SRL_ERROR:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .=$res["name"].",".$res["place"].",".$res["price"].",".$res["perpose"].",".$res["link"].",".$res["point"];
    $view .="<p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>人におすすめしたいお店一覧</title>
<link rel="stylesheet" href="./CSS/style2.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">人にお薦めしたいお店一覧</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
