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
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <!-- <img src="images/bg.jpg" alt=""> -->
            <fieldset>
                <legend style="color:white;">DATA</legend>
                <label><p class="thoughts" style="color:white;">Bookname：</p><input type="text" name="bookname" class="input1"></label><br>
                <label><p class="thoughts" style="color:white;">URL：</p><input type="text" name="URL" class="input2"></label><br>
                <label><p class="thoughts" style="color:white;"> Thoughts：</p><textArea name="comment" rows="4" cols="40" class="input3"></textArea></label><br>
                <input type="submit" value="Submit" class="submit">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
