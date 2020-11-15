<?php

/*
 * Demo widget
 */
class Navigation extends Widget {
	
    public function display($data) {
    	(isset($data['nav_model']))? $nav = $data['nav_model'] : $nav = 'navigation';	
        $this->view('widgets/'.$nav, $data);
    }
    
}