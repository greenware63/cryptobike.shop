
    <link href="CSS/home.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="includes/JalaliJSCalendar-1.4(PersianScript.ir)/skins/aqua/theme.css" title="Aqua" />
    <!-- import the Jalali Date Class script -->
    <script type="text/javascript" src="includes/JalaliJSCalendar-1.4(PersianScript.ir)/jalali.js"></script>

    <!-- import the calendar script -->
    <script type="text/javascript" src="includes/JalaliJSCalendar-1.4(PersianScript.ir)/calendar.js"></script>

    <!-- import the calendar script -->
    <script type="text/javascript" src="includes/JalaliJSCalendar-1.4(PersianScript.ir)/calendar-setup.js"></script>

    <!-- import the language module -->
    <script type="text/javascript" src="includes/JalaliJSCalendar-1.4(PersianScript.ir)/lang/calendar-fa.js"></script>
    <!-- helper script that uses the calendar -->
    <script type="text/javascript">

        var oldLink = null;
        // code to change the active stylesheet
        function setActiveStyleSheet(link, title) {
            var i, a, main;
            for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
                if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
                    a.disabled = true;
                    if(a.getAttribute("title")  == title) a.disabled = false;
                }
            }
            if (oldLink) oldLink.style.fontWeight = 'normal';
            oldLink = link;
            link.style.fontWeight = 'bold';
            return false;
        }

    </script>
    <style type="text/css">
        .calendar {
            direction: rtl;
        }

        #flat_calendar_1, #flat_calendar_2{
            width: 200px;
        }
        .example {
            padding: 10px;
        }

        .display_area {
            background-color: #FFFF88
        }
    </style>
    <div class="warning" dir="rtl">
        <span><i class="fas fa-exclamation-circle"></i></span>
        <span class="msg">warning : this is an alert message !!!</span>
        <span> <i class="fad fa-do-not-enter"></i></span>
        <span id="close-button"><i class="fad fa-4x fa-window-close" ></i></span>
    </div>
    <div class="reg_form">





                    <form    lang="fa">
                        <div class="fieldInput">
                            <input type='text' id='userName'  name='userName'  placeholder='?????? ??????????/??????????' autofocus  required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input type='password' id='password' name='password' placeholder='?????? ????????' required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                            <label></label>
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="fieldInput">
                            <input type='password' id='repeatPassword' name='repeatPassword'  placeholder='?????????? ?????? ????????' required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                            <label></label>
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="fieldInput">
                            <input type='text' id='userFullName' name='userFullName'  placeholder='?????? ?? ?????? ????????????????' required >
                            <label> </label>
                        </div>

                        <div class="fieldInput">
                            <input type='number'id='NationalID'  name='nationalID' placeholder='?????????? ??????' max="9999999999" required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input id='date_input_1' type='text' name='birthday' placeholder="?????????? ????????"  required>
                            <label></label>
                            <img id='date_btn_1' src='includes/JalaliJSCalendar-1.4(PersianScript.ir)/examples/cal.png'   />

                        </div>

                        <div class="fieldInput">
                            <input type='number' lang='IR' name='phone' placeholder='?????????? ??????????' required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input type='email' id='email' name='email' placeholder='email' required>
                            <label id="lblEmail"></label>
                        </div>


                        <div class="fieldInput">
                            <input type="text" placeholder="??????????" list="provincesList" required >
                             <label></label>
                        </div>


                        <div class="fieldInput">
                            <input type="text" placeholder='????????' id='Address' name="address" required>
                            <label></label>
                        </div>

                        <datalist id="provincesList" >
                                <select id="selectProvinces" size="5">
                                    <option value="?????????????????? ????????"></option>
                                    <option value="?????????????????? ????????"></option>
                                    <option value="????????????"></option>
                                    <option value="????????????"></option>
                                    <option value="??????????"></option>
                                    <option value="??????????"></option>
                                    <option value="??????????"></option>
                                    <option value="??????????"></option>
                                    <option value="???????? ???????? ??????????????"></option>
                                    <option value="???????????? ??????????"></option>
                                    <option value="???????????? ????????"></option>
                                    <option value="???????????? ??????????"></option>
                                    <option value="??????????????"></option>
                                    <option value="??????????"></option>
                                    <option value="??????????"></option>
                                    <option value="???????????? ?? ????????????????"></option>
                                    <option value="????????"></option>
                                    <option value="??????????"></option>
                                    <option value="????"></option>
                                    <option value="??????????????"></option>
                                    <option value="????????????????"></option>
                                    <option value="?????????????? ?? ???????? ????????"></option>
                                    <option value="????????????"></option>
                                    <option value="??????????"></option>
                                    <option value="????????????"></option>
                                    <option value="????????????????"></option>
                                    <option value="??????????"></option>
                                    <option value="??????????????"></option>
                                    <option value="?????????? "></option>
                                    <option value="??????"></option>

                                </select>
                            </datalist>

                        <div class="fieldInput">
                            <input type='submit' id='regSubmit' name='regSubmit' value='?????? ??????'  >
                            <input type="button" value="reset" id="resetButton">
                        </div>
                    </form>
                </div>

    <script type='text/javascript'>
                Calendar.setup({
                        inputField     :    "date_input_1",   // id of the input field
                        button         :    "date_btn_1",   // trigger for the calendar (button ID)
                        ifFormat       :    "%Y-%m-%d",       // format of the input field
                        dateType	   :	'jalali',
                        weekNumbers    : false
                    });

			</script>
    <script src="js/signupFormValidation.js"></script>
    <script src="js/showhidePWDs.js"></script>
    <script src="js/ajax_signup.js"></script>

