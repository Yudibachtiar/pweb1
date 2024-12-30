<article>
<?php
extract($_GET); if(isset($menu)){
if($menu == "home"){
@include "Latihan_09_home.php";
}elseif($menu == "about"){
@include "Latihan_09_about.php";
}
else{
@include "Latihan_09_home.php";
}
}
?>
</article>
