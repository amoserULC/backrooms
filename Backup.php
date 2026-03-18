<?php
namespace FreePBX\modules\Backrooms;
use FreePBX\modules\Backup as Base;
class Backup Extends Base\BackupBase{
	public function runBackup($id,$transaction){
		$kvstoreids = $this->FreePBX->Backrooms->getAllids();
		$kvstoreids[] = 'noid';
		$settings = [];
		foreach ($kvstoreids as $value) {
			$settings[$value] = $this->FreePBX->Helloworld->getAll($value);
		}
		$this->addConfigs($settings);
	}
}
