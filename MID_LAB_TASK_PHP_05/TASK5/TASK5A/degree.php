<?php
if(isset($_POST['submit'])){
if(!empty($_POST['checkbox'])){

foreach($_POST['checkbox'] as $selected){
echo $selected."</br>";
}
}
}
?>