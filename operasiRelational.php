l<html>
<head>
    <title>Contoh Pemprgraman Javascript</title>
</head>
<script language="Javascript">
function test(){
    val1=window.prompt("Nilai I : ")
    val2=window.prompt("Nilai II : ")

    document.write("<br>"+"val1==val2"+"<br>")
    document.write(val1==val2)
    document.write("<br>"+"val1!=val2"+"<br>")
    document.write(val1!=val2)
    document.write("<br>"+"val1>val2"+"<br>")
    document.write(val1>val2)
    document.write("<br>"+"val1<val2"+"<br>")
    document.write(val1<val2)
}
</script>
<body type="button" name="button1" value="relational" onclick=test()>
</body>
</html>