<?php
$ldap_dn = "cn=admin,dc=example,dc=com";
$ldap_dn2 = "cn=user-group,ou=user,dc=example,dc=com";
$ldap_pass = "root";
$dn = "dc=example,dc=com";

$ldap_con = ldap_connect("192.168.100.1",389);
ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);



$host = "localhost";
$user = "radius";
$pass = "mysqlsecret";
$name = "radius";
 
$koneksi = mysql_connect($host, $user, $pass) ;
mysql_select_db($name, $koneksi);
?>
