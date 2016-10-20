<!DOCTYPE html><head>

<script src="js/jquery-2.0.3.min.js"></script>
<script src="js/fadein-out.js"></script>


<title>Selected Collection</title>

<style>


.grid-block {
position: relative;
}

.img{
	opacity:0.8;
	z-index: -1;
	}

.img:hover{
	opacity:0.1;
	}

.caption {
display: none;
position: absolute;
top: 0;
left: 0;
background:rgba(61, 95, 150, 0.8) ;
width: 100%;
height: 100%;
}

.caption p {
font-size: 14px;
text-align:left;
color: #fff;
width:50%;
padding-top:100px;
font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif !important;
}

#text
{

    position:absolute;    
    color:white;
    font-size:24px;
 
}

#container
{
    height:100%;
    width:100%;
    position:relative;
}

.container h1 {
    width: 100%;
    position: absolute;
	top:-15px;
 z-index: 1;
	color:#fff;
	font-size:24px;
	font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif !important;
	background:rgba(61, 95, 150, 0.8);
}


.container1
{
    height:100%;
    width:100%;
    position:relative;
}

.container1 h1 {
    width: 100%;
    position: absolute;
    top:-15px;
  z-index: 1;
	color:#fff!important;
	font-size:20px;
	font-style:bold;
	font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif;
	background:rgba(61, 95, 150, 0.8);
}


.caption h5 {
font-size: 11px;
text-align:left;
color: #fff;
width:100%;
padding-top:30px;
font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif !important;

}


.caption h3 {
font-size: 14px;
text-align:left;
color: #fff;
width:100%;
padding-top:30px;
font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif !important;

}



.container2
{
    height:100%;
    width:100%;
    position:relative;
}



.container2 h1 {
    width: 100%;
    position: absolute;
	top:-15px;
 z-index: 1;
	color:#fff;
	font-size:16px;
	font-family:"Lucida Sans Unicode","Lucida Grande",sans-serif !important;
	background:rgba(61, 95, 150, 0.8);


}

.img{
	z-index: -1;
	}
	


</style>





<?php include 'header.php' ?>



<?php include 'global-search.php' ?>



	<!-- Grid 1/2 -->

 <div class="wrapper">



	<h1 class="pagetitle">DePaul Library Selected Collections</h1>



		<div class="grid grid-pad">







			<div class="col-2-3">

 

            	<!-- Grid 2/3 and 1/3-->







            <div class="grid grid-pad">







                <div class="col-1-2">







                    



                    <div class="content one">





<div class="grid-block fade">
<div class="container">


                    <a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll1" data-target="#one" ><img src="images/selected/spca_maps1.png" width="100%" height="300px" alt=""/>







                              <h1>Selected Maps</h1>

</div>





                              <div class="caption">







                               <h5>Explore shifting boundaries, unusual projections and old Chicago street names. Dating from 1493 to the mid-20th century, DePaul's map collections contain cartographic creations by early modern mapmakers and printers.



</h5>



                              







                        </div></a>


</div> </div>




                  













</div>
        










                <div class="col-1-2">







                    



                    <div class="content five">


<div class="grid-block fade">
<div class="container2">





                    <a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll2" data-target="#five"   ><img src="images/selected/napoleon-banner1.png" width="100%" height="300px" alt=""/>














                              <h1>Napoleonic-Era Broadsides and Pamphlets</h1>
                              </div>







                              <div class="caption">






<h5>
These pamphlets and broadsides provide full-text access to pamphlets and broadsides not available elsewhere on the Internet.






                              </h5>







                        </div></a>







                    </div>







               
</div>




</div>







           






                <!-- Grid 1/3 -->







            <div class="grid grid-pad">







                <div class="col-1-3">







                    <div class="content two">

<div class="grid-block fade">

<div class="container1">
 

         <a href="http://dpuspecialcollections.omeka.net/" data-target="#two"  ><img src="images/selected/exhibits.png" width="100%"  alt=""/>

 




 

                              <h1>Exhibits</h1>



</div>



                                  <div class="caption">







                                  <h5> Selected related materials from physical exhibits mounted by the DePaul University Libraries.



                                  </h5>







                                  







                    	</div></a>



               			







                    </div>



</div></div>


             






                <div class="col-1-3">







                    <div class="content three">




<div class="grid-block fade">

<div class="container1">



                    		<a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/gic" data-target="#three"  ><img src="images/selected/gic.png" width="100%"  alt=""/>       







                	













                              <h1>Geographic Images</h1>



</div>



                                  <div class="caption">





<h5>These pamphlets and broadsides provide full-text access to pamphlets and broadsides not available elsewhere on the Internet.
</h5>







                    	</div></a>




</div>


                    </div>







                </div>







                <div class="col-1-3">







                    <div class="content four">



<div class="grid-block fade">

<div class="container2">



                    		<a href="http://digicol.lib.depaul.edu/cdm/landingpage/collection/p16106coll3" data-target="#four"  ><img src="images/selected/catholic_children_magazine.png" width="100%" alt=""/>






                              <h1>Catholic Children's Magazine</h1>


</div>




                                  <div class="caption">







                                    <h5>The history and heritage of the Vincentian Family as told through writings, postcards, maps and foundational texts.







                                  </h5>


</div>




                    	</div></a>







                    </div>







                </div>







            </div>            


</div>

              


				<!-- adding the feature box -->



				<?php  ?>







</div>

            







            <!-- about section-->







			<div class="col-1-3  border borderpad">







				<div class="content">







                		<h1>About</h1>	







                        <p class="para">







                        The DePaul Library Selected Collections include various highlights from the DePaul Library Special Collections which have been digitized. These include:</p>



                        







                        <hr class="hr-divider">



					<?php include'recentbox/selected/selected-recentbox-image-and-title.php'?>



                        <!--<h1>Recent Additions</h1>-->







				</div>







			</div>







            </div>







        </div>    







            <div class="grid no-padding stick-bottom">







			<div class="col-1-1 ">







            <?php include 'footer.php' ?>







            </div>  







            </div> 







		



<script src="js/slideup-easing.js"></script>



</body>







</html>







