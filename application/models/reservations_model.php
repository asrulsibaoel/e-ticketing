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
}