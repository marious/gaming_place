<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller
{
	
	public function index() 
	{
		// Get All Products
		$data['products'] = $this->Product_model->get_products();
		
		
		$data['main_content'] = 'product/products';
		// Load View
		$this->load->view('_template/main', $data);
	}
	
	
	public function details($id) 
	{
		// Get Product Details 
		$product = $this->Product_model->get_product_details($id);
		
		if ( $product ) {
			
			$data['product'] = $product;
			$data['main_content'] = 'product/product';
			// Load View
			$this->load->view('_template/main', $data);
			
			
		}else {
			$this->load->view('errors/html/error_404.php');
		
		}
		
		
		
	}
}