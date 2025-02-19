<?php
    class Persona extends CI_Model {
        public function agregar($persona) {
            $this->db->insert('personas', $persona);
        }
    }
?>