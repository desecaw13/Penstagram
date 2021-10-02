<?php

$user = elgg_get_logged_in_user_entity();

if ($user) {
	$title = elgg_echo('welcome:user', [$user->getDisplayName()]);
	$content = elgg_view('pen-theme/content', $vars);
	//$sidebar = null;
} else {
	$title = elgg_echo('welcome');
	$content = elgg_view('core/account/login_box');
	//$sidebar = elgg_view('core/account/login_box');
}

echo elgg_view_page(null, [
	'title' => $title,
	'content' => $content,
	//'sidebar' => $sidebar,
	//'filter_id' => 'index',
]);
