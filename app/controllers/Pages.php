<?php
    class Pages extends Controller 
    {
        public function __construct(){
    
        }
        
        public function index()
        {
          $data = [
              'title' => 'FrameTest'
            ];

          $this->view('pages/index', $data );
        }

        public function about()
        {
            $data = [
                'title' => 'About US'
              ];
            $this->view('pages/about' , $data);
        }
    }