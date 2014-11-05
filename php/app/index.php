<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$resources = json_decode(file_get_contents($container['PHP_PATH'] . 'includes/resources.json'), true);

//效果图
foreach($resources as $catKey => $cat) {
    foreach($cat as $groupKey => $group) {
        if($groupKey == 'pluginshot') {
            foreach($group as $pageKey => $page) {
                $resources[$catKey][$groupKey][$pageKey]["effect"] = $container["path"]["pack"] . "{$catKey}/{$groupKey}/{$page['pageId']}/effect.gif";
            }
        }
    }
}

echo $container['twig']->render('app/index.html', array_merge($tplArray, array(
        'pagecode' => 'index',
        'resources' => $resources
    )));

?>