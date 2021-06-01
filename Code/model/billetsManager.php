<?php

function snowLeasingAdd($codeSnow)
{
    if (!isset($_SESSION['cartSnow'])) {
        $_SESSION['cartSnow'] = [];
    }
    $newSnowLeasing = array('code' => $codeSnow['code'], 'dateD' => date('Y-m-d'), 'nbD' => '1', 'qty' => '1');
    array_push($_SESSION['cartSnow'], $newSnowLeasing);
}
