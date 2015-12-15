<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Get Categories 
 * 
 */

function get_categories_h() 
{
	$CI = get_instance();
	$categories = $CI->Product_model->get_categories();
	return $categories;
}


/**
 * Get Popluar products
 */

function get_popular_h() 
{
	$CI = get_instance();
	$popular_products = $CI->Product_model->get_popular();
	return $popular_products;
}