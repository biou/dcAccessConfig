<?php

if (!defined('DC_RC_PATH')) { return; }

require dirname(__FILE__) . '/_widgets.php';

$core->addBehavior('publicHeadContent',array('accessConfigPublic','publicHeadContent'));

class accessConfigPublic
{
	public static function publicHeadContent($core)
	{
		echo 
		dcUtils::cssLoad($core->blog->getPF('accessConfig/lib/css/accessconfig.min.css'));
    // overloading the font paths 
    echo
        "<style>
            /* Dyslexia font */
            @font-face {
              font-family: 'opendys';
              src: url('index.php?pf=accessConfig/lib/css/fonts/opendyslexic-regular-webfont.woff2') format('woff2'),
                   url('index.php?pf=accessConfig/lib/css/fonts/opendyslexic-regular-webfont.woff') format('woff');
              font-weight: normal;
              font-style: normal;
            }
        </style>".
		dcUtils::jsLoad($core->blog->getPF('accessConfig/lib/js/accessconfig.min.js'));
	}

  # Widget function
  public static function accessConfigWidget($w)
  {
      global $core, $_ctx;

      if ($w->offline) {
          return;
      }

      $params = array("Prefix" => "a42-ac",
                      "Modal" => true, 
                      "Font" => ($w->font?true:false),
                      "LineSpacing" => ($w->linespacing?true:false),
                      "Justification" => ($w->justification?true:false),
                      "Contrast" => ($w->contrast?true:false),
                      "ImageReplacement" => false // not supported in DotClear
                  );
      $params = json_encode($params);

      $res = 
          '<div class="widget" id="accessconfig" data-accessconfig-buttonname="'.($w->buttonname ? html::escapeHTML($w->buttonname) : '').'" data-accessconfig-params=\''.$params.'\'></div>';

      return $res;
  }
}


