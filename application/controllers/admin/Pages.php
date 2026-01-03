<?php
require_once(APPPATH .'services/Affiliate_service.php');
class Pages extends CI_Controller {
    protected $aff;
    public function __construct(){
        parent::__construct();
        $this->load->model('Page_model','page');
        // $this->load->service('Affiliate_service','aff');
        $this->aff = new Affiliate_service();
    }

    public function index(){
        $data['pages'] = $this->page->getAll();
        $this->load->view('admin/pages/index',$data);
    }

    public function create(){
        if($_POST){
            $data = [
                'title' => $this->input->post('title'),
                'slug'  => url_title($this->input->post('title'),'dash',true),
                'content'=> $this->input->post('content'),
                'status'=> $this->input->post('status')
            ];
            $this->page->insert($data);
            redirect('admin/pages');
        }
        $this->load->view('admin/pages/form');
    }
    
    public function edit($id){
        $page = $this->page->getById($id);
        if(!$page) show_404();

        if($_POST){
            $data = [
                'title' => $this->input->post('title'),
                'slug'  => url_title($this->input->post('title'),'dash',true),
                'content'=> $this->input->post('content'),
                'status'=> $this->input->post('status')
            ];
            $this->page->update($id, $data);
            redirect('admin/pages');
        }

        $data['page'] = $page;
        $this->load->view('admin/pages/form', $data);
    }

    public function delete($id){
        $page = $this->page->getById($id);
        if(!$page) show_404();

        $this->page->delete($id);
        redirect('admin/pages');
    }


}
