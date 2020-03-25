<?php
    class Alumnoc extends CI_Controller{

        public function _construct(){
            parent::_construct();
        }
        public function index(){
            $data["alumnos"] = $this->alumnom->get_alumno(); //Saca la información del modelo
            $this->load->view("alumno/index",$data); //Se lo envía a la vista
        }

        //muestra un elemento en específico
        public function view($id = null){
            if ($id != null) {
                $data["dato"] = $this->alumnom->getalumno($id);
                $this->load->view("alumno/view",$data);
            }
        }

        //método para eliminar
        public function delete($id = null){
            if($id != null){
                $this->load->helper("url");
                $this->alumnom->eliminar($id);
                redirect("/alumnoc");  
            }
        }

        //método para actualizar
        public function update($id = null){
            $this->load->library("form_validation");
            $this->load->helper("form");

            $data["titulo"] = "Update alumno";

            $this->form_validation->set_rules('nombre','nombre','required');
            $this->form_validation->set_rules('matricula','matricula','required');
            $this->form_validation->set_rules('apellidos','apellidos','required');

            if($id != null && $this->form_validation->run() == FALSE){
                $data["dato"] = $this->alumnom->getalumno($id);
                $this->load->view("alumno/update",$data);
            }
            else{
                $this->alumnom->actualizar($id);
                redirect("/alumnoc");
            }
        }

        public function add(){
            $this->load->library("form_validation");
            $this->load->helper("form");
            $data["titulo"] = "Add alumno";

            $this->form_validation->set_rules('nombre','nombre','required');
            $this->form_validation->set_rules('matricula','matricula','required');
            $this->form_validation->set_rules('apellidos','apellidos','required');

            if($this->form_validation->run() == FALSE){
                $this->load->view("alumno/add",$data);
            }
            else{
                $this->alumnom->set_news();
                redirect("/alumnoc");
            }
        }
    }
?>