<html>
<head>
    <title>Contoh Pemprgraman Javascript</title>
</head>
<script language="Javascript">
function test(){
    val1=window.prompt("Input Nilai (1-5) : ")
    switch (val1)
    {
     case "1":
        document.write("Bilangan satu")
        break

        case "2":
        document.write("Bilangan dua")
        break

        case "3":
        document.write("Bilangan tiga")
        break

        case "4":
        document.write("Bilangan empat")
        break

        case "5":
        document.write("Bilangan lima")
        break

        default :
        document.write("Bilangan Lainnya")
    }

}
</script>
<body>
    <input type="button" name="button1" value="switch" onclick=test()>
</body>
</html>