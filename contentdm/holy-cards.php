<!DOCTYPE html><head>



<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.css" />  







	<script src="js/jquery-2.0.3.min.js"></script>

	<script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>     

     <script> 

var $accui = jQuery.noConflict(true);// $accui replaces all $ to avoid conflicts with other jquery plug in.

	$accui(function() { 



		 



		$accui( "#accordion" ).accordion( 



		{ 



      heightStyle: "content", 



	  active: false, 



	  collapsible: true, 



      alwaysOpen: false 



    }); 



		 



	}); 



	</script>







<title>DePaul Holy Cards</title> 







<?php include 'header.php' ?> 





<div class="col-1-1">



<div id="search">



<form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">



<input type="hidden" name="CISOOP1" value="all">



<input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">



<input type="hidden" name="CISOMODE" value="grid">



<input type="text" name="CISOBOX1" size="60">



<input type="hidden" name="CISOROOT" value="/p15448coll4">



<input type="submit" value="Search" class="button" id="search_button">



</form>



</div>



</div>







  	<!-- Grid 1/2 --> 







    <div class="wrapper"> 



	<h1 class="pagetitle">Holy Cards</h1> 



		<div class="grid grid-pad"> 







			<div class="col-2-3"> 







            	<!-- Grid 2/3 and 1/3--> 







                <!-- Grid 1/3 --> 



                <div class="grid grid-pad"> 



                <div class="col-1-1"> 



					<?php include 'bento-map/holycards/holycards.php' ?> 



            	</div>	 



            	</div>







                







				<div class="col-1-1 grid-pad" >  







                    <div class="content"> 



                      <div id="browse">







					<h3>Browse by Approximate Publication Date</h3>







					<?php include 'featurebox/holycards/holycards-timeline.php'?>







						</div>







                </div>







                </div>







                







                <div class="col-1-1 grid-pad" >  







                    <div class="content"> 



                      <div id="browse"> 



					<?php include 'featurebox/holycards/accordion.php'?>







						</div>







                </div>







                </div>







            	 



			</div> <!-- end bento -->   







				 







            <!-- about section--> 







			<div class="col-1-3  border borderpad"> 







				<div class="content"> 







                		<h1>About</h1>	 







                  <p class="para">This collection of devotional cards featuring St. Vincent de Paul is part of the Vincentian Studies Collection at DePaul University Libraries Special Collections. These cards span several centuries and many languages, and show the religious iconography surrounding St. Vincent de Paul, St. Louise de Marillac, and the various religious and lay orders founded by them.</p>

                        <p class="para">The majority of the materials collected here are holy cards, which, in the Catholic tradition, are small, religious pictures roughly the size of a playing card. The reverse sometimes contains a prayer or other devotional text. These cards, which depict a Catholic saint or religious scene, are often blessed by priests for the use by the faithful. The creation, circulation, and use of these cards is an important part of the material culture of Roman Catholics. Other collectable devotional cards, including early examples of religious trading and collectable cards, are also featured in this collection.</p>

                        <p class="para">For more information about this collection, or the Vincentian Studies Collection, please contact DePaul University Libraries Vincentian Librarian. <br><br>

                          

                          

                          

                          Andrew Rea<br>

                          

                          

                          

                          Vincentian Collections Librarian<br>

                          

                          

                          

                          Email Me :<a href="mailto:area1@depaul.edu">area1@depaul.edu</a></p> 







						<?php include'recentbox/recentbox-image-and-title.php'?> 

<a href="http://digicol.lib.depaul.edu/cdm/search/collection/p15448coll4" title="Browse All Holy Cards"><img class="pull-right" src="images/buttons/browsethiscollection.png" /></a>

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







