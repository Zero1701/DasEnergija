<?php
if(!isset($_SESSION)) {
	session_start();
}
include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
$putanjaDoNovogKorisnika  = $_SESSION['SITE_URL'] . '/Admin/NewAccount/';

class userDetail {

	public function displayUser(){

	$q = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK`";

		$query = @mysql_query($q);
		if($query)
		{
			$this->numResults = mysql_num_rows($query);

			for($i = 0; $i < $this->numResults; $i++)
			{
				$r = mysql_fetch_array($query);
				$key =  array_keys($r);
				for($x = 0; $x < count($key); $x++)
				{
					// Sanitizes keys so only alphavalues are allowed
					if(!is_int($key[$x]))
					{
						if(mysql_num_rows($query) > 1)
							$this->result[$i][$key[$x]] = $r[$key[$x]];
						else if(mysql_num_rows($query) < 1)
							$this->result = null;
						else
							$this->result[$i][$key[$x]] = $r[$key[$x]];
					}
				}
			}
			return true;
		}
		//print_r($this->getResult());
	}
	
		public function displayUserById($userId){
	
			$q = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK` where a.idUser = " . $userId;
	
			$query = @mysql_query($q);
			if($query)
			{
				$this->numResults = mysql_num_rows($query);
	
				for($i = 0; $i < $this->numResults; $i++)
				{
					$r = mysql_fetch_array($query);
					$key =  array_keys($r);
					for($x = 0; $x < count($key); $x++)
					{
						// Sanitizes keys so only alphavalues are allowed
						if(!is_int($key[$x]))
						{
							if(mysql_num_rows($query) > 1)
								$this->result[$i][$key[$x]] = $r[$key[$x]];
							else if(mysql_num_rows($query) < 1)
								$this->result = null;
							else
								$this->result[$i][$key[$x]] = $r[$key[$x]];
						}
					}
				}
				return true;
			}
			//print_r($this->getResult());
		}

	public function user(){
	
	$q = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK` where b.Administrator = 0";
	
		$query = @mysql_query($q);
		if($query)
		{
			$this->numResults = mysql_num_rows($query);
	
			for($i = 0; $i < $this->numResults; $i++)
			{
			$r = mysql_fetch_array($query);
			$key =  array_keys($r);
			for($x = 0; $x < count($key); $x++)
			{
			// Sanitizes keys so only alphavalues are allowed
				if(!is_int($key[$x]))
				{
				if(mysql_num_rows($query) > 1)
					$this->result[$i][$key[$x]] = $r[$key[$x]];
					else if(mysql_num_rows($query) < 1)
					$this->result = null;
					else
					$this->result[$i][$key[$x]] = $r[$key[$x]];
				}
				}
				}
				return true;
				}
				//print_r($this->getResult());
	}
	
	public function administrator(){
		
		$q = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK` where b.Administrator = 1";

		$query = @mysql_query($q);
		if($query)
		{
			$this->numResults = mysql_num_rows($query);
	
			for($i = 0; $i < $this->numResults; $i++)
			{
			$r = mysql_fetch_array($query);
			$key =  array_keys($r);
			for($x = 0; $x < count($key); $x++)
			{
			// Sanitizes keys so only alphavalues are allowed
				if(!is_int($key[$x]))
				{
				if(mysql_num_rows($query) > 1)
					$this->result[$i][$key[$x]] = $r[$key[$x]];
					else if(mysql_num_rows($query) < 1)
					$this->result = null;
					else
					$this->result[$i][$key[$x]] = $r[$key[$x]];
				}
				}
			}
			return true;
		}
		//print_r($this->getResult());
	}

	public function deleteUser($userId){
	
		$query = "SELECT * FROM `user_to_project1` where User_idUser = " . $userId;
		$result = mysql_query($query);
		$brojProjekata = mysql_num_rows($result);
		if($brojProjekata != 0){
			return false;
		}
		else
		{
		$q1 = "delete FROM `role` WHERE `idUser_FK` = " . $userId;
		$q2 = "delete FROM `user` WHERE `idUser` = " . $userId;
		
		mysql_query($q1);
		mysql_query($q2);
		
		return true;
		}
	}

	private $ProjectId = null;
	private $numResults = null;
	private $result = null;


	public function searchUserTable($search){
	
		$this->UserId = $UserId;
		$searchQ = " a.Name like '%" . $search . "%'" .
				" or a.LastName like '%" . $search . "%' " .
				" or a.UserName like '%" . $search . "%' ";
				
		$q = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK` where " . $searchQ;
		
		$query = @mysql_query($q);
		if($query)
		{
			$this->numResults = mysql_num_rows($query);
	
			for($i = 0; $i < $this->numResults; $i++)
			{
			$r = mysql_fetch_array($query);
			$key =  array_keys($r);
			for($x = 0; $x < count($key); $x++)
			{
			// Sanitizes keys so only alphavalues are allowed
				if(!is_int($key[$x]))
				{
				if(mysql_num_rows($query) > 1)
					$this->result[$i][$key[$x]] = $r[$key[$x]];
					else if(mysql_num_rows($query) < 1)
					$this->result = null;
					else
					$this->result[$i][$key[$x]] = $r[$key[$x]];
				}
				}
				}
				return true;
			}
			
	}

	public function obradiUser($userId,$approved){
		if($approved == "admin") $approved = 1;
		if($approved == "korisnik") $approved = 0;
		$query = "SELECT * FROM `user` a inner join `role` b on a.`idUser`=b.`idUser_FK` where b.Administrator = 1";
		$result = mysql_query($query);
		$brojAdmina = mysql_num_rows($result);
		if($brojAdmina <= 1 && $approved == 0){
			return false;
		}
		else
		{
		$q1 = "update `role` set `Administrator` = " . $approved . " , DOC = NOW() where `idUser_FK` = " . $userId;
	
		mysql_query($q1);
	
		return true;
		}
	}



	public function getResult()
	{
		return $this->result;
	}


}