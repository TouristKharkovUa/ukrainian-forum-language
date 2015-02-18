<?php
/**
*
* info_acp_database_or [English]
*
* @package Database Optimize & Repair Tool
* @version $Id$
* @copyright (c) 2010 Matt Friedman
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UMIL_DATABASE_OR'			=> 'Database Optimize &amp; Repair Tool',
	'ACP_DATABASE_OR'			=> 'Optimize &amp; Repair',
	'ACP_DATABASE_OR_EXPLAIN'	=> 'Here you can optimize or repair your phpBB related tables. For large databases, this could take several minutes to complete. <strong>OPTIMIZE</strong> will defragment your database and can offer improved database performance. <strong>REPAIR</strong> should only be used if you have reason to believe your database has crashed or corrupt tables. Note: <strong>InnoDB</strong> tables do not support Repair.',
	'OR_OPTIONS'				=> 'Database options',
	'DISABLE_BOARD'				=> 'Disable board',
	'DISABLE_BOARD_EXPLAIN'		=> 'You may disable the board during this process. The board will be enabled at the end of the process.',
	'OPTIMIZE'			=> 'Optimize',
	'OPTIMIZE_SUCCESS'	=> 'Optimization of the selected table(s) is complete.',
	'OPTIMIZE_LOG'		=> '<strong>Database tables optimized</strong><br />» %s',
	'REPAIR'			=> 'Repair',
	'REPAIR_SUCCESS'	=> 'Repair of the selected table(s) is complete.',
	'REPAIR_LOG'		=> '<strong>Database tables repaired</strong><br />» %s',
	'CHECK'				=> 'Check',
	'CHECK_SUCCESS'		=> 'Check completed.<br />If you don’t get “OK”, or “Table is already up to date” you should normally run a repair of the table.',
	'WARNING'			=> 'Warning',
	'WARNING_EXPLAIN'	=> 'This tool comes with NO WARRANTY and users of this tool should back up their entire database in case of a failure.<br /><br />Before continuing, make sure you have a database backup!',
	'WARNING_MYSQL'		=> 'This feature only works with MySQL databases.',
	'MARK_OVERHEAD'		=> 'Mark tables having overhead',
	'PROCESSING'		=> 'Processing your request... Please wait...',
	'TH_NAME'			=> 'Table name',
	'TH_TYPE'			=> 'Type',
	'TH_SIZE'			=> 'Size',
	'TH_TOTAL'			=> 'Totals',
	'TH_OVERHEAD'		=> 'Overhead',
	'TABLE_ERROR'		=> 'You must select at least one table.',
	'TABLE_EMPTY'		=> 'Table storage engine not supported.',
));

?>