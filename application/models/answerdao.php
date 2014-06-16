<?php
require_once BASE_PATH.'application/models/basedao'.EXT;

class answerDAO extends baseDAO {

    var $table = 'answers';
    var $id    = 'ID_answers';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}