<?php
if(!isset($_SESSION)) {
     session_start();
}
include_once $_SESSION['BASE_PATH']  . '/DBconnection/dbconnect.php';
$putanjaPregled = $_SESSION['SITE_URL'] . '/Admin/ProjectEdit/';
$putanjaDoNovog = $_SESSION['SITE_URL'] . '/Admin/ProjectNew/';
$putanjaDoIzvjestaja = $_SESSION['SITE_URL'] . '/Admin/Report/';
$putanjaDoIzvjestajaOSuradnicima = $_SESSION['SITE_URL'] . '/Admin/ReportAssociate/';
$putanjaDoIzvjestajaOUkupnomStanju = $_SESSION['SITE_URL'] . '/Admin/ReportEverything/';

class projectUserTable {
	
	
public function displayTable($UserId){

	$this->UserId = $UserId;

	
	$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK inner join role e on c.idUser=e.idUser_FK";
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
	
	public function displayTableReport($ProjectId){
	
		$this->UserId = $UserId;
	
	
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK inner join role e on c.idUser=e.idUser_FK where a.idProject in (" . $ProjectId . ")";
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
	
	public function displayTableByUser($UserId){
		
		unset($this->result);
		
		$this->UserId = $UserId;
	
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK inner join role e on c.idUser=e.idUser_FK where c.idUser = " . $UserId;
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
	
	public function user($UserId){
	
		$this->UserId = $UserId;
	
	
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser left join project1admin d on a.idProject=d.idProject_FK inner join role e on c.idUser=e.idUser_FK group by c.idUser,c.Name,c.LastName,e.Administrator";
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
	
	
	public function dolazniTable(){
	
		$this->UserId = $UserId;
	
	
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser where a.approved = 0";
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
	
	public function obradjeniTable(){
	
		$this->UserId = $UserId;
	
	
		$q = "select * from project1 a inner join user_to_project1 b on a.idProject=b.Project1_idProject inner join user c on b.User_idUser=c.idUser where a.approved = 1";
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
			" or a.ProjectName like '%" . $search . "%' " .
			" or a.NameNumOfOwner like '%" . $search . "%' " .
			" or a.ZipCode like '%" . $search . "%' " .
			" or a.CadPlotNum like '%" . $search . "%' " .
			" or a.RoofSize like '%" . $search . "%' ";
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
	
	public function deleteProject($ProjectId){
	
		$q1 = "delete FROM `attachment1` WHERE `idProject_FK` = " . $ProjectId;
		$q2 = "delete FROM `project1admin` WHERE `idProject_FK` = " . $ProjectId;
		$q3 = "delete FROM `user_to_project1` WHERE `Project1_idProject` = " . $ProjectId;
		$q4 = "delete FROM `project1` WHERE `idProject` = " . $ProjectId;
		
		$Ppath = $_SESSION['BASE_PATH'] . '/PdfDocuments/' . $_SESSION['UserId'] . '/' . $ProjectId;
		$Ipath = $_SESSION['BASE_PATH'] . '/ProjectImage/' . $_SESSION['UserId'] . '/' . $ProjectId;
		
		if(is_dir($Ppath)){
			
		$this->rrmdir($Ppath);
		}
		
		if(is_dir($Ipath)){
			
			$this->rrmdir($Ipath);
		}
		mysql_query($q1);
		mysql_query($q2);
		mysql_query($q3);
		mysql_query($q4);
		
		return true;
	}
	
	public function obradiProject($ProjectId,$approved){
	
		if($approved == "obradi") $approved = 1;
		if($approved == "povuci") $approved = 0;
		$q1 = "update `project1` set `Approved` = " . $approved . " WHERE `idProject` = " . $ProjectId;
	
		mysql_query($q1);
	
		return true;
	}

	private $UserId = null;
	private $numResults = null;
	private $result = null;
	
	public function getResult()
	{
		return $this->result;
	}
	
	function rrmdir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}


}