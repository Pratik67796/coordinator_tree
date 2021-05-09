<?php
    class Vegetable extends CI_Model
    {
        public function insert_vegetable($data)
        {
           return $this->db->insert('vegetable', $data); //insert into Tablename
        }
        public function select()
        {
            return $vegetable_data = $this->db->get('vegetable')->result_array();    //select * from Tablename
        }
        public function deleteslider($id)
        {
            $this->db->where('id',$id); //delete from Tablename where id=?
            $this->db->delete('vegetable');
        }
        public function edituser($id)
        {
            $this->db->where('id',$id);
            return $user = $this->db->get('vegetable')->row_array(); // select * from Tablename where id = ?
        }
        public function updatevegetable($id,$data)
        {
            $this->db->where('id',$id);
            return  $this->db->update('vegetable',$data); //update Tablename SET  name=? ,number=? where id =? 
        }
       
    }
?>