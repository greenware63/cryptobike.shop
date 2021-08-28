
<?php
?>
   <meta name="viewport" content="width=device-width,initial-scale=1.0"/>

<section>
    <div id="selectGoodsItems">

        <input type="radio" checked id="rdBtnBike" name="selectGoodsType">    <label>دوچرخه</label><br>
        <input type="radio" checked id="rdBtnBike" name="selectGoodsType">    <label>قطعات دوچرخه</label><br>
        <input type="radio" checked id="rdBtnBike" name="selectGoodsType">    <label>لباس دوچرخه سواری</label><br>
        <input type="radio" checked id="rdBtnBike" name="selectGoodsType">    <label>لوازم جانبی دوچرخه</label><br>

        <div lang="rtl">
            <br>  <label>1000,000</label> <input type="range" min="1000000" max="150000000" id="slcRngPrc" /><label>150,000,000</label>
            <br>  <input type="number" placeholder=" قیمت به تومان" id="selectedMaxPrice" lang="FA" />
        </div>
    </div>
    <div class="bikeItems">
        <input type='text' id='selectedBike' list='dataListBikes' placeholder="برند دوچرخه">
        <datalist id='dataListBikes' >
            <select id="selectBoxBikes">
                <option value=Mountain Bike' selected>Mountain Bike</option>
                <option value='City & Tour'>City & Tour</option>
                <option value='Urban Mobility'>Urban Mobility</option>
                <option value='Women'>Women</option>
                <option value='Kids'>Kids</option>
            </select>
        </datalist>
        <section class="bike_parts">
            <span class="tire">
                <i class="fad fa-toggle-off fa-2x inactive fa-rotate-180" class="off" ></i>
                <i class="fad fa-toggle-on fa-2x active" class="on"></i>

            </span>
            <span>


            </span>
            <span>
                <i class="fad fa-toggle-off"></i>

            </span>
            <span>
                <i class="fad fa-toggle-off"></i>

            </span>
        </section>
    </div>

</section>

<script src="js/rightSideBar.js"></script>