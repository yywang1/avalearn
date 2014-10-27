<?
include_once __DIR__ . '/includes/global.init.php';

$cat_name = isset($_REQUEST['cat_name']) && $_REQUEST['cat_name'] ? $_REQUEST['cat_name'] : '';
$page_id = isset($_REQUEST['page_id']) && $_REQUEST['page_id'] ? $_REQUEST['page_id'] : '';

/*
//{{{ fileList
include_once __DIR__ . '/includes/processor/FileListProcessor.php';
$fileList = new FileListProcessor();
$fileList->process(array(
		'container' => $container,
		'dataKey' => 'index',
	));
$tplArray['html_fileList'] = $fileList->render(array(
		'container' => $container,
		'extendClass' => ' separated',
	));
//}}}

//{{{ hotSearch
$tplArray['modClass'] = 'hotSearch';
//}}}
*/



$tplArray['title'] = 'Ava 的网站 - Ava is learning';
$tplArray['main'] = $container['twig']->render('articles/css/page1.html');
echo $container['twig']->render('base.html', $tplArray);

?>