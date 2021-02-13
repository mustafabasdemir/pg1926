<html>
<head>
<body>
<form action="" method="post">
      Aklından Geçen sayıyı gir mükemmel sayı olup olmadığını sana söylicem  : <input placeholder="sayı gir." type="text" name="sayi">
    <input type="submit" value="Gönder">
</form>
</body>
</head>
</html>

<?php

$sayi = $_POST['sayi'];

$toplam=0;
for ($a=1;$a<$sayi;$a++)
{
    if($sayi%$a== 0)
    {
        $toplam +=$a;
        echo $a."<br>";
        echo "toplam  : ".$toplam."<br>";
    }

}



if($sayi == $toplam)
    print("mükemmel bir sayi girdin.");
else
    print("Mükemmel olmayan bir sayi girdin.");

?>