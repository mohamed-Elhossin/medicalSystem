
<?php

define("BASE_URL", "http://localhost/medical/admin/");



function url($var = null)
{
    return BASE_URL . $var;
}



function  testMessage($condition, $message)
{
    if ($condition) {
        return "$message Done ";
    }
}


function path($var)
{
    echo "<script>
    window.location.replace('http://localhost/medical/admin/$var')
  </script>";
}



function auth($num = null, $num2 = null)
{
    // if ($_SESSION['admin']) {

    //     if ($_SESSION['admin']['rule'] == 1 || $_SESSION['admin']['rule'] == $num || $_SESSION['admin']['rule'] == $num2) {
    //     } else {
    //         path('pages-error-404.php');
    //     }
    // } else {
    //     path('pages-login.php');
    // }
}



// Validation Functions



// fillters Function
function fillterValidation($input_value)
{
    $input_value = trim($input_value);
    $input_value = strip_tags($input_value);
    $input_value = htmlspecialchars($input_value);
    $input_value = stripslashes($input_value);
    return $input_value;
}


function stringValidation($input_value, $minSize = 3, $maxSize = 20)
{

    $empty = empty($input_value);
    $minLength = strlen($input_value) < $minSize;
    $maxLength = strlen($input_value) >  $maxSize;

    if ($empty == true || $minLength == true || $maxLength == true) {
        return true;
    } else {
        return false;
    }
}



function numberValidation($input_value)
{
    $empty = empty($input_value);
    $isNagtive = $input_value < 0;
    $isNotNumber = filter_var($input_value, FILTER_VALIDATE_INT) == false;

    if ($empty == true || $isNagtive == true || $isNotNumber == true) {
        return true;
    } else {
        return false;
    }
}



function fiter_sizr_file($image_name, $image_size, $yourSize = 2)
{

    $sizeToM = ($image_size / 1024) / 1024;

    $bigerSize = $sizeToM > $yourSize;
    $empty = empty($image_name);
    if ($empty == true || $bigerSize == true) {
        return true;
    } else {
        return false;
    }
}



function filterType_file($file_type, $type1 = null, $type2 = null, $type3 = null, $type4 = null)
{

    if (
        $file_type == "$type1" ||
        $file_type == "$type2" ||
        $file_type == "$type3" ||
        $file_type == "$type4"
    ) {
        return false;
    } else {
        return true;
    }
}
