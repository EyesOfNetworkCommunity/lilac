#!/bin/sh

# define path
eondir="/srv/eyesofnetwork"
datadir="${eondir}/lilac"
lilacdb="lilac"
eonconfdir="/srv/eyesofnetworkconf/lilac"

# create the lilac database
mysqladmin -u root --password=root66 create ${lilacdb}

# create the database content
mysql -u root --password=root66 ${lilacdb} < ${eonconfdir}/lilac-eon.sql

# start the services
/etc/init.d/httpd restart   > /dev/null 2>&1

