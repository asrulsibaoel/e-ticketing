<?php

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
       catch (customException $e) {
        echo $e->errorMessage('Your payment data cannot be displayed.');
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
				'reservation_id' => $this->input->post('reservation_id'),
				'payment_status_code' => $this->input->post('payment_status_code'),
				'payment_date' => date ('Y-m-d h:i:s'),
				'payment_amount' => $this->input->post('payment_amount'),
            );
            
            $payment_id = $this->Payment_model->add_payment($params);
            redirect('payment/index');
        }
        else
        {
			$this->load->model('reservations_model');
			$data['all_reservations'] = $this->reservations_model->get_all_reservations();
            // var_dump($data);
            $this->template->load('payment/add' , $data);
        }
        // $this->template->load('payment/add' , $data);
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
					'reservation_id' => $this->input->post('reservation_id'),
					'payment_status_code' => $this->input->post('payment_status_code'),
					'payment_date' => date ('Y-m-d h:i:s'),
					'payment_amount' => $this->input->post('payment_amount'),
                );

                $this->Payment_model->update_payment($id,$params);            
                redirect('payment/index');
            }
            else
            {
                $this->load->model('reservations_model');
                
				$data['all_reservations'] = $this->reservations_model->get_all_reservations();
                // var_dump($data);
                $this->template->load('payment/edit' , $data);
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