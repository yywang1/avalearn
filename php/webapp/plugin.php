<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$cat_name = reset(explode('_', $pid));
$page_id = end(explode('_', $pid));

$tplArray['title'] = getPageTitle($container, $cat_name, $page_id);
$tplArray['sub_twig'] = "{$cat_name}/plugin/{$page_id}/";
$tplArray['res_path'] = $container['WEB_ROOT'] . "res/{$cat_name}/plugin/{$page_id}/";

$article = $container['twig']->render("{$cat_name}/plugin/{$page_id}/index.html", $tplArray);
$tplArray['main'] = '<div class="panel plugin">' . $article . '</div>';

echo $container['twig']->render('webapp/base.html', $tplArray);

?>