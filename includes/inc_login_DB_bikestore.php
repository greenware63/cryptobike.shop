<?php


class inc_login_DB_bikestore
{
    public static string $host_name='localhost';
    public static string $DB_name='u271381311_bike_store';
    public static string $user_name='u271381311_greenware63';
    public static string $PWD='3xyYe6B>iI^';


    public static function Connect(): mysqli
    {
        $conn=mysqli_init();
        try{
            if(mysqli_real_connect($conn,self::$host_name,self::$user_name,self::$PWD,self::$DB_name))
                return $conn;


        }

    catch (mysqli_sql_exception $e)
    {
        $errorMessage=$e->getMessage();
        $errorCode=$e->getCode();

        echo $errorCode." ".$errorMessage;
    }
        return $conn;
    }

}
