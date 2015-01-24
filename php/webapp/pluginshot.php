<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$cat_name = reset(explode('_', $pid));
$page_id = end(explode('_', $pid));

$tplArray['title'] = getPageTitle($container, $cat_name, $page_id);

$article = $container['twig']->render("{$cat_name}/pluginshot/{$page_id}.html");

//替换图片路径
//$images_path = $container["path"]["resources"] . "{$cat_name}/plugin/images/";
//$article = str_replace('images/', $images_path ,$article);

$tplArray['main'] = $article;

echo $container['twig']->render('webapp/base.html', $tplArray);

?>