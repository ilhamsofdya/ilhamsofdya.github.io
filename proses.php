<html>
<head>
<title>Output</title>
</head>

<body>


<?php
$nama  = $_POST ["nama"];
$email  = $_POST ["email"];
?>


<table border="1" align="center">
<tr>
     <td width="117">Nama</td>
     <td width="14">:</td>
     <td width="218"><? echo " $nama"   ?></td>
</tr>
<tr>
     <td>Email</td>
     <td>:</td>
     <td><? echo " $emailn"  ?></td>
</tr>
<tr>
     <td align="center" colspan="3"><a href="index.html.php">BACK </a></td>
</tr>
</table>
</body>
</html>
