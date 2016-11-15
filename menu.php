<!DOCTYPE html>

<html lang="en">





<head>



    <title>JOES MENU</title>





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

                <div class="mdl-cell mdl-cell--3-col containerleft">



                    <a href="breakfast.php">

                        <img class="opacity" src="pictures/20160206_141212%20(1).jpg">

                    </a>



                    <div class="menubreakfast">

                        <a style="text-decoration: none;" href="breakfast.php">

                            <h3 style="text-align: center; color: black; text-decoration: none;">

                                <strong>Breakfast</strong>

                            </h3>

                        </a>

                    </div>



                    <p>&nbsp;</p>



                    <a href="dinner.html">

                        <img class="opacity" src="pictures/20150207_180554.jpg">

                    </a>



                    <div class="menudinner">

                        <a style="text-decoration: none;" href="dinner.php">

                            <h3 style="text-align: center; color: black; text-decoration: none;">

                                <strong>Dinner</strong>

                            </h3>

                        </a>

                    </div>



                </div>



                <div class="mdl-cell mdl-cell--3-col containerright">





                    <a href="lunch.html">

                        <img class="opacity" src="pictures/20151221_175641.jpg">

                    </a>



                    <div class="menulunch">

                        <a style="text-decoration: none;" href="lunch.php">

                            <h3 style="text-align: center; color: black; text-decoration: none;">

                                <strong>Lunch</strong>

                            </h3>

                        </a>

                    </div>



                    <p>&nbsp;</p>



                    <a href="dessert.php">

                        <img id="myimg" class="opacity" src="pictures/20160525_190205.jpg">

                    </a>



                    <div class="menudessert">

                        <a style="text-decoration: none;" href="dessert.php">

                            <h3 style="text-align: center; color: black; text-decoration: none;">

                                <strong>Dessert</strong>

                            </h3>

                        </a>

                    </div>

                </div>



                <div class="mdl-cell mdl-cell--3-col">



                </div>

            </div>



        </main>



        <footer class="mdl-mega-footer">

            <?php include 'footer.php';?>

        </footer>



    </div>





</body>



</html>