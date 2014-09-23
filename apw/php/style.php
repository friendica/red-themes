<?php
	require_once('view/theme/apw/php/functions.php');

// Load user config
	$uid = get_theme_uid();
	if($uid) {
		load_pconfig($uid,'apw');
		require_once('view/theme/apw/php/userconfig.php');
	}
// Load a schema
	require_once('view/theme/apw/php/loadschema.php');

// Now load some fonts
require_once('view/theme/apw/php/font_manager.php');

// Set some defaults - it will fart if we have some, but not all settings, so 
// we need to check if each is set individually.

	if (! $line_height) 
		$line_height = '1.5';
	if (! $apw_font_size)
		$apw_font_size = '13px';
	if (! $item_colour)
		$item_colour = '#010101';
	if (! $link_colour)
		$link_colour = '#0080ff';
	if (! $background)
		$background = "../img/black.jpg";
	if (! $bgattach)
		$bgattach = 'scroll';
	if (! $bgcolour)
		$bgcolour = '#000';
	if (! $sectionbackground)
		$sectionbackground = '';
	if (! $sectioncolour)
		$sectioncolour = '';
	if (! $scaling)	
		$scaling = 'cover';
	if (! $font_colour)
		$font_colour = '#fff';
	if (! $iconpath)
		$iconpath = '../img';
	if (! $bigshadow)
		$bigshadow = '15px 15px 15px';
	if (! $smallshadow)
		$smallshadow = '5px 5px 5px';
	if (! $shadowcolour)
		$shadowcolour = '#000';
	if (! $radius)
		$radius = '5px';
	if (! $aside)
		$aside = 'off';
	if (! $opacity)
		$opacity = '0.98';
	if(! $nav)	
		$nav = 'black';
	if(! $width)
		$width = '400px';
	if(! $minwidth)
		$minwidth = '240px';
	if(! $gcrwidth)
		$gcrwidth = '68%';
	if(! $itemfloat)
		$itemfloat = 'left';
	if(! $sectionleft)
		$sectionleft = "0px";
	if(! $sectionright)
		$sectionright = "---";
	if(! $sectionwidth)
		$sectionwidth = "100%";
	if(! $asideleft)
		$asideleft = "0";
	if(! $asideright)
		$asideright = "---";
	if(! $font)
		$font = "sans-serif";
	if(! $iconpath)
		$iconpath = "../img";


	if($nav) {
		if($nav === "red") {
		      $nav1 = "#f00";
		      $nav2 = "#b00";
	}
		if($nav === "pink") {
		      $nav1 = "#FFC1CA";
		      $nav2 = "#FFC1CA";
	}
		if($nav === "green") {
		      $nav1 = "#5CD65C";
		      $nav2 = "#5CD65C";
	}
		if($nav === "blue") {
		      $nav1 = "#1872a2";
		      $nav2 = "#1872a2";
	}
		if($nav === "purple") {
		      $nav1 = "#551A8B";
		      $nav2 = "#551A8B";
	}
		if($nav === "black") {
		      $nav1 = "#000";
		      $nav2 = "#222";
	}
		if($nav === "orange") {
		      $nav1 = "#FF3D0D";
		      $nav2 = "#FF3D0D";
	}	
		if($nav === "brown") {
		      $nav1 = "#330000";
		      $nav2 = "#330000";
	}
		if($nav === "grey") {
		      $nav1 = "#2e2f2e";
		      $nav2 = "#2e2f2e";
	}
		if($nav === "gold") {
		      $nav1 = "#FFAA00";
		      $nav2 = "#FFAA00";
	}
}



$sectiontop = "28px";
$iconsize = "16px";
$navheight = "27px";
$showlock= "block";

if ($iconpath == "largenav") {
        $sectiontop = "55px";
	$iconsize="48px";
	$navheight="54px";
	$showlock="none";
}


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
