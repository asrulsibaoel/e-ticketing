<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Payment extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Payment_model');
    } 

    /*
     * Listing of payments
     */
    function index() {
       try {
        header("Access-Control-Allow-Origin: *");
	
        $data['payments'] = $this->Payment_model->get_all_payments();
        
        $this->template->set('title', 'Home');
        $this->template->load('payment/index' , $data);
       }
       catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
    }

    /*
     * Adding a new payment
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'payment_status_code' => $this->input->post('payment_status_code'),
				'reservation_id' => $this->input->post('reservation_id'),
				'payment_date' => $this->input->post('payment_date'),
				'payment_amount' => $this->input->post('payment_amount'),
            );
            
            $payment_id = $this->Payment_model->add_payment($params);
            redirect('payment/index');
        }
        else
        {
			$this->load->model('Reservation_model');
			$data['all_reservations'] = $this->Reservation_model->get_all_reservations();
            
            $this->load->view('layouts/main',$data);
        }
        $this->load->view('payment/add');
    }  

    /*
     * Editing a payment
     */
    function edit($id)
    {   
        // check if the payment exists before trying to edit it
        $data['payment'] = $this->Payment_model->get_payment($id);
        
        if(isset($data['payment']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'payment_status_code' => $this->input->post('payment_status_code'),
					'reservation_id' => $this->input->post('reservation_id'),
					'payment_date' => $this->input->post('payment_date'),
					'payment_amount' => $this->input->post('payment_amount'),
                );

                $this->Payment_model->update_payment($id,$params);            
                redirect('payment/index');
            }
            else
            {
				$this->load->model('Reservation_model');
				$data['all_reservations'] = $this->Reservation_model->get_all_reservations();

                $this->load->view('layouts/edit',$data);
            }
        }
        else
            show_error('The payment you are trying to edit does not exist.');
    } 

    /*
     * Deleting payment
     */
    function remove($id)
    {
        $payment = $this->Payment_model->get_payment($id);

        // check if the payment exists before trying to delete it
        if(isset($payment['id']))
        {
            $this->Payment_model->delete_payment($id);
            redirect('payment/index');
        }
        else
            show_error('The payment you are trying to delete does not exist.');
    }
    
}