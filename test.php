<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メモ</title>
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<?php phpinfo(); ?>
<img src="header.png" alt="">
<form action="" id="form">
       <textarea id="memo" cols="30" rows="10"></textarea>
    <div>
    <input id="save" type="button" value="保存">
    <input id="dele" type="button" value="消去">
    </div>
</form>
    <script>

    var memo = localStorage.getItem("memodata");
    $("#memo").val(memo);

    $("#save").click(function(){
    memo = $("#memo").val();
    localStorage.setItem("memodata",memo);
    });

    $("#dele").click(function(){
    $("#memo").val('');
    localStorage.clear();
    });
    </script>
</body>
</html>








