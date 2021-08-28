
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
                            <input type='text' id='userName'  name='userName'  placeholder='نام کابری/ایمیل' autofocus  required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input type='password' id='password' name='password' placeholder='رمز عبور' required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                            <label></label>
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="fieldInput">
                            <input type='password' id='repeatPassword' name='repeatPassword'  placeholder='تکرار رمز عبور' required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$">
                            <label></label>
                            <i class="fad fa-eye"></i>
                        </div>

                        <div class="fieldInput">
                            <input type='text' id='userFullName' name='userFullName'  placeholder='نام و نام خانوادگی' required >
                            <label> </label>
                        </div>

                        <div class="fieldInput">
                            <input type='number'id='NationalID'  name='nationalID' placeholder='شماره ملی' max="9999999999" required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input id='date_input_1' type='text' name='birthday' placeholder="تاریخ تولد"  required>
                            <label></label>
                            <img id='date_btn_1' src='includes/JalaliJSCalendar-1.4(PersianScript.ir)/examples/cal.png'   />

                        </div>

                        <div class="fieldInput">
                            <input type='number' lang='IR' name='phone' placeholder='شماره همراه' required>
                            <label></label>
                        </div>

                        <div class="fieldInput">
                            <input type='email' id='email' name='email' placeholder='email' required>
                            <label id="lblEmail"></label>
                        </div>


                        <div class="fieldInput">
                            <input type="text" placeholder="استان" list="provincesList" required >
                             <label></label>
                        </div>


                        <div class="fieldInput">
                            <input type="text" placeholder='آدرس' id='Address' name="address" required>
                            <label></label>
                        </div>

                        <datalist id="provincesList" >
                                <select id="selectProvinces" size="5">
                                    <option value="آذربایجان شرقی"></option>
                                    <option value="آذربایجان غربی"></option>
                                    <option value="اردبیل"></option>
                                    <option value="اصفهان"></option>
                                    <option value="البرز"></option>
                                    <option value="ایلام"></option>
                                    <option value="بوشهر"></option>
                                    <option value="تهران"></option>
                                    <option value="چهار محال بختیاری"></option>
                                    <option value="خراسان جنوبی"></option>
                                    <option value="خراسان رضوی"></option>
                                    <option value="خراسان شمابی"></option>
                                    <option value="خوزستان"></option>
                                    <option value="زنجان"></option>
                                    <option value="سمنان"></option>
                                    <option value="سیستان و بلوچستان"></option>
                                    <option value="فارس"></option>
                                    <option value="قزوین"></option>
                                    <option value="قم"></option>
                                    <option value="کردستان"></option>
                                    <option value="کرمانشاه"></option>
                                    <option value="کهکویله و بویر احمد"></option>
                                    <option value="گلستان"></option>
                                    <option value="گیلان"></option>
                                    <option value="لرستان"></option>
                                    <option value="مازندران"></option>
                                    <option value="مرکزی"></option>
                                    <option value="هرمزگان"></option>
                                    <option value="همدان "></option>
                                    <option value="یزد"></option>

                                </select>
                            </datalist>

                        <div class="fieldInput">
                            <input type='submit' id='regSubmit' name='regSubmit' value='ثبت نام'  >
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

