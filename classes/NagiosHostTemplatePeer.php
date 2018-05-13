<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_host_template' table.
 *
 * Nagios Host Template
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostTemplatePeer extends BaseNagiosHostTemplatePeer {

    static public function getByName($name) {
        $c = new Criteria();
        $c->add(NagiosHostTemplatePeer::NAME, $name);
        $c->setIgnoreCase(true);
        $template = NagiosHostTemplatePeer::doSelectOne($c);
        if(!$template)
        	return false;
        return $template;
    }

} // NagiosHostTemplatePeer
