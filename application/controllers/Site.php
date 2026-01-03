<?php
require_once(APPPATH .'services/Affiliate_service.php');
class Site extends CI_Controller {
    protected $aff;
    public function __construct(){
        parent::__construct();
        $this->load->model('Page_model','page');
        // $this->load->service('Affiliate_service','aff');
        $this->aff = new Affiliate_service();
    }

    public function page($slug){
        $page = $this->page->getBySlug($slug);

        if(!$page || $page->status != 'published'){
            show_404(); // Drafts are not visible
        }

        // Inject affiliate links
        $page->content = $this->aff->injectLinks($page->content);

        $this->load->view('site/page', ['page'=>$page]);
    }
}
