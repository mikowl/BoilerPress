<?php

/* ==========================================================================
   Advanced Custom Fields Examples
   ========================================================================== */

/* Example date formatting using the date picker field */

if(get_field('date_picker')) {
	$date = DateTime::createFromFormat('Ymd', get_field('date'));
	echo '<time>' . $date->format('m-d-Y') . '</time>'; 
}


?>     