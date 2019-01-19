<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('Flight_Schedules_Model');
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

        if (!empty($_POST)) {
            
            redirect("reservation/book");
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
}
