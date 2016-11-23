<?php
/**
 * Created by ${PRODUCT_NAME}.
 * User: ${USER}
 * Date: ${DATE}
 * Time: ${TIME}
 */
 
 // set up twig
require_once '../vendor/autoload.php';
Twig_Autoloader::register();
 
\$loader = new Twig_Loader_Filesystem('../view');   // set folder to html/twig files
\$twig = new Twig_Environment(\$loader, array(
'auto_reload' => true
));
\$template = \$twig->loadTemplate('XXXXX.html.twig'); // actual twig file


// set up POST request
\$URI = 'XXXXXXXXXXXXXXXXXX';                      // URL to REST API
\$req = curl_init(\$URI);                          // initlize curl
curl_setopt(\$req, CURLOPT_CUSTOMREQUEST, "POST"); // request method
curl_setopt(\$req, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen(\$json))          // insert header i.e mime-type + length
);
curl_setopt(\$req, CURLOPT_POSTFIELDS, \$json);   // insert data in body
curl_setopt(\$req, CURLOPT_RETURNTRANSFER, true); // do not display json

\$result = curl_exec(\$req); // sends the request and get result




\$twigContent = "";                     // fill in the content for the page
echo \$template->render(\$twigContent); // let twig file generate html


 
 
 
 
 