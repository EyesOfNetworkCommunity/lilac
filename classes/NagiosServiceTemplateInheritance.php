<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_service_template_inheritance' table.
 *
 * Nagios service Template Inheritance
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceTemplateInheritance extends BaseNagiosServiceTemplateInheritance {

	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getSourceService() == null) {
				$tmpTemplate = NagiosServiceTemplatePeer::retrieveByPK($this->getSourceTemplate());
				$JobExport->insertAction($tmpTemplate->getName(),"servicetemplate","modify");
			} else {
				$tmpService = NagiosServicePeer::retrieveByPK($this->getSourceService());
				if($tmpService->getNagiosHost() != null) {
					$JobExport->insertAction($tmpService->getDescription(),'service','modify',$tmpService->getNagiosHost()->getName(),'host');
				}elseif($tmpService->getNagiosHostTemplate()  != null) {
					$JobExport->insertAction($tmpService->getDescription(),'service','modify',$tmpService->getNagiosHostTemplate()->getName(),'hosttemplate');
				}
			}
		}

		return parent::delete($con);
		
	}

	/**
	 * Initializes internal state of NagiosServiceTemplateInheritance object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	

	/**
	 * Checks to determine if inheritance creates a circular chain.  This is 
	 * done by recursively going through inheritance trees and seeing if the 
	 * source template is already found.  If so, this would create a circular 
	 * inheritance loop and destroy our world as we know it.
	 *
	 *@param int $targetTemplateId what template Id are we looking at
	 *@param int $originalSourceTemplateId what template Id are we looking for
	 */
	static function isCircular($targetTemplateId, $originalSourceTemplateId) {
		if($targetTemplateId == $originalSourceTemplateId)
			return true;
		else {
			// Get all the potential inheritance in which the target template id 
			// is the source
			$c = new Criteria();
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $targetTemplateId);
			$inheritances = NagiosServiceTemplateInheritancePeer::doSelect($c);
			foreach($inheritances as $inheritance) {
				if(NagiosServiceTemplateInheritance::isCircular($inheritance->getTargetTemplate(), $originalSourceTemplateId))
				   return true;
			}
		}
		return false;
	}
	
	public function save(PropelPDO $con = null) {
		if(NagiosServiceTemplateInheritance::isCircular($this->getTargetTemplate(), $this->getSourceTemplate())) {
			throw new Exception("Adding that inheritance would create a circular chain.");
		}
		else {
			$JobExport=new EoN_Job_Exporter();
			if($con == null || $con == ""){
				if($this->getSourceService() == null) {
					$tmpTemplate = NagiosServiceTemplatePeer::retrieveByPK($this->getSourceTemplate());
					$JobExport->insertAction($tmpTemplate->getName(),"servicetemplate","modify");
				} else {
					$tmpService = NagiosServicePeer::retrieveByPK($this->getSourceService());
					if($tmpService->getNagiosHost() != null) {
						$JobExport->insertAction($tmpService->getDescription(),'service','modify',$tmpService->getNagiosHost()->getName(),'host');
					}elseif($tmpService->getNagiosHostTemplate()  != null) {
						$JobExport->insertAction($tmpService->getDescription(),'service','modify',$tmpService->getNagiosHostTemplate()->getName(),'hosttemplate');
					}
				}
			}
			parent::save($con);	// Okay, we've saved
		}
	}

} // NagiosServiceTemplateInheritance
