<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{


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
    public function where()
    {
        $rows = $this
            ->db
            ->where('RecorderId <', 4)
            ->get('users')
            ->result();


    }




    public function insertpage(){


        $this->load->view("islem");

    }

    public function insert(){

        $isim = $this->input->post("isim");
        $soyisim = $this->input->post("soyisim");
        $telefon = $this->input->post("telefon");

        $data = array(

            "isim" => $isim,
            "soyisim" => $soyisim,
            "telefon" => $telefon

        );

        $insert =  $this->db->insert("users", $data);

        if($insert){
            redirect("welcome/index");
        }else{
            echo "hata oluştu";
        }


    }

    public function updatepage($id){

        $row = $this->db->where("id",$id)->get("users")->row();

        $viewData = new stdClass;
        $viewData->row = $row;

        $this->load->view("user_update", $viewData);

    }

    public function update($id){

        $isim = $this->input->post("isim");
        $soyisim = $this->input->post("soyisim");
        $telefon = $this->input->post("telefon");

        $data = array(

            "isim" => $isim,
            "soyisim" => $soyisim,
            "telefon" => $telefon

        );


        $update = $this->db->where("id",$id)->update("users",$data);

        if($update){
            redirect("welcome/index");
        }else{
            echo "hata oluştu";
        }

    }

    public function delete($id){
        $delete = $this->db->where("id",$id)->delete("users");

        if($delete){
            redirect("users/index");
        }else{
            echo "hata oluştu";
        }


    }

    public function viewpage($id){


        $row = $this->db->where("id",$id)->get("users")->row();

        $viewData = new stdClass;
        $viewData->row = $row;

        $this->load->view("user_view", $viewData);

    }

}





