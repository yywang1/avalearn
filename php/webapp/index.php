<?
include_once dirname(__DIR__) . '/includes/global.init.php';

$resources = getResources($container);

//效果图
foreach($resources as $catKey => $cat) {
    foreach($cat as $groupKey => $group) {
        if($groupKey == 'pluginshot') {
            foreach($group as $pageKey => $page) {
                $resources[$catKey][$groupKey][$pageKey]["effect"] = $container["path"]["resources"] . "{$catKey}/{$groupKey}/{$page['pageId']}/effect.gif";
            }
        }
    }
}

$tplArray['main'] = $container['twig']->render("webapp/pages/index.html", array_merge($tplArray, array('resources' => $resources)));
echo $container['twig']->render('webapp/base.html', $tplArray);

?>