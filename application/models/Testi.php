<?php
    class Testi extends CI_Model
    {
        public function insert_testimonial($data)
        {
           return $this->db->insert('testimonial', $data); //insert into Tablename
        }
        public function select()
        {
            return $testimonial_data = $this->db->get('testimonial')->result_array();    //select * from Tablename
        }
        public function deletetesti($id)
        {
            $this->db->where('id',$id); //delete from Tablename where id=?
            $this->db->delete('testimonial');
        }
        public function edittesti($id)
        {
            $this->db->where('id',$id);
            return $user = $this->db->get('testimonial')->row_array(); // select * from Tablename where id = ?
        }
        public function update_testi($id,$data)
        {
            $this->db->where('id',$id);
            return  $this->db->update('testimonial',$data); //update Tablename SET  name=? ,number=? where id =? 
        }
       
    }
?>