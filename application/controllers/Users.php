<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }


    public function index()

    {


      // Tüm sonuçları getirmek için kullanılacak metot..
         $rows = $this->db->get('users')->result();
      // Tek sonuç getirmek için kullanılacak metot..
      // $rows = $this->db->get('users')->row();


         $viewData = array('rows' => $rows);


        $this->load->view('panel/index', $viewData);

    }
        // verileri bir şarta göre sıralatıyoruz..
        public function where(){
          $rows = $this
              ->db
              ->where('RecorderId <', 4)
              ->get('users')
              ->result();


        }

        // modeli çağırıyoruz...

    public function delete(){
          $this->load->model('users_model');
          if(isset($_REQUEST['deleteid']) && $_REQUEST['deleteid']!='' && $_REQUEST['deleteid']!=0)
            {

                $this->user_model->userDelete();
                redirect(base_url().'panel/users_view');

            }
        }




    }





