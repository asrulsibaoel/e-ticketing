<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('Flight_Schedules_Model');
		$this->load->model('reservations_model');
		$this->load->model('passenger_model');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = [
			'nama' => "Asrul"
		];
		$this->template->set('title', 'Reservation');
		$this->template->load('reservations/index' , $data);
    }

    public function findDepature() {

    }

    public function findTicketDeparture()
    {
        header("Access-Control-Allow-Origin: *");
        $query = [];

        if (!empty($_GET['depature_from']) && !empty($_GET['depature_date'])) {
            $query['depature_from'] = $_GET['depature_from'];
            $query['depature_date'] = $_GET['depature_date'];
        }
        $data['data'] = $this->Flight_Schedules_Model->findAll($query);
        $this->template->set('title', 'Reservation');
        $this->template->load('reservations/find_ticket_departure', $data);
    }

    public function findTicketArrival()
    {
        header("Access-Control-Allow-Origin: *");

        if (!empty($_POST)) {
            //do something
            redirect("reservation/book");
        }
        $data = [];
        $this->template->set('title', 'Reservation');
        $this->template->load('reservations/find_ticket_arrival', $data);
    }

    public function passengerRegistration()
    {
        header("Access-Control-Allow-Origin: *");

        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'phone_number' => $this->input->post('phone_number'),
				'email_address' => $this->input->post('email_address'),
				'address_lines' => $this->input->post('address_lines'),
				'city' => $this->input->post('city'),
				'province' => $this->input->post('province'),
				'country' => "indonesia",
				'national_id' => $this->input->post('national_id'),
				'reservation_id' => 1,
            );
            
            $reservation = $this->passenger_model->add_passenger($params);
            if ($reservation) {
                redirect('/');
            } else {
                echo "Error";
            }
            
        }
        $data = [];
        $this->template->set('title', 'Reservation');
        $this->template->load('reservations/form_identity', $data);
    }
    
    public function book()
    {
        header("Access-Control-Allow-Origin: *");
        $data = [];
        $this->template->set('title', 'Reservation');
        $this->template->load('reservations/register', $data);
    }

    public function findCustomerReservationsHistory() {
        header("Access-Control-Allow-Origin: *");
        $data = [];
        if (!empty($_GET['national_id'])) {
            $data['data'] = $this->reservations_model->findByNationalId($_GET['national_id']);
        }
        // var_dump($data);
        $this->template->set('title', 'Reservation');
        $this->template->load('reservations/find_customer_reservation', $data);
        
    }
}
