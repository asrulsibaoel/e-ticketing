<?php
 
class reservations extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('reservations_model');
    } 

    /*
     * Listing of reservations
     */
    function index()
    {
        try{
        $data['reservations'] = $this->reservations_model->get_all_reservations();
        
        $this->template->load('reservations/index' , $data);
        }
        catch (customException $e) {
            echo $e->errorMessage('Your reservations data cannot be displayed.');
        }
    }

    /*
     * Adding a new reservations
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'flight_schedule_id' => $this->input->post('flight_schedule_id'),
				'passenger_id' => $this->input->post('passenger_id'),
				'reservations_status_code' => $this->input->post('reservations_status_code'),
				'ticket_type_code' => $this->input->post('ticket_type_code'),
				'travel_class_code' => $this->input->post('travel_class_code'),
				'reservations_date' => $this->input->post('reservations_date'),
            );
            
            $reservations_id = $this->reservations_model->add_reservations($params);
            redirect('reservations/index');
        }
        else
        {
			$this->load->model('Flight_schedule_model');
			$data['all_flight_schedules'] = $this->Flight_schedule_model->get_all_flight_schedules();

			$this->load->model('Passenger_model');
			$data['all_passengers'] = $this->Passenger_model->get_all_passengers();
            
            $this->template->load('reservations/add' , $data);
        }
    }  

    /*
     * Editing a reservations
     */
    function edit($id)
    {   
        // check if the reservations exists before trying to edit it
        $data['reservations'] = $this->reservations_model->get_reservations($id);
        
        if(isset($data['reservations']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'flight_schedule_id' => $this->input->post('flight_schedule_id'),
					'passenger_id' => $this->input->post('passenger_id'),
					'reservations_status_code' => $this->input->post('reservations_status_code'),
					'ticket_type_code' => $this->input->post('ticket_type_code'),
					'travel_class_code' => $this->input->post('travel_class_code'),
					'reservations_date' => $this->input->post('reservations_date'),
                );

                $this->reservations_model->update_reservations($id,$params);            
                redirect('reservations/index');
            }
            else
            {
				$this->load->model('Flight_schedule_model');
				$data['all_flight_schedules'] = $this->Flight_schedule_model->get_all_flight_schedules();

				$this->load->model('Passenger_model');
				$data['all_passengers'] = $this->Passenger_model->get_all_passengers();

                $this->template->load('reservations/edit' , $data);
            }
        }
        else
            show_error('The reservations you are trying to edit does not exist.');
    } 

    /*
     * Deleting reservations
     */
    function remove($id)
    {
        $reservations = $this->reservations_model->get_reservations($id);

        // check if the reservations exists before trying to delete it
        if(isset($reservations['id']))
        {
            $this->reservations_model->delete_reservations($id);
            redirect('reservations/index');
        }
        else
            show_error('The reservations you are trying to delete does not exist.');
    }
    
}