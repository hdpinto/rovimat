<?php
//define("CONSTANT", "Hello world.");
//return constants using: constant("NAME")
//define("", "");
//constant("");

define("VERSION_NUMBER", 0.01);

//Set up your SMTP server settings here
define("SMTP_HOST", "mail.sneakyrudolph.com"); //Your smtp hostname
define("SMTP_PORT", 26);
define("SMTP_USERNAME", "exchange@sneakyrudolph.com"); //Your SMTP username
define("SMTP_PASS", "P@ssw0rd"); //smtp password
define("SMTP_FROM", "exchange@sneakyrudolph.com"); //Your "from" email address
define("MAIL_NAME", "Sneaky Rudolph"); //Your service name
define("SMTP_AUTH", true); //Auth required for SMTP, true or false
define("HOME_URL", "http://localhost/calc"); //The app's installation domain and path/subdomain, no trailing end '/'


//Database Connect here
define("DB_TYPE", "mysql"); //Currently only mysql is supported
define("DB_USER", "rudy_admin"); //Username
define("DB_PASS", ";bYXq2dPPhH12+w"); //Password
define("DB_NAME", "rudy_db"); //Database name,
define("DB_PF", ""); //prefix for table names (include underscore, "rudy_"), leave blank for none
define("DB_PORT", "3306"); //Database port, default: 3306
define("DB_HOST", "localhost"); //Database host, default: localhost

?> 