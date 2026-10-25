<!DOCTYPE html>
<html>
<head>
<title>練習click3</title>
<script src="js/jquery-4.0.0.min.js"></script>

<script>
$(function(){
   $("a").on("click",function(){
            //alert($(this).attr("href"));
        $("img").attr("src",$(this).attr("href"))//srcの値をAタグのhrefの値に変更
                .attr("alt",$(this).text());//altの値をAタグで囲まれたテキストに変更
        return false;
   })

})
</script>

</head>
<body>
    <ul>
        <li><a href="image/img01.jpg">風景画</a></li>
        <li><a href="image/img02.jpg">秋の散歩道</a></li>
        <li><a href="image/img03.jpg">平原</a></li>
        <li><a href="image/img04.jpg">緑の回廊</a></li>
    </ul>
    <p><img src="image/img01.jpg" alt="風景画" width="640" height="480" /></p>
</body>
</html>
