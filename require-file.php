<?php
define('PATH_ROOT', __DIR__ );
require PATH_ROOT.'/config.php';
require PATH_ROOT.'/function.php';
require PATH_ROOT.'/lang-site/setting.php';
require PATH_ROOT.'/core.php';
require PATH_ROOT.'/system-info.php';

require PATH_ROOT.'/includes/html/left-sidebar.php';
require PATH_ROOT.'/includes/html/navbar-header.php';

require PATH_ROOT.'/includes/html/footer.php';

require PATH_ROOT.'/includes/html/form/auth.php';
require PATH_ROOT.'/includes/html/form/register-user.php';
require PATH_ROOT.'/includes/html/form/tarif-normativ/add/tarif.php';
require PATH_ROOT.'/includes/html/form/tarif-normativ/add/normativ.php';
require PATH_ROOT.'/includes/html/form/meter/add/penance.php';
require PATH_ROOT.'/includes/html/form/profile/setting.php';

require PATH_ROOT.'/includes/php-script/auth.php';
require PATH_ROOT.'/includes/php-script/register-user.php';
require PATH_ROOT.'/includes/php-script/tarif-normativ/add/tarif.php';
require PATH_ROOT.'/includes/php-script/tarif-normativ/add/normativ.php';
require PATH_ROOT.'/includes/php-script/profile/setting.php';
require PATH_ROOT.'/includes/php-script/meter/add/penance.php';
?>
