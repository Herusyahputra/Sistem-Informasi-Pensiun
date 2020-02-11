<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_model 
{
    public function statistik (){        		
		return $this->db->get('statistik_pensiun');
    }    
}