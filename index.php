<?php
// Require the Composer autoloader.
require_once "vendor/autoload.php";

use FriendlyTemplate\Template;

// Instantiate a Template, passing the base directory of the template files.
$template = new Template("views/");

// Draw the Header
$template->draw("header", array("title" => "Hello World!"));

// Draw the Main Content
$template->draw("content", array("user" => "John Doe"));

// Draw the Footer
$template->draw("footer");