<?php
require_once(APPPATH .'services/Affiliate_service.php');
class Page extends CI_Controller {
    protected $aff;
    public function __construct(){
        parent::__construct();
    }
}
