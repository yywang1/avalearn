<?
include_once __DIR__ . '/includes/global.init.php';

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
$tplArray['pagecode'] = 'index';
$tplArray['main'] = $container['twig']->render('pages/index.html');
echo $container['twig']->render('base.html', $tplArray);

?>