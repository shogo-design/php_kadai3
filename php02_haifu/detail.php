<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */

$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    // データが取得できた場合の処理
    $result = $stmt->fetch();
}
?>



<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>RECORD DATA</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      div {
            padding: 10px;
            font-size: 16px;
        }
/* .input-group {
    position: relative;
} */
.container-fluid{
    position: relative;
    /* background: #999;
    border: none; */
}

.input1 {
    position: relative;
    left:1rem;
    width: 28rem;
    height: 5rem;
    padding: 1rem 1rem 1rem 3rem;
    background-color: #ddd;
    border: none;
    border-radius: 0.5rem;
}
.input2 {
    position: relative;
    left:1rem;
    width: 28rem;
    height: 5rem;
    padding: 1rem 1rem 1rem 3rem;
    background-color: #ddd;
    border: none;
    border-radius: 0.5rem;
}
.input3 {
    position: relative;
    left:1rem;
    width: 28rem;
    height: 20rem;
    padding: 1rem 1rem 1rem 3rem;
    background-color: #ddd;
    border: none;
    border-radius: 0.5rem;
}
.thoughts{
    margin-bottom:5rem;
}
.jumbotron{
    background:linear-gradient(rgba(53, 82, 66, 0.5), rgba(47, 80, 63, 0.6)),
    url(images/bg.jpg) center no-repeat;
}
.submit{
    /* display:flex;
    justify-content:center;
    align-items:center; */
    position: relative;
    left:10rem;
    top:2rem;
    padding:20px;
    border: 2px solid #eee;
    border-radius: 0.5rem;
}


    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid" >
                <div class="navbar-header"><a class="navbar-brand" href="select.php">RECORD</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="update.php">
        <div class="jumbotron">
            <!-- <img src="images/bg.jpg" alt=""> -->
            <fieldset>
                <legend style="color:white;">DATA</legend>
                <label><p class="thoughts" style="color:white;">Bookname：</p><input type="text" name="bookname" class="input1" value="<?= $result['bookname']?>"></label><br>
                <label><p class="thoughts" style="color:white;">URL：</p><input type="text" name="URL" class="input2" value="<?= $result['URL']?>"></label><br>
                <label><p class="thoughts" style="color:white;"> Thoughts：</p><textArea name="comment" rows="4" cols="40" class="input3" value="<?= $result['comment']?>"></textArea></label><br>
                <input type="hidden" name="id" value="<?= h($result['id'])?>">
                <input type="submit" value="修正" class="submit">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>

