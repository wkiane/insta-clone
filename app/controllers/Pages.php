<?php
  class Pages extends Controller {
    
    public function index(){
      $data = [
          'title' => 'Welcome',
        ];
      $this->loadTemplate('pages/home', $data);
    }
  }