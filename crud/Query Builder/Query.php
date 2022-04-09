<?php
require_once __DIR__.'/DB.php';
// This is query Connection file
class Query extends DB{
public function insert($tablename, $formdata=[]){
$columns = implode(",",array_keys($formdata));
$values = implode("','",array_values($formdata));

$SQL = "INSERT INTO {$tablename}($columns) values('$values');";
$this->sql = $SQL;
if($this->runQuery()){
	$this->lastpk_id=mysqli_insert_id($this->getConnection());
	return true;
}else{
	return false;
}
}
public function getQuery(){
	return $this->lastpk_id;
}	
public function getQuery(){
	return $this->sql;
}

public function from($columns='*'){
	$sql = "SELECT $columns FROM";
	$this->sql = $sql;
	return $this;
}
public function table($tablename){
	$this->sql = $this->sql."$tablename";
	return $this;
}

public function runQuery(){
	$result_set=mysqli_query($this->getConnection(),$this->sql) or die(mysqli_error($this->getConnection()));
	if(is_object($result_set)){
		if(mysqli_num_rows($result_set)>0){
			$this->rs=$result_set;
		}else{
			return false;
		}
	}else{
		$count=mysqli_affected_rows($this->getConnection());
		if($count>0){
			return true;
		}else{
			return false;
	}

}


}
$query = new Query();
echo $query->insert('emp',[
'name'=>'Akash Gupta',
'email'=>'a@gmail.com',
'password'=>123,
'mobiule'=>'9628652640',
'dob'=>'20-jun-2000'
])->getQuery();
echo PHP_EOL:
echo $query->from('name,class,email')->table('emp')->getQuery();
echo PHP_EOL;
echo $query->from()->table('emp')->getQuery();
echo PHP_EOL;
echo $query->from('name as n,class as c,email as e,count(*) as cnt,distinct')->table('emp')->getQuery();
echo PHP_EOL:
echo $query->select('id,name,email')->table('emp')->where('email',akash@gmail.com)->getQuery();

?>