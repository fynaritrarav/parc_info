<?php
class Controller {

    public function __construct(){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }
    protected function render($view, $data = []) {
        // Extract data to variables
        extract($data);
        
        // Include the view file
        require_once VIEWS . $view . '.php';
    }
}