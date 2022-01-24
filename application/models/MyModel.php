<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model{

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

	public function DisplayData(){
		$data = array();
        $query = $this->db->get('curl');
		
        $data = $query->result();
        return $data;
        // foreach ($query->result() as $row)
        // {
        //     echo $row->title;
        // }
     }

     public function update($id){

		$this->db->where("id",$id);
		$query = $this->db->get('curl');
		$data1= $query->result();
		// print_r($data1);
		// die;
		$data = array(
			
			'fullName' => $this->input->post('fullName'),
			'gmailAddress' => $this->input->post('gmailAddress'),
			'phoneNumber' => $this->input->post('phoneNumber'),
			'address' => $this->input->post('address'),
			
		);
		$this->db->where('id', $id);
		$this->db->update('curl', $data);
		return $data1;

     }
	 

     public function AddData($data){
        //    var_dump($data);
        $this->db->insert('curl',$data);

     }

	 public function delete($id){
		$this -> db -> where('id', $id);
		$this -> db -> delete('curl');
	 }

	


}
