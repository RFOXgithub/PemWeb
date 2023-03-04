<html>
<head>
    <title>Object Document</title>
</head>

<body>
    <script language="Javascript">
        function ubahwarnaLB (warna){
        document.fgColor = warna;
        }

        function ubahwarnaLD (warna){
        document.fgColor = warna;
        }
    </script>

    <h1>Tes</h1>
    <form>
         <input type="button" value="Latar Belakang Hijau" onclick="ubahWarnaLB('GREEN')">
         <input type="button" value="Latar Belakang Putih" onclick="ubahWarnaLB('WHITE')">
         <input type="button" value="Text Kuning" onclick="ubahWarnaLD('YELLOW')">
         <input type="button" value="Text Biru" onclick="ubahWarnaLD('BLUE')">
    </form>
</body>
</html>