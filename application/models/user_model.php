<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

    public function index()

    {


        // Tüm sonuçları getirmek için kullanılacak metot..
        $rows = $this->db->get("users")->result();
        // Tek sonuç getirmek için kullanılacak metot..
        // $rows = $this->db->get("users")->row();


        $viewData = array("rows" => $rows);


        $this->load->view("liste", $viewData);

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
            redirect("welcome/index");
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

    //bu kısım ajax-modal crud işlemleri için kullanılan kodlar
	
	//bu fonksiyon gelen id degerine göre verileri modelden alıp modal da  gösterecek 
	 public function ajax_modal_view_id($id)
   {
       $this->db->from('users');
       $this->db->join('tasks','tasks.TaskId=users.TaskId','left');
       $this->db->join('cities','cities.CityId=users.CityId','left');
       $this->db->where('id',$id);
       $query=$this->db->get();
       return $query->row();
   }
	
	//ajax-modal sonu

}
