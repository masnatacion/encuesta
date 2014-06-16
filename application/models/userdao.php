<?php
require_once BASE_PATH.'application/models/basedao'.EXT;

class userDAO extends baseDAO {

    var $table = 'users';
    var $id    = 'ID_users';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
}