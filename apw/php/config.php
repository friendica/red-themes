<?php
/**
 * Theme settings
 */

function theme_content(&$a) {

// This are used at settings/display only, so 
// we should only let local users see it.
if (!local_user())
	return;

// First, we load the channels settings, so we can
// display the present settings in the form.

	$schema = get_pconfig(local_user(),'apw', 'schema' );
	$font_size = get_pconfig(local_user(),'apw', 'font_size' );
	$font = get_pconfig(local_user(),'apw', 'font' );
	$iconpath = get_pconfig(local_user(),'apw', 'iconpath' );
	$bigshadow = get_pconfig(local_user(),'apw', 'bigshadow' );
	$smallshadow = get_pconfig(local_user(),'apw', 'smallshadow' );
	$shadowcolour = get_pconfig(local_user(),'apw', 'shadowcolour' );
	$radius = get_pconfig(local_user(),'apw', 'radius' );
	$line_height = get_pconfig(local_user(), 'apw', 'line_height' );
	$background = get_pconfig(local_user(), 'apw', 'background' );
	$bgattach = get_pconfig(local_user(), 'apw', 'bgattach' );
	$bgcolour = get_pconfig(local_user(), 'apw', 'background_colour' );
	$commentlinkcolour = get_pconfig(local_user(), 'apw', 'commentlinkcolour' );
	$sectionbackground = get_pconfig(local_user(), 'apw', 'sectionbackground' );
	$sectioncolour = get_pconfig(local_user(), 'apw', 'sectioncolour' );
	$item_colour = get_pconfig(local_user(), 'apw', 'colour' );
	$link_colour = get_pconfig(local_user(), 'apw', 'link_colour' );
	$width = get_pconfig(local_user(), 'apw', 'width' );
	$minwidth = get_pconfig(local_user(), 'apw', 'minwidth' );
	$gcrwidth = get_pconfig(local_user(), 'apw', 'gcrwidth' );
	$font_colour = get_pconfig(local_user(), 'apw', 'font_colour' );
	$scaling = get_pconfig(local_user(), 'apw', 'scaling' );
	$opacity = get_pconfig(local_user(), 'apw', 'opacity' );
	$symmetry = get_pconfig(local_user(), 'apw', 'symmetry' );	
	$aside = get_pconfig(local_user(), 'apw', 'aside' );	
	$nav = get_pconfig(local_user(), 'apw', 'nav' );	
	$itemfloat = get_pconfig(local_user(), 'apw', 'itemfloat' );	
	$sectionleft = get_pconfig(local_user(), 'apw', 'sectionleft' );	
	$sectionright = get_pconfig(local_user(), 'apw', 'sectionright' );	
	$sectionwidth = get_pconfig(local_user(), 'apw', 'sectionwidth' );	
	$asideleft = get_pconfig(local_user(), 'apw', 'asideleft' );	
	$asideright = get_pconfig(local_user(), 'apw', 'asideright' );	
	return apw_form($a, $schema, $font_size, $font, $iconpath, $bigshadow, $smallshadow, $shadowcolour, $radius, $line_height, $background, $bgattach, 
					$bgcolour, $commentlinkcolour, $sectionbackground, $sectioncolour, $item_colour, $link_colour, $width, $minwidth, $gcrwidth, $font_colour, $symmetry, 
					$aside, $scaling, $opacity, $nav, $itemfloat, $sectionleft, $sectionright, $sectionwidth, $asideleft, $asideright);
}

function theme_post(&$a) {

// If you're not a local user, you shouldn't be allowed
// to submit settings.  You shouldn't be able to get
// this far - but we return in case somebody
// discovers a vulnerability and does get this far.

	if(!local_user()) 
			return;


// Check if a value is set, and take the values
// from $_POST - that is, the values entered in the form.

	if (isset($_POST['apw-settings-submit'])) {
		set_pconfig(local_user(), 'apw', 'schema', $_POST['apw_schema']);

		set_pconfig(local_user(), 'apw', 'font_size', $_POST['apw_font_size']);

		set_pconfig(local_user(), 'apw', 'font', $_POST['apw_font']);

		set_pconfig(local_user(), 'apw', 'iconpath', $_POST['apw_iconpath']);

		set_pconfig(local_user(), 'apw', 'bigshadow', $_POST['apw_bigshadow']);
		
		set_pconfig(local_user(), 'apw', 'smallshadow', $_POST['apw_smallshadow']);
		
		set_pconfig(local_user(), 'apw', 'shadowcolour', $_POST['apw_shadowcolour']);

		set_pconfig(local_user(), 'apw', 'radius', $_POST['apw_radius']);
		
		set_pconfig(local_user(), 'apw', 'line_height', $_POST['apw_line_height']);

		set_pconfig(local_user(), 'apw', 'background', $_POST['apw_background']);	

		set_pconfig(local_user(), 'apw', 'bgattach', $_POST['apw_bgattach']);	

		set_pconfig(local_user(), 'apw', 'background_colour', $_POST['apw_background_colour']);	

		set_pconfig(local_user(), 'apw', 'commentlinkcolour', $_POST['apw_commentlinkcolour']);	

		set_pconfig(local_user(), 'apw', 'sectionbackground', $_POST['apw_sectionbackground']);	

		set_pconfig(local_user(), 'apw', 'sectioncolour', $_POST['apw_sectioncolour']);	

		set_pconfig(local_user(), 'apw', 'colour', $_POST['apw_item_colour']);	

		set_pconfig(local_user(), 'apw', 'link_colour', $_POST['apw_link_colour']);	
		
		set_pconfig(local_user(), 'apw', 'width', $_POST['apw_width']);	

		set_pconfig(local_user(), 'apw', 'minwidth', $_POST['apw_minwidth']);	

		set_pconfig(local_user(), 'apw', 'gcrwidth', $_POST['apw_gcrwidth']);	

		set_pconfig(local_user(), 'apw', 'font_colour', $_POST['apw_font_colour']);

		set_pconfig(local_user(), 'apw', 'scaling', $_POST['apw_scaling']);
		
		set_pconfig(local_user(), 'apw', 'opacity', $_POST['apw_opacity']);
		
		set_pconfig(local_user(), 'apw', 'symmetry', $_POST['apw_symmetry']);
		
		set_pconfig(local_user(), 'apw', 'aside', $_POST['apw_aside']);
		
		set_pconfig(local_user(), 'apw', 'nav', $_POST['apw_nav']);

		set_pconfig(local_user(), 'apw', 'sectionleft', $_POST['apw_sectionleft']);

		set_pconfig(local_user(), 'apw', 'itemfloat', $_POST['apw_itemfloat']);

		set_pconfig(local_user(), 'apw', 'sectionright', $_POST['apw_sectionright']);

		set_pconfig(local_user(), 'apw', 'sectionwidth', $_POST['apw_sectionwidth']);

		set_pconfig(local_user(), 'apw', 'asideleft', $_POST['apw_asideleft']);

		set_pconfig(local_user(), 'apw', 'asideright', $_POST['apw_asideright']);
	}
}

function apw_form(&$a, $schema, $font_size, $font, $iconpath, $bigshadow, $smallshadow, $shadowcolour, $radius, $line_height, $background, $bgattach, $bgcolour, $commentlinkcolour, 
				$sectionbackground, $sectioncolour, $item_colour, $link_colour, $width, $minwidth, $gcrwidth, $font_colour, $symmetry, $aside, $scaling, 
				$opacity, $nav, $itemfloat, $sectionleft, $sectionright, $sectionwidth, $asideleft, $asideright) {


// Some menu options require drop down lists, we populate them here.

//FIXME Symmetries is now "post previews".  
// We should change the code too.

	$bgattachs = array(
		'' => 'Scheme Default',
		'fixed' => 'Fixed',
		'scroll' => 'Scroll'
	);

	$symmetries = array(
		'' => 'Scheme Default',
		'off' => 'off',		
		'on' => 'on',);
	
// Options for the aside
	$asides = array(
		'' => 'Scheme Default',
		'off' => 'off',		
		'on' => 'on',
		'tagonly' => 'Display Tag Cloud Only'
	);
		
// Navigation bar colours.
	$navs = array (
		'' => 'Scheme Default',
		'red' => 'red',	
		'pink' => 'pink',
		'green' => 'green',
		'blue' => 'blue',
		'purple' => 'purple',
		'black' => 'black',
		'orange' => 'orange',
		'brown' => 'brown',
		'grey' => 'grey',
		'gold' => 'gold',
	);

// Now it gets more complicated.  First add --- as the
// default theme.  For some reason, a null value
// doesn't work. 
// Then, we load everything in the schema directory with
// a .php extension. 

// FIXME - check the schema is at least synatically 
// correct with /util/typo or something 

	$scheme_choices = array();
	$scheme_choices["---"] = t("Default");
	$files = glob('view/theme/apw/schema/*.php');
	
	if($files) {
		foreach($files as $file) {
			$f = basename($file, ".php");
			$scheme_name = $f;
			$scheme_choices[$f] = $scheme_name;
		}
	}


// As above, but for fonts.  We set sans-serif and 
// monospace as (relatively) websafe fallbacks, and
// look in font/ for .ttf files.

	$font_choices = array();
	$font_choices[""] = t("Schema Default");
	$font_choices['sans-serif'] = t("Sans-Serif");
	$font_choices['monospace'] = t("Monospace");
	// This is fugly...but unless anyone has better ideas...
	$ttfs = glob('view/theme/apw/font/*.[tT][tT][fF]');
	if($ttfs) {
		foreach($ttfs as $ttf) {
			$f = basename($ttf);
			$font_name = $f;
			$font_choices[$f] = $font_name;
		}
	}
	$woffs = glob('view/theme/apw/font/*.[wW][oO][fF][fF]');
	if($woffs) {
		foreach($woffs as $woff) {
			$f = basename($woff);
			$font_name = $f;
			$font_choices[$f] = $font_name;
		}

	}
		// Now, we've got a raw file name and that's it for config.php
		// But we'll have to strip this in style.css so we can set the 
		// font and font url to different things.  This isn't graceful.
		// Pull requests gracefully accepted.



// As above, but for icons.  An icon needs a 
// .info file.  This file may or may not contain
// any data - probably a good place to keep any
// licence data - but we only care that it exists.

	$iconpaths = array();
	$iconpaths[""] = t("Schema Default");
	$files = glob('view/theme/apw/img/*/*.info');
	if($files) {
		foreach($files as $file) {
			$f = basename($file, ".info");
			$icon_name = $f;
			$iconpaths[$f] = $icon_name;
		}
	}

// Check if expert mode is enabled.  If it is, you get more choices
// than if it isn't.

	if(feature_enabled(local_user(),'expert')) 
					$expert = 1;

	// There's a tonne of crap here we don't need - if we're not going to offer dropdown menus, we should probably clean up the arrays.
	
	    $t = get_markup_template('theme_settings.tpl');
	    $o .= replace_macros($t, array(
		'$submit' => t('Submit'),
		'$expert' => $expert,
		'$baseurl' => $a->get_baseurl(),
		'$title' => t("Theme settings"),
		'$schema' => array('apw_schema', t('Set scheme'), $schema, '', $scheme_choices),
		'$font_size' => array('apw_font_size', t('Set font-size for posts and comments'), $font_size, '', $font_sizes),
		'$font' => array('apw_font', t('Set font face'), $font, '', $font_choices),
		'$iconpath' => array('apw_iconpath', t('Set iconset'), $iconpath, '', $iconpaths),
		'$bigshadow' => array('apw_bigshadow', t('Set big shadow size, default 15px 15px 15px'), $bigshadow, '', $bigshadows),
		'$smallshadow' => array('apw_smallshadow', t('Set small shadow size, default 5px 5px 5px'), $smallshadow, '', $smallshadows),
		'$shadowcolour' => array('apw_shadowcolour', t('Set shadow colour, default #000'), $shadowcolour, '', $shadowcolours),
		'$radius' => array('apw_radius', t('Set radius size, default 5px'), $radius, '', $radiuses),
		'$line_height' => array('apw_line_height', t('Set line-height for posts and comments'), $line_height, '', $line_heights),
		'$background' => array('apw_background', t('Set background image'), $background, '', $backgrounds),	
		'$bgattach' => array('apw_bgattach', t('Set background attachment'), $bgattach, '', $bgattachs),
		'$bgcolour' => array('apw_background_colour', t('Set background colour'), $bgcolour, '', $bgcolours),	
		'$commentlinkcolour' => array('apw_commentlinkcolour', t('Set comment link colour'), $commentlinkcolour, '', $commentlinkcolours),	
		'$sectionbackground' => array('apw_sectionbackground', t('Set section background image'), $sectionbackground, '', $sectionbackgrounds),	
		'$sectioncolour' => array('apw_sectioncolour', t('Set section background colour'), $sectioncolour, '', $sectioncolour),	
		'$item_colour' => array('apw_item_colour', t('Set colour of items - use hex'), $item_colour, '', $item_colours),
		'$link_colour' => array('apw_link_colour', t('Set colour of links - use hex'), $link_colour, '', $item_colours),
		'$width' => array('apw_width', t('Set max-width for items.  Default 400px'), $width, '', $widths),
		'$minwidth' => array('apw_minwidth', t('Set min-width for items.  Default 240px'), $minwidth, '', $minwidths),
		'$gcrwidth' => array('apw_gcrwidth', t('Set the generic content wrapper width.  Default 48%'), $gcrwidth, '', $gcrwidths),
		'$font_colour' => array('apw_font_colour', t('Set colour of fonts - use hex'), $font_colour, '', $font_colours),
		'$scaling' => array('apw_scaling', t('Set background-size element'), $scaling, '', $scalings),
		'$opacity' => array('apw_opacity', t('Item opacity'), $opacity, '', $opacities),
		'$symmetry' => array('apw_symmetry', t('Display post previews only'), $symmetry, '', $symmetries),
		'$aside' => array('apw_aside', t('Display side bar on channel page'), $aside, '', $asides),
		'$nav' => array('apw_nav', t('Colour of the navigation bar'), $nav, '', $navs),
		'$itemfloat' => array('apw_itemfloat', t('Item float'), $itemfloat, '', $itemfloat),
		'$sectionleft' => array('apw_sectionleft', t('Left offset of the section element'), $sectionleft, '', $sectionlefts),
		'$sectionright' => array('apw_sectionright', t('Right offset of the section element'), $sectionright, '', $sectionrights),
		'$sectionwidth' => array('apw_sectionwidth', t('Section width'), $sectionwidth, '', $sectionwidth),
		'$asideleft' => array('apw_asideleft', t('Left offset of the aside'), $asideleft, '', $asidelefts),
		'$asideright' => array('apw_asideright', t('Right offset of the aside element'), $asideright, '', $asiderights),
		
	 ));
	 


	return $o;
}

