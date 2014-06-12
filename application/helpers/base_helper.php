<?
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/* gets the contents of a file if it exists, otherwise grabs and caches */
function get_content($file,$url,$hours = 24,$fn = '',$fn_args = '') {
	//vars
	$current_time = time(); $expire_time = $hours * 60 * 60; $file_time = @filemtime($file);
	//decisions, decisions
	if(file_exists($file) && ($current_time - $expire_time < $file_time)) {
		//echo 'returning from cached file';
		$content = file_get_contents($file);
		if($fn) { $fn($content,$fn_args); }

		return $content;
	}
	else {
		$content = get_url($url);
		if($fn) { $fn($content,$fn_args); }
		$content.= '';
		file_put_contents($file,$content);
		//echo 'retrieved fresh from '.$url.':: '.$content;
		return $content;
	}
}

/* gets content from a URL via curl */
function get_url($url) {
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); 
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,5);
	$content = curl_exec($ch);
	curl_close($ch);
	return $content;
}

if (!function_exists('array_replace'))
{
  function array_replace( array &$array, array &$array1, $filterEmpty=false )
  {
    $args = func_get_args();
    $count = func_num_args()-1;

    for ($i = 0; $i < $count; ++$i) {
      if (is_array($args[$i])) {
        foreach ($args[$i] as $key => $val) {
            if ($filterEmpty && empty($val)) continue;
            $array[$key] = $val;
        }
      }
      else {
        trigger_error(
          __FUNCTION__ . '(): Argument #' . ($i+1) . ' is not an array',
          E_USER_WARNING
        );
        return NULL;
      }
    }

    return $array;
  }
}

    function group_assoc($array, $key) {
	$return = array();
	foreach($array as $v) {
	    $return[$v->{$key}][] = $v;
	}
	return $return;
    }


    function group($array, $key) {
	$return = array();
	foreach($array as $v) {
	    $return[$key][] = $v;
	}
	return $return;
    }
    

    function isJson($string) {
     json_decode($string);
     return (json_last_error() == JSON_ERROR_NONE);
    }
    
    
    function get_country_code($ip)
    {
	
	if($ip == "127.0.0.1")
	    $ip = "201.141.184.203";
	
	$code = @apache_note("GEOIP_COUNTRY_CODE");
	
	if(empty($code))
	    $code = @geoip_country_code_by_name($ip);
	    
	return $code;    
    }

    function quitarAcentos($text)
    {

	    $text = htmlentities($text, ENT_QUOTES, 'UTF-8'); // REVISAR
	    $text = strtolower($text);
	    $patron = array (
		    // Espacios, puntos y comas por guion
		    '/[\., ]+/' => ' ',

		    // Vocales
		    '/&agrave;/' => 'a',
		    '/&egrave;/' => 'e',
		    '/&igrave;/' => 'i',
		    '/&ograve;/' => 'o',
		    '/&ugrave;/' => 'u',

		    '/&aacute;/' => 'a',
		    '/&eacute;/' => 'e',
		    '/&iacute;/' => 'i',
		    '/&oacute;/' => 'o',
		    '/&uacute;/' => 'u',

		    '/&acirc;/' => 'a',
		    '/&ecirc;/' => 'e',
		    '/&icirc;/' => 'i',
		    '/&ocirc;/' => 'o',
		    '/&ucirc;/' => 'u',

		    '/&atilde;/' => 'a',
		    '/&etilde;/' => 'e',
		    '/&itilde;/' => 'i',
		    '/&otilde;/' => 'o',
		    '/&utilde;/' => 'u',

		    '/&auml;/' => 'a',
		    '/&euml;/' => 'e',
		    '/&iuml;/' => 'i',
		    '/&ouml;/' => 'o',
		    '/&uuml;/' => 'u',

		    '/&auml;/' => 'a',
		    '/&euml;/' => 'e',
		    '/&iuml;/' => 'i',
		    '/&ouml;/' => 'o',
		    '/&uuml;/' => 'u',

		    // Otras letras y caracteres especiales
		    '/&aring;/' => 'a',
		    '/&ntilde;/' => 'n',

		    // Agregar aqui mas caracteres si es necesario

	    );

	    $text = preg_replace(array_keys($patron),array_values($patron),$text);
	    return $text;
    }

	function Between($int,$min,$max)
	{
	    if($int>=$min && $int<=$max)
		return true;
	    else
		return false;
	}

	# recursively remove a directory
	function rrmdir($dir) {
	    foreach(glob($dir . '/*') as $file) {
		if(is_dir($file))
		    rrmdir($file);
		else
		    @unlink($file);
	    }
	    @rmdir($dir);
	}

	function isURL($url) {
	    if(!filter_var($url, FILTER_VALIDATE_URL))
	      return false;
	    else
	      return true;
	}

        function isMd5($md5)
        {
            return !empty($md5) && preg_match('/^[a-f0-9]{32}$/', $md5);
        }
    
	function array_move( $in_array , $insert , $new_key ) {
	
	  $new_array = array();
	  reset( $in_array );
	
	  //as there is one more element have to insert, so $i<= count
	  for ( $i = 0 ; $i <= count( $in_array ) ; $i++ ) {
	    if ( $i == $new_key ) {
	      $new_array[] = $insert;
	    }
	    else{
	      $new_array[] = current( $in_array );
	      next( $in_array );
	    }
	  }
	  return $new_array;
	}
      /**
       * xml2array() will convert the given XML text to an array in the XML structure.
       * Link: http://www.bin-co.com/php/scripts/xml2array/
       * Arguments : $contents - The XML text
       *                $get_attributes - 1 or 0. If this is 1 the function will get the attributes as well as the tag values - this results in a different array structure in the return value.
       *                $priority - Can be 'tag' or 'attribute'. This will change the way the resulting array sturcture. For 'tag', the tags are given more importance.
       * Return: The parsed XML in an array form. Use print_r() to see the resulting array structure.
       * Examples: $array =  xml2array(file_get_contents('feed.xml'));
       *              $array =  xml2array(file_get_contents('feed.xml', 1, 'attribute'));
       */
      function xml2array($contents, $get_attributes=1, $priority = 'tag') {
	  if(!$contents) return array();
      
	  if(!function_exists('xml_parser_create')) {
	      //print "'xml_parser_create()' function not found!";
	      return array();
	  }
      
	  //Get the XML parser of PHP - PHP must have this module for the parser to work
	  $parser = xml_parser_create('');
	  xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss
	  xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
	  xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
	  xml_parse_into_struct($parser, trim($contents), $xml_values);
	  xml_parser_free($parser);
      
	  if(!$xml_values) return;//Hmm...
      
	  //Initializations
	  $xml_array = array();
	  $parents = array();
	  $opened_tags = array();
	  $arr = array();
      
	  $current = &$xml_array; //Refference
      
	  //Go through the tags.
	  $repeated_tag_index = array();//Multiple tags with same name will be turned into an array
	  foreach($xml_values as $data) {
	      unset($attributes,$value);//Remove existing values, or there will be trouble
      
	      //This command will extract these variables into the foreach scope
	      // tag(string), type(string), level(int), attributes(array).
	      extract($data);//We could use the array by itself, but this cooler.
      
	      $result = array();
	      $attributes_data = array();
      
	      if(isset($value)) {
		  if($priority == 'tag') $result = $value;
		  else $result['value'] = $value; //Put the value in a assoc array if we are in the 'Attribute' mode
	      }
      
	      //Set the attributes too.
	      if(isset($attributes) and $get_attributes) {
		  foreach($attributes as $attr => $val) {
		      if($priority == 'tag') $attributes_data[$attr] = $val;
		      else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr'
		  }
	      }
      
	      //See tag status and do the needed.
	      if($type == "open") {//The starting of the tag '<tag>'
		  $parent[$level-1] = &$current;
		  if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag
		      $current[$tag] = $result;
		      if($attributes_data) $current[$tag. '_attr'] = $attributes_data;
		      $repeated_tag_index[$tag.'_'.$level] = 1;
      
		      $current = &$current[$tag];
      
		  } else { //There was another element with the same tag name
      
		      if(isset($current[$tag][0])) {//If there is a 0th element it is already an array
			  $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
			  $repeated_tag_index[$tag.'_'.$level]++;
		      } else {//This section will make the value an array if multiple tags with the same name appear together
			  $current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array
			  $repeated_tag_index[$tag.'_'.$level] = 2;
      
			  if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
			      $current[$tag]['0_attr'] = $current[$tag.'_attr'];
			      unset($current[$tag.'_attr']);
			  }
      
		      }
		      $last_item_index = $repeated_tag_index[$tag.'_'.$level]-1;
		      $current = &$current[$tag][$last_item_index];
		  }
      
	      } elseif($type == "complete") { //Tags that ends in 1 line '<tag />'
		  //See if the key is already taken.
		  if(!isset($current[$tag])) { //New Key
		      $current[$tag] = $result;
		      $repeated_tag_index[$tag.'_'.$level] = 1;
		      if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data;
      
		  } else { //If taken, put all things inside a list(array)
		      if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array...
      
			  // ...push the new element into that array.
			  $current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
      
			  if($priority == 'tag' and $get_attributes and $attributes_data) {
			      $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
			  }
			  $repeated_tag_index[$tag.'_'.$level]++;
      
		      } else { //If it is not an array...
			  $current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
			  $repeated_tag_index[$tag.'_'.$level] = 1;
			  if($priority == 'tag' and $get_attributes) {
			      if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
      
				  $current[$tag]['0_attr'] = $current[$tag.'_attr'];
				  unset($current[$tag.'_attr']);
			      }
      
			      if($attributes_data) {
				  $current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
			      }
			  }
			  $repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken
		      }
		  }
      
	      } elseif($type == 'close') { //End of tag '</tag>'
		  $current = &$parent[$level-1];
	      }
	  }
      
	  return($xml_array);
      }



    function substr_count_array( $haystack, $needle ) {
	 $count = 0;
	 foreach ($needle as $substring) {
	      $count += substr_count( $haystack, $substring);
	 }
	 return $count;
    }




    function strip_tags_content($text, $tags = '', $invert = FALSE) { 
    
      preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags); 
      $tags = array_unique($tags[1]); 
	
      if(is_array($tags) AND count($tags) > 0) { 
	if($invert == FALSE) { 
	  return preg_replace('@<(?!(?:'. implode('|', $tags) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text); 
	} 
	else { 
	  return preg_replace('@<('. implode('|', $tags) .')\b.*?>.*?</\1>@si', '', $text); 
	} 
      } 
      elseif($invert == FALSE) { 
	return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text); 
      } 
      return $text; 
    } 




    function strip_only($str, $tags, $stripContent = false) { 
	$content = ''; 
	if(!is_array($tags)) { 
	    $tags = (strpos($str, '>') !== false ? explode('>', str_replace('<', '', $tags)) : array($tags)); 
	    if(end($tags) == '') array_pop($tags); 
	} 
	foreach($tags as $tag) { 
	    if ($stripContent) 
		 $content = '(.+</'.$tag.'[^>]*>|)'; 
	     $str = preg_replace('#</?'.$tag.'[^>]*>'.$content.'#is', '', $str); 
	} 
	return $str; 
    }

    if ( ! function_exists('object_to_array'))
    {
     function object_to_array($object)
     {
      if (is_object($object))
      {
       // Gets the properties of the given object with get_object_vars function
       $object = get_object_vars($object);
      }
     
       return (is_array($object)) ? array_map(__FUNCTION__, $object) : $object;
     }
    }

    // From object to array.
    function objectToArray($data) {
	  
	  $array = array();
	
	  foreach($data as $row)
	  {
	     $row= get_object_vars($row);
	     $array[] = ($row);
	     //$array[]=array_map(__FUNCTION__, $row);
	  }
	  
	return $array;
    }
    
    

    // From array to object.
    function arrayToObject($data) {
	return is_array($data) ? (object) array_map(__FUNCTION__, $data) : $data;
    }


    
    
    
    function overwrite_array($default_settings,$user_settings)
    {
		$combined_settings= array();
		
		foreach ($default_settings AS $key => $default_value)
		{
		    if (array_key_exists($key, $user_settings))
		    {
			$combined_settings[$key] = $user_settings[$key];
		    }
		    else
		    {
			$combined_settings[$key] = $default_value;
		    }
		}
		
		return $combined_settings;
    }



    function isRoman( $roman )
    {
	// Strip every non-word character
	// - A-Z, 0-9, apostrophe and understcore are what's left
	$roman = preg_replace( "/[^A-Z0-9_']/iu", "", @strtoupper($roman) );
	// if it contains anything other than MDCLXVI, then it's not a Roman Numeral
	$result = preg_match( "/[^MDCLXVI]/u", strtoupper($roman) );
	
	if( $result )
	{
	    return false;
	}
	return true;
    }
	

    function getShortString($file,$len=15)
    {
      return substr($file, 0, $len)."...";
    }

	
	
    function getReferrerUrl()
    {
	     $url = BASE_URL;	
	     $redirect = $_GET['redirect'];
	     
		if(isset($redirect))
			$url = $redirect;
	      
	      return $url;
      
    }
	


    function getRandom($length=6,$uc=TRUE,$n=TRUE,$sc=FALSE)
    {
		$source = 'abcdefghijklmnopqrstuvwxyz';
		if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		if($n==1) $source .= '1234567890';
		if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
		if($length>0){
			$rstr = "";
			$source = str_split($source,1);
			for($i=1; $i<=$length; $i++){
				mt_srand((double)microtime() * 1000000);
				$num = mt_rand(1,count($source));
				$rstr .= $source[$num-1];
			}
	
		}
		return $rstr;
    }

    
    
    function getPaginacion($pagina=1)
    {
       		if(empty($pagina)) $pagina=1;
       		
       		return array((($pagina - 1) * PAGINACION),PAGINACION); 
    } 


    function strtodate($d='')
    {
    	if(empty($d))
    	{
 	    	$date = strtotime($d);
	       	return date("Y-m-d", $date);   		
    	}

    }   
    
    
       
    function getJsonUrl($url)
    {
	
	$json_output = array();
	
	if(!empty($url)){
		
	$context = stream_context_create(array(
	'http' => array(
	 'timeout' => 1      // Timeout in seconds
	)
	));

	// Fetch the URL's contents
	$json = @file_get_contents($url, 0, $context);

	// Check for empties
	if (!empty($json))
		$json_output = json_decode($json);
	
	    
	}
	
	return $json_output;
    }
    
    

	
    function getJson($arr,$total=0,$pagina=1,$root="results"){
	// sql es la sentencia, $num es el numero de resultados
	// convert a complex value to JSON notation
	
	$total = $total == 0 ? count($arr) : $total;

	$response=@json_encode($arr);
	$callback = isset($_GET["callback"]) ? $_GET["callback"] : "";
		
	if(!isset($arr))
		$output= $callback.'({"success": "true", "page":"'.$pagina.'" , "total":"'.$total.'","'.$root.'":""})';
	else
		$output= $callback.'({"success": "true", "page":"'.$pagina.'" , "total":"'.$total.'","'.$root.'":'.$response.'})';
	
	return $output;

    }   

    function array2xml ($array_item) {
    $xml = '';
    foreach($array_item as $element => $value)
    {
	if (is_array($value))
	{
	    $xml .= "<$element>".array2xml($value)."</$element>\n";
	}
	elseif($value == '')
	{
	    $xml .= "<$element />\n";
	}
	else
	{
	    $xml .= "<$element>".htmlentities($value)."</$element>\n";
	}
    }
    return $xml;
    }
?>