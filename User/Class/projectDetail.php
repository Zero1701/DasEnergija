<?php
if(!isset($_SESSION)) {
     session_start();
}
include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
$putanjaPregled = $_SESSION['SITE_URL'] . '/User/ProjectEdit/';
$putanjaDoNovog = $_SESSION['SITE_URL'] . '/User/ProjectNew/';
class projectDetail {
	
	
public function displayTable($ProjectId){

	$this->ProjectId = $ProjectId;

	
	$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser " .
			"where a.idProject = " . $ProjectId; 
	
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
						$this->result[$key[$x]] = $r[$key[$x]];
				}
				}
				}
				return true;
				}
				//print_r($this->getResult());
	}
	

	private $ProjectId = null;
	private $numResults = null;
	private $result = null;
	
	
	
	public function displayAttachment($ProjectId){
		
		unset($this->result);
		
	$this->ProjectId = $ProjectId;
	
		$q = "SELECT * FROM `attachment1` WHERE `idProject_FK` = " . $ProjectId;
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
	
	
	
	public function getResult()
	{
		return $this->result;
	}


}