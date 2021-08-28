<?php

if(isset($_POST['number'])){
 $n=$_POST['number'];
 $fib=fibonacci($n);
 echo $fib;



}
else
{
    echo "nothing Received !!!";
}


function fibonacci($number):int
{
    $fibo=1;
    if($number==1)
    {
        return $fibo;
    }
    if($number>=2)
    {
        $fibo=fibonacci($number-1)+fibonacci($number-2);

    }
    return $fibo;
}