<?php


require 'inc_login_DB_bikestore.php';
//require 'register.php';
$conn=inc_login_DB_bikestore::Connect();
if($conn->connect_error) die("Fatal error!!!");
else
    echo "you connected !";
if(isset($_POST['delete']) && isset($_POST['id']))
{

    $id=get_post($conn,'id');
    echo $id;
    $query_del="DELETE FROM clients WHERE id='$id'";
    $result=$conn->query($query_del);
    if(!$result)echo "Delete failed<br><br>";
}


$query="SELECT * FROM clients";
$result=$conn->query($query);
if(!$result) die("database  access failed");

$rows=$result->num_rows;
for($j=0;$j<$rows;++$j)
{
    $row=$result->fetch_array(MYSQLI_NUM);

    $r0=htmlspecialchars($row[0]);
    $r1=htmlspecialchars($row[1]);
    $r2=htmlspecialchars($row[2]);
    $r3=htmlspecialchars($row[3]);
    $r4=htmlspecialchars($row[4]);
    $r5=htmlspecialchars($row[5]);




}
echo <<<_END
<pre>

name $r0
fullname $r1
id $r2
birthday $r3
phone $r4
Address $r5
<form action="reg_ctrl.php" method="=post">
<input type="hidden" name="delete"value="yes">
<input type="hidden" name="id" value="$r2">
<input type="submit" value="DELETE RECORD">
</form>


</pre>
_END;

$result->close();
$conn->close();

function get_post($conn,$var)
{
    return $conn->real_escape_string($_POST[$var]);
}
