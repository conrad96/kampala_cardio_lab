<?php 

class _appointments extends CI_Model{
    
    function save($data = array()){

        return $this->db->insert("appointments", array(
            "fullnames"=> $data['names'],
            "email"=> $data['email'],
            "mobile"=> $data['mobile'],
            "appointment_date"=> $data['appointment_date'],
            "notes"=> $data['notes']
        ));
    }
}