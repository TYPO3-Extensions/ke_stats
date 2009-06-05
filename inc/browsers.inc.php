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

// List of browsers (HTTP_USER_AGENTS)
// First match counts, further matches are ignored, so keep the most specific
// strings at the beginning

$GLOBALS['browsers'] = array(/*{{{*/
	'MSIE 2' => 'Internet Explorer 2',
	'MSIE 3' => 'Internet Explorer 3',
	'MSIE 4' => 'Internet Explorer 4',
	'MSIE 5' => 'Internet Explorer 5',
	'MSIE 6.0' => 'Internet Explorer 6',
	'MSIE 6.1' => 'Internet Explorer 6',
	'MSIE 7.0' => 'Internet Explorer 7',
	'MSIE 8.0' => 'Internet Explorer 8',
	'Iceweasel' => 'Iceweasel',
	'Flock' => 'Flock',
	'Firefox/0.' => 'Firefox 0.x',
	'Firefox/1.' => 'Firefox 1',
	'Firefox/2.' => 'Firefox 2',
	'Firefox/3.' => 'Firefox 3',
	'Avant Browser' => 'Avant Browser',
	'Advanced Browser' => 'Advanced Browser',
	'Safari' => 'Safari',
	'Camino' => 'Camino',
	'Konqueror' => 'Konqueror',
	'Opera' => 'Opera',
	'Netscape' => 'Netscape',
	'SeaMonkey' => 'SeaMonkey',
	'amaya' => 'Amaya',
	'Lynx' => 'Lnyx',
	'Links' => 'Links',
	'Elinks' => 'Elinks',
	'iCab' => 'iCab',
	'Epiphany' => 'Epiphany',
	'BlackBerry' => 'BlackBerry',
	'Mozilla/5.0' => 'Mozilla 5 compatible',
	'Mozilla/4.0' => 'Mozilla 4 compatible',
	'Mozilla/3.0' => 'Mozilla 3 compatible',
);/*}}}*/

?>