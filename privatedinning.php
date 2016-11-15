<!DOCTYPE html>

<html lang="en">





<head>



    <title>JOES PRIVATE DINING</title>





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

                    <h2 style="margin-left:20px; text-align:left"><strong>Private Dinning Request</strong></h2>

                    <form style="margin-left:20px;" action="action_page.php">

                        <p style="font-size:24px;">First Name:
                            <input type="text" name="firstname">
                        </p>

                        <br>

                        <p style="font-size:24px;">Last Name:
                            <input type="text" name="lastname">
                        </p>

                        <br>

                        <p style="font-size:24px;">Email:
                            <input type="text" name="email">
                        </p>

                        <br>

                        <p style="font-size:24px;">Telephone:
                            <input type="text" name="phone">
                        </p>

                        <br>

                        <p style="font-size:24px;">Type of Event:
                            <input type="text" name="event">
                        </p>

                        <br>

                        <p style="font-size:24px;">Number of Guest:
                            <select name="people">

                                <option value="2 people">2 people</option>

                                <option value="3 people">3 people</option>

                                <option value="4 people">4 people</option>

                                <option value="5 people">5 people</option>

                                <option value="6 people">6 people</option>

                                <option value="7 people">7 people</option>

                                <option value="8 people">8 people</option>

                                <option value="9 people">9 people</option>

                                <option value="10 people" selected>10 people</option>

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

                                <option value="21 people">21 people</option>

                                <option value="22 people">22 people</option>

                                <option value="23 people">23 people</option>

                                <option value="24 people">24 people</option>

                                <option value="25 people">25 people</option>

                                <option value="26 people">26 people</option>

                                <option value="27 people">27 people</option>

                                <option value="28 people">28 people</option>

                                <option value="29 people">29 people</option>

                                <option value="30 people">30 people</option>

                                <option value="31 people">31 people</option>

                                <option value="32 people">32 people</option>

                                <option value="33 people">33 people</option>

                                <option value="34 people">34 people</option>

                                <option value="35 people">35 people</option>

                                <option value="36 people">36 people</option>

                                <option value="37 people">37 people</option>

                                <option value="38 people">38 people</option>

                                <option value="39 people">39 people</option>

                                <option value="40 people">40 people</option>

                            </select>
                        </p>

                        <br>

                        <p style="font-size:24px;">Date of Event:
                            <input type="date" name="bday">
                        </p>

                        <br>

                        <p style="font-size:24px;">Time of Event:
                            <select name="time">

                                <option value="1:00">1:00</option>

                                <option value="1:30">1:30</option>

                                <option value="2:00">2:00</option>

                                <option value="2:30" selected>2:30</option>

                                <option value="3:00">3:00</option>

                                <option value="3:30">3:30</option>

                                <option value="4:00">4:00</option>

                                <option value="4:30">4:30</option>

                                <option value="5:00">5:00</option>

                                <option value="5:30">5:30</option>

                                <option value="6:00">6:00</option>

                                <option value="6:30">6:30</option>

                                <option value="7:00">7:00</option>

                                <option value="7:30">7:30</option>

                                <option value="8:00">8:00</option>

                                <option value="8:30">8:30</option>

                                <option value="9:00">9:00</option>

                                <option value="9:30">9:30</option>

                                <option value="10:00">10:00</option>

                                <option value="10:30">10:30</option>

                                <option value="11:00">11:00</option>

                                <option value="11:30">11:30</option>

                                <option value="12:00">12:00</option>

                                <option value="12:30">12:30</option>

                            </select>


                            <select name="time">

                                <option value="A.M.">A.M.</option>

                                <option value="P.M." selected>P.M.</option>

                            </select>
                        </p>

                        <br>

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