<?php
class Template {

    private $CI;
    //template Data
    var $template_data = array();

    public function __construct() 
    {
        $this->CI =& get_instance();
    }

    public function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }

    public function setContentBody($content) {
        $this->set('contents', $content);
    }

    function load($view = '' , $view_data = array(), $template = 'main', $return = FALSE)
    {
        $this->setContentBody($this->CI->load->view($view, $view_data, TRUE));
        $this->CI->load->view('layouts/'.$template, $this->template_data);
    }
                               
}
?>