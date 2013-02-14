// JavaScript Document
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class MY_Form_validation extends CI_Form_validation
{
    /**
     * Error String
     *
     * Returns the error messages as a string, wrapped in the error delimiters
     * NEW!: Added a global wrapper, useful for Bootstrap styling
     *
     * @access  public
     * @param   string
     * @param   string
     * @return  str
     */
    public function error_string($prefix = '', $suffix = '', $global_prefix = '', $global_suffix = '')
    {
        // No errrors, validation passes!
        if (count($this->_error_array) === 0)
        {
            return '';
        }
 
        if ($prefix == '')
        {
            $prefix = $this->_error_prefix;
        }
 
        if ($suffix == '')
        {
            $suffix = $this->_error_suffix;
        }
 
        // Generate the error string
        $str = '';
        foreach ($this->_error_array as $val)
        {
            if ($val != '')
            {
                $str .= $prefix.$val.$suffix."\n";
            }
        }
 
        return $global_prefix.$str.$global_suffix;
    }
}
 
/* End of file MY_Form_validation.php */
/* Location: ./application/libraries/MY_Form_validation.php */?>