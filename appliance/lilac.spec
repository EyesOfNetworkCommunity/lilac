Summary: Web configuration tool for nagios
Name: lilac
Version: 3.0
Release: 6.eon
License: GPL
Group: Applications/System
URL: http://www.lilacplatform.com/

Source: https://github.com/EyesOfNetworkCommunity/%{name}/archive/master.tar.gz#/%{name}-%{version}.tar.gz

Requires: httpd, mariadb-server, php, php-mysql, php-pear, php-process, php-xml, nagios >= 3.0, nmap

BuildRoot: %{_tmppath}/%{name}-%{version}-%{release}-root

# define path
%define eondir 		/srv/eyesofnetwork
%define eonconfdir	/srv/eyesofnetworkconf/%{name}
%define datadir 	%{eondir}/%{name}

%description
The Lilac Platform is a collection of tools to enhance existing open source monitoring applications, written by Lilac Networks. 
Currently the focus is on the Lilac Configurator, a configuration tool written to configure Nagios, a popular Network monitoring application which features:

* Enhanced Nagios timeperiod support
* Multiple template inheritance
* Host templates able to contain services, dependencies, escalations
* Importer which can import existing Nagios configurations and import from a Fruity installation
* Exporter with Nagios process control and backup existing configuration files
* Auto-Discovery tool to quickly add your infrastructure into your Nagios installation

%prep
%setup -q -n %{name}-master

%install
cd ..
rm -rf %{buildroot}
install -d -m0755 %{buildroot}%{datadir}
install -d -m0755 %{buildroot}%{_sysconfdir}/httpd/conf.d
cp -afpvr %{name}-master/* %{buildroot}%{datadir}
install -d -m0755 %{buildroot}%{eonconfdir}
cp -afpvr %{name}-master/appliance/* %{buildroot}%{eonconfdir}
cp -afpv %{name}-master/appliance/%{name}.conf  %{buildroot}%{_sysconfdir}/httpd/conf.d
rm -rf %{buildroot}%{datadir}/appliance

%post

%clean
rm -rf %{buildroot}

%files
%{eonconfdir}
%defattr(-, nagios, eyesofnetwork, 0755)
%{datadir}
%defattr(-, root, root, 0644)
%{_sysconfdir}/httpd/conf.d/lilac.conf

%changelog
* Fri Oct 05 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-6.eon
- Fix : add hostgroup to host display
- Fix export : add_service with host command parameters

* Tue Jul 17 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-5.eon
- Fix export : copy only necessary files when using diff export 
- Fix export : add + to merge inheriantes of contacts, contactgroups, hostgroups and servicegroups
- Fix export : use correct function to export contact_groups 
- Fix export : fix host rename 

* Mon Jul 02 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-4.eon
- Fix export : notifications options in service templates 

* Tue Jun 12 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-3.eon
- Fix export : service deletion
- Fix export : create services in hosts when templates modified
- Fix export : empty command in objects

* Mon Jun 04 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-2.eon
- fix command parameters inheritance

* Tue May 29 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-1.eon
- add appliance folder

* Mon May 28 2018 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 3.0-0.eon
- packaged for EyesOfNetwork appliance 5.2

* Thu Jan 19 2017 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.5-1.eon
- packaged for EyesOfNetwork appliance 5.1

* Mon Jul 04 2016 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.5-0.eon
- new bootstrap look

* Mon May 09 2016 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-5.eon
- various css fixes

* Tue May 19 2015 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-4.eon
- xml importer exceptions and options fix

* Mon May 12 2014 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-3.eon
- xml importer options

* Mon Jan 06 2014 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-2.eon
- display_name if null fix
- nmap add all host fix

* Thu Jul 18 2013 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-1.eon
- Template instead of Service To Inherit From in add service page fix

* Wed Jun 19 2013 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.4-0.eon
- packaged for EyesOfNetwork appliance 4.0
- add_host with templates
- add_service with templates, commands and arguments 

* Tue Jan 22 2013 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-6.eon
- performance templates max size 500

* Mon Jul 30 2012 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-5.eon
- set display_name null if not set fix

* Tue May 29 2012 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-4.eon
- eon_notifier commands added
- set display_name null if not set
- $user$ order in resources page fix

* Mon Feb 27 2012 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-3.eon
- HostTemplate ContactMembers import fix

* Fri Sep 16 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-2.eon
- import/export job next id display added
- autodiscovery/import/export job delete confirmation fix

* Mon Aug 01 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-1.eon
- multiple hostgroups/parents/templates disassociations added

* Wed Jul 20 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.3-0.eon
- multiple hostgroups/parents/templates associations added
- ajax search on object associations added
- modify on check command parameters added

* Wed May 11 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.2-1.eon
- body onload checkbox fix
- reset.css * fix

* Thu Apr 21 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.2-0.eon
- exports / imports console clients added
- contactgroups hover fix
- collapse css fix

* Sun Apr 17 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.1-0.eon
- objects exports / imports added
- multiple actions on search results added
- hover on selections added

* Fri Feb 18 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-6.eon
- community website update

* Fri Jan 07 2011 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-5.eon
- confirmation message syntax fix

* Mon Dec 13 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-4.eon
- host parent fix

* Sun Nov 07 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-3.eon
- command description in service parameters added
- service template add contact fix
- host add contactgroup fix 

* Thu Oct 21 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-2.eon
- nagios importer fix
- address in network view

* Mon Sep 06 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-1.eon
- autodiscovery.php templates order fix
- timeperiods clone fix

* Wed Jul 28 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 2.0-0.eon
- packaged for EyesOfNetwork appliance 2.2
- delete and clone on multiple objects
- livestatus configuration
- fruity & nagios importers fix

* Tue Feb 23 2010 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 1.0.3-1.eon
- nagios_only export job 
- fruity importer hostgroups fix
- hosts.php fix
- command name null fix
- order by name fix

* Tue Oct 13 2009 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 1.0.3-0.eon
- 1.0.2 to 1.0.3

* Mon Apr 20 2009 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 1.0.2-0.eon
- 1.0.1 to 1.0.2

* Wed Apr 15 2009 Jean-Philippe Levy <jeanphilippe.levy@gmail.com> - 1.0.1-0.eon
- packaged for EyesOfNetwork 2.0
