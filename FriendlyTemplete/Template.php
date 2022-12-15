<?php
namespace FriendlyTemplete;

class Template
{
    private $templateDir;
    private $data = array();

    // ------------------------------------------------------------------------
    // CONSTRUCT
    public function __construct($templateDir, $data = array())
    {
        $this->templateDir = $templateDir;
        $this->mergeData($data);
        extract($this->data);
    }
	
    // ------------------------------------------------------------------------
    // SET DATA
    public function setData(string $key, $value)
    {
        $this->data[$key]= $value;
    }
	
    // ------------------------------------------------------------------------
    // MERGE DATA
    public function mergeData(array $data)
    {
        $this->data = array_merge($this->data, $data);
    }
	
    // ------------------------------------------------------------------------
    // DRAW TEMPLATE
	public function drawTemplate($templateName, $data = array())
    {
        $this->mergeData($data);
        extract($this->data);
        
        if(file_exists($this->templateDir . $templateName . ".php"))
        {
            require_once($this->templateDir . $templateName . ".php");
        }elseif(file_exists($this->templateDir . $templateName))
        {
            require_once($this->templateDir . $templateName);
        }   else
        {
            echo "<h1>Error #: Template {$templateName} not found</h1>";
        }
    }
}