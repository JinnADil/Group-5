<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crudmodel extends CI_Model {



    function createData() {
        $data = array(
            'last_name' => $this->input->post('lastname'),
            'first_name' => $this->input->post('firstname'),
            'middle_name' => $this->input->post('middlename'),
            'house_no' => $this->input->post('houseno'),
            'street' => $this->input->post('street'),
            'barangay_district' => $this->input->post('barangaydistrict'),
            'muni_city' => $this->input->post('city'),
        );
        $this->db->INSERT('user_info',$data);
        $course = array(
            'course_id_first'=>$this->input->post('firstchoice'),
            'course_id_second'=>$this->input->post('secondchoice'),
        );
        $this->db->INSERT('user_courses',$course);
    }
}