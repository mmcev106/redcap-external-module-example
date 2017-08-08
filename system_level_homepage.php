<?php
namespace Vanderbilt\ExampleExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

$exampleModule = new ExampleExternalModule();

$HtmlPage = new \HtmlPage();
$HtmlPage->PrintHeaderExt();
?>

<h1>This is the Example Module system level homepage!</h1>
<p>Here is some data from the database: <?= $exampleModule->selectData('...') ?><p>

<?php
$HtmlPage->PrintFooterExt();
