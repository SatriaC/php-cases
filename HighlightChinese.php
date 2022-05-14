<?php
$str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃';
$result = explode(" ", $str);
foreach ($result as $value) {
    if (!preg_match('/^[a-z0-9 .}, !@#$%^&*()_+|\';?><-]+$/i',  $value)) {
        echo '<span style="color:#FF0000;text-align:center;">' . $value . ' </span>';
    } else {
        echo $value . ' ';
    }
}
