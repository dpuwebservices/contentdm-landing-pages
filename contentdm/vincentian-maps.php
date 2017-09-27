<!DOCTYPE html>

<head>



    <title>DePaul Vincentian Maps</title>







    <?php include 'header.php' ?>







    <div class="col-1-1">



        <div id="search">



            <form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">



                <input type="hidden" name="CISOOP1" value="all">



                <input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">



                <input type="hidden" name="CISOMODE" value="grid">



                <input type="text" name="CISOBOX1" size="60">



                <input type="hidden" name="CISOROOT" value="/p15448coll2">



                <input type="submit" value="Search" class="button" id="search_button">



            </form>



        </div>



    </div>



    <!-- Grid 1/2 -->







    <div class="wrapper">



        <h1 class="pagetitle">Vincentian Maps</h1>



        <div class="grid grid-pad">







            <div class="col-2-3">







                <!-- Grid 2/3 and 1/3-->







                <!-- Grid 1/3 -->



                <div class="grid grid-pad">



                    <div class="col-1-1">



                        <?php include 'bento-map/vincentianmaps/vincentianmaps.php' ?>



                    </div>



                </div>







                <?php include ''?>







            </div>
            <!-- end bento -->










            <!-- about section-->







            <div class="col-1-3  border borderpad">







                <div class="content">







                    <h1>About</h1>







                    <p class="para">This collection of digitized maps is part of the DePaul University Vincentian Studies Collection, produced by the DePaul University Libraries in partnership with DePaul's Office of Mission and Values and the Vincentian Studies Institute. The original maps are currently held at the John T. Richardson Library's Special Collections and Archives Department.</p>







                    <p class="para">







                        These maps document the mission, expansion, history and travels of the Congregation of the Mission, a religious order formed by St. Vincent de Paul in 1625. The majority of these maps are of regions and cities in France, most often Paris, though the collection also includes maps of North American areas historically important to the Congregation.</p>







                    <p class="para">
                        Each map can be both browsed on this website and freely downloaded as a JPEG.
                    </p>

                    <p class="para">
                        For more information about the Vincentian Studies Collection, please visit our research guide.
                    </p>
                    <a href="http://digicol.lib.depaul.edu/cdm/search/collection/p15448coll2" title="Browse All Maps"><img class="pull-right" src="images/buttons/browsethiscollection.png" /></a>

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
