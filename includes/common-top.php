<?php



function active_class2($reference) {

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


   	<div id="topMenu">
        		<div class="wrapper">
        			<ul>
            			<li><a href="../home.php">HOME</a></li>
                        <li><a>|</a></li>
                		<li><a href="../contact/">CONTACT US</a></li>
            		</ul>
         		</div>
        </div>