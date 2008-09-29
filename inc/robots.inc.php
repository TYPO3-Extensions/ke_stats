<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Christian B�lter <buelter@kennziffer.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * @author	Christian B�lter <buelter@kennziffer.com>
 * @package	TYPO3
 * @subpackage	tx_kestats
 */

// List of robots (HTTP_USER_AGENTS)

$GLOBALS['robots'] = array(/*{{{*/
	'ilial/Nutch' => 'ilial/Nutch',
	'nutch/Nutch' => 'nutch/Nutch',
	'Mirago-Test-Robot' => 'Mirago-Test-Robot',
	'www.stalkpire.de/bot' => 'stalker www.stalkpire.de',
	'PlantyNet_WebRobot' => 'PlantyNet_WebRobot',
	'SeznamBot' => 'SeznamBot',
	'TMCrawler' => 'TMCrawler',
	'PHP version tracker' => 'PHP version tracker',
	'Search Engine Optimizer Bot' => 'Search Engine Optimizer Bot',
	'tellbaby' => 'tellbaby',
	'WinPodder' => 'WinPodder',
	'sogou push spider' => 'sogou push spider',
	'LocalcomBot' => 'LocalcomBot',
	'T-H-U-N-D-E-R-S-T-O-N-E' => 'T-H-U-N-D-E-R-S-T-O-N-E',
	'Wget' => 'Wget',
	'Vagabondo' => 'Vagabondo',
	'ScSpider' => 'ScSpider',
	'Sogou web spider' => 'Sogou web spider',
	'VisBot' => 'VisBot',
	'Semager' => 'Semager',
	'GT::WWW' => 'GT::WWW',
	'HTML2JPG Blackbox' => 'HTML2JPG Blackbox',
	'LWP::Simple' => 'LWP::Simple',
	'libwww-perl' => 'libwww-perl',
	'SnapPreviewBot' => 'SnapPreviewBot',
	'FAST MetaWeb Crawler' => 'FAST MetaWeb Crawler',
	'FurlBot' => 'FurlBot',
	'OnetSzukaj' => 'OnetSzukaj, holmes',
	'iaskspider' => 'iaskspider',
	'Xenu Link Sleuth' => 'Xenu Link Sleuth',
	'Lsearch/sondeur' => 'Lsearch/sondeur',
	'Backlink-Check.de' => 'Backlink-Check.de',
	'testing of bot; mailto:ldidelot@voipgate.com' => 'Voipgate Testing of bot',
	'Powermarks' => 'Powermarks',
	'PEAR HTTP_Request class' => 'PEAR HTTP_Request class',
	'metatagsdir' => 'metatagsdir',
	'SynooBot' => 'SynooBot',
	'http://www.boitho.com/dcbot.html' =>  'Boitho Bot',
	'http://www.pingdom.com' => 'Pingdom Website Monitor',
	'ShopWiki' => 'ShopWiki',
	'OmniExplorer_Bot' => 'OmniExplorer',
	'larbin' => 'Larbin',
	'IRLbot' => 'IRLbot',
	'Speedy Spider' => 'Speedy Spider',
	'envolk' => 'Envolk',
	'JobRoboter' => 'JobRoboter',
	'cfetch' => 'cfetch',
	'SBIder' => 'SBIder',
	'CazoodleBot' => 'CazoodleBot',
	'Jyxobot/1' => 'Jyxobot/1',
	'Python-urllib' => 'Python-URLLib',
	'jobs.de-Robot' => 'jobs.de-Robot',
	'Baiduspider' => 'Baiduspider',
	'Accoona-AI-Agent' => 'Accoona-AI-Agent',
	'OutfoxBot'	=> 'OutfoxBot',
	'ICCrawler'	=> 'ICCrawler',
	'BecomeBot'	=> 'BecomeBot',
	'Yahoo! Mindset' => 'Yahoo! Mindset',
	'Metasearch Crawler' => 'Metasearch Crawler',
	'Factbot' => 'Factbot',
	'WebCorp' => 'WebCorp',
	'URI::Fetch' => 'URI::Fetch',
	'NG-Search'	=> 'NG-Search',
	'sogou spider' => 'Sogou Spider',
	'ConveraCrawler' => 'ConveraCrawler',
	'TurnitinBot' => 'TurnitinBot',
	'SurveyBot'	=> 'SurveyBot',
	'yahoo! slurp' => 'Yahoo! Slurp',
	'Yahoo! Slurp' => 'Yahoo! Slurp',
	'googlebot' => 'Googlebot',
	'Googlebot' => 'Googlebot',
	'AdsBot-Google' => 'Google AdsBot',
	'msnbot-media' => 'MSNBot-Media',
	'msnbot' => 'MSNBot',
	'seekbot' => 'SeekBot',
	'ichiro' => 'Ichiro',
	'psbot' => 'PSBot',
	'snapbot' => 'Snapbot',
	'gigabot' => 'Gigabot',
	'Gigabot' => 'Gigabot',
	'shim-crawler' => 'Shim-Crawler',
	'Shim-Crawler' => 'Shim-Crawler',
	'sproose' => 'Sproose',
	'exabot' => 'exabot',
	'ask jeeves' => 'Ask Jeeves/Teoma',
	'Ask Jeeves/Teoma' => 'Ask Jeeves/Teoma',
	'gonzo' => 'Gonzo',
	'bot/1.0' => 'bot/1.0',
	'mj12bot' => 'MJ12Bot',
	'MJ12bot' => 'MJ12Bot',
	'surveybot' => 'Surveybot',
	'pingdom gigrib' => 'Pingdom Gigrib',
	'hl_ftien_spider' => 'hl_ftien_spider',
	'jyxobot' => 'jyxobot',
	'iccrawler' => 'iccrawler',
	'voyager' => 'Voyager',
	'turnitinbot'=> 'Turnitinbot',
	'francis' => 'Francis',
	'zyborg' => 'zyborg',
	'ia_archiver' => 'ia_archiver',
	'snoopy' => 'Snoopy',
	'Snoopy' => 'Snoopy',
	'voilabot' => 'Voilabot',
	'java/'	=> 'Java',
	'Java/'	=> 'Java',
	'webcapture' => 'Webcapture',
	'webcorp' => 'Webcorp',
	'wwwster' => 'WWWster',
	'findlinks' => 'Findlinks',
	'nextgensearchbot' => 'Nextgensearchbot',
	'gsitecrawler' => 'gsitecrawler',
	'w3c_validator' => 'w3c_validator',
	'W3C_Validator'	=> 'W3C_Validator',
	'suchbaer.de' => 'suchbaer.de',
	'EmeraldShield.com Web Spider' => 'EmeraldShield.com Web Spider',
	'DomaindateiSpider' => 'DomaindateiSpider',
	'POE-Component-Client-HTTP'	=> 'POE-Component-Client-HTTP',
	'squidclamav_redirector' => 'squidclamav_redirector',
	'winhttp.winhttprequest' => 'WinHttp.WinHttpRequest',
	'WinHttp.WinHttpRequest' => 'WinHttp.WinHttpRequest',
	'almaden.ibm.com/cs/crawler' => 'almaden.ibm.com/cs/crawler',
	'microsoft url control' => 'Microsoft URL Control',
	'Microsoft URL Control' => 'Microsoft URL Control',
	'just another crawler' 	=> 'Just Another Crawler',
	'sensis web crawler' => 'Sensis Web Crawler',
	'Sensis Web Crawler' => 'Sensis Web Crawler',
	'west wind internet protocols' => 'West Wind Internet Protocols',
	'West Wind Internet Protocols' => 'West Wind Internet Protocols',
	'Mediapartners-Google' => 'Mediapartners-Google',
	'http://www.globalspec.com/Ocelli' => 'Ocelli',
	'SquidClamAV_Redirector' => 'SquidClamAV Redirector',
	'WebAlta Crawler/' => 'WebAlta Crawler',
	'Toplistbot' => 'Toplistbot',
	'shelob v1.0' => 'shelob v1.0',
	'EnaBot/' => 'EnaBot',
	'OpenAcoon' => 'OpenAcoon (www.openacoon.de)',
	'll_bot/Nutch' => 'll_bot/Nutch (LinkLift Web Crawler)',
	'Google-Sitemaps' => 'Google-Sitemaps'
);/*}}}*/

?>
