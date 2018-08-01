<?php
class NP_current extends NucleusPlugin
{
	var $table;
	function getName()        { return 'NP_current';}
	function getAuthor()      { return 'yama';}
	function getURL()         { return 'http://kyms.ne.jp/';}
	function getVersion()     { return '0.1';}
	function getDescription() { return 'NP_current';}
	function supportsFeature($w) { return ($w=='SqlTablePrefix') ? 1 : 0 ; }
	
	function doTemplateVar (&$item)
	{
		global $itemid;
		$args = func_get_args();
		array_splice($args, 0, 1);
		$str = join(',', $args);
		$result = (intval($itemid) == intval($item->itemid)) ? $str : '';
		echo $result;
	}
}
?>
