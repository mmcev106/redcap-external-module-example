<?php
namespace Vanderbilt\ExampleExternalModule;

use ExternalModules\AbstractExternalModule;
use ExternalModules\ExternalModules;

class ExampleExternalModule extends AbstractExternalModule
{
	function hook_every_page_top($project_id)
	{
//		$this->selectData('...');
//		$this->updateUserPermissions('...');

		if(isset($project_id)){
			?>
			<style>
				#west .menubox{
					background: <?=$this->getProjectSetting('project-menu-background-css');?>;
				}
			</style>
			<script>
				console.log("This message came from a hook defined in the ExampleExternalModule!  Your project id is <?= $project_id ?>!");
			</script>
			<?php
		}
	}
}
