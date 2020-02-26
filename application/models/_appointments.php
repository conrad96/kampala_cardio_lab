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

    function contact($data = array()){

        return $this->db->insert("contact", array(
            "names"=> $data['names'],
            "email"=> $data['email'],
            "contact"=> $data['contact'],
            "messages"=> $data['message']            
        ));
    }
}