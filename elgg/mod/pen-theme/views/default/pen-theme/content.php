<?php

$guid = elgg_get_logged_in_user_guid();

$options = [];

$options['relationship_pairs'] = [
	[ 'relationship' => 'friend', 'relationship_guid' => $guid, 'inverse_relationship' => false, ],
];

//label for filter (how to?)
//filter dropdown (elgg-river-selector, elgg-field-input)

echo elgg_list_river($options);
?>
