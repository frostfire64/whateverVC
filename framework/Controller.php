<?php

class Controller {
    protected function view($template){
        $file = PROJECT_DIR . '/views/' . $template . '.php';
        if (file_exists($file)) {
            require $file;
        } else die ("Error: There is no template file called - ${template}.php");
    }
}
