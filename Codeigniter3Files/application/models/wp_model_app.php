<?php

class wp_model_app extends CI_Model {

    function insert_into_user($data){
        $this->db->insert("user_info",$data);
        $this->db->insert("temp_user_info",$data);
    }

    function checkPass($password, $username)
    {
        $query = $this->db->query("SELECT * FROM user_info WHERE sender_pass='$password' AND sender_user='$username'
        AND sender_status='1' ");
            //    $query->bindParam(':pass',$password);
            //    $query->bindParam(':user',$username);
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else{
            return false;
        }
    }

    function fetch_data()
    {
        $query = $this->db->get("user_info");
        //select * from user_info
        return $query;
    }

    function fetch_single_data($id)                 
    {
        $this->db->where("id",$id);
        $query = $this->db->get("user_info");
        //Select * FROM user_info where id = '$id'     
        return $query;
    }
    function update_data($data, $id)
    {
        $this->db->where("id",$id);
        $this->db->update("user_info", $data);
        $this->db->update("temp_user_info",$data);
    }
}

?>