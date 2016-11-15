<?php
namespace ExternalModules;
require_once dirname(__FILE__) . '/../../external_modules/classes/ExternalModules.php';

class ExampleExternalModule extends AbstractExternalModule
{
	function hook_project_home_page($project_id)
	{
//		$this->selectData('...');
//		$this->updateUserPermissions('...');

		?>
		<script>
			console.log("This message came from a hook defined in the ExampleExternalModule!  Your project id is <?= $project_id ?>!");
		</script>
		<?php
	}
}
