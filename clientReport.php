<?php
try {
    require_once 'incLogin_bikestore.php';
$myConn=incLogin_bikestore::Connect();
$query="SELECT * FROM users";
$result=$myConn->query($query);
$rows=$result->num_rows;

for($i=0;$i<$rows;$i++)
{
    $result->data_seek($i);
    echo 'Name : '.htmlspecialchars($result->fetch_assoc()['username']).'<br>';

    $result->data_seek($i);
    echo 'Fullname : '.htmlspecialchars($result->fetch_assoc()['fullName']).'<br>';

    $result->data_seek($i);
    echo 'id : '.htmlspecialchars($result->fetch_assoc()['nationalID']).'<br>';

    $result->data_seek($i);
    echo 'phone : '.htmlspecialchars($result->fetch_assoc()['phonenumber']).'<br>';

    $result->data_seek($i);
    echo 'Address : '.htmlspecialchars($result->fetch_assoc()['Address']).'<br>';
    echo "----------------------------------------------------------------------"."<br>";


}

}

catch (mysqli_sql_exception $exception)
{
    echo "something is wrong!!";
}
