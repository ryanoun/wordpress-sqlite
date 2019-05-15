# Setup
#### Copy files #### 
Simply copy all files to the root directory of your site, then modify the `wp-config.php` file with your respective site name. Then simply navigate to the site and run setup to finish installation. Use this site to see SQLite restrictions `http://dogwood.skr.jp/wordpress/sqlite-integration/`.

This is currently based on Wordpress 5.2

#### Generate and replace WordPress salts in `wp-config.php` #### 
	
~~~~
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );
~~~~

`https://api.wordpress.org/secret-key/1.1/salt/`
