<?php
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
		$background = "../img/backgrounds/black.jpg";
	if (! $bgattach)
		$bgattach = 'scroll';
	if (! $bgcolour)
		$bgcolour = '#000';
	if (! $commentlinkcolour)
		$commentlinkcolour = '#000';
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
