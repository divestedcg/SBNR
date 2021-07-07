<?php

//General
$SBNR_DOMAIN_PRIMARY = "example.tld";
$SBNR_DOMAIN_ALLOWLIST = array($SBNR_DOMAIN_PRIMARY);
$SBNR_GEN_ONE_PAGE = false;
$SBNR_GEN_DARKMODE = true;
$SBNR_CAPTCHA_STANDALONE_ENABLED = false;
$SBNR_CACHABLE_PAGES = array();

//Footer
$SBNR_FOOTER_LEGAL = true;
$SBNR_FOOTER_POWEREDBY = true;

//Obfuscation
$SNBR_OBF_MINIFY = true;
$SBNR_OBF_DISABLE_CACHE = false;
$SBNR_OBF_DISABLE_CLIPBOARD = false;
$SBNR_OBF_DISABLE_DEVTOOLS = false;
$SBNR_OBF_DISABLE_HIGHLIGHT = false;
$SBNR_OBF_DISABLE_RIGHT_CLICK = false;

//Analytics - Custom
$SBNR_ANALYTICS_ENABLED = false;
$SBNR_ANALYTICS_CUSTOM_PATH = "fragments/analytics.html";

//Analytics - Shadow
$SBNR_SHADOW_ENABLED = false;
$SBNR_SHADOW_BASIC = true;
$SBNR_SHADOW_INSTANCE = "https://shadow.example.tld";
$SBNR_SHADOW_LANDSCAPE = "SNBR_TEST";

//Security
$SBNR_CAPTCHA_WALL = false;
$SBNR_CAPTCHA_WALL_JS_REQUIRED = false;
$SBNR_CAPTCHA_WALL_PAGES = array();
$SBNR_SEC_HTTPS_ONLY = false; //Enable if using HTTPS
$SBNR_SEC_CLIENT_HARDENING = true; //Disable if globally added by webserver
$SBNR_SEC_FILE_UPLOADS = "Off";
$SBNR_SEC_MAX_POST_SIZE = "2K";
$SBNR_SEC_SESSION_COOKIE_NAME = "PHPSESSID";
$SBNR_SEC_CSRF_PER_REQUEST = true; //Disable if CSRF tokens are needed and users are likely to have multiple windows open

//Contact Form Handler
$SBNR_CONTACT_ENABLED = false;
$SBNR_CONTACT_CAPTCHA = true && extension_loaded('gd'); //Require a captcha to be solved
$SBNR_CONTACT_OUTPUT = "TEXT"; //Choices: TEXT, XMPP
$SBNR_CONTACT_SENDXMPP_RECEIPENT = "contact@example.tld";
$SBNR_CONTACT_SENDXMPP_CONFIG = "/var/www/secrets/sender_account.config";
$SBNR_CONTACT_TEXT_FILE = "/var/www/secrets/contact_responses-" . $SBNR_DOMAIN_PRIMARY . ".log";
$SBNR_CONTACT_GEOIP = false; //requires mod_maxminddb
$SBNR_CONTACT_MESSAGE_PREFIX_LENGTH = 3;
$SBNR_CONTACT_MAX_LENGTH_NAME = 32;
$SBNR_CONTACT_MAX_LENGTH_EMAIL = 64;
$SBNR_CONTACT_MAX_LENGTH_PHONE_NUMBER = 12; //1-000-000-0000
$SBNR_CONTACT_MAX_LENGTH_MESSAGE = 512;

//Payment Handler - Stripe
$SBNR_STRIPE_ENABLED = false;
$SBNR_STRIPE_MAX_CHARGE = 2000; //$20

?>
