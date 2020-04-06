<!DOCTYPE html>

<head>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>-->
	<title>St.Vincent's Handwritten Letters</title>

  
<!-- *** START header.php-->
<!--You don't need to add this to the pages; it's just how I can do some testing without affecting the whole site-->
<script src="js/jquery-2.1.1.min.js"></script> <script src="js/jquery.cookie.js"></script> <script type="text/javascript">if($.cookie('alert')==null){$.cookie('alert','1',{expires:1,path:'/'});document.write('<div id="alert">');document.write('</div>');}</script> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="qCvXJ2W-HqK5REO1m6iXQL5qEHbzW8gi55UqCJ9Qvc0" />
<link rel="icon"type="image/ico"href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/bento.css" />
<!--Since the header is commonly used, need to move the redirect to the actual page. -->
<!--<meta http-equiv="Refresh" content="10; url=//library.depaul.edu/special-collections/digital-collections/Pages/default.aspx" />-->

</head>
<body>
   <div id="alert"><a class="alert" href="#alert">This repository has been updated; all pages on this site have been moved. You will be redirected to the new page in 10 seconds.</div>
   <script>if(navigator.appName=='Microsoft Internet Explorer'){if($.cookie('alertie')==null){$.cookie('alertie','1',{expires:1,path:'/'});document.write('<div class="dropdownwrap">');document.write('<a id="dropdown" href="#" title="click here to close this" > Some versions of Internet Explorer do not render collections like Yearbooks, Newspapers and Holy Cards correctly. We recommend using Chrome or Safari </a>');document.write('<div class="close"> <a href="#"><img src="images/close.png" width="20px" height="20px"></a> </div>');document.write('</div>');}} if(navigator.userAgent.toLowerCase().indexOf('firefox')>-1) {if($.cookie('alertff')==null){$.cookie('alertff','1',{expires:1,path:'/'});document.write('<div class="dropdownwrap">');document.write('<a id="dropdown" href="#">Some versions of Firefox do not render collections like Yearbooks, Newspapers and Holy Cards correctly. We recommend using Chrome or Safari.</a>');document.write('<div class="close"> <a href="#"><img src="images/close.png" width="20px" height="20px"></a> </div>');document.write('</div>');}}</script> <script>$(document).ready(function(e){$('.dropdownwrap').on('click',function(){$('.dropdownwrap').slideToggle();$(this).show();});})</script> 
   <div class="grid grid-pad z-index">
      <div class="col-1-1 ">
         <div class="header">
            <div class="">
               <ul class="top-links pull-right"><a href="http://digicol.lib.depaul.edu/cdm/helpdocs/" target="_blank" class="link-no-decoration top-links">Help</a><a class="link-no-decoration top-links" href="http://library.depaul.edu">Library Home</a></ul>
            </div>
            <div class="logo">
               <img src="images/digcolbanner.png" usemap="#Map" border="0">
               <map name="Map" id="Map">
                  <area shape="rect" coords="0,0,176,145" href="https://library.depaul.edu/" target="_self" />
                  <area shape="rect" coords="219,32,985,139" href="http://digicol.lib.depaul.edu" target="_self" />
               </map>
            </div>
            <div class="col-1-1">
               <div class="menu">
                  <ul id="navbar">
                     <li >
                        <a onClick="return true" href="heritage.php">DePaul Heritage</a>
                        <ul>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p15448coll1">Yearbooks</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/dpubuilding">Buildings</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll4">Student Newspapers</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll5">University Photographs</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="vincentian.php">Vincentian Collections</a>
                        <ul>
                           <li><a href="/contentdm/vincentian-map.php">American Vincentian Bicentennial</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/depaul01">Foundational Texts</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll9">Handwritten Letters</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p15448coll4">Holy Cards</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/cm1">Postcards</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p15448coll2">Historical Maps</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p15448coll3">Historical Texts</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="community.php">Community Collections</a>
                        <ul>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/younglords">Young Lords</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll10">Deborah Bright Photographs</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/lpnc6">Lincoln Park Neighborhood Collection</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/lpnc1">Architectural Photographs</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="selected.php">Selected Collections</a>
                        <ul>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll1">Selected Maps</a></li>
                           <li><a href="http://dpuspecialcollections.omeka.net/exhibits">Exhibits</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/gic">Geographic Images</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll3">Catholic Children&rsquo;s Magazine</a></li>
                           <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll2">Napoleonic-Era Broadsides and Pamphlets</a></li>
                        </ul>
                     </li>
                     <li><a href="http://digicol.lib.depaul.edu/cdm/search">Browse All</a></li>
                     <li><a href="ask.php"> Ask a Librarian</a></li>
                  </ul>
                  <script type="text/javascript">$.cookie("visits",1);if($.cookie('visit')!=2){if($.cookie('survey')==null){$.cookie('survey','1',{expires:7,path:'/'});} document.write('<li class="survey" >');document.write('<a href="survey-form.html" target="_blank" onclick="return windowpop(this.href, 545, 500);count();" >');document.write('Survey</a>');document.write('</li>');function count(){$.cookie("visits",2);}} document.write($.cookie('visits'));$.cookie('visits')=</script> 
               </div>
            </div>
            <script>function windowpop(url,width,height){var leftPosition,topPosition;leftPosition=(window.screen.width/2)-((width/2)+10);topPosition=(window.screen.height/2)-((height/2)+50);window.open(url,"Window2","status=no,height="+height+",width="+width+",resizable=yes,left="+leftPosition+",top="+topPosition+",screenX="+leftPosition+",screenY="+topPosition+",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");}</script> 
            <div class="col-1-1">
               <hr class="hr-divider" noshade="noshade" size="1px;">
            </div>
         </div>
      </div>
   </div>

<!-- *** END header.php-->
  
	<div class="col-1-1">
		<div id="search">
			<form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">
				<input type="hidden" name="CISOOP1" value="all">
				<input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">
				<input type="hidden" name="CISOMODE" value="grid">
				<input type="text" name="CISOBOX1" size="60">
				<input type="hidden" name="CISOROOT" value="/p16106coll9">
				<input type="submit" value="Search" class="button" id="search_button">
			</form>
		</div>
	</div>
	<!-- Grid 1/2 -->
	<div class="wrapper">
		<h1 class="pagetitle">St.Vincent's Handwritten Letters</h1> 
		<div class="grid grid-pad">
			<div class="col-2-3">
				<!-- Grid 2/3 and 1/3-->
				<!-- Grid 1/3 -->
				<div class="grid grid-pad">
					<div class="col-1-1">
						<img src="images/vincentian/holographcollection.png" width="100%">
					</div>
				</div>
				<div class="col-1-1 grid-pad">
					<h3>Browse by Timeline</h3>
					<?php include 'bento-map/holographs/holographstimeline.php' ?>
					<h3>Browse by Location Where Letter was Received</h3>
					<?php include 'featurebox/holographs/letters-map.php'?>
				</div>
			</div>
			<!-- end bento -->
			<!-- about section-->
			<div class="col-1-3  border borderpad">
				<div class="content">
					<h1>About</h1>	
					<p>DePaul University’s collection of the handwritten letters of St. Vincent de Paul (1581-1660) represents the largest of the saint’s extant holographic documents outside of Europe, and is the cornerstone of DePaul’s Vincentian Studies Collection, a multidisciplinary collection of resources pertaining to the study of St. Vincent and the Vincentian Family. For more information on the broader collection, see the <a href="http://libguides.depaul.edu/vincentianstudies" title="Vincentian Research Guide">Vincentian Research Guide</a>.</p>
					<p>These letters range in date from 1641 to 1660, a fertile period during Vincent’s life during which his influence was at its height. By 1640, he was one of the leading figures in the French Counter-Reformation, and had founded the Ladies of Charity (1617), the Congregation of the Mission (1625), and the Daughters of Charity (1633). In his final two decades, Vincent would be appointed to the royal Council of Conscience, grapple with the heresy of Jansenism, and spread his religious message of charity through Europe, into North Africa, to as far away as Madagascar. By his death on September 27, 1660, he was the administrator of a vast network of religious and charitable endeavors, and one of the most well-known and revered figures in France.</p>
					<p>To view any of these letters, simply click on the timeline date, or letter itself. In addition, each marker on the European map represents the location of a letter, and clicking on a marker will pull up an individual letter.</p>
					<p>Each letter includes a transcription and translation of the respective text. The transcriptions are taken from Vincent de Paul: Correspondence, Entretiens, Documents (<i>Librairie Lecoffre, 1920-1925</i>), edited by Pierre Coste, C.M., with the exception of the 1641 letter to Sylvestre Crusy de Marcillac, which was transcribed by John E. Rybolt, C.M. The translations are taken from Vincent de Paul: Correspondence, Conferences, Documents (<i>New City Press, 1985-2010</i>), by the Vincent Translation Project. A link to the original transcription or translation is available in the record of each letter, if available.</p>
					<p>This collection was made possible with the kind assistance of DePaul University’s Office of Mission and Values, and the Vincentian Studies Institute.</p>
					<p class="para">&nbsp;</p>
					<a href="http://digicol.lib.depaul.edu/cdm/search/collection/p16106coll9" title="Browse All Letters">
						<img class="pull-right" src="images/buttons/browsethiscollection.png" />
						<!--<hr class="hr-divider">  

                     <h1>Recent Additions</h1>-->
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
 
  
<!-- *** Start of page-specific script-->
<script type="text/javascript"> 
  window.setTimeout(function() {
    window.location.href = 'http://www.google.com';
}, 10000);
</script>
<!-- *** End of page-specific script-->
  
<script src="js/jquery.ui.map.full.min.js" type="text/javascript"></script>
	<script>
		$('#map_canvas').gmap({'zoom':1,'scrollwheel': false,'draggable': true,'scaleControl': false,}).bind('init', function(ev, map) {
		
			$('#map_canvas').gmap('addMarker', {'position': '41.9000,12.5000', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/10/rec/1">Letter to Jean Dehorgny in Rome, September 10, 1648</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '41.9000,12.6000', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/13/rec/2">Letter to Edme Jolly, Superior, in Rome, November 29, 1658</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '44.4111,8.9328', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/singleitem/collection/p16106coll9/id/20/rec/6">Letter to Jean Martin in Genoa, August, 1646</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '43.2964,5.3700', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/16/rec/3">Letter to Gabriel Delespiney, Superior, in Marseilles, March 5, 1660</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '44.5194,3.5014', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/2/rec/5">Letter to Sylvestre Crusy de Marcillac, Bishop of Mende, December 6, 1641</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '47.0150,0.3244', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/5/rec/8">Letter to Antoine Portail, October 6, 1644</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '49.8486,3.2864', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/singleitem/collection/p16106coll9/id/21/rec/7">Letter to Jean Parre, in Saint-Quentin, 27 February, 1659</a>'}, this);
		
			});
		
			$('#map_canvas').gmap('addMarker', {'position': '50.2531,1.8839', 'bounds': true}).click(function() {
		
				$('#map_canvas').gmap('openInfoWindow', {'content': '<a href="http://digicol.lib.depaul.edu/cdm/compoundobject/collection/p16106coll9/id/19/rec/4">Letter to Pierre du Chesne, in Crécy, July 24, 1642</a>'}, this);
		
			});
		
		});
	</script>

	</html>