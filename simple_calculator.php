
<form action="" method="post">
    <input type="number" name="value1" placeholder="Enter 1st Number">
    <input type="number" name="value2" placeholder="Enter 2nd Number">
    <select name="oparation">
        <option value=""> ----- </option>
        <option value="1"> Addition </option>
        <option value="2"> Subtraction </option>
        <option value="3"> Multiplication </option>
        <option value="4"> Division </option>
    </select>

    <input type="submit" name="calculate">
</form>
<?php

if(isset($_POST['calculate'])){

$value1 = $_POST['value1'];
$value2 = $_POST['value2'];
$oparation = $_POST['oparation'];

if($oparation==1){
    $result = $value1+$value2;
}

else if($oparation==2){
    $result = $value1-$value2;
}

else if($oparation==3){
    $result = $value1*$value2;
}

else if($oparation==4){
    $result = $value1/$value2;
}

echo "your result is : $result";

}