<?php

if (!defined('DC_RC_PATH')) {return;}

$core->addBehavior('initWidgets', array('accessConfigWidget', 'initWidgets'));
$core->addBehavior('initDefaultWidgets', array('accessConfigWidget', 'initDefaultWidgets'));

class accessConfigWidget
{
    public static function initWidgets($w)
    {

        $w->create('accessConfig', 'AccessConfig', array('accessConfigPublic', 'accessConfigWidget'), null, __('Style selector to let users adapt your blog to their needs.'));
        $w->accessConfig->setting('buttonname', __('Title') . ' :', __('Accessibility Settings'));
        $w->accessConfig->setting('font', __('Font adaptation'), 1, 'check');
        $w->accessConfig->setting('linespacing', __('Line Spacing adaptation'), 1, 'check');
        $w->accessConfig->setting('justification', __('Justification adaptation'), 1, 'check');
        $w->accessConfig->setting('contrast', __('Contrast adaptation'), 1, 'check');

    }

    public static function initDefaultWidgets($w, $d)
    {
        $d['nav']->append($w->accessConfig);
    }
}