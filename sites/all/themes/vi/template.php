<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function vi_preprocess_html(&$variables) {
    // Add conditional stylesheets for IE
    //drupal_add_css('http://fonts.googleapis.com/css?family=Covered+By+Your+Grace',array('type' => 'external'));

    //complete Bootstrap Css (Without Icons)
    drupal_add_css('//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css',array('type' => 'external'));
    //Font Awesome
    drupal_add_css('//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css',array('type' => 'external'));
    //Complete javascript
    drupal_add_js('//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js', 'external');
      drupal_add_js(drupal_get_path('theme', 'vi') .'/js/main.js', 'file');
    //dropdown redirect for UK
    //drupal_add_js(drupal_get_path('theme','vi').'/js/dropdown-uk.js');
    //drupal_add_js(drupal_get_path('theme','vi').'/js/drop.js');
    drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', 'external');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/jquery.countdown.pack.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/jquery.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-transition.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-alert.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-modal.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-dropdown.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-scrollspy.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap//bootstrap-tab.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-tooltip.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-popover.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-button.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-collapse.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-carousel.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/bootstrap-typeahead.js', 'file');
    drupal_add_js(drupal_get_path('theme', 'vi') .'/js/bootstrap/application.js', 'file');
    // Google font
    //drupal_add_css('http://fonts.googleapis.com/css?family=Roboto',array('type' => 'external'));
}




function vi_menu_tree__menu_block__6(&$variables) {
 return '
 	<!--<div class="navbar navbar-inverse">
    	<div class="navbar-inner">
        	<div class="grid-12">-->

	          		<div class="nav-collapse collapse">
	            		<p class="navbar-text pull-right"></p>
	            		<ul class="nav">' . $variables['tree'] . '</ul>
	            	</div>

	      	<!--</div>
		</div>
	</div>-->
	';
}