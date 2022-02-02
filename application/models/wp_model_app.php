<?php

class wp_model_app extends CI_Model {

    public function __construct() {
        $this->load->database('default');
        $this->load->library('session');
        $this->table = 'user_info'; 
        // Call the Model constructor
        parent::__construct();
    }

    public function insert($userData){
        if($this->db->insert('user_info',$userData)){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
        // Return fetched data 
        return $result; 
    } 

    public function update_data($data, $id)
    {
        $this->db->where("id",$id);
        $this->db->update("user_info", $data);
    }

    public function send_request($data, $id)
    {
        $this->db->where("id",$id);
        $this->db->insert('history_info',$data);
    }   
    public function update_request($data, $id)
    {
        $this->db->where("id",$id);
        $this->db->update('history_info',$data);
    } 
    
    public function history($id){ 
        $this->db->where("user_info_id",$id);
        $query = $this->db->get("history_info");
        //Select * FROM user_info where id = '$id'     
        return $query->result();
        // Return fetched data
    } 

    public function display_data()
    {
        $query = $this->db->get("user_info");
        //select * from user_info
        return $query;
    }

}

?>