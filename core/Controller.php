<?php
class Controller {
    protected function render($view, $data = []) {
        // Extract data to variables
        extract($data);
        
        // Include the view file
        require_once VIEWS . $view . '.php';
    }
}