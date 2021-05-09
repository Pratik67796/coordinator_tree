<?php
    class Api extends CI_Model
    {
        public function insert_api($data)
        {
           return $this->db->insert('api', $data); //insert into Tablename
        }
        // public function select()
        // {
        //     return $about_data = $this->db->get('about')->result_array();    //select * from Tablename
        // }
        // public function deleteslider($id)
        // {
        //     $this->db->where('id',$id); //delete from Tablename where id=?
        //     $this->db->delete('slider');
        // }
        // public function edituser($id)
        // {
        //     $this->db->where('id',$id);
        //     return $user = $this->db->get('Slider')->row_array(); // select * from Tablename where id = ?
        // }
        // public function updateslider($id,$data)
        // {
        //     $this->db->where('id',$id);
        //     return  $this->db->update('Slider',$data); //update Tablename SET  name=? ,number=? where id =? 
        // }
       
    }
?>