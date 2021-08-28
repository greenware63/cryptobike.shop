<?php
?>
<head>
    <link rel="stylesheet" href="../CSS/home.css">
    <script src="../node_modules/jqeury/jquery-3.5.1.js"></script>

</head>
<div id="orderDiv">
    <input type="button" value="+" id="plusButton">
    <img src="../img/68_race.jpg"  id="goodsSelected">
    <input type="button" value="-" id="minusButton">
</div>
<br>
<input type="button"  value="خالی کردن سبد"  id="remBasket">


<script>
    let remBasket=document.getElementById('remBasket');
    remBasket.addEventListener('click',(event)=>{
               $('#orderDiv').replaceWith('<h2>سبد خالی شد!!! </h2>');
    });
    $('#goodsSelected').width('200px');
</script>