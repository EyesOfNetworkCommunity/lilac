<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_service_template' table.
 *
 * Nagios Service Template
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceTemplatePeer extends BaseNagiosServiceTemplatePeer {
	
    static public function getByName($name) {
        $c = new Criteria();
        $c->add(NagiosServiceTemplatePeer::NAME, $name);
        $c->setIgnoreCase(true);
        $template = NagiosServiceTemplatePeer::doSelectOne($c);
        if(!$template) 
        	return false;
        return $template;
    }

} // NagiosServiceTemplatePeer
