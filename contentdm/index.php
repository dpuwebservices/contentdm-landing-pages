<!DOCTYPE html>

<html>





<head>

<style>


.grid-block {
position: relative;
}

.img{
	opacity:0.5;
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


#container1
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
	font-size:16px!important;
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

.img{
	z-index: -1;
	}
	


</style>






<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/fadein-out.js"></script>









<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->

<title>DePaul University Library Digital Collections</title>

<?php include 'header.php' ?>

<?php include 'global-search.php' ?>

        





<div class="wrapper">



	<!-- Grid 1/2 -->



		<div class="grid grid-pad">



			<div class="col-2-3">



			



            	<!-- Grid 2/3 and 1/3-->



            <div class="grid grid-pad">



                <div class="col-1-1">



                    <div class="content one">


<div class="grid-block fade">
<div class="container">

                    <a href="heritage.php" data-target="#one"><img src="images/home/heritage_home.png" width="100%" alt=""/>



                        



                              <h1>DePaul Heritage Collections</h1>


</div>
                              <div class="caption">



                               <p> From yearbooks to historical photographs, this collection celebrates the legacy of the DePaul community.



                              </p>



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



         



         <a href="vincentian.php" data-target="#two"  ><img src="images/home/vincentian_home.png" width="100%"  alt=""/>



                              <h1>Vincentian Collections</h1>
</div>


                                  <div class="caption">



                                    <h5>The history and heritage of the Vincentian Family as told through writings, postcards, maps and foundational texts.



                                  </h5>



                                  
</div></a>


                    	



         </div>      			



                    </div>



          
</div>


                <div class="col-1-3">



                    <div class="content three">
<div class="grid-block fade">


<div class="container1"> 


                    		<a href="community.php" data-target="#three"  ><img src="images/home/community.PNG" width="100%"  alt=""/>       



                	





                              <h1>Community Collections</h1>

 </div> 

                                  <div class="caption">



                                   <h5> Historical photographs, papers and journalism from the community surrounding DePaul University



                                  </h5>



                    	</div></a>





</div></div>
      

</div>

                



                <div class="col-1-3">



                    <div class="content four">

                    
<div class="grid-block fade">


<div class="container1"> 

                    		<a href="selected.php" data-target="#four"  ><img src="images/home/selected_home.png" width="100%" alt=""/>



                






                              <h1>Selected Collections</h1>

 </div> 

                                  <div class="caption">



                                   <h5>Highlighted digital collections from the DePaul University Library Special Collections



                                  </h5>



                    	</div></a>



                    </div>

</div>

                </div>


           



				


</div>
	



            
</div>
</div>

            <!-- about section-->



			<div class="col-1-3 border borderpad">



				<div class="content ">



                		<h1>About</h1>	



                        <p class="para">



                        The DePaul Digital Library is composed of digitized books, manuscripts, images, maps and other materials held by the University Library. The contents of the Digital Library are freely available for all to use for instruction, research, individual study and scholarship.



                        </p>



                        <hr class="hr-divider">



                        <h1>Recent Additions</h1>	

						<?php include'recentbox/index/index-recentbox-image-and-title.php' ?>

                        

                        

                        



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

<script src="js/slideup-easing.js"></script>



</html> 



