<?php
/**
 * Created by ${PRODUCT_NAME}.
 * User: ${USER}
 * Date: ${DATE}
 * Time: ${TIME}
 */
 
require_once '../vendor/autoload.php';
Twig_Autoloader::register();
 
\$loader = new Twig_Loader_Filesystem('../view');
\$twig = new Twig_Environment(\$loader, array(
'auto_reload' => true
));
\$template = \$twig->loadTemplate('XXXXX.html.twig');

\$twigContent = ""; // fill in the content for the page
echo \$template->render(\$twigContent);


 
 
 
 
 