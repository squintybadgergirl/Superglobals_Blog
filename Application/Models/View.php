<?php


abstract class View //given
{
    abstract public function render();
	
	public function __toString() {
		return (string) $this->render();
	}
}


class HtmlView extends View
{
    const VIEW_DIR = 'Application\Views';
    const VIEW_EXT = '.phtml';

    private $context;
    private $template;

    public function __construct($template, array $context = [])
    {
        $this->context = $context;
        $this->template = $template;
    }

    public function render()
    {
        extract($this->context);

        ob_start();
        
        include self::VIEW_DIR . DIRECTORY_SEPARATOR . '__header' . self::VIEW_EXT;
        include self::VIEW_DIR . DIRECTORY_SEPARATOR . $this->template . self::VIEW_EXT;
        include self::VIEW_DIR . DIRECTORY_SEPARATOR . '__footer' . self::VIEW_EXT;
        
        return ob_get_clean();
    }
}
