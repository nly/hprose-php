<?php
require_once('../Hprose.php');

$test = new HproseSwooleClient("http://127.0.0.1:8000");
$args = array("world");
var_dump($test->invoke("hello", $args, 0, HproseResultMode::Serialized, 0));
var_dump($test->invoke("hello", $args, 0, HproseResultMode::Raw, 0));
var_dump($test->invoke("hello", $args, 0, HproseResultMode::RawWithEndTag, 0));
try {
    $test->e();
}
catch (Exception $e) {
    var_dump($e->getMessage());
}
try {
    $test->ee();
}
catch (Exception $e) {
    var_dump($e->getMessage());
}

$test->hello('async world', function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error);
});
$test->hello("async world2", function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error);
});
$test->hello("async world3", function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error);
});
$test->hello("async world4", function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error);
});
$test->hello("async world5", function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error);
});
$test->e(function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error->getMessage());
});
var_dump($test->hello("world"));
$test->ee(function($result, $args, $error) {
    echo "result: ";
    var_dump($result);
    echo "args: ";
    var_dump($args);
    echo "error: ";
    var_dump($error->getMessage());
});
