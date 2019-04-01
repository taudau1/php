<?php declare(strict_types=1);
namespace Nfq\Akademija\Strict {
    function calculateHomeWorkSum(int ...$numbers) : int
    {
        $temp = null;
        foreach($numbers as $number)
        {
            $temp += $number;
        }
        return $temp;
    };
    }
