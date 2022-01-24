
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
        {
            $data = array();
            $this->load->model('MyModel');
            
            $data['userdata']= $this->MyModel->DisplayData();

            // var_dump($data);die;

            if(!empty($data)){
                $this->load->view('DisplayData', $data );
        
            } else {
        
                echo "Fail";
        
            }

        }

    public function insert()
    {
        $this->load->view('InsertData');
        // $data = array();
        if($this->input->post()!=null){
            $data = $this->input->post();
            // var_dump($data);
            $this->load->model('MyModel');
            $this->MyModel->AddData($data);

            // echo '<div class="container mt-4"><div class="alert alert-success">Data Inserted Successfully</div></div>';     
            
            header('Location: http://localhost/codeig/index.php/MyController'); 
             $this->session->set_flashdata('message', 'The Data Sucessfully added.');
             $this->session->keep_flashdata('message');
             echo $this->session->flashdata('message');

        }
    }

         public function update($id)
         {
            $this->load->model('MyModel');
            $id_data['databyid']=$this->MyModel->update($id);
            // var_dump($id_data);
            // die;

            $this->load->view('updateData',$id_data);
            if($this->input->post()!=null){
                header('Location: http://localhost/codeig/index.php/MyController'); 
            }

        
         }

       

        // $data = $this->input->post('add');
        
        // echo "Name = ".$data['fullName'];

        // var_dump($data);
        // $this->load->model('MyModel');
        // $this->MyModel->AddData($data);
    

    public function delete($id){
        $this->load->model('MyModel');
        $this->MyModel->delete($id);
        // echo '<div class="container mt-4"><div class="alert alert-success">Data delete Successfully</div></div>';
        header('Location: http://localhost/codeig/index.php/MyController'); 


    }
}
