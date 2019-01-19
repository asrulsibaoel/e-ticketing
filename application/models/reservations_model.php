<?php

class reservations_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get reservations by id
     */
    function get_reservations($id)
    {
        return $this->db->get_where('reservations',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all reservationss
     */
    function get_all_reservations()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('reservations')->result_array();
    }
        
    /*
     * function to add new reservations
     */
    function add_reservations($params)
    {
        $this->db->insert('reservations',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update reservations
     */
    function update_reservations($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('reservations',$params);
    }
    
    /*
     * function to delete reservations
     */
    function delete_reservations($id)
    {
        return $this->db->delete('reservations',array('id'=>$id));
    }

    public function findByNationalId($national_id) {
        $this->db->order_by('reservation_date', 'desc');
        $this->db->select(
            '
            reservations.id  as reservation_id,
            national_id,
            first_name,
            last_name,
            address_lines,
            city,
            province,
            country,
            reservation_date,
            depature.airport_name as depature_from,
            destination.airport_name as arrival_to,
            aircraft_name
            '
        );
        $this->db->where('national_id', $national_id);
        $this->db->join('reservations', 'reservations.passenger_id = passengers.id', "left");
        $this->db->join('flight_schedules', 'reservations.flight_schedule_id = flight_schedules.id', "left");
        $this->db->join('airports as depature', 'flight_schedules.airport_id = depature.id', "left");
        $this->db->join('airports as destination', 'flight_schedules.airport_destination_id = destination.id', "left");
        $this->db->join('aircrafts', 'flight_schedules.aircraft_id = aircrafts.id', "left");
        return $this->db->get('passengers')->result();
    }
    
}