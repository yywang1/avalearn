<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$resources = json_decode(file_get_contents($container['PHP_PATH'] . 'includes/resources.json'), true);

echo $container['twig']->render('app/index.html', array_merge($tplArray, array(
        'pagecode' => 'index',
        'resources' => $resources
    )));

?>