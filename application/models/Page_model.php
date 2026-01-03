<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_model extends CI_Model {

    protected $table = 'pages';

    public function __construct(){
        parent::__construct();
    }

    // Get all pages
    public function getAll(){
        return $this->db->order_by('id','DESC')->get($this->table)->result();
    }

    // Get single page by ID
    public function getById($id){
        return $this->db->where('id', $id)->get($this->table)->row();
    }

    // Insert new page
    public function insert($data){
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    // Update page by ID
    public function update($id, $data){
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    // Delete page by ID
    public function delete($id){
        return $this->db->where('id', $id)->delete($this->table);
    }

    // Optional: get by slug (for public pages)
    public function getBySlug($slug){
        return $this->db->where('slug', $slug)->get($this->table)->row();
    }
}
