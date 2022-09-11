
<?php
$id =$_GET['id'];
$cadastro = file("cadastros/$id");
foreach($cadastro as $texto){
    echo "$texto <br>";
}