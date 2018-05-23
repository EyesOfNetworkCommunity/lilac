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

// Lilac index page

require_once('includes/config.inc');

if(file_exists(dirname(__FILE__) . "/NOTICE")) {
	// Notice exists, we should display it here.
	$warning = file_get_contents(dirname(__FILE__) . "/NOTICE");
}


print_header();

print_window_header("General Configuration", "100%");




?>
<ul>
	<li class="general icon-monitor-edit"><a href="main.php">Nagios Daemon Configuration</a><br />
	Modify the general configuration of the Nagios Daemon</li>
	<li class="general icon-application-home"><a href="cgi.php">Nagios Web Interface Configuration</a><br />
	Modify the configuration of the Web Interface for Nagios</li>
	<li class="general icon-book"><a href="resources.php">Nagios Resources</a><br />
	Modify the collection of resources to use as Nagios Macros</li>
	<li class="general icon-application-lightning"><a href="commands.php">Nagios Commands</a><br />
	Nagios commands are used to check on devices, notifications and pro-active problem recovery.</li>
	<li class="general icon-clock"><a href="timeperiods.php">Time Periods</a><br />
	Time Periods are used to designate ranges of times and exceptions</li>
	<li class="general icon-user"><a href="contacts.php">Contacts</a><br />
	Manage the collection of people who use the monitoring system</li>
	<li class="general icon-group"><a href="contactgroups.php">Contact Groups</a><br />
	Contact groups are collections of contacts which are responsible for hosts and services in the system</li>
	<li class="general icon-server-link"><a href="hostgroups.php">Host Groups</a><br />
	Host Groups are collections of hosts which share similar characteristics</li>
	<li class="general icon-brick"><a href="servicegroups.php">Service Groups</a><br />
	Service groups are collections of services which share similar characteristics</li>

</ul>
<br class="clear" />
<?php
print_window_footer();

print_footer();
?>

	
	
