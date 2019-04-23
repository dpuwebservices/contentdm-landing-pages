<!-- cookie for alert -->

<script src="js/jquery-2.1.1.min.js"></script>

  <script src="js/jquery.cookie.js"></script>

<script type="text/javascript">

//document.getElementById('alert').style.display = 'none';

// Check If Cookie exists and if it doesn't exists

if( $.cookie('alert') == null ) {
    // Create cookie
    $.cookie( 'alert', '1',  { expires: 1, path: '/' } );
    // Display popup
    // display message goes below...
	document.write('<div id="alert">');
	//document.write('<a class="alert" href="#alert">Most of the Digital Collections will be unavailable on January 14th from 2AM to 2:30AM (CST) during scheduled server maintenance. Our apologies for any inconvenience.</a>'); 
	document.write('</div>');
}


</script>

<!-- ie and firefox alert messages-->



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="qCvXJ2W-HqK5REO1m6iXQL5qEHbzW8gi55UqCJ9Qvc0" />
<link rel="icon" 

      type="image/ico" 

      href="favicon.ico">

<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />

<link rel="stylesheet" type="text/css" href="css/bento.css" />



</head>







<body>

<!--<div id="alert">

    <a class="alert" href="#alert">Most of the Digital Collections will be unavailable on January 14th from 2AM to 2:30AM (CST) during scheduled server maintenance. Our apologies for any inconvenience.</a>

</div>-->
<script>
				/* alert message internet explorer start*/
if (navigator.appName == 'Microsoft Internet Explorer'){
if( $.cookie('alertie') == null ) {
    // Create cookie
    $.cookie( 'alertie', '1',  { expires: 1, path: '/' } );
    // Display popup
    // display message goes below...
	document.write('<div class="dropdownwrap">');
	document.write('<a id="dropdown" href="#" title="click here to close this" > Some versions of Internet Explorer do not render collections like Yearbooks, Newspapers and Holy Cards correctly. We recommend using Chrome or Safari </a>'); 
	document.write('<div class="close"> <a href="#"><img src="images/close.png" width="20px" height="20px"></a> </div>');
	document.write('</div>');
}
}
/* alert message internet explorer end */

/* alert message for firfox start */
if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1)
{
if( $.cookie('alertff') == null ) {
    // Create cookie
    $.cookie( 'alertff', '1',  { expires: 1, path: '/' } );
    // Display popup
    // display message goes below...
	document.write('<div class="dropdownwrap">');
	document.write('<a id="dropdown" href="#">Some versions of Firefox do not render collections like Yearbooks, Newspapers and Holy Cards correctly. We recommend using Chrome or Safari.</a>'); 
	document.write('<div class="close"> <a href="#"><img src="images/close.png" width="20px" height="20px"></a> </div>');
	document.write('</div>');
}
}
/* alert message for firfox end */
</script>

<script>
/* script to toggle alert at the top for firefox and IE */
$(document).ready(function(e){

   $('.dropdownwrap').on('click',function(){

      $('.dropdownwrap').slideToggle();
		$(this).show();
		
   });

})
</script>
<div class="grid grid-pad z-index">



			<div class="col-1-1 ">

<!-- -->		

				<div class="header">



    	



        <!--/* links on the right*/-->



    	<div class="">

		

		<ul class="top-links pull-right">



            <a href="http://digicol.lib.depaul.edu/cdm/helpdocs/" target="_blank" class="link-no-decoration top-links">Help</a>



            <!--<a class="link-no-decoration top-links" href="">About</a>-->



            <a class="link-no-decoration top-links" href="http://library.depaul.edu">Library Home</a> 

             

<!--<a class="link-no-decoration top-links" href="">Log in</a>-->



        </ul>



        </div>



    	<!--/* logo */-->



        <div class="logo">



        	<img src="images/digcolbanner.png" usemap="#Map" border="0">



            <map name="Map" id="Map">



              <area shape="rect" coords="0,0,176,145" href="https://library.depaul.edu/" target="_self" />



              <area shape="rect" coords="219,32,985,139" href="http://digicol.lib.depaul.edu" target="_self" />



            </map>



    	</div>



    



        <!--/* navigation bar*/-->



        



                                <div class="col-1-1">



                                            <div class="menu">



                                            <ul id="navbar">



                      <li ><a onClick="return true" href="heritage.php">DePaul Heritage</a>



                        <ul>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p15448coll1">Yearbooks</a></li>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/dpubuilding">Buildings</a></li>

                            

                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll4">Student Newspapers</a></li>

                            

                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll5">University Photographs</a></li>



                        </ul>



                      </li>



                      <li><a href="vincentian.php">Vincentian Collections</a>



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



                      <li><a href="community.php">Community Collections</a>



                        <ul>



                             <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/younglords">Young Lords</a></li>

                             <li><a href="digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll10">Deborah Bright Photographs</a></li>


                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/lpnc6">Lincoln Park Neighborhood Collection</a></li>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/lpnc1">Architectural Photographs</a></li>



                        </ul>



                      </li>



                      <li><a href="selected.php">Selected Collections</a>



                        <ul>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll1">Selected Maps</a></li>



                            <li><a href="http://dpuspecialcollections.omeka.net/exhibits">Exhibits</a></li>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/gic">Geographic Images</a></li>



                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll3">Catholic Children&rsquo;s Magazine</a></li>

                            <li><a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll2">Napoleonic-Era Broadsides and Pamphlets</a></li>


                        </ul>



                      </li>



                      <li><a href="http://digicol.lib.depaul.edu/cdm/search">Browse All</a></li>

						

                      <li><a href="ask.php"> Ask a Librarian</a> </li>

						

                       

                    </ul>

                    

		<script type="text/javascript">

	



//document.getElementById('alert').style.display = 'none';

// Check If Cookie exists and if it doesn't exists



$.cookie("visits", 1);

if(   $.cookie('visit') != 2 ) {

    // Create cookie

   

  if ($.cookie('survey') == null) { $.cookie( 'survey', '1',  { expires: 7, path: '/' } );}

document.write('<li class="survey" >');

document.write('<a href="survey-form.html" target="_blank" onclick="return windowpop(this.href, 545, 500);count();" >');

document.write('Survey</a>');

document.write('</li>');



function count(){$.cookie("visits", 2);}

}





document.write($.cookie('visits'));

$.cookie('visits') = 



	</script>

           

        

             </div>	        



             </div>

<script>

function windowpop(url, width, height) {

var leftPosition, topPosition;

//Allow for borders.

leftPosition = (window.screen.width / 2) - ((width / 2) + 10);

//Allow for title and status bars.

topPosition = (window.screen.height / 2) - ((height / 2) + 50);

//Open the window.

window.open(url, "Window2", "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no");

}

</script>

        



    



       <!--/*horizontal line*/-->



       <div class="col-1-1">



        	<hr class="hr-divider" noshade="noshade" size="1px;">



       </div>



    </div>



    <!--<div class="col-1-1 ">



            <div id="search">





<form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">

<input type="hidden" name="CISOOP1" value="all">

<input type="hidden" name="CISOFIELD1" value="CISOSEARCHALL">

<input type="hidden" name="CISORESTMP" value="results.php">

<input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">

<input type="hidden" name="CISOMODE" value="grid">

<input type="hidden" name="CISOGRID" value="thumbnail,A,1;title,A,1;subjec,A,0;descri,200,0;none,A,0;20;relevancy,none,none,none,none">

<input type="hidden" name="CISOBIB" value="title,A,1,N;subjec,A,0,N;descri,200,0,N;none,A,0,N;none,A,0,N;20;relevancy,none,none,none,none">

<input type="hidden" name="CISOTHUMB" value="20 (4x5);relevancy,none,none,none,none">

<input type="hidden" name="CISOTITLE" value="20;title,none,none,none,none">

<input type="hidden" name="CISOHIERA" value="20;subjec,title,none,none,none">

<input type="hidden" name="CISOSUPPRESS" value="0">

<input type="text" name="CISOBOX1" size="60">

<input type="hidden" name="CISOROOT" value="/">

<input type="submit" value="Search" class="button">

</form>

	



</div>



</div>-->

</div>

</div>

   





