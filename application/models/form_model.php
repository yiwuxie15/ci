<?php
class form_model extends CI_Model{

	public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }

	function getInfo()
	{
		$query = $this->db->get('Student');
		return $query->result();
	}

	function generateRandomString($length = 6) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	function update()
	{	
		$newId = rand(1, 4);
		$newName = $this->generateRandomString();
		$newPass = $this->generateRandomString();
		$data = array(
               'id' => $newId,
               'user_name' => $newName,
               'password' => $newPass
            );

		$this->db->where('id', $newId);
		$this->db->update('Student', $data); 
	}
}
?>