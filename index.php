<?php 
require("vendor/autoload.php");
echo calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo  Nfq\Akademija\Not_Typed\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo  Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, '1') . "<br>";
echo  Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, '1');
