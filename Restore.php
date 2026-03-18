<?php
namespace FreePBX\modules\backrooms;
use FreePBX\modules\Backup as Base;
class Restore Extends Base\RestoreBase{
	public function runRestore($jobid){
		$settings = $this->getConfigs();
		foreach ($settings as $key => $value) {
			$this->freepbx->Helloworld->setMultiConfig($value, $key);
		}
	}
	public function processLegacy($pdo, $data, $tables, $unknownTables, $tmpfiledir){
		return $this->transformLegacyKV($pdo,'backrooms', $this->freepbx)
				->transformNamespacedKV($pdo,'backrooms', $this->freepbx);
	}
}
