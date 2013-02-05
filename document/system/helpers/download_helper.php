<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Download Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/download_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Force Download
 *
 * Generates headers that force a download to happen
 *
 * @access	public
 * @param	string	filename
 * @param	mixed	the data to be downloaded
 * @return	void
 */
if ( ! function_exists('force_download'))
{
	function force_download($filename = '', $data = '')
	{
		if ($filename == '' OR $data == '')
		{
			return FALSE;
		}

		// Try to determine if the filename includes a file extension.
		// We need it in order to set the MIME type
		if (FALSE === strpos($filename, '.'))
		{
			return FALSE;
		}

		// Grab the file extension
		$x = explode('.', $filename);
		$extension = end($x);

		// Load the mime types
		if (defined('ENVIRONMENT') AND is_file(APPPATH.'config/'.ENVIRONMENT.'/mimes.php'))
		{
			include(APPPATH.'config/'.ENVIRONMENT.'/mimes.php');
		}
		elseif (is_file(APPPATH.'config/mimes.php'))
		{
			include(APPPATH.'config/mimes.php');
		}

		// Set a default mime if we can't find it
		if ( ! isset($mimes[$extension]))
		{
			$mime = 'application/octet-stream';
		}
		else
		{
			$mime = (is_array($mimes[$extension])) ? $mimes[$extension][0] : $mimes[$extension];
		}

		// Generate the server headers
		if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") !== FALSE)
		{
			header('Content-Type: "'.$mime.'"');
			header('Content-Disposition: attachment; filename="'.$filename.'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header("Content-Transfer-Encoding: binary");
			header('Pragma: public');
			header("Content-Length: ".strlen($data));
		}
		else
		{
			header('Content-Type: "'.$mime.'"');
			header('Content-Disposition: attachment; filename="'.$filename.'"');
			header("Content-Transfer-Encoding: binary");
			header('Expires: 0');
			header('Pragma: no-cache');
			header("Content-Length: ".strlen($data));
		}

		exit($data);
	}
}
/**
 *  function _push_file($path, $name)
 * This function pushes a file out to a user for download.
 * @param    STRING    $path    The full absolute path to the file to be pushed.
 * @param    STRING    $name    The file name of the file to be pushed.
 * @author   Matthew Craig 
 * @copyright 2010 Matthew Craig.
 */
function _push_file($path, $name)
{
  // make sure it's a file before doing anything!
  if(is_file($path))
  {
    // required for IE
    if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }

    // get the file mime type using the file extension
    $this->load->helper('file');

    /**
     * This uses a pre-built list of mime types compiled by Codeigniter found at
     * /system/application/config/mimes.php 
     * Codeigniter says this is prone to errors and should not be dependant upon
     * However it has worked for me so far. 
     * You can also add more mime types as needed.
     */
    $mime = get_mime_by_extension($path);

    // Build the headers to push out the file properly.
    header('Pragma: public');     // required
    header('Expires: 0');         // no cache
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($path)).' GMT');
    header('Cache-Control: private',false);
    header('Content-Type: '.$mime);  // Add the mime type from Code igniter.
    header('Content-Disposition: attachment; filename="'.basename($name).'"');  // Add the file name
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize($path)); // provide file size
    header('Connection: close');
    readfile($path); // push it out
    exit();
}
}


/* End of file download_helper.php */
/* Location: ./system/helpers/download_helper.php */