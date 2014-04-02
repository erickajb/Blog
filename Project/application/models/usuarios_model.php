<?php
class login_model extends CI_Model{
     
        public function __construct()
        {
        $this->load->library('session');
        $this->load->database();
        }
       
       
        public function getLogin($username,$password)
        {
        //comprobamos que el nombre de usuario y contrase�a coinciden
        $data = array(
        'username' => $username,
        'password' => $password
        );
       
        $query = $this->db->get_where('usuarios',$data);
        return $query->result_array();
        }
       
       
        public function isLogged()
        {
        //Comprobamos si existe la variable de sesi�n username. En caso de no existir, le impediremos el paso a la p�gina para usuarios registrados
       
            if(isset($this->session->userdata['username']))
            {
            return TRUE;
            }
            else
            {
            return FALSE;
            }
           
        }      
       
        public function close()
        {
        //cerrar sesi�n
        return $this->session->sess_destroy();
        }
    }
?>