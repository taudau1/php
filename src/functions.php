<?php
namespace {
function calculateHomeWorkSum(...$numbers)
{
    $temp = null;
    foreach($numbers as $number)
    {
        $temp += $number;
    }
    return $temp;
};
}

namespace Nfq\Akademija\Not_Typed
{
    function calculateHomeWorkSum(...$numbers) : int
    {
        $temp = null;

        foreach($numbers as $number)
        {
            $temp += $number;
        }
        return $temp;
    };
}

namespace Nfq\Akademija\Soft
{
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