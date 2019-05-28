<?php
/**
 * Faq module config.
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 */
return [
	'treeArticleLimit' => [
		'default' => 50,
		'description' => 'Article limit in the tree window',
		'validation' => function () {
			$arg = func_get_arg(0);
			return $arg && \App\Validator::naturalNumber($arg);
		}
	],
];