<!DOCTYPE html><head>


<title>DePaul Newspapers</title>  



            <?php include 'header.php' ?>  

            
<div class="col-1-1">

            <div id="search">

            <form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">

            <input type="hidden" name="CISOOP1" value="all">

            <input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">

            <input type="hidden" name="CISOMODE" value="grid">

            <input type="text" name="CISOBOX1" size="60">

            <input type="hidden" name="CISOROOT" value="/p16106coll4">

            <input type="submit" value="Search" class="button" id="search_button">

            </form>

            </div>

</div>

<!-- Grid 1/2 -->  

    <div class="wrapper">



	<h1 class="pagetitle">Student Newspapers</h1>



		<div class="grid grid-pad">  

			<div class="col-2-3">  

            	<!-- Grid 2/3 and 1/3-->  

                <!-- Grid 1/3 -->  

            <div class="grid grid-pad">



				<div class="col-1-1 ">

	

                	<?php include'bento-map/newspapers/newspaperscollection.php'?>



                </div>

				

                </div>  

                

                  	<div class="col-1-1">

                <?php include'featurebox/heritage/newspapers-featurebox2.php'?>

      				</div>

				

              	  



	

</div>

 <!-- end bento -->  

				  

            <!-- about section-->  

			<div class="col-1-3 border borderpad">  

				<div class="content">  

                		<h1>About</h1>	  

                        <p class="para">DePaul student journalists have scrutinized the University, and themselves, in the DePaul Poll Parrot (published 1923), the DePaulia (published 1923-present), and the alternative student newspaper The Altheia (published 1967-1971). Documenting campus activities, University administration, and the world beyond DePaul, each publication has its own unique perspective, ranging from The Altheia’s focus on social issues of the times, to the more traditional campus coverage of the DePaulia.

</p>

<p class="para">

Digitization is ongoing, and will eventually include the entire run of each newspaper held by University Archives, up through the most recently concluded academic year. Gaps in what is available online may reflect gaps in the physical collection, or may represent editions that are still in process for digitization. Contact us for more information.



</p>  

                        <hr class="hr-divider">  

                     <h1>Recent Additions</h1>



                        



                       <?php include'recentbox/newspapers/newspapers-recentbox-image-and-title.php'?>  

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

