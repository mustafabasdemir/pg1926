<html>
<head>
<body>
<form action="" method="post">
    Alınan Para : <input placeholder="sayı gir." type="text" name="sayi" autocomplete="off">
    <input type="submit" value="Gönder">
</form>

<?php

$alinanpara = $_POST['sayi'];
$birtl=0; $ellikrs=0;
echo "Müşteriden alınna para  : ".$alinanpara;

while ($alinanpara>0.99)
{
    $alinanpara--;
    $birtl++;

}
echo  "<br>".$birtl." Adet 1 tl kalan :  ".$alinanpara;


?>





</body>
</html>