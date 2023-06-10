<?php
/*
Plugin Name: Tip Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/tip-calculator/
Description: Free tip calculator that helps people know how much to tip when receiving services from various businesses and workers. This tool also calculates how to split a bill and tip between a group of people.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_tip_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_tip_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/tip-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Tip Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_tip_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_tip_calculator', 'display_ci_tip_calculator' );