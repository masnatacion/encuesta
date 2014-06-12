<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Codeigniter HTMLPurifier Helper
 *
 * Purify input using the HTMLPurifier standalone class.
 * Easily use multiple purifier configurations.
 *
 * @author     Tyler Brownell
 * @copyright  Copyright © 2011 Blue Fox Studio
 * @license    http://bluefoxstudio.ca/license.html
 *
 * @access  public
 * @param   string or array
 * @param   string
 * @return  string or array
 */
if (! function_exists('html_purify'))
{
	function html_purify($dirty_html, $config = FALSE)
	{
		require_once APPPATH . 'libraries/htmlpurifier/HTMLPurifier.standalone.php';
		require_once APPPATH . 'libraries/htmlpurifier/standalone/HTMLPurifier/Filter/MyIframe.php';
		
		
		
		if (is_array($dirty_html))
		{
			foreach ($dirty_html as $key => $val)
			{
				$clean_html[$key] = html_purify($val);
			}
		}

		else
		{

			$config = HTMLPurifier_Config::createDefault();
			$config->set('Filter.Custom', array(new HTMLPurifier_Filter_MyIframe()));
			$config->set('CSS.AllowedProperties', array());
			$config->set('Attr.EnableID', false);

			$config->set('HTML.SafeEmbed', true);
			$config->set('HTML.SafeObject', true);
			$config->set('Output.FlashCompat', true);
			
			$config->set('HTML.Doctype', 'HTML 4.01 Transitional');
			$config->set('Core.Encoding', 'ISO-8859-15'); //Encoding must be ISO-8859-15
			//$config->set('Core.EscapeNonASCIICharacters', true);

			$purifier = new HTMLPurifier($config);
			$clean_html = $purifier->purify($dirty_html);
		}

		return $clean_html;
	}
}

/* End of htmlpurifier_helper.php */
/* Location: ./application/helpers/htmlpurifier_helper.php */