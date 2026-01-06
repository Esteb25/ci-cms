<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

    protected $table = 'pages';

    public function __construct(){
        parent::__construct();
    }
}
