<?php

# This class will render templates from the templates directory.
class render
{
    public $buffer = "";

    public function __construct()
    {
        global $config;
        $siteName = $config['siteName'];
        $this->render_template('header', array('siteName' => $siteName));
    }

    public function __destruct()
    {
        $this->render_flush();
    }

    public function render_template($templateName, $arguments = array())
    {
        #echo "rendering template: $templateName\n";
        # Arguments can be used to pass variables to the template if it accepts any.
        include ROOT . '/includes/views/' . $templateName . '.php';
        $this->buffer = $this->buffer . " " . $template;
    }

    public function render_flush()
    {
        $this->render_template('footer');
        $this->buffer .= "</html>";
        echo $this->buffer;
    }
}