<?php

// This is where we do the actual string replacement.
// For most people's purposes, it works exactly the same as 
// replace_macros, but without the brackets.
// First, we load the CSS file - note, we only load style.css
// at the moment.

// Then we build an array of strings to replace, and what to
// replace them with.  It basically says "Find this (leftmost) 
// string in the CSS file and replace it with this (rightmost) 
// string".  New or additional strings can be added at will.

// Finally we echo the string replaced file to be used by the
// client.

if(file_exists('view/theme/apw/css/style.css')) {
	$x = file_get_contents('view/theme/apw/css/style.css');

$options = array (
	'$line_height' => $line_height,
	'$apw_font_size' => $apw_font_size,
	'$item_colour' => $item_colour,
	'$link_colour' => $link_colour,
	'$background' => $background,
	'$bgattach' => $bgattach,
	'$bgcolour' => $bgcolour,
	'$sectionbackground' => $sectionbackground,
	'$sectioncolour' => $sectioncolour,
	'$scaling' => $scaling,
	'$font_colour' => $font_colour,
	'$iconpath' => $iconpath,
	'$bigshadow' => $bigshadow,
	'$smallshadow' => $smallshadow,
	'$shadowcolour' => $shadowcolour,
	'$radius' => $radius,
	'$opacity' => $opacity,
	'$nav1' => $nav1,
	'$nav2' => $nav2,
	'$width' => $width,
	'$minwidth' => $minwidth,
	'$gcrwidth' => $gcrwidth,
	'$itemfloat' => $itemfloat,
	'$sectionleft' => $sectionleft,
	'$sectionright' => $sectionright,
	'$sectionwidth' => $sectionwidth,
	'$sectiontop' => $sectiontop,
	'$iconsize' => $iconsize,
	'$showlock' => $showlock,
	'$navheight' => $navheight,
	'$asideleft' => $asideleft,
	'$asideright' => $asideright,
	'$font' => $font,
	'$fname' => $fname,
	'$iconpath' => $iconpath,
	'$italicmacro' => $italicmacro,
	'$boldmacro' => $boldmacro,
	'$strongmacro' => $strongmacro,
	'$obliquemacro' => $obliquemacro
);

echo str_replace(array_keys($options), array_values($options), $x);    


// This is messy and should really be done in Comanche.
// Hence, it is not done with the string replacement
// above.  We could do this with string replacement too
// though it would require using a different CSS source
// file.

	if ($aside == "tagonly"){
		echo "
			
			aside#region_1 {display: block;
			position: fixed;
			top: 0px;}
			section {left: 250px;
			width: 75%;}
			.vcard-wrapper {display: block;}
			div.tagblock.widget {display: block;}";
	}


	if($aside == "on") {
//			aside#region_1 {display: block;}
//			section {left: 250px;
//				width: 75%;}

		echo "
			aside#region_1 {display: block;}

			section {left: 250px;
				width: 75%;}
			.vcard {display: block;}

			.vcard-wrapper {display: block;}

			.widget {display: block;}

			div#contact-block {display: block;}

		.rconnect {
			position: relative; 
			color: #fff !important;
			background-color: #0080ff;
			}
		";
	}
}
