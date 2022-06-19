
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おすすめ店</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend class="title">人におすすめしたい店</legend>
    <table>
     <tr>
      <th class="form-item"><label>店名：</th>
      <td class="form-body"><input type="text" name="name"></label><br></td>
     </tr>
     <tr>
     <th class="form-item"><label>場所：</th>
     <td class="form-body"><input type="text" name="place"></label><br></td>
     </tr>
     <tr>
     <th class="form-item"><label>予算：</th>
     <td class="form-body"><input type="text" name="price"></label><br></td>
     </tr>
     <tr>
     <th class="form-item"><label>目的：</th>
     <td class="form-body"><select name="perpose">
        <option value="会食・接待">会食・接待</option>
        <option value="歓送迎会">歓送迎会</option>
        <option value="若手飲み">若手飲み</option></label><br></td>
     </tr>
     <tr>
     <th class="form-item"><label>HP ：</th>
     <td class="form-body"><input type="text" name="link"></label><br></td>
     </tr>
     <tr>
     <th class="form-item"><label>おすすめポイント：</th>
     <td class="form-body"><textArea name="point" rows="4" cols="40"></textArea></label><br></td>
     </tr>    
    </table>
    <input type="submit" value="送信">
    </fieldset>
  </div>
</form>

</body>
</html>