<?php
    class Alumnom extends CI_Model{
        public function get_alumno(){
            $query = $this->db->get('alumno',10); //Devuelve sólo los primeros 10 registros
            return $query->result();
        }

        public function getalumno($id = null){
            $query = $this->db->get_where("alumno",array("id"=>$id));
            return $query->row_array();
        }
        
        public function eliminar($id = null){
         $this->db->where("id",$id);
         $this->db->delete("alumno");
        }

        public function set_news(){
            $this->load->helper("url");

            $data = array('nombre'=>$this->input->post("nombre"),
            'matricula'=>$this->input->post("matricula"),
            'apellidos'=>$this->input->post("apellidos"));

            return $this->db->insert("alumno",$data);
        }

        public function actualizar($id = null){
            
            $data = array('nombre'=>$this->input->post("nombre"),
            'matricula'=>$this->input->post("matricula"),
            'apellidos'=>$this->input->post("apellidos"));

            $this->db->where("id",$this->input->post("id"));
            return $this->db->update("alumno",$data);
        }
    }
?>