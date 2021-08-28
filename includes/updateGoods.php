
<?php
//if(isset($_POST['submit']))
//{
//    $user_name=$_POST['userName'];
//    $password=$_POST['password'];
//    $database='bikestore';
//    $host='cryptobike.shop';
//
//
//        $conn=new mysqli($host,$user_name,$password,$database,3306,'TCP/IP');
//         if($conn->connect_error)
//         {
//             die('fatal error');
//         }
//         else
//         {
//             //session start
//         }
//
//
//
//}
//else{
//
//}

const ALLOWED_IMG_EXT =array('jpg','jpeg');
const ALLOWED_TXT_EXT=array('txt');
const MSG_IMG_FILE_SIZE_ERROR="اندازه فایل تصویر باید بزرگتر از 40kB و کمتر از 60kB باشد";
const MSG_TXT_FILE_SIZE_ERROR="اندازه فایل بایستی کمتر از 50KB باشد";

if(!empty($_POST))
{
    $imgFileDest='../uploads/img';
    $txtFileDest='../uploads/txt';

    $imgFile=$_FILES['imgFile'];
    $txtFile=$_FILES['txtFile'];


    $imgFileFullName=$imgFile['name'];
    $imgFileFullNameList=explode('.',$imgFileFullName);
    $imgFileName=$imgFileFullNameList[0];
    $imgFileExt=strtolower($imgFileFullNameList[1]);
    $imgFileSize=round($imgFile['size']/1024);
    $imgFileError=$imgFile['error'];
    $imgFileTemLoc=$imgFile['tmp_name'];




    $txtFileFullName=$txtFile['name'];
    $txtFileFullNameList=explode('.',$txtFileFullName);
    $txtFileName=$txtFileFullNameList[0];
    $txtFileExt=strtolower($txtFileFullNameList[1]);
    $txtFileSize=round($txtFile['size']/1024);
    $txtFileError=$txtFile['error'];
    $txtFileTempLoc=$txtFile['tmp_name'];

    if(in_array($imgFileExt,ALLOWED_IMG_EXT) )
    {
        if($imgFileError===0)
        {
            if($imgFileSize>40 &&  $imgFileSize <60)
            {
                $imgFileNewName=uniqid('',true).".".$imgFileExt;

                move_uploaded_file($imgFileTemLoc,"$imgFileDest/$imgFileFullName");

            }
            else
            {
                echo MSG_IMG_FILE_SIZE_ERROR;

            }

        }
        else{
            echo"خطایی رخ داد";

        }

    }
    else
    {
        echo "نوع فایل صحیح نیست";
    }

    if(in_array($txtFileExt,ALLOWED_TXT_EXT))
    {
        if($txtFileError===0)
        {

            move_uploaded_file($txtFileTempLoc,"$txtFileDest/$txtFileFullName");
        }
    }
    else
    {
        echo " تایپ فایل باید txt  باشد";
    }
    $fileUploadedNames=array('imgFile'=>$imgFileFullName,'txtFile'=>$txtFileFullName);


  echo json_encode($fileUploadedNames);
}
else
{
    echo "something is wrong";
}




?>


