<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

    public function userDelete(){

        $this->db->delete('users', array('UserId' => $id));

    }

}
