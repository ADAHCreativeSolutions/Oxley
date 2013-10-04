<?php



function active_class($reference) {

    $return_ = '';

    if (!empty($reference)) {

        $PAGE_URI = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);

        if (strpos($PAGE_URI, $reference)) {

            $return_ = 'class="activeMainMenu"';

        }

    }

    return $return_;

}





?>


  <div id="headerSub">
    	<div class="sp6">
        	<div id="logo"><img src="../resources/images/logo.png" alt="" /></div>
        </div>
        <div class="sp6">
        	<div class="get-in-touch">
            	<p><a href="mailto:lasanthi.oxley@gmail.com">Email</a><br />
                The Preferred Global Supplier for Trouser Components</p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="mainMenu">

        	<ul>
            	<li><a <?php echo active_class("waistbands") ?> href="../waistbands/">WaistBands</a></li>
                <li><a <?php echo active_class("pocketing") ?>  href="../pocketing/">Pocketing</a></li>
                <li><a <?php echo active_class("linings") ?>  href="../linings/">Lining</a></li>
                <li><a <?php echo active_class("grilon") ?>  href="../grilon/">Grilon</a></li>
                <li><a <?php echo active_class("tape") ?>  href="../tape/">Anti-Fray Tapes</a></li>
                <li><a <?php echo active_class("hooks") ?>  href="../hooks/">Hooks and bars</a></li>
                <li><a <?php echo active_class("elastic") ?>  href="../elastic/">Clear Elastics</a></li>
                
            </ul>
        </div>	
        
         <div id="slides">
    	    <div id="ei-slider" class="ei-slider">
   <ul class="ei-slider-large">
  							
                            
                            <li>
                           	 	<img src="../resources/images/slide-3.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                            <li>
                           	 	<img src="../resources/images/slide-1.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                             <li>
                           	 	<img src="../resources/images/slide-4.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                             <li>
                           	 	<img src="../resources/images/slide-5.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                            <li>
                           	 	<img src="../resources/images/slide-0.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                            <li>
                           	 	<img src="../resources/images/slide-2.jpg" alt="" />
                            	<div class="ei-title">
                               <!-- <h2>Creative</h2>
                                <h3>Duet</h3>-->
                            	</div>
  							</li>
                            
                            
</ul>
                       <ul class="ei-slider-thumbs">
                        <li class="ei-slider-element">Current</li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                           <li><a href="#">6</a></li>
                             
                 
                        
        
    </ul>     
                            </div>
    </div>