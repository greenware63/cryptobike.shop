<?php
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="fontawesome-pro-5.11.2-web/css/all.css">
    <link rel="stylesheet" href="node_modules/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.css">
    <link rel="stylesheet" href="CSS/upload_goods.css">
    <script src="node_modules/jquery-3.6.0.min.js"></script>
    <script src="node_modules/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.js">
            </script>



</head>
<body >

<div class="wrap">
    <div class="upload">

        <form  id="uploadForm">
            <div class="fieldInput">
                <label for="goodsName"> خطا</label> <input type="text" placeholder="نام کالا" required id="goodsName" name="goodsName">
            </div>
            <div class="fieldInput">
                <label for="brand"> خطا</label> <input type="text" placeholder="برند" id="brand" name="brand" list="brandList" required>
            </div>

            <datalist id="brandList" >
                <select id="brandSelect">
                    <option>کیوب</option>
                    <option>جاینت</option>
                    <option>اسپیشلایزد</option>
                    <option>کانوندل</option>
                    <option>بیانچی</option>
                    <option>مریدا</option>
                    <option>سرولو</option>
                    <option>سانتاکروز</option>
                    <option>دیاموند بک</option>
                    <option>فوجی</option>
                </select>
            </datalist>
            <div class="fieldInput">
                <label for="goodsName"> خطا</label>
                <input type="text" placeholder="رنگ" required name="color">
            </div>

            <div class="fieldInput">
                <label for="countryMaker"> خطا</label>
                <input type="text" placeholder="کشور سازنده" required id="countryMaker" name="countryMaker">
            </div>

            <div class="fieldInput">
                <label for="countryMaker"> خطا</label>
                <input type="number" placeholder="قیمت" id="price"required name="price">
            </div>

            <div  class="upload-img">
                <input type="file"   name="imgFile" id="imgFile" >
                <input type="text" placeholder="تصویر کالا را بارگزاری کنید" id="customText-img">
                <i class="fad fa-3x fa-upload"></i>
            </div>
            <div  class="upload-article" >
                <input type="file"  name="txtFile" id="txtFile" >
                <input type="text" placeholder="توضحیات کالا را بارگزاری کنید" id="customText-article" >
                <i class="fad fa-3x fa-upload"></i>
            </div>

            <input type="submit" value="update" name="submit">
        </form>
    </div>
    <div class="uploaded">
        <img src="" width="450"  >
    </div>
    <div class="uploaded-txt">


    </div>
</div>

</form>

<script src="js/upload.js"></script>

<script src="js/validation_upload_frm.js"></script>
<script src="js/ajax_update_goods.js"></script>

</body>
</html>
