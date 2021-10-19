UPDATE nagios_host_template SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=13' WHERE name = 'GENERIC_HOST';
UPDATE nagios_service SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=12' WHERE id IN (185, 179, 177);
UPDATE nagios_service SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=3' WHERE id IN (186, 180, 178);
UPDATE nagios_service SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=5' WHERE id IN (187, 181);
UPDATE nagios_service SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=1' WHERE id IN (192, 195, 196, 200, 204);
UPDATE nagios_service_template SET action_url = '/grafana/d-solo/$_HOSTDASHID$/$HOSTNAME$-dashboard?orgId=1&panelId=1' WHERE name IN ('GENERIC_GRAPH', 'TRAFFIC');
UPDATE nagios_main_configuration SET check_result_path = '/var/spool/nagios/checkresults/';
