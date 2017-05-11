<?php
class login_mod extends CI_Model
{
	public function login($username,$password)
	{
        $res=$this->db->query('SELECT username, password FROM login');
        foreach($res->result() as $row) 
        {
        	
        	if($row->username==$username)
        		if($row->password==$password)
        			return true;
        }
        return false;
	}

    public function check($username)
   {
   	  $res=$this->db->query('SELECT username, password,flogin FROM login WHERE username =\''.$username.'\'');
   	  return $res->row();

   }
    public function update_flag($username)
   {
<<<<<<< HEAD
   	  $res=$this->db->query('UPDATE login SET flogin=0  WHERE username =\''.$username.'\'');
=======
   	  $res=$this->db->query('UPDATE login SET flogin= '0' WHERE username =\''.$username.'\'');
>>>>>>> 913553ad4769bccc6d850b6c37e580f66f923c19
   	  
   }
}

<<<<<<< HEAD
?>
=======

?>
>>>>>>> 913553ad4769bccc6d850b6c37e580f66f923c19
