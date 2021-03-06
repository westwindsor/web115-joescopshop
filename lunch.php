<!DOCTYPE html>
<html lang="en">


<head>

    <title>JOES LUNCH</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">


    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Corben:700|Courgette|Gidugu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


</head>


<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <header style="padding-top:50px; padding-bottom:50px;" class="mdl-layout__header">
            <?php include 'header.php';?>
        </header>

        <main>
            <div class="mdl-grid main-background">
                <div class="mdl-cell mdl-cell--3-col">
                </div>
                <div class="mdl-cell mdl-cell--6-col">
                    <div style="text-align: center;">
                        <h2><strong>Lunch</strong></h2>
                    </div>
                    <div>
                        <nav style="margin-top: 5px; margin-bottom: 5px" class="mdl-navigation menu-nav">
                            <li style="text-align: center; width: 25%; max-height: 20px;list-style-type:none;"><a class="mdl-navigation__link menu-nav" href="breakfast.php"><h6 style="margin-top: -27px">Breakfast</h6></a></li>
                            <li style="text-align: center; width: 25%; max-height: 20px; list-style-type:none"><a class="mdl-navigation__link menu-nav" href="lunch.php"><h6 style="margin-top: -27px">Lunch</h6></a></li>
                            <li style="text-align: center; width: 25%; max-height: 20px; list-style-type:none"><a class="mdl-navigation__link menu-nav" href="dinner.php"><h6 style="margin-top: -27px">Dinner</h6></a></li>
                            <li style="text-align: center; width: 25%; max-height: 20px; list-style-type:none"><a class="mdl-navigation__link menu-nav" href="dessert.php"><h6 style="margin-top: -27px">Dessert</h6></a></li>
                        </nav>
                    </div>
                    <div style="float: left; width: 25%; margin-left: 50px;">
                        <h4>Chicken Bruschetta Salad</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................10</p>
                        <h4>Southwest Salad</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................11</p>
                        <h4>Chopped Salad</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................11</p>
                        <h4>Caprese Chicken Panini</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................10</p>
                        <h4>Turkey Artichoke Panini</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................10</p>
                        <h4>Patty Melt</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................10</p>


                    </div>
                    <div style="float: left; width: 25%;">
                        <p>&nbsp;</p>
                    </div>
                    <div style="float: left; width: 25%; margin-left: 50px;">
                        <h4>Manhattan</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................11</p>
                        <h4>Turkey Club</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................13</p>
                        <h4>Reuben New Yorker</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................11</p>
                        <h4>Tuna Melt</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................9</p>
                        <h4>Baja Steak Wrap</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................8</p>
                        <h4>Grilled Veggie Wrap</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................8</p>
                        <h4>Chicken BLT </h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................8</p>
                        <h4>Turkey Burger</h4>
                        <p style="font-size: 18px; text-indent: 30px; margin-top: -10px">..................................12</p>
                    </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col">
                </div>
            </div>

        </main>

        <footer class="mdl-mega-footer">
            <?php include'footer.php';?>
        </footer>

    </div>


</body>

</html>