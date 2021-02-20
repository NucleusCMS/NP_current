<?php
class NP_current extends NucleusPlugin
{
    public function getName()        { return 'NP_current';}
    public function getAuthor()      { return 'yama';}
    public function getURL()         { return 'https://kyms.jp/';}
    public function getVersion()     { return '0.1';}
    public function getDescription() { return 'NP_current';}
    public function supportsFeature($w) { return ($w === 'SqlTablePrefix') ? 1 : 0 ; }
    public function doTemplateVar (&$item)
    {
        global $itemid;
        if ((int)$itemid !== (int)$item->itemid) {
            return '';
        }
        $args = func_get_args();
        return implode(',', array_splice($args, 0, 1));
    }
}
