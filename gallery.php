<!DOCTYPE html>
<html lang="en">


<head>

    <title>JOES GALLERY</title>


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
                    &nbsp;
                    <img id="myImg" src="pictures/20140212_201650.jpeg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <span class="close">×</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg');
                        var modalImg = document.getElementById("img01");
                        var captionText = document.getElementById("caption");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>

                    &nbsp;

                    <img id="myImg1" src="pictures/20141030_122425.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal1" class="modal1">
                        <span class="close1"></span>
                        <img class="modal-content1" id="img011">
                        <div id="caption1"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal1');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg1');
                        var modalImg = document.getElementById("img011");
                        var captionText = document.getElementById("caption1");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close1")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>

                    &nbsp;

                    <img id="myImg2" src="pictures/20150415_154538.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal2" class="modal2">
                        <span class="close2">×</span>
                        <img class="modal-content2" id="img012">
                        <div id="caption"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal2');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg2');
                        var modalImg = document.getElementById("img012");
                        var captionText = document.getElementById("caption2");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close2")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;

                    <img id="myImg3" src="pictures/20160206_141212.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal3" class="modal3">
                        <span class="close3"></span>
                        <img class="modal-content3" id="img013">
                        <div id="caption3"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal3');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg3');
                        var modalImg = document.getElementById("img013");
                        var captionText = document.getElementById("caption3");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close3")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;

                    <img id="myImg4" src="pictures/20150819_123430.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal4" class="modal4">
                        <span class="close4"></span>
                        <img class="modal-content4" id="img014">
                        <div id="caption4"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal4');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg4');
                        var modalImg = document.getElementById("img014");
                        var captionText = document.getElementById("caption4");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close4")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>

                    &nbsp;

                </div>

                <div class="mdl-cell mdl-cell--3-col">
                    &nbsp;
                    <img id="myImg5" src="pictures/20140806_134810.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal5" class="modal5">
                        <span class="close5"></span>
                        <img class="modal-content5" id="img015">
                        <div id="caption5"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal5');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg5');
                        var modalImg = document.getElementById("img015");
                        var captionText = document.getElementById("caption5");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close5")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg6" src="pictures/20141216_212154.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal6" class="modal6">
                        <span class="close6"></span>
                        <img class="modal-content6" id="img016">
                        <div id="caption6"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal6');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg6');
                        var modalImg = document.getElementById("img016");
                        var captionText = document.getElementById("caption6");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close6")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg7" src="pictures/20150425_173140.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal7" class="modal7">
                        <span class="close7"></span>
                        <img class="modal-content4" id="img017">
                        <div id="caption7"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal7');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg7');
                        var modalImg = document.getElementById("img017");
                        var captionText = document.getElementById("caption7");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close7")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg8" src="pictures/20150803_132522.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal8" class="modal8">
                        <span class="close4"></span>
                        <img class="modal-content8" id="img018">
                        <div id="caption8"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal8');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg8');
                        var modalImg = document.getElementById("img018");
                        var captionText = document.getElementById("caption8");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close8")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg9" src="pictures/20150930_155315.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal9" class="modal9">
                        <span class="close9"></span>
                        <img class="modal-content9" id="img019">
                        <div id="caption9"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal9');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg9');
                        var modalImg = document.getElementById("img019");
                        var captionText = document.getElementById("caption9");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close9")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                </div>
                <div class="mdl-cell mdl-cell--3-col">
                    &nbsp;
                    <img id="myImg10" src="pictures/20140908_133632.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal10" class="modal10">
                        <span class="close10"></span>
                        <img class="modal-content10" id="img0110">
                        <div id="caption10"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal10');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg10');
                        var modalImg = document.getElementById("img0110");
                        var captionText = document.getElementById("caption10");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close10")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg11" src="pictures/20150126_172624.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal11" class="modal11">
                        <span class="close11">×</span>
                        <img class="modal-content11" id="img0111">
                        <div id="caption11"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal11');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg11');
                        var modalImg = document.getElementById("img0111");
                        var captionText = document.getElementById("caption11");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close11")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg12" src="pictures/20150713_133319.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal12" class="modal12">
                        <span class="close12"></span>
                        <img class="modal-content12" id="img0112">
                        <div id="caption12"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal12');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg12');
                        var modalImg = document.getElementById("img0112");
                        var captionText = document.getElementById("caption12");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close12")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none12";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg13" src="pictures/20160119_171234.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal13" class="modal13">
                        <span class="close13"></span>
                        <img class="modal-content13" id="img0113">
                        <div id="caption13"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal13');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg13');
                        var modalImg = document.getElementById("img0113");
                        var captionText = document.getElementById("caption13");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close13")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg14" src="pictures/20151202_125105.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal14" class="modal14">
                        <span class="close14">×</span>
                        <img class="modal-content14" id="img0114">
                        <div id="caption14"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal14');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg14');
                        var modalImg = document.getElementById("img0114");
                        var captionText = document.getElementById("caption14");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close14")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                </div>
                <div class="mdl-cell mdl-cell--3-col">
                    &nbsp;
                    <img id="myImg15" src="pictures/20140915_183726.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal15" class="modal15">
                        <span class="close15">×</span>
                        <img class="modal-content15" id="img0115">
                        <div id="caption15"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal15');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg15');
                        var modalImg = document.getElementById("img0115");
                        var captionText = document.getElementById("caption15");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close15")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg16" src="pictures/20150207_180554.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal16" class="modal16">
                        <span class="close16">×</span>
                        <img class="modal-content16" id="img0116">
                        <div id="caption16"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal16');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg16');
                        var modalImg = document.getElementById("img0116");
                        var captionText = document.getElementById("caption16");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close16")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg17" src="pictures/20150801_160650.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal17" class="modal17">
                        <span class="close17">×</span>
                        <img class="modal-content17" id="img0117">
                        <div id="caption17"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal17');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg17');
                        var modalImg = document.getElementById("img0117");
                        var captionText = document.getElementById("caption17");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close17")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg18" src="pictures/20150807_121446.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal18" class="modal18">
                        <span class="close18">×</span>
                        <img class="modal-content18" id="img0118">
                        <div id="caption18"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal18');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg18');
                        var modalImg = document.getElementById("img0118");
                        var captionText = document.getElementById("caption18");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close18")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                    <img id="myImg19" src="pictures/20151203_160604.jpg" class="gallery-img">
                    <!-- The Modal -->
                    <div id="myModal19" class="modal19">
                        <span class="close19">×</span>
                        <img class="modal-content19" id="img0119">
                        <div id="caption19"></div>
                    </div>

                    <script>
                        // Get the modal
                        var modal = document.getElementById('myModal19');

                        // Get the image and insert it inside the modal - use its "alt" text as a caption
                        var img = document.getElementById('myImg19');
                        var modalImg = document.getElementById("img0119");
                        var captionText = document.getElementById("caption19");
                        img.onclick = function () {
                            modal.style.display = "block";
                            modalImg.src = this.src;
                            captionText.innerHTML = this.alt;
                        }

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close19")[0];

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function () {
                            modal.style.display = "none";
                        }
                    </script>
                    &nbsp;
                </div>
            </div>

        </main>

        <footer class="mdl-mega-footer">
            <?php include 'footer.php';?>
        </footer>

    </div>


</body>

</html>