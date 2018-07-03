<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'sistema_hotel');

    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
  /** caminho no server para o sistema **/
  if ( !defined('BASEURL') )
        define('BASEURL', '/sistema-hotel/');
  /** caminho do arquivo de banco de dados **/
  if ( !defined('DBAPI') )
        define('DBAPI', ABSPATH . 'inc/database.php');
/** caminhos dos templates de header e footer **/
  define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
  define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
