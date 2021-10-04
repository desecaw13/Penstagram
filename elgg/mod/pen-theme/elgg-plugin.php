<?php

return [
	'plugin' => [
		'name' => 'Penstagram Theme',
		'version' => '1.0.0',
	],

	'view_extensions' => [
		'elements/components.css' => [
			'pen-theme/css' => [],
		],
	],

	'theme' => [
		// shell color
		'body-background-color' => '#784591',

		// global font family  todo: add my font?
		'font-family' => 'BlinkMacSystemFont, -apple-system, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", "Helvetica", "Arial", sans-serif',

		'anchor-color' => '#000',
		'anchor-color-hover' => '#102',

		// element colors
		'text-color-soft' => '#969696',
		'text-color-mild' => '#7d7d7d',
		'text-color-strong' => '#102',
		'text-color-highlight' => '#784591',
		'background-color-soft' => '#fafafa',
		'background-color-mild' => '#e6e6ea',
		'background-color-strong' => '#cfcfd2',
		'background-color-highlight' => '#3c2248',

		'border-color-soft' => '#e6e6ea',
		'border-color-mild' => '#dcdcdc',
		'border-color-strong' => '#cfcfd2',
		'border-color-highlight' => '#3c2248',

		// messages and notices
		'state-success-font-color' => '#397f2e',
		'state-success-background-color' => '#eaf8e8',
		'state-success-border-color' => '#aadea2',

		'state-danger-font-color' => '#b94a48',
		'state-danger-background-color' => '#f8e8e8',
		'state-danger-border-color' => '#e5b7b5',

		'state-notice-font-color' => '#9656b5',
		'state-notice-background-color' => '#f0d7ff',
		'state-notice-border-color' => '#b4a9dc',

		'state-warning-font-color' => '#5b3200',
		'state-warning-background-color' => '#fcf8e4',
		'state-warning-border-color' => '#eddc7d',

		// buttons
		'button-submit-background-color' => '#3c2248',
		'button-submit-font-color' => '#ffffff',
		'button-submit-background-color-hover' => '#784591',
		'button-submit-font-color-hover' => '#ffffff',

		'button-action-background-color' => '#3c2248',
		'button-action-font-color' => '#ffffff',
		'button-action-background-color-hover' => '#784591',
		'button-action-font-color-hover' => '#ffffff',

		'button-cancel-background-color' => '#e6e6ea',
		'button-cancel-font-color' => '#3c2248',
		'button-cancel-background-color-hover' => '#cfcfd2',
		'button-cancel-font-color-hover' => '#3c2248',

		'button-delete-background-color' => '#e6e6ea',
		'button-delete-font-color' => '#3c2248',
		'button-delete-background-color-hover' => '#d33f49',
		'button-delete-font-color-hover' => '#ffffff',

		// topbar
		'topbar-background-color' => '#784591',
		'topbar-indicator' => '#faa51a',
	],
];
