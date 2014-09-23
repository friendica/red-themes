<?php

function apw_pluggable_fonts() {
	$x = splitFilename($font);
	$fname = $x[0];
	$fext = $x[1];

	if (file_exists('view/theme/apw/font/' . $fname . 'i.' . $fext)) {
		$italic = $fname . 'i.' . $fext;
		$iname = $fname . 'i';
	}

	if (file_exists('view/theme/apw/font/' . $fname . 'b.' . $fext)) {
		$bold = $fname . 'b.' . $fext;
		$bname = $fname . 'b';
	}

	$strongmacro = '';
	$obliquemacro = '';
	if ($italic) {
		$italicmacro = "@font-face {font-family: '" . $iname ."';src: URL('../font/" . $italic . "'); font-weight: italic, oblique;} ";
		$obliquemacro = "em {font-family: '" . $iname . "';}";
	}
	if ($bold){
		$boldmacro = "@font-face {font-family: '" . $bname . "';src: URL('../font/" . $bold . "'); font-style: strong;} ";
		$strongmacro = "strong {font-family: '" . $bname . "';}";
	}
}