<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2007 Taylor Dondich

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

// Lilac About Page

require_once('includes/config.inc');
print_header();

print_window_header("About Eonweb Configurator", "100%");
?>
<p>
<h2>Eonweb Configurator <?php echo LILAC_VERSION;?></h2>
The community site is available at <a href="http://www.eyesofnetwork.com">www.eyesofnetwork.com</a>.  
</p>
<p>
<h2>Statistics</h2>
<table class="statistics">
	<tr>
		<td><strong>Total Nagios Commands:</strong></td>
		<td><?php echo NagiosCommandPeer::doCount(new Criteria());?></td>
	</tr>
	<tr class="odd">
		<td><strong>Total Nagios Time Periods:</strong></td>
		<td><?php echo NagiosTimeperiodPeer::doCount(new Criteria());?></td>
	</tr>
	<tr>
		<td><strong>Total Nagios Contacts:</strong></td>
		<td><?php echo NagiosContactPeer::doCount(new Criteria());?></td>
	</tr>
	<tr class="odd">
		<td><strong>Total Nagios Contact Groups:</strong></td>
		<td><?php echo NagiosContactGroupPeer::doCount(new Criteria());?></td>
	</tr>
	<tr>
		<td><strong>Total Nagios Host Groups:</strong></td>
		<td><?php echo NagiosHostgroupPeer::doCount(new Criteria());?></td>
	</tr>
	<tr class="odd">
		<td><strong>Total Nagios Service Groups:</strong></td>
		<td><?php echo NagiosServiceGroupPeer::doCount(new Criteria());?></td>
	</tr>
	<tr>
		<td><strong>Total Nagios Host Templates:</strong></td>
		<td><?php echo NagiosHostTemplatePeer::doCount(new Criteria());?></td>
	</tr>
	<tr class="odd">
		<td><strong>Total Nagios Service Templates:</strong></td>
		<td><?php echo NagiosServiceTemplatePeer::doCount(new Criteria());?></td>
	</tr>
	<tr>
		<td><strong>Total Nagios Hosts:</strong></td>
		<td><?php echo NagiosHostPeer::doCount(new Criteria());?></td>
	</tr>
	<tr class="odd">
		<td><strong>Total Nagios Services:</strong></td>
		<td><?php echo NagiosServicePeer::doCountAll();?></td>
	</tr>

</table>

<?php
print_window_footer();

print_footer();

