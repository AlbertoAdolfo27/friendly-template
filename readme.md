# PHP Friendly Templete

PHP Library to creating HTML templates

## Getting started

### Minimum requirements

- **PHP** >= **8.0**

### Installation

installation using [composer](https://getcomposer.org/)

```compose
composer require albertoadolfo27/friendly_template
````

### Quick Examples

#### Drawing a templete

- 1\. **index.php** file

```php
<?php
// Require the Composer autoloader.
require_once "vendor/autoload.php";

use FriendlyTemplete\Template;

// Instantiate a Template, passing the base directory of the template files.
$template = new Template("views/");

// Draw the Header
$template->drawTemplate("header", array("title" => "Hello World!"));

// Draw the Main Content
$template->drawTemplate("content", array("user" => "John Doe"));

// Draw the Footer
$template->drawTemplate("footer.php");
```

- 2\. **header.php** file, placed in the **views/** directory

```php
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="views/styles/style.css">
</head>

<body>

    <div class="topnav">
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
    </div>
```

- 3\. **content.php** file, placed in the **views/** directory

```php
<div class="content">
    <h2>Content Template</h2>
    <p>Welcome <b><?php echo $user; ?></b></p>
</div>
```

- 4\. **footer.php** file, placed in the **views/** directory

```php
<div class="footer">
    <p>Footer</p>
</div>

</body>

</html>
```
