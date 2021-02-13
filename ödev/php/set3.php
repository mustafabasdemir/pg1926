<html>
<head>

</head>
<body>

<form action="" method="post">
     bir sayı gir : <input placeholder="sayı gir." type="text" name="sayi" autocomplete="off">
    <input type="submit" value="Gönder">
</form>

<?php
$sayi=$_POST['sayi'];

$asal=0; $i=2;

do
{
    if ($sayi % $i == 0)
    {
        $asal = 1;
    }
    $i++;
}
while($i<$sayi);

if ($asal != 1)
{
?>   <script> alert("Girilen sayı asal");</script>  <?php
}
else
{
?>   <script> alert("Gririlen sayı asal değil.");</script>  <?php
}

?>


</body>
</html>
