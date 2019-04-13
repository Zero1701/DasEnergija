<?php
if(!isset($_SESSION)) {
     session_start();
}
include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
$putanjaPregled = $_SESSION['SITE_URL'] . '/User/ProjectEdit/';
$putanjaDoNovog = $_SESSION['SITE_URL'] . '/User/ProjectNew/';
class projectUserTable {
	
	
public function displayTable($UserId){

	$this->UserId = $UserId;

	
	$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser where c.idUser = " . $UserId;
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
	
	public function searchTable($UserId,$search){
	
		$this->UserId = $UserId;
	$searchQ = "a.Location like '%" . $search . "%'" .
			" or a.ProjectName like '%" . $search . "%' and c.idUser = " . $UserId .
			" or a.NameNumOfOwner like '%" . $search . "%' and c.idUser = " . $UserId .
			" or a.ZipCode like '%" . $search . "%' and c.idUser = " . $UserId .
			" or a.CadPlotNum like '%" . $search . "%' and c.idUser = " . $UserId .
			" or a.RoofSize like '%" . $search . "%' and c.idUser = " . $UserId;
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c " .
		"on b.User_idUser=c.idUser where c.idUser = " . $UserId . " and " . $searchQ;  
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

	private $UserId = null;
	private $numResults = null;
	private $result = null;
	
	public function getResult()
	{
		return $this->result;
	}


}