<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$pidArray = explode('_', $pid);
$cat_name = reset($pidArray);
$page_id = end($pidArray);

$tplArray['title'] = getPageTitle($container, $cat_name, $page_id);
$tplArray['res_path'] = $container['WEB_ROOT'] . "res/{$cat_name}/article/";

$article = $container['twig']->render("{$cat_name}/article/{$page_id}.html", $tplArray);
$tplArray['main'] = '<article class="panel article">' . $article . '</article>';

echo $container['twig']->render('webapp/base.html', $tplArray);

?>