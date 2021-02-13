<?php
error_reporting(0);
// zaman kavramı sayfa yeni açıldığında bos oldugu
// için hata veriyor bu yüzden hata mesajlarını gizledim
?>
<html>
<head>
<body>
    <form action="" method="post">
    Şimdi bana saat kaç olduğunu söyle  : <input placeholder="xx:yy biçiminde giriniz. " type="text" name="zaman">
    <input type="submit" value="zamanı gönder">
    </form>
</body>
</head>
</html>

<?php

$zaman = $_POST['zaman'];
//echo "Girilen zaman  ".$zaman;




if($zaman>='06:00' and $zaman<='10:00')
{
    ?>  <script> alert("Günaydın");</script><?php
}
elseif ($zaman>'10:00' and $zaman<='17:00')
{
    ?>  <script> alert("İyi Günler");</script><?php
}
elseif ($zaman>'17:00' and $zaman<='20:00')
{
    ?>  <script> alert("İyi akşamlar");</script><?php
}
elseif ($zaman>'20:00' and $zaman<='00:00')
{
    ?>  <script> alert("İyi Geceler");</script><?php
}
elseif ($zaman>'00:00' and $zaman<='00:06')
{
    ?>  <script> alert("Esenlikler dilerim");</script><?php
}
else
{
    ?>  <script> alert("Oops!! Bir hata ile karşılaştım :(");</script><?php
}
?>
