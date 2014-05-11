<?php

namespace RichJenks\Teepee;

return array(

	/*
	|--------------------------------------------------------------------------
	| Filesize Precision
	|--------------------------------------------------------------------------
	| 
	| The number of decimal places shown for a filesize
	| 
	*/

	'filesize_precision' => 2,

	/*
	|--------------------------------------------------------------------------
	| Root Label
	|--------------------------------------------------------------------------
	| 
	| The name given to the parent link which points to webroot
	| 
	*/

	'root_label' => 'Home',

	/*
	|--------------------------------------------------------------------------
	| Date Format
	|--------------------------------------------------------------------------
	|
	| The format for modified dates
	| Accepts a valid value for the $format param of `date()`
	| The Helper function `fade` makes the given string faded and in smallcaps
	|
	*/

	'date_format' => Helper::fade('D').' Y-m-d'.Helper::fade(' H:i'),

	/*
	|--------------------------------------------------------------------------
	| Show Footer
	|--------------------------------------------------------------------------
	| 
	| Defines whether the footer will be shown.
	| Set to false to hide the footer
	| Set to true to show the footer and check Teepee's version
	| 
	*/

	'show_footer' => true,

	/*
	|--------------------------------------------------------------------------
	| Custom Links
	|--------------------------------------------------------------------------
	| 
	| Custom Links are shown below the parent link and above folders
	| You can specify a name, a URI and where they should be shown
	|
	| Format:
	|
	| array['custom_links']
	|     [0]
	|         ['name'] string The text that will appear as the link
	|         ['uri']  string The URI the link will point to
	|         ['show'] array  (Optional) Requests for which the link will show
	|         ['new']  bool   (Optional) Whether link will open in a new tab
	| 
	| The `show` param also accepts an asterisk, meaning "everywhere"
	| If `show` is not specified, it will assume "everywhere"
	| If `new` is not specified, it will assume `false`
	| 
	| Example:
	| 
	| <code>
	| 'custom_links' => array(
	|     array(
	|         'name' => 'PHPMyAdmin',
	|         'uri'  => 'http://localhost/phpmyadmin',
	|         'show' => array('/'),
	|         'new'  => true,
	|     ),
	| );
	| </code>
	| 
	| The code above will show a link to PHPMyAdmin when browsing the webroot
	| which will open in a new tab
	| 
	| Use `'custom_links' => array(),` for no links
	| 
	*/

	'custom_links' => array(
		
		array(
			'name' => 'PHPMyAdmin',
			'uri'  => 'http://localhost/phpmyadmin',
			'show' => array('/'),
			'new'  => true,
		),
	
	),

);