<?php
namespace Vanderbilt\ExampleExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

require_once ExternalModules::getProjectHeaderPath();

$exampleModule = new ExampleExternalModule();

?>

<h1>This is the Example Module project homepage!</h1>
<p>Here is some data from the database: <?= $exampleModule->selectData('...') ?><p>

<?php

require_once ExternalModules::getProjectFooterPath();
