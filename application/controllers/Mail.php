<!-- 
    ERIK
	LAST UPDATED: 18 03 30
	MAIL CONTROLLER
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function maakbericht()
    {
        $this->load->library('mailjet');
        echo json_encode($this->mailjet->maakBerichtObject("evanreusel@gmail.com", "Erik", "Onderwerp", "hoi", "Hoi html"));
    }
}
