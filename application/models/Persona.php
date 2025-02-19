<?php
    class Persona extends CI_Model {
        public function agregar($persona) {
            $this->db->insert('personas', $persona);
        }

        public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('personas');
            return $this->db->get()->result();
        }
    }
?>