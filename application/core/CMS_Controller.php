<?php
class CMS_Controller extends CI_Controller{
		public $scripts= array();
		public $styles = array();
        public $items  = array();
		protected $data = array();
        protected $user_profile;
		function __construct(){
			parent::__construct();

		}

        
		function set_css($data=array()){
        if (count($data) > 0 && is_array($data)) {
            foreach ($data as $key => $value) {
                $this->styles[] = CSS_PATH.$value.'.css';
            }
        }
    }
		function set_js($data=array()){
        if (count($data) > 0 && is_array($data)) {
            foreach ($data as $key => $value) {
                $this->scripts[] = JS_PATH.$value.'.js';
            }
        }
    }

		function add_enqueue($custom=array()){
			if(array_key_exists('css',$custom)){
					$this->styles		= array_merge($this->styles,$custom['css']);
					$this->set_css($this->styles);
			}
			if(array_key_exists('js',$custom)){
					$this->scripts	= array_merge($this->scripts,$custom['js']);
			}
		}

    function load_stylesheet(){
				$css 			= '';
        foreach ($this->styles as $key => $value) {
            $css  .= '<link rel="stylesheet" href="'.$value.'" rel="stylesheet" />';
        }
				return $css;
    }

    function load_scriptjs(){
				$js				= '';
        foreach ($this->scripts as $key => $value) {
            //$this->template->javascript->add($value);
						$js 	.='<script src="'.$value.'" ></script>';
        }
				return $js;
    }

    function session_user_true($page_redirect='hrd'){
        if (!is_null($this->session->userdata('logged_in'))){
            redirect($page_redirect,'refresh');
        }

    }
    function session_user_false($page_redirect='login'){
        if (is_null($this->session->userdata('logged_in'))){
            redirect($page_redirect,'refresh');
        }else{
            $this->user_profile =(array)$this->session->userdata('logged_in');
        }
    }
}
