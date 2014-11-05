<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$cat_name = reset(explode('_', $pid));
$page_id = end(explode('_', $pid));

$tplArray['title'] = 'Ava 的网站 - Ava is learning';
$tplArray['pack'] = $container['path']['pack'] . "{$cat_name}/plugin/{$page_id}/";
$tplArray['main'] = $container['twig']->render("{$cat_name}/plugin/{$page_id}/index.html", $tplArray);
echo $container['twig']->render('base.html', $tplArray);

?>