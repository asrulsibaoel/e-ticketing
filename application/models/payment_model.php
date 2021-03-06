<?php
class Payment_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database(); 
    }
    
    /*
     * Get payment by id
     */
    function get_payment($id)
    {
        return $this->db->get_where('payments',array('id'=>$id))->row_array();
    }
        
    /*
     * Get all payments
     */
    function get_all_payments()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('payments')->result_array();
    }
        
    /*
     * function to add new payment
     */
    function add_payment($params)
    {
        $this->db->insert('payments',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update payment
     */
    function update_payment($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('payments',$params);
    }
    
    /*
     * function to delete payment
     */
    function delete_payment($id)
    {
        return $this->db->delete('payments',array('id'=>$id));
    }
}