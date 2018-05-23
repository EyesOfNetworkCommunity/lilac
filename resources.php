<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2018 EyesOfNetwork Team

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
Lilac Resource
*/
include_once('includes/config.inc');

require_once('NagiosResource.php');

$resourceCfg = NagiosResourcePeer::doSelectOne(new Criteria());
if(!$resourceCfg) {
	$resourceCfg = new NagiosResource();
	$resourceCfg->save();
}

if(isset($_POST['request'])) {
	if($_POST['request'] == 'update') {	
		$resourceCfg->setUser1($_POST['resource_config']['user1']);
		$resourceCfg->setUser2($_POST['resource_config']['user2']);
		$resourceCfg->setUser3($_POST['resource_config']['user3']);
		$resourceCfg->setUser4($_POST['resource_config']['user4']);
		$resourceCfg->setUser5($_POST['resource_config']['user5']);
		$resourceCfg->setUser6($_POST['resource_config']['user6']);
		$resourceCfg->setUser7($_POST['resource_config']['user7']);
		$resourceCfg->setUser8($_POST['resource_config']['user8']);
		$resourceCfg->setUser9($_POST['resource_config']['user9']);
		$resourceCfg->setUser10($_POST['resource_config']['user10']);
		$resourceCfg->setUser11($_POST['resource_config']['user11']);
		$resourceCfg->setUser12($_POST['resource_config']['user12']);
		$resourceCfg->setUser13($_POST['resource_config']['user13']);
		$resourceCfg->setUser14($_POST['resource_config']['user14']);
		$resourceCfg->setUser15($_POST['resource_config']['user15']);
		$resourceCfg->setUser16($_POST['resource_config']['user16']);
		$resourceCfg->setUser17($_POST['resource_config']['user17']);
		$resourceCfg->setUser18($_POST['resource_config']['user18']);
		$resourceCfg->setUser19($_POST['resource_config']['user19']);
		$resourceCfg->setUser20($_POST['resource_config']['user20']);
		$resourceCfg->setUser21($_POST['resource_config']['user21']);
		$resourceCfg->setUser22($_POST['resource_config']['user22']);
		$resourceCfg->setUser23($_POST['resource_config']['user23']);
		$resourceCfg->setUser24($_POST['resource_config']['user24']);
		$resourceCfg->setUser25($_POST['resource_config']['user25']);
		$resourceCfg->setUser26($_POST['resource_config']['user26']);
		$resourceCfg->setUser27($_POST['resource_config']['user27']);
		$resourceCfg->setUser28($_POST['resource_config']['user28']);
		$resourceCfg->setUser29($_POST['resource_config']['user29']);
		$resourceCfg->setUser30($_POST['resource_config']['user30']);
		$resourceCfg->setUser31($_POST['resource_config']['user31']);
		$resourceCfg->setUser32($_POST['resource_config']['user32']);
		$resourceCfg->save();	
	

		$success = "Updated Resource Configuration.";
	}
}




print_header("Environment Resources");

	print_window_header("Nagios Resources", "100%", "center");
		?>
		Nagios resources are used as macros when defining Nagios commands.  Text strings which are commonly used are good examples of 
		resources.  These include passwords, file paths and usernames.<br><br>
		<form name="resource_config[resource_config_form" method="post" action="resources.php">
		<input type="hidden" name="request" value="update" />
		<table width="100%" cellspacing="10" align="center" border="0">
		<tr>
			<td width="50%" valign="top">
			<b>$USER1$:</b> <input type="text" size="60" name="resource_config[user1]" value="<?php echo $resourceCfg->getUser1();?>"><br />
			<br />
			
			<b>$USER2$:</b> <input type="text" size="60" name="resource_config[user2]" value="<?php echo $resourceCfg->getUser2();?>"><br />
			<br />
			
			<b>$USER3$:</b> <input type="text" size="60" name="resource_config[user3]" value="<?php echo $resourceCfg->getUser3();?>"><br />
			<br />
			
			<b>$USER4$:</b> <input type="text" size="60" name="resource_config[user4]" value="<?php echo $resourceCfg->getUser4();?>"><br />
			<br />
			
			<b>$USER5$:</b> <input type="text" size="60" name="resource_config[user5]" value="<?php echo $resourceCfg->getUser5();?>"><br />
			<br />
			
			<b>$USER6$:</b> <input type="text" size="60" name="resource_config[user6]" value="<?php echo $resourceCfg->getUser6();?>"><br />
			<br />
			
			<b>$USER7$:</b> <input type="text" size="60" name="resource_config[user7]" value="<?php echo $resourceCfg->getUser7();?>"><br />
			<br />
			
			<b>$USER8$:</b> <input type="text" size="60" name="resource_config[user8]" value="<?php echo $resourceCfg->getUser8();?>"><br />
			<br />
			
			<b>$USER9$:</b> <input type="text" size="60" name="resource_config[user9]" value="<?php echo $resourceCfg->getUser9();?>"><br />
			<br />
			
			<b>$USER10$:</b> <input type="text" size="60" name="resource_config[user10]" value="<?php echo $resourceCfg->getUser10();?>"><br />
			<br />
			
			<b>$USER11$:</b> <input type="text" size="60" name="resource_config[user11]" value="<?php echo $resourceCfg->getUser11();?>"><br />
			<br />
			
			<b>$USER12$:</b> <input type="text" size="60" name="resource_config[user12]" value="<?php echo $resourceCfg->getUser12();?>"><br />
			<br />
			
			<b>$USER13$:</b> <input type="text" size="60" name="resource_config[user13]" value="<?php echo $resourceCfg->getUser13();?>"><br />
			<br />
			
			<b>$USER14$:</b> <input type="text" size="60" name="resource_config[user14]" value="<?php echo $resourceCfg->getUser14();?>"><br />
			<br />
			
			<b>$USER15$:</b> <input type="text" size="60" name="resource_config[user15]" value="<?php echo $resourceCfg->getUser15();?>"><br />
			<br />
			
			<b>$USER16$:</b> <input type="text" size="60" name="resource_config[user16]" value="<?php echo $resourceCfg->getUser16();?>"><br />
			</td>
			<td width="50%">
			
			<b>$USER17$:</b> <input type="text" size="60" name="resource_config[user17]" value="<?php echo $resourceCfg->getUser17();?>"><br />
			<br />
			
			<b>$USER18$:</b> <input type="text" size="60" name="resource_config[user18]" value="<?php echo $resourceCfg->getUser18();?>"><br />
			<br />
			
			<b>$USER19$:</b> <input type="text" size="60" name="resource_config[user19]" value="<?php echo $resourceCfg->getUser19();?>"><br />
			<br />
			
			<b>$USER20$:</b> <input type="text" size="60" name="resource_config[user20]" value="<?php echo $resourceCfg->getUser20();?>"><br />
			<br />
			
			<b>$USER21$:</b> <input type="text" size="60" name="resource_config[user21]" value="<?php echo $resourceCfg->getUser21();?>"><br />
			<br />
			
			<b>$USER22$:</b> <input type="text" size="60" name="resource_config[user22]" value="<?php echo $resourceCfg->getUser22();?>"><br />
			<br />
			
			<b>$USER23$:</b> <input type="text" size="60" name="resource_config[user23]" value="<?php echo $resourceCfg->getUser23();?>"><br />
			<br />
			
			<b>$USER24$:</b> <input type="text" size="60" name="resource_config[user24]" value="<?php echo $resourceCfg->getUser24();?>"><br />
			<br />
			
			<b>$USER25$:</b> <input type="text" size="60" name="resource_config[user25]" value="<?php echo $resourceCfg->getUser25();?>"><br />
			<br />
			
			<b>$USER26$:</b> <input type="text" size="60" name="resource_config[user26]" value="<?php echo $resourceCfg->getUser26();?>"><br />
			<br />
			
			<b>$USER27$:</b> <input type="text" size="60" name="resource_config[user27]" value="<?php echo $resourceCfg->getUser27();?>"><br />
			<br />
	
			<b>$USER28$:</b> <input type="text" size="60" name="resource_config[user28]" value="<?php echo $resourceCfg->getUser28();?>"><br />
			<br />

			<b>$USER29$:</b> <input type="text" size="60" name="resource_config[user29]" value="<?php echo $resourceCfg->getUser29();?>"><br />
			<br />

			<b>$USER30$:</b> <input type="text" size="60" name="resource_config[user30]" value="<?php echo $resourceCfg->getUser30();?>"><br />
			<br />
			
			<b>$USER31$:</b> <input type="text" size="60" name="resource_config[user31]" value="<?php echo $resourceCfg->getUser31();?>"><br />
			<br />
			
			<b>$USER32$:</b> <input type="text" size="60" name="resource_config[user32]" value="<?php echo $resourceCfg->getUser32();?>"><br />
			<br />
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<input class="btn btn-primary" type="submit" value="Update Resource Configuration" />
			</td>
		</tr>
		</table>
		</form>
	<?php
	print_window_footer();
print_footer();
?>
