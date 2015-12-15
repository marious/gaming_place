<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cart extends CI_Controller
{

	public $paypal_data = '';

	public $tax;

	public $shipping;

	public $total;

	public $grand_total;


	/**
	 * Cart index
	 */

	public function index()
	{

		// load view
		$data['main_content'] = 'cart/cart';
		$this->load->view('_template/main', $data);
	}

	/**
	 * Add to cart
	 */

	public function add()
	{
		// Item data
		$data = array(
				'id' => $this->input->post('item_number'),
				'qty' => $this->input->post('qty'),
				'name' => $this->input->post('title'),
				'price' => $this->input->post('price'),
		);

		// Insert Into cart
		$this->cart->insert($data);

		if ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) ) {
			echo json_encode($data);
			return;
		}

		redirect('products');
	}

	/**
	 * Update Cart
	 */
	public function update()
	{
// 		$data = array();

// 		$i = 1;
// 		foreach ($this->cart->contents() as $item) {

// 			$data[] = array(
// 					'rowid' => $this->input->post($i.'[rowid]'),
// 					'qty' => $this->input->post($i.'[qty]')

// 			);

// 			$i++;
// 		}

		$data = $_POST;

		$this->cart->update($data);

		if ( isset($_SERVER['HTTP_X_REQUESTED_WITH']) ) {
			echo json_encode($data);
			return;
		}

		redirect('products');
	}

}





