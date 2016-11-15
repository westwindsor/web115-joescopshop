<!DOCTYPE html>

<html lang="en">

<head>

    <title>JOES COP SHOP</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">

    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta property="fb:app_id" content="1191638037556641">

    <meta property="og:title" content="Joes Cop Shop - Gluten Free Everything">

    <meta property="og:url" content="http://pkennedy.mccdgm.net/business/index.php">

    <meta property="og:image" content="http://pkennedy.mccdgm.net/business/pictures/american-day.jpg" />

    <meta property="og:image:type" content="pictures/american-day.jpg" />

    <meta property="og:image:width" content="400" />

    <meta property="og:image:height" content="300" />

    <meta property="og:description" content="On the first day of the week, we here at JOES think that its important to respect our bretheran and remember the good 'ol times. Thats why we offer our special homemade lunch special - Momma's Sammich - which comes with 100% gluten-free-garentee bread, and your choice of the type of chips you'd like.">

    <meta name="description" content="On the first day of the week, we here at JOES think that its important to respect our bretheran and remember the good 'ol times. Thats why we offer our special homemade lunch special - Momma's Sammich - which comes with 100% gluten-free-garentee bread, and your choice of the type of chips you'd like.">

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Corben:700|Courgette|Gidugu" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <script src="mysript.js"></script>

</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

        <header style="padding-top:50px; padding-bottom:50px;" class="mdl-layout__header">
            <?php include 'header.php';?>

        </header>

        <main>

            <div class="mdl-grid main-background">

                <div class="mdl-cell mdl-cell--1-col"></div>

                <div class="mdl-cell mdl-cell--2-col">
                    <figure>
                        <figcaption>
                            <p style="text-align: center; font-size:24px;">The Monday Special</p>
                        </figcaption>
                        <a href="#mainpic"><img src="pictures/american-day.jpg" onclick="change01()"></a> &nbsp;
                    </figure>
                    <figure>
                        <figcaption>
                            <p style="text-align: center; font-size:24px;">The Tuesday Special</p>
                        </figcaption>
                        <a href="#mainpic"><img src="pictures/mexican-day.jpg" onclick="change02()"></a> &nbsp;
                    </figure>
                    <figure>
                        <figcaption>
                            <p style="text-align: center; font-size:24px;">The Wednesday Special</p>
                        </figcaption>
                        <a href="#mainpic"><img src="pictures/itialian-day.jpg" onclick="change03()"></a> &nbsp;
                    </figure>
                    <figure>
                        <figcaption>
                            <p style="text-align: center; font-size:24px;">The Thursday Special</p>
                        </figcaption>
                        <a href="#mainpic"><img src="pictures/Chinese-day.jpg" onclick="change04()"> </a> &nbsp;
                    </figure>
                    <figure>
                        <figcaption>
                            <p style="text-align: center; font-size:24px;">The Friday Special</p>
                        </figcaption>
                        <a href="#mainpic"><img src="pictures/japanese-day.jpg" onclick="change05()"></a> &nbsp;
                    </figure>
                </div>

                <div class="mdl-cell mdl-cell--1-col"></div>

                <div class="mdl-cell mdl-cell--7-col">

                    <h2 style="margin-top: 80px; text-align: center; color: #212121" id="title">The Monday Special</h2>

                    <img id="mainpic" class="main-pic-home" src="pictures/american-day.jpg">

                    <p style="font-size: 40px" id="detail"> On the first day of the week, we here at JOES think that its important to respect our bretheran and remember the good 'ol times. Thats why we offer our special homemade lunch special - Momma's Sammich - which comes with 100% gluten-free-garentee bread, and your choice of the type of chips you'd like. </p>

                </div>

                <div class="mdl-cell mdl-cell--1-col"></div>

            </div>

        </main>

        <footer class="mdl-mega-footer">
            <?php include 'footer.php';?>
        </footer>

    </div>

</body>

</html>