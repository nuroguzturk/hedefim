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


        $this->load->view("panel/index");

    }

    public function insert(){

            $UserTC = $this->input->post("UserTC");
            $UserName = $this->input->post("UserName");
            $UserSurname = $this->input->post("UserSurname");
            $Email = $this->input->post("Email");
            $Password = $this->input->post("Password");
            $Telephone = $this->input->post("Telephone");
            $Gender = $this->input->post("Gender");
            $CityId = $this->input->post("CityId");
            $DateofBirth = $this->input->post("DateofBirth");
            $TaskId = $this->input->post("TaskId");
            $RecorderId = $this->input->post("RecorderId");
            $DateofRecord = $this->input->post("DateofRecord");
            $IsAccept = $this->input->post("IsAccept");

        $data = array(
            'UserTC' => $UserTC,
            'UserName' => $UserName,
            'UserSurname' => $UserSurname,
            'Email' => $Email,
            'Password' => $Password,
            'Telephone' => $Telephone,
            'Gender' => $Gender,
            'CityId' => $CityId,
            'DateofBirth' => $DateofBirth,
            'TaskId' => $TaskId,
            'RecorderId' => $RecorderId,
            'DateofRecord' => $DateofRecord,
            'IsAccept' => $IsAccept
        );

        $insert =  $this->db->insert("users", $data);

        if($insert){
            redirect("users/index");
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
	
	//bu kısım ajax-modal crud işlemleri için kullanılan kodlar
	public function ajax_model_view($id)
    {
        $data=$this->user_model->ajax_modal_view_id($id);
        echo json_encode($data);
    }
	
	//ajax-modal sonu

}





