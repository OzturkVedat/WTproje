<?php

if (isset($_POST['e-posta'], $_POST['şifre'] )
&& ($_POST['e-posta']=='vedat.ozturk@ogr.sakarya.edu.tr')
&& ($_POST['şifre']!='B211210085')) {
echo "Hoşgeldiniz...";
echo "<b>".$_POST['şifre'] ."</b>";
}else{
echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>";
}
?>