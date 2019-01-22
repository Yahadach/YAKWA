require_once 'vendor/autoload.php';
//Creer environnement TWIG
$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader);
