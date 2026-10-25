<!DOCTYPE html>
<html>
<head>
<title>練習</title>
<script>
alert("Hello world!!");
</script>
<script>
alert("Hello world2!!");
</script>
</head>
<body>
あいうえお<br>
<script>
document.write("Hello world!!");
</script>
<noscript>お使いの環境はJavaScriptが無効なので。</noscript>
<div id = "t1"></div>
<script>
document.getElementById("t1").innerHTML = "Hello world!!";
</script>
<script>
console.log("Hello world3!!");
</script>
<script>
dd = new Date();
document.write(dd.toLocaleString());
</script>
<hr>
<script>
var xx =5;
var yy =8;
var zz =xx+yy;
console.log(""+zz); 
</script>
<hr>
<script>
    var a = 3;
    let b = 3;
    {
        var a = 5;
        let b = 5;
    }
    console.log("a="+a);
    console.log("b="+b);

</script>
<script>
    for(let i = 0;i<5;++i) {
        console.log("i="+i);
    }
        // console.log("i="+i);
</script>
<script>
    const a=5:
    // a=8;//エラーになる
</script>

<script>
    var num1=10;
    var num2=5;
    document.write("+ "+num1+num2+"<br>");
    document.write(" "+num1-num2+"<br>");
    document.write("* "+num1*num2+"<br>");
    document.write("/ "+num1/num2+"<br>");
    document.write("% "+num1%num2+"<br>");

</script>
<script>
    var value1="ようこそ";
    var value2="KOBEへ";
    document.write(value1+value2);
</script>

<script>
var month=1;
alert(month + "月は英語でjunuaryです。");
</script>

<script>

function changeBgColor(newColor){
    document.body.style.backgroundColor = newColor;
}

</script>

<p>
    背景色を_
    <input type="button" value="緑色に変更する" onclick="changeBgColor('#008000');">
    <input type="button" value="青色に変更する" onclick="changeBgColor('#0000ff');">
    <input type="button" value="黄色に変更する" onclick="changeBgColor('#ffff00');">
    <input type="button" value="赤色に変更する" onclick="changeBgColor('#ff0000');">
    <input type="button" value="戻す" onclick="changeBgColor('#ffffff');">
</p>

</body>
</html>