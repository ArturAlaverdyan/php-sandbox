<?php
namespace App\Testing;
//use App\Second as Second;
//require_once('Second.php');
if (class_exists('Second'))
{
    echo 'yes';
}
else{
    echo 'no';
}
echo Second::doSomething();