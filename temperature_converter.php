
<form action="" method="post">
    <input type="text" name="value" placeholder="Enter value">
    <select name="expect">
        <option value=""> ----- </option>
        <option value="1"> Celsius </option>
        <option value="2"> Fahrenheit </option>
    </select>

    <input type="submit" name="calculate">
</form>
<?php

if(isset($_POST['calculate'])){

$value = $_POST['value'];
$expect = $_POST['expect'];

if($expect==1){
$c = $value;  
 
$f =  (($c * 9 / 5) + 32);
 
echo "$c   Celsius =   $f  Fahrenheit";
}

else if($expect==2){
$f = $value;  
 
$c =  ((($f-32)*5)/9);
 
echo "   $f  Fahrenheit = $c   Celsius ";
}
}