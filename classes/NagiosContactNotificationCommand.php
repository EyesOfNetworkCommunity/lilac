<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_contact_notification_command' table.
 *
 * Notification Command for a Nagios Contact
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactNotificationCommand extends BaseNagiosContactNotificationCommand {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'contact','modify');
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getNagiosContact()) {
				$JobExport->insertAction($this->getNagiosContact()->getName(),'contact','modify');
			}
		}

		return parent::save($con);

	}

} // NagiosContactNotificationCommand
