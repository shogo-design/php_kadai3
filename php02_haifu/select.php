<?php
require_once('funcs.php');
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table;');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //GETデータ送信リンク作成
        // <a>で囲う。
        $view .= '<p>';
        $view .= '<a href="detail.php?id=' . h($result['id']) . '">';
        // $view .= . $result['id'] .;
        //  $view .= '<p>' . $result['id'] . ' : ' . h($result['bookname']) . ' / ' . h($result['URL']) . '</p>'
        $view .= h($result['indate']) . '：' . h($result['bookname']) ;
        $view .= '</a>';

        $view .= '<a href="delete.php?id=' . h($result['id']) . '">';
        $view .= '[削除]';
        $view .= '</a>';
         $view .= '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DATA HISTORY</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
div{padding: 10px;font-size:16px;}

.date{
  display: none;
}
.comment{
  display: none;
}

</style>
</head>
<!-- <a href="selectt.php?id=></a> -->
<body id="main">
<!-- Head[Start] -->
<header>
  </div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="backgorund= #999 color: white">HISTORY</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
  
    <div class="container jumbotron" style="background: linear-gradient(rgba(53, 82, 66, 0.5), rgba(47, 80, 63, 0.6)),
    url(images/bg.jpg) center no-repeat; color: white" id="id"><?= $view ?></div>
    
  
</div>

<!-- Main[End] -->
<script>
  
</script>

</body>
</html>










