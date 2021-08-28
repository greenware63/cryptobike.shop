
<!DOCTYPE html>
    <html lang="fa">
        <head>

            <meta charset="UTF-8">
            <title>Title</title>
            <link href="fontawesome-pro-5.11.2-web/css/all.css"  rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="node_modules/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.css">
            <link rel="stylesheet" type="text/css" href="CSS/home.css">
            <script src="node_modules/jquery-3.6.0.min.js"></script>
            <script src="node_modules/jquery-ui-1.12.1.custom/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

        </head>

        <body >
            <div id="wrapper">

                <header class="header">
                    <?php require "header.php"; ?>
                </header>

                <div id="mainDIV">
                    <leftSidebar id="leftSideBar">

                    </leftSidebar>

                    <main class="middleDiv">
                        <?php require "main.php"; ?>
                    </main>

                    <rightSideBar class="rightSideBar">
                        <?php require "rightSideBar.php"; ?>
                    </rightSideBar>
                </div>

                <footer>
                    <?php require "footer.php"; ?>
                </footer>

            </div>


        </body>
   </html>