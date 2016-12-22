<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "cs_seo"
 *
 * Auto generated by Extension Builder 2016-04-06
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
	'title' => '[clickstorm] SEO',
	'description' => 'SEO Extension: Enables important on-page features for search engine optimization (SEO). Expands 
						the page settings and any existing records, e.g. with a preview for Google search results (SERP), 
						Open Graph, Twitter Cards and a Focus Keyword. Sitemap.xml and robots.txt handling. Support for 
						Session Tracking (Google Analytics or Piwik) and href="lang" tags. Further features are shown in
						the extension manual.',
	'category' => 'services',
	'author' => 'Angela Dudtkowski, Marc Hirdes, Andreas Kirilow - clickstorm GmbH',
	'author_email' => 'hirdes@clickstorm.de',
	'author_company' => 'clickstorm GmbH',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.8.4-dev',
	'constraints' => [
		'depends' => [
			'typo3' => '6.2.0-8.99.99',
			'php' => '5.5.0-99.99.99'
		],
		'suggests' => [
			'realurl' => ''
		],
	],
];
