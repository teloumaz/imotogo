<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF
{private $CI;
    function __construct()
    {   
        parent::__construct();
		$this->CI= get_instance();
	    $this->CI->load->library('session');
    }
}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */