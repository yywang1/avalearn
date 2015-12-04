<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$pidArray = explode('_', $pid);
$cat_name = reset($pidArray);
$page_id = end($pidArray);

$tplArray['title'] = getPageTitle($container, $cat_name, $page_id);
$tplArray['res_path'] = $container['WEB_ROOT'] . "res/{$cat_name}/pluginshot/{$page_id}/";

echo $container['twig']->render("{$cat_name}/pluginshot/{$page_id}/index.html", $tplArray);

?>