<!DOCTYPE html><head>





<title>DePaul University Library Digital Collections</title>  

 <link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.css" />  



	<script src="js/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>







	<script src="js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>        <script>






var $accui = jQuery.noConflict(true);// $accui replaces all $ to avoid conflicts with other jquery plug in.

	$accui(function() { 



		 



		$accui( ".accordion" ).accordion( 



		{ 







      heightStyle: "content",







	  active: false,







	  collapsible: true,







      alwaysOpen: false







    });

 	});







	</script>






 



            <?php include 'header.php' ?>  



            

<div class="col-1-1">



            <div id="search">



            <form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">



            <input type="hidden" name="CISOOP1" value="all">



            <input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">



            <input type="hidden" name="CISOMODE" value="grid">



            <input type="text" name="CISOBOX1" size="60">



            <input type="hidden" name="CISOROOT" value="/dpubuilding">



            <input type="submit" value="Search" class="button" id="search_button">



            </form>



            </div>



            </div>



            



<div class="wrapper">  



	<h1 class="pagetitle">DePaul University Buildings</h1>

	<!-- Grid 1/2 -->  



		<div class="grid grid-pad">  



			<div class="col-2-3">  



			  



            	<!-- Grid 2/3 and 1/3-->  



            <div class="grid grid-pad">







				







                <div class="col-1-1">







                	<?php include 'bento-map/buildings/depaulbuildings.php' ?>







                </div>







                







                <div class="col-1-1">  



                    <div class="content">







                      <div id="browse">







                        







                        
<div class="col-1-1 grid grid-pad">
                       <div class="content"> 
                          <div id="browse"> 
                        <?php include 'featurebox/depaul-buildings/accordion.php'?>
                          </div>
                       </div>
             		</div>






  <!-- Accordion -->







  <!--<h3>Browse by</h3>







<div id="accordion">







	<h2>Architect</h2><!-- Architect content -->   







	<!--<div>







    	<p>Select an architect from the list below.







      <ul>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Antunovich%20Associates/field/archit/mode/all/conn/and/order/nosort">Antunovich Associates</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Arthur%20Foster/field/archit/mode/all/conn/and/order/nosort">Arthur Foster</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/C.F.%20Murphy%20Associates/field/archit/mode/all/conn/and/order/nosort">C.F. Murphy Associates</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Fridstein%20%26%20Fitch/field/archit/mode/all/conn/and/order/nosort">Fridstein & Fitch</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Graham%2C%20Burnham%20%26%20Co/field/archit/mode/all/conn/and/order/nosort">Graham, Burnham & Co</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Holabird%20%26%20Roche/field/archit/mode/all/conn/and/order/nosort">Holabird & Roche</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/J.E.O.%20Pridmore/field/archit/mode/all/conn/and/order/nosort">J.E.O. Pridmore</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Lohan%20Associates/field/archit/mode/all/conn/and/order/nosort">Lohan Associates</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Marshall%20%26%20Fox/field/archit/mode/all/conn/and/order/nosort">Marshall & Fox</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Meyer%20%26%20Cook/field/archit/mode/all/conn/and/order/nosort">Meyer & Cook</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/MRSA%20Architects%20and%20Planners/field/archit/mode/all/conn/and/order/nosort">MRSA Architects and Planners</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Murphy%20%26%20Camp/field/archit/mode/all/conn/and/order/nosort">Murphy & Camp</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Naess%20Murphy!Shaw/field/archit!archit/mode/all!none/conn/and!and/order/nosort">Naess & Murphy</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Shaw%2C%20Naess%2C%20and%20Murphy/field/archit/mode/all/conn/and/order/nosort">Shaw, Naess, and Murphy</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Vitzthum%20Burns/field/archit/mode/all/conn/and/order/nosort">Vitzthum & Burns</a></li>







      </ul>







        	     







        </p>







    </div><!-- End Architect content -->  

  	<!--<h2>Building Name</h2><!-- Building Content -->







	<!--<div>







    	<p>Browse building images by building name.







      <ul>


-->

<!--


                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/64%20e.%20lake/field/title/mode/all/conn/and/order/nosort">64 E. Lake Street Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Taylor%20Building/field/title/mode/all/conn/and/order/nosort">84 E. Randolph Building, Taylor Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Administration%20Building/field/title/mode/all/conn/and/order/nosort">Administration Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Administration%20Center/field/title/mode/all/conn/and/order/nosort">Administration Center </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Aerial%20Views/field/title/mode/all/conn/and/order/nosort">Aerial Views</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Alumni%20Hall/field/title/mode/all/conn/and/order/nosort">Alumni Hall</a></li>







                <li> <a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Arts%20and%20Letters%20Hall/field/title/mode/all/conn/and/order/nosort">Arts and Letters Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Arthur%20J.%20Schmitt%20Academic%20Center/field/title/mode/all/conn/and/order/nosort">Arthur J. Schmitt Academic Center (SAC)</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Athletic%20Field/field/title/mode/all/conn/and/order/nosort">Athletic Field</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Belden%20Apartments/field/title/mode/all/conn/and/order/nosort">Belden Apartments</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Belden-Racine%20Residence%20Hall/field/title/mode/all/conn/and/order/nosort">Belden-Racine Residence Hall </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Castle/field/title/mode/all/conn/and/order/nosort">Castle</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Centennial%20Hall/field/title/mode/all/conn/and/order/nosort">Centennial Hall </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Citadel/field/title/mode/all/conn/and/order/nosort">Citadel</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/College%20Theater/field/title/mode/all/conn/and/order/nosort">College Theater, "The Barn" </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Commons%20Building/field/title/mode/all/conn/and/order/nosort">Commons Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Computer%20%20Science%20and%20Telecommunications%20Center/field/title/mode/all/conn/and/order/nosort">Computer  Science and Telecommunications Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Concert%20Hall/field/title/mode/all/conn/and/order/nosort">Concert Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Corcoran%20Hall/field/title/mode/all/conn/and/order/nosort">Corcoran Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Cortelyou%20Commons/field/title/mode/all/conn/and/order/nosort">Cortelyou Commons</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Courtside%20Apartments/field/title/mode/all/conn/and/order/nosort">Courtside Apartments</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/DePaul%20Art%20Museum/field/title/mode/all/conn/and/order/nosort">DePaul Art Museum</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/DePaul%20Center/field/title/mode/all/conn/and/order/nosort">DePaul Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Dietzgen%20Building/field/title/mode/all/conn/and/order/nosort">Dietzgen Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Elizabeth%20Ann%20Seton%20Hall/field/title/mode/all/conn/and/order/nosort">Elizabeth Ann Seton Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Faculty%20Hall/field/title/mode/all/conn/and/order/nosort">Faculty Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/First%20Step%20Coffee%20House/field/title/mode/all/conn/and/order/nosort">First Step Coffee House</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Frank%20J.%20Lewis%20Center/field/title/mode/all/conn/and/order/nosort">Frank J. Lewis Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Fullerton%20Building/field/title/mode/all/conn/and/order/nosort">Fullerton Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Harold%20L.%20Stuart%20Center/field/title/mode/all/conn/and/order/nosort">Harold L. Stuart Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Hayes-Healy%20Athletic%20Center/field/title/mode/all/conn/and/order/nosort">Hayes-Healy Athletic Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Kenmore%20Apartments/field/title/mode/all/conn/and/order/nosort">Kenmore Apartments</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Kimball%20Hall/field/title/mode/all/conn/and/order/nosort">Kimball Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Lake%20County/field/title/mode/all/conn/and/order/nosort">Lake County</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Lyceum/field/title/mode/all/conn/and/order/nosort">Lyceum</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/McCabe%20Hall/field/title/mode/all/conn/and/order/nosort">McCabe Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/McGaw%20Hall/field/title/mode/all/conn/and/order/nosort">McGaw Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/McGowan%20North/field/title/mode/all/conn/and/order/nosort">McGowan North</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/McGowan%20South/field/title/mode/all/conn/and/order/nosort">McGowan South</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/McHugh%20Hall/field/title/mode/all/conn/and/order/nosort">McHugh Resident Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Merle%20Reskin%20Theatre/field/title/mode/all/conn/and/order/nosort">Merle Reskin Theatre</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Michael%20J.%20O%20Connell%20Hall/field/title/mode/all/conn/and/order/nosort">Michael J. O'Connell Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Munroe%20Hall/field/title/mode/all/conn/and/order/nosort">Munroe Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Naperville%20Campus/field/title/mode/all/conn/and/order/nosort">Naperville Campus</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/O%20Hare%20Campus/field/title/mode/all/conn/and/order/nosort">O'Hare Campus</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/O%20Malley%20Place/field/title/mode/all/conn/and/order/nosort">O'Malley Place</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Palace/field/title/mode/all/conn/and/order/nosort">Palace</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Persky%20Hall/field/title/mode/all/conn/and/order/nosort">Persky Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/byrne%20hall/field/title/mode/all/conn/and/order/nosort/page/1">Peter V. Byrne Hall </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Quadrangle/field/title/mode/all/conn/and/order/nosort">Quadrangle "Quad"</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Racine%20Properties/field/title/mode/all/conn/and/order/nosort">Racine Properties</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Ray%20Meyer%20Fitness%20and%20Recreation%20Center/field/title/mode/all/conn/and/order/nosort">Ray Meyer Fitness and Recreation Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Richardson%20Library/field/title/mode/all/conn/and/order/nosort">Richardson Library</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Rolling%20Meadows/field/title/mode/all/conn/and/order/nosort">Rolling Meadows</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Rosati%20Hall/field/title/mode/all/conn/and/order/nosort">Rosati Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Sanctuary%20Residence%20Hall/field/title/mode/all/conn/and/order/nosort">Sanctuary Residence Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Sanctuary%20Townhomes/field/title/mode/all/conn/and/order/nosort">Sanctuary Townhomes</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/School%20of%20Music/field/title/mode/all/conn/and/order/nosort">School of Music, Fine Arts Building</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Schorsch%20Residence%20Hall/field/title/mode/all/conn/and/order/nosort">Schorsch Residence Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Science%20Hall%20West/field/title/mode/all/conn/and/order/nosort">Science Hall West </a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Sheffield%20Hall/field/title/mode/all/conn/and/order/nosort">Sheffield Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Sheffield%20Square/field/title/mode/all/conn/and/order/nosort">Sheffield Square</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/St.%20Vincent%20s%20Church/field/title/mode/all/conn/and/order/nosort">St. Vincent's Church</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/St.%20Vincent%20s%20College%20Hall/field/title/mode/all/conn/and/order/nosort">St. Vincent's College Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Stuart%20Center/field/title/mode/all/conn/and/order/nosort">Stuart Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Student%20Center/field/title/mode/all/conn/and/order/nosort">Student Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Sullivan%20Athletic%20Center/field/title/mode/all/conn/and/order/nosort">Sullivan Athletic Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/The%20Tower/field/title/mode/all/conn/and/order/nosort">The Tower</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Theatre%20School/field/title/mode/all/conn/and/order/nosort">Theatre School</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Theatre%20School%20Annex/field/title/mode/all/conn/and/order/nosort">Theatre School Annex</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Levan%20Center/field/title/mode/all/conn/and/order/nosort">Thomas P. Levan Center</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/University%20Hall/field/title/mode/all/conn/and/order/nosort">University Hall</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Wish%20Field%20%252F%20Cacciatore%20Stadium/field/title/mode/all/conn/and/order/nosort">Wish Field / Cacciatore Stadium</a></li>







      </ul>

-->





      <!--  </p>







    </div><!-- End Building Content -->

  	<!--<h2>Building Type </h2><!--Building Type content -->






<!--
	<div>







    	<p>View images by building type.







            <ul>


-->




            	<!--<li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Classroom%20and%20faculty%20offices%2C%20Administrative/field/builda/mode/all/conn/and/order/nosort">Administrative</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Athletics/field/builda/mode/all/conn/and/order/nosort">Athletics</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Classroom%20and%20faculty%20offices/field/builda/mode/all/conn/and/order/nosort">Classroom and faculty offices</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Performance%20space/field/builda/mode/all/conn/and/order/nosort">Performance space</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Student%20life%20and%20activities/field/builda/mode/all/conn/and/order/nosort">Student life and activities</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Student%20residences/field/builda/mode/all/conn/and/order/nosort">Student residences</a></li>







            </ul>        







        </p>  







    </div><!-- Eng Building Type content -->

     <!-- <h2>Campus</h2><!--Begin Campus content-->







    <div>






<!--
    	<p>View images of buildings by campus location.
-->





<!--
        	<ul>

-->





<!--            	<li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/maps/field/all/mode/all/conn/and/order/nosort">Campus Maps</a></li>
-->






             <!--   <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Lincoln%20Park/field/covera/mode/all/conn/and/order/nosort">Lincoln Park</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/Loop/field/covera/mode/all/conn/and/order/nosort">Loop</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/O'Hare/field/covera/mode/all/conn/and/order/nosort">O'Hare</a></li>







                <li><a href="http://digicol.lib.depaul.edu/cdm/search/collection/dpubuilding/searchterm/oak%20brook/field/covera/mode/all/conn/and/order/nosort">Oak Brook</a></li>







            </ul>       







         </p>




-->


<!--    </div><!-- End Campus content--><!-- </p>







        






-->
    </div>
    <!--End style content-->








</div>  



					</div>







                  </div>







           </div>







       </div>







    </div>  


<div class="col-1-3 border borderpad">  



					<div class="content ">  



           		 	 <h1>About</h1>	  



                        <p class="para">The photographs and images of DePaul buildings included in this digital collection date from 1898 to the present. Images include groundbreaking and dedication ceremonies, the construction and demolition of buildings, and aerial views of DePaul and the surrounding neighborhood. Original photographs are held in <a href="http://library.depaul.edu/special-collections/Pages/default.aspx">DePaul's Special Collections and Archives Department</a>. This site will be updated as more building photos are scanned.</p>  



                        







                        







                        







                        </div>







					<hr class="hr-divider">  



                        <h1>Recent Additions</h1>	







						<?php include 'recentbox/buildings/buildings-recentbox-image-and-title.php' ?>







                        







                







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







