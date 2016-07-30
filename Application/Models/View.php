<?php

class HtmlView {

const DIR = 'Application/Views' . DIRECTORY_SEPARATOR;
const EXT = '.phtml';
    
    private $template;
    private $vars;
    
    function __construct($template, $vars = []) {
        $this->vars = $vars;
        $this->template = self::DIR . $template . self::EXT;
    }


    public function __toString() {
      extract($this->vars);
      ob_start();
      include $this->template;
      return ob_get_clean();
    }
}