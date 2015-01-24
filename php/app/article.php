<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$pid = isset($_REQUEST['pid']) && $_REQUEST['pid'] ? $_REQUEST['pid'] : '';
$cat_name = reset(explode('_', $pid));
$page_id = end(explode('_', $pid));

$tplArray['title'] = 'Ava 的网站 - Ava is learning';

$article = $container['twig']->render("{$cat_name}/article/{$page_id}.html");
$images_path = $container["path"]["pack"] . "{$cat_name}/article/images/";
$article = str_replace('images/', $images_path ,$article);
$tplArray['main'] = $article;
echo $container['twig']->render('base.html', $tplArray);

?>