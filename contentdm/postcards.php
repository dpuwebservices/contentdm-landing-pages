<!DOCTYPE html>

<head>







    <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.css" />









    <script src="js/jquery-2.0.3.min.js"></script>

    <script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>

    <script>
        var $accui = jQuery.noConflict(true); // $accui replaces all $ to avoid conflicts with other jquery plug in.

        $accui(function() {



            $accui("#accordion").accordion(

                {

                    heightStyle: "content",

                    active: false,

                    collapsible: true,

                    alwaysOpen: false

                });



        });

    </script>







    <title>DePaul Postcards</title>







    <?php include 'header.php' ?>





    <div class="col-1-1">



        <div id="search">



            <form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">



                <input type="hidden" name="CISOOP1" value="all">



                <input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">



                <input type="hidden" name="CISOMODE" value="grid">



                <input type="text" name="CISOBOX1" size="60">



                <input type="hidden" name="CISOROOT" value="/cm1">



                <input type="submit" value="Search" class="button" id="search_button">



            </form>



        </div>



    </div>










    <!-- Grid 1/2 -->







    <div class="wrapper">

        <h1 class="pagetitle">Postcards</h1>

        <div class="grid grid-pad">







            <div class="col-2-3">







                <!-- Grid 2/3 and 1/3-->







                <!-- Grid 1/3 -->

                <div class="grid grid-pad">

                    <div class="col-1-1">

                        <?php include 'bento-map/postcards/postcards.php' ?>

                    </div>

                </div>

                <div class="col-1-1 grid-pad">







                    <div class="content">

                        <div id="browse">

                            <?php include 'featurebox/postcards/accordion.php'?>







                        </div>







                    </div>







                </div>









            </div>
            <!-- end bento -->










            <!-- about section-->







            <div class="col-1-3  border borderpad">







                <div class="content">







                    <h1>About</h1>







                    <p class="para">This collection of digitized postcards is part of the DePaul University Vincentian Studies Collection, produced by the DePaul University Libraries in partnership with DePaul’s Office of Mission and Values and the Vincentian Studies Institute. The original postcards are currently held at the John T. Richardson Library’s Special Collections and Archives Department.</p>







                    <p class="para">


                        Spanning 200 years, these postcards primarily reflect the history and heritage of the Congregation of the Mission and the Daughters of Charity, religious orders founded by St. Vincent de Paul, and the Sisters of Charity, founded by St. Elizabeth Seton.




                    </p>







                    <p class="para">





                        The images in this collection include institutions such as hospitals, churches and seminaries. Others highlight places relevant to St. Vincent's life, while still others feature posed scenes of models acting out the work of Daughters of Charity.
                    </p>







                    <p class="para">



                        Each postcard can be both browsed on this website and freely downloaded as a JPEG.



                    </p>



                    <?php include'recentbox/recentbox-image-and-title.php'?>

                    <a href="http://digicol.lib.depaul.edu/cdm/search/collection/cm1" title="Browse All Postcards"><img class="pull-right" src="images/buttons/browsethiscollection.png" /></a>

                </div>







            </div>







        </div>

    </div>

    </div>

    </div>

    <div class="grid no-padding stick-bottom">







        <div class="col-1-1 ">







            <?php include 'footer.php' ?>







        </div>







    </div>







    </body>







    </html>
