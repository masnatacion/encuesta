<?php 
class baseDAO extends CI_Model {

    var $table = '';
    var $id    = '';
	
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
	
	$this->db->simple_query('SET lc_time_names = \'es_MX\'');
	$this->db->simple_query('SET GLOBAL log_bin_trust_function_creators  = 1');
	$this->db->simple_query('SET GLOBAL time_zone = \'America/Cancun\'');	

    }
    
    function _defaultSQL()
    {
	if ($this->db->field_exists('Status', $this->table))
	    $this->db->where($this->table.".Status !=","Inactive");
    }
     
    
    function getFields()
    {
	return $this->db->list_fields($this->table); 
    }
    
    function get_enum_values( $field )
    {
        $type = $this->db->query( "SHOW COLUMNS FROM {$this->table} WHERE Field = '{$field}'" )->row( 0 )->Type;
        preg_match('/^enum\((.*)\)$/', $type, $matches);
        foreach( explode(',', $matches[1]) as $value )
        {
             $enum[] = trim( $value, "'" );
        }
        return $enum;
    }
     
     
    function insert_batch($data = array()){
       return $this->db->insert_batch($this->table, $data); 
    }
     
    function buildURL($url='',$param='')
    {
	$burl = build_url($url).$param;
	
	$record = $this->findByURL($burl);
	if(count($record) > 0)
	    $burl = $this->buildURL($url,"-".rand(1,99));
	    
	return $burl;    
    }
    
    function findByURL($id,$data=array()){
	$this->_defaultSQL(false);
	$this->_sql($data);
    	return $this->findByColumn("url",$id);
    }
	
    function getLastItemsByDays($day = 2,$data=array())
    {
	$this->_sql($data);
	$this->db->where("fecha_publicacion >= DATE_ADD(NOW(),INTERVAL -".$day." DAY)",NULL, FALSE);
	
        $query = $this->db->get($this->table);
        return $query->result();
    }
	

    function getPopularColumn($column,$data=array())
    {
	$this->_sql($data);	
        $match = array("order" => array($column, "DESC"));

        return $this->_select($match);
    }
    
    function getPopular($data = array())
    {
	return $this->getPopularColumn("fecha_creacion",$data);
    }
    
    
    function findByMatchColumn($column,$words,$data=array())
    {
	$this->_sql($data);
        $match = array("match" => array($column, $words));

        return $this->_select($match);
    }
    
    function findByWords($words = '', $data = array()) {
        return $this->findByMatchColumn("titulo",$words,$data);
    }

    function findByTags($tags, $data = array()) {
	return $this->findByMatchColumn("etiquetas",$tags,$data);
    }
    
    function findByCategoryId($id,$data = array()) {
	
	$this->_sql($data);
        $this->db->where('categoria_k', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    
    function getNextItem($id,$data=array())
    {
	$this->_defaultSQL();
	
	$this->db->where($this->id." >" , $id);
	$this->db->order_by($this->id,"ASC");
	$this->db->limit(1);
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	$record =  $query->row();
	
	if(count($record) > 0)
		return $record;
	else
		return $this->getFirstItem($sql);
    }




    function getPrevItem($id,$data=array())
    {
		
	$this->db->where($this->id." <" , $id);
	$this->db->order_by($this->id,"DESC"); 
	$this->db->limit(1);
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	$record =  $query->row();
	
	if(count($record) > 0)
		return $record;
	else
		return $this->getLastItem($sql);
    }




    function getLastItem($data=array())
    {
	$this->db->order_by($this->id,"DESC");
		
	$this->db->limit(1);
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	return $query->row(); 
    }




    function getFirstItem($data=array())
    {
	
	$this->db->order_by($this->id,"ASC");
	$this->db->limit(1);
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	return $query->row(); 
    }



    function getLastId($data = array())
    {
	$this->db->select_max($this->id);
	$this->db->limit(1);
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	$row = $query->row(); 
	
	return $row->{$this->id};

    }




   function getLastItems($data=array())
   {
	$this->db->order_by("fecha_creacion","DESC");
	
	$this->_sql($data);
	$query = $this->db->get($this->table);
	$result =  $query->result();
	
	if(count($result) == 0)
		$this->getRandomItems($sql,$limit);
	
	return $result;

   }
   
   
   
   
   
   
   function getRandomItems($data = array())
   {
	$this->db->order_by($this->id,"RANDOM");

	$this->_sql($data);	
	$query = $this->db->get($this->table);
	
	return $query->result();
   }
   
   

    
    
    function query($sql)
    {
    	$query = $this->db->query($sql);
    	return $query->result();
    }
    
    
  
    
    function _insert($data=array())
    {
	
	
    	if(count($data) >0 && is_array($data))
    	{
	    

	    $this->db->insert($this->table, $data);
	    
	    return $this->db->insert_id();
	    
    	}else
            return 0;
    }
    
    
    
    
    function insert($data=array()){
    	
    	return $this->_insert($data);
    	
    }
    
    
    
    
    function _delete($id){
    	
    	if(!empty($id))
    	{
    		if ($this->db->field_exists('Status', $this->table))
    			return $this->db->update($this->table, array("Status" => "Inactive"), array($this->id => $id));
    		else
    			return $this->db->delete($this->table, array($this->id => $id)); 		
    	}else
    		return 0;
    	
    }
    
    
    
    
    function delete($id){
    	
    	return $this->_delete($id);
    	
    }
    
    
    
    
    
    function _set($data=array(),$id_or_where=array())
    {
	

	$id = $this->_getId($id_or_where);

	
	if($id==0 || empty($id))
		$id = $this->_insert($data);
	else
		$this->_update($data,$id_or_where);
	
    		
    	return $id;	
    	
    }
    
    
    
    
    
    function set($data=array(),$id_or_where=array())
    {
    	return $this->_set($data,$id_or_where);
    }
    
    
    

    
    function _update($data=array(),$id_or_where){


    	if(count($data) >0 && is_array($data))
    	{
	    	
    	
    	if(count($id_or_where)>0 && is_array($id_or_where))
    		return $this->db->update($this->table, $data, $id_or_where);
    	elseif(is_int($id_or_where) || is_string($id_or_where))
    		return $this->db->update($this->table, $data, array($this->id => $id_or_where));
    	else
    		return 0;	
    	
    	}else
    		return 0;	
    	
    }
    
    
    
    
    
    
    function update($data=array(),$id_or_where){
    	
    	return $this->_update($data,$id_or_where);
    	
    }
    
    
   function findByColumn($column,$value)
    {
	$result = array();
	$this->_defaultSQL();
	
	if(is_array($value))
	{
		
		$this->db->where_in($column,$value);
		$query = $this->db->get($this->table); 
		$result = $query->result();
	}
	else
	{
		$this->db->limit(1);
		$this->db->where($column,$value);
		$query = $this->db->get($this->table); 
		$result = $query->row();
	}      

    	return $result;	
    }
    
    
    
    function _findById($id,$data= array()){ 
	$this->_sql($data);
    	return $this->findByColumn($this->id,$id);
    }
    
    
    
    
    function findById($id,$data= array())
    {
	return $this->_findById($id,$data);
    }
    
    
    function getTotal($data = array())
    {
	$this->_sql($data);
	return $this->db->count_all_results($this->table);
    } 
    
    function _sql($data=array()){
	
	$this->_defaultSQL();

	$select = "*";
	$random =FALSE;
	$from  = "";
    	$where = "";
    	$order = "";
    	$limit = "";

	if(isset($data["group_by"]))
		$this->db->group_by($data["group_by"]);
		
    	if(isset($data["random"]))
		$random = $data["random"];
    	
    	if(isset($data["select"]))
		$select = $data["select"];	
	
    	if(isset($data["where"]))
		$where = $data["where"];

	if(isset($data["order"]))
		$order = $data["order"];
 
    	if(isset($data["page"]))
		$page = $data["page"]; 
 
 
 
	if(isset($data["select"]))
		$this->db->select($data["select"],FALSE);
 	
	if(!empty($page))
 	{
			
	    $page=intval($page);	
	    
	    $start = $page === 0 ? 0 : (PAGINACION* ($page-1));
	    $end   = PAGINACION;
	    $data["limit"] = array();
	    
	    $data["limit"][0] = intval(0);
	    $data["limit"][1] = intval($end);
		
		//print_r($data["limit"]);
	}
	


	if(isset($data["random"]))
		$this->db->order_by($this->id,"RANDOM");
		
		
	
	if(!isset($data["order"]) and !isset($data["where"]))
		$where = $data;
	

    	if(isset($data["where"]) and is_array($data["where"]) and count($data["where"]) > 0)
    		$this->db->where($data["where"]);
	elseif(isset($data["where"]) and !empty($data["where"]))
		$this->db->where($data["where"], NULL, FALSE);

    	if(isset($data["where_in"]) and count($data["where_in"]) > 0)
    		$this->db->where_in($data["where_in"][0],$data["where_in"][1]);

    	if(isset($data["group_by"]))
    		$this->db->group_by($data["group_by"]); 
    	
	if(isset($data["order"]) and is_array($data["order"]) and count($data["order"]) > 0)
		$this->db->order_by($data["order"][0],$data["order"][1]);
	elseif(isset($data["order"]) and !empty($data["order"]))
		$this->db->order_by($data["order"]);

	if(isset($data["limit"]))
		$this->db->limit(intval($data["limit"][1]),intval($data["limit"][0]));

		
	if(isset($data["from"]))
		$this->db->from($this->table);
			
	if(isset($data["match"]) and count($data["match"]) > 0)
		$this->db->where("MATCH(".$data["match"][0].") AGAINST ('".$data["match"][1]."' IN BOOLEAN MODE) ", NULL, FALSE);
		
		
    		
    }
    
    
    
    
    function _select($data=array()){

    	$result =array();

	$data = array_merge($data,array("from"=>$this->table));
	$this->_sql($data);	
	$query =  $this->db->get();

	$result = $query->result();
    	return $result; 	
    	
    }
    
    
    
    
    
    
    function select($data=array()){
    	
    	return $this->_select($data);
    	
    }
    
    

    
    function _getId($data=array())
    {
    	$id=0;
    	

    	if(count($data)>0 && is_array($data) ){


		if(!isset($data["where"]))
			$data = array("where"=>$data);
			
    		$row = $this->_select($data);
		
		if(count($row)>0)
			$row = $row[0];
		
		if(!empty($this->id) and $row)
	    		$id=$row->{$this->id};

    	}
    	
    	return $id;	
    }
    
    
    
    function getId($data=array())
    {
    	return $this->_getId($data);
    }
 

    
}

?>