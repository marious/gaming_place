<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
	/**
	 * Get all products
	 */
	public function get_productS() 
	{
		
		$query = $this->db->get('products');
		$products = $query->result();
		
		return $products;
		
	}
	
	
	/**
	 * Get single product details 
	 */
	public function get_product_details($id) 
	{
		
		$query = $this->db->get_where('products', array('id' => $id));
		
		$product = $query->row();
		
		if ( $product ) {
			return $product;
		} 
		
	}
	
	
	/**
	 * get categories
	 */
	
	public function get_categories() 
	{
		$query = $this->db->select('*');
		$query = $this->db->from('categories');
		$query = $this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		return $query->result();
	}
	
	
	/**
	 * Get popular products
	 */
	public function get_popular() 
	{
		$this->db->select('p.*, COUNT(o.product_id) AS total');
		$this->db->from('orders as o');
		$this->db->join('products as p', 'o.product_id = p.id', 'INNER');
		$this->db->group_by('o.product_id');
		$this->db->order_by('total', 'DESC');
		$query = $this->db->get();
		
		return $query->result();
	}
	
	
}