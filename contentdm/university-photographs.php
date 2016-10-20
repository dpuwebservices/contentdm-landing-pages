<!DOCTYPE html><head>

  <title>DePaul University Photographs</title>  
<?php include 'header.php' ?> 

 

<div class="col-1-1">

<div id="search">

<form method="GET" action="http://digicol.lib.depaul.edu/cdm4/results.php">

<input type="hidden" name="CISOOP1" value="all">

<input type="hidden" name="CISOVIEWTMP" value="item_viewer.php">

<input type="hidden" name="CISOMODE" value="grid">

<input type="text" name="CISOBOX1" size="60">

<input type="hidden" name="CISOROOT" value="/p16106coll5">

<input type="submit" value="Search" class="button" id="search_button">

</form>

</div>

</div>

  	<!-- Grid 1/2 -->  
    <div class="wrapper">  
	<h1 class="pagetitle">University Photographs</h1>  
		<div class="grid grid-pad">  
			<div class="col-2-3">  
            	<!-- Grid 2/3 and 1/3-->  
                <!-- Grid 1/3 -->  
                <div class="grid grid-pad">  
                <div class="col-1-1">  
					<?php include 'bento-map/photographs/photographscollection.php' ?>  
            	</div>	  
            	</div>  
                  
					<?php include 'featurebox/heritage/photographs-featurebox2.php'?>  
            	  
			</div> <!-- end bento -->    
				  
            <!-- about section-->  
			<div class="col-1-3  border borderpad">  
				<div class="content">  
                		<h1>About</h1>	  
                        <p class="para">This assortment of photographs of DePaul University life dates from the early 1900s through the 1990s.  Professional photographs of University ceremonies, milestones, athletic events and student groups are featured as well as informal snapshots of community service projects, students and social activities.  Original photographs are held in DePaul’s Special Collections and Archives Department.</p>  
                        <hr class="hr-divider">  
                     <h1>Recent Additions</h1>	  
						<?php include'recentbox/photographs/photographs-recent.php'?>  
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
