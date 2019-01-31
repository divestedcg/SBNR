<?php

//General
$SBNR_GEN_DOMAIN = "example.tld";
$SBNR_GEN_ONE_PAGE = false;
$SBNR_GEN_DARKMODE = true;

//Footer
$SBNR_FOOTER_LEGAL = true;
$SBNR_FOOTER_POWEREDBY = true;

//Obfuscation
$SNBR_OBF_MINIFY = true;
$SBNR_OBF_DISABLE_CACHE = false;
$SBNR_OBF_DISABLE_DEVTOOLS = false;
$SBNR_OBF_DISABLE_RIGHT_CLICK = false;

//Analytics - Custom
$SBNR_ANALYTICS_ENABLED = false;
$SBNR_ANALYTICS_CUSTOM_PATH = "fragments/analytics.html";

//Analytics - Shadow
$SBNR_SHADOW_ENABLED = false;
$SBNR_SHADOW_BASIC = true;
$SBNR_SHADOW_INSTANCE = "https://shadow.example.tld/shadow.php";
$SBNR_SHADOW_LANDSCAPE = "SNBR_TEST";

//Security
$SBNR_SEC_FILE_UPLOADS = "Off";
$SBNR_SEC_MAX_POST_SIZE = "2K";
$SBNR_SEC_SESSION_COOKIE_NAME = "PHPSESSID";

//Contact form handler
$SBNR_CONTACT_ENABLED = false; //prevent request handling
$SBNR_CONTACT_SENDXMPP_RECEIPENT = "contact@example.tld";
$SBNR_CONTACT_SENDXMPP_CONFIG = "/var/www/secrets/sender_account.config";
$SBNR_CONTACT_GEOIP = false; //requires mod_maxminddb
$SBNR_CONTACT_MESSAGE_PREFIX_LENGTH = 3;
$SBNR_CONTACT_MAX_LENGTH_NAME = 30;
$SBNR_CONTACT_MIN_LENGTH_PHONE_NUMBER = 7; //000-0000
$SBNR_CONTACT_MAX_LENGTH_PHONE_NUMBER = 12;//1-000-000-0000
$SBNR_CONTACT_MAX_LENGTH_MESSAGE = 500;

//Payments - Stripe
$SBNR_STRIPE_ENABLED = false;
$SBNR_STRIPE_KEY_PRIVATE = "";

?>
