<?php

class passenger_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get passenger by id
     */
    function get_passenger($id)
    {
        return $this->db->get_where('passengers',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all passengers
     */
    function get_all_passenger()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('passengers')->result_array();
    }
        
    /*
     * function to add new passenger
     */
    function add_passenger($params)
    {
        $this->db->insert('passengers',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update passenger
     */
    function update_passenger($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('passengers',$params);
    }
    
    /*
     * function to delete passenger
     */
    function delete_passenger($id)
    {
        return $this->db->delete('passengers',array('id'=>$id));
    }
    
}