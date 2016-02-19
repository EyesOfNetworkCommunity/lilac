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

// Lilac tools page

require_once('includes/config.inc');
print_header();

print_window_header("Tools", "100%");
?>
<ul>
	<li class="general icon-computer-add"><a href="autodiscovery.php">Auto Discovery</a><br />
	Find new devices and add them to your Lilac Configuration</li>

	<li class="general icon-package"><a href="import.php">Importer</a><br />
	Import a configuration from various sources using Import Engines.</li>
	
	<li class="general icon-server-go"><a href="export.php">Exporter</a><br />
	Export the configuration to Nagios or other targets.</li>

</ul>
<br class="clear" />
<?php
print_window_footer();

print_footer();
?>

	
	
