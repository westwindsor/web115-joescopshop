<!DOCTYPE html>

<html lang="en">





<head>



    <title>JOES RESERVATION</title>





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

                <div class="mdl-cell mdl-cell--12-col">

                    <h2 style="text-align:center; padding-top: 225px;"><strong>Reservations!</strong></h2>

                    <form style="text-align: center; padding-bottom: 225px;" action="action_page.php">

                        <select name="people">

                            <option value="2 people" selected>2 people</option>

                            <option value="3 people">3 people</option>

                            <option value="4 people">4 people</option>

                            <option value="5 people">5 people</option>

                            <option value="6 people">6 people</option>

                            <option value="7 people">7 people</option>

                            <option value="8 people">8 people</option>

                            <option value="9 people">9 people</option>

                            <option value="10 people">10 people</option>

                            <option value="11 people">11 people</option>

                            <option value="12 people">12 people</option>

                            <option value="13 people">13 people</option>

                            <option value="14 people">14 people</option>

                            <option value="15 people">15 people</option>

                            <option value="16 people">16 people</option>

                            <option value="17 people">17 people</option>

                            <option value="18 people">18 people</option>

                            <option value="19 people">19 people</option>

                            <option value="20 people">20 people</option>

                        </select>

                        <select name="number">

                            <option value="1" selected>1 day</option>

                            <option value="2">2 day</option>

                            <option value="3">3 day</option>

                            <option value="4">4 day</option>

                            <option value="5">5 day</option>

                            <option value="6">6 day</option>

                            <option value="7">7 day</option>

                            <option value="8">8 day</option>

                            <option value="9">9 day</option>

                            <option value="10">10 day</option>

                            <option value="11">11 day</option>

                            <option value="12">12 day</option>

                            <option value="13">13 day</option>

                            <option value="14">14 day</option>

                            <option value="15">15 day</option>

                            <option value="16">16 day</option>

                            <option value="17">17 day</option>

                            <option value="18">18 day</option>

                            <option value="19">19 day</option>

                            <option value="20">20 day</option>

                            <option value="21">21 day</option>

                            <option value="22">22 day</option>

                            <option value="23">23 day</option>

                            <option value="24">24 day</option>

                            <option value="25">25 day</option>

                            <option value="26">26 day</option>

                            <option value="27">27 day</option>

                            <option value="28">28 day</option>

                            <option value="29">29 day</option>

                            <option value="30">30 day</option>

                            <option value="31">31 day</option>

                        </select>

                        <input type="month" name="bdaymonth">

                        <input type="time" name="usr_time">

                        <button type="button" onclick="alert('Your reservation has been sent to our establishment Thank you)">Submit</button>

                    </form>







                </div>

            </div>



        </main>



        <footer class="mdl-mega-footer">
            <?php include 'footer.php';?>
        </footer>



    </div>





</body>



</html>