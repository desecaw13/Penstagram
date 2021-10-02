<?php

$guid = elgg_get_logged_in_user_guid();

$options = [];

$options['relationship_pairs'] = [
	[ 'relationship' => 'friend', 'relationship_guid' => $guid, 'inverse_relationship' => false, ],
];

echo elgg_list_river($options);
?>
