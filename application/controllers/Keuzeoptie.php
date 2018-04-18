<!-- 
    TIM SWERTS
	LAST UPDATED: 18 03 30
	KEUZEOPTIE CONTROLLER
-->

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keuzeoptie extends CI_Controller{
    
     public function __construct() {
        parent::__construct();
    }

    // =================================================================================================== GREIF MATTHIAS
    // Get Keuzeoptie by Id
    public function get($id){
        $data['return'] = '';
		
        // Get data from db
        $this->load->model('$keuzeoptie_model');
        $returndata = $this->$keuzeoptie_model->get_byId($id);

        // Return data
        $data['return'] = json_encode($returndata);
		
		// Print in default api output view
		$this->load->view('req_output', $data);
    }
    // =================================================================================================== /GREIF MATTHIAS

    public function update()
	{
		// klasse Keuzeoptie aanmaken en initialiseren
        $keuzeoptie = new stdClass();

        $keuzeoptie->id = $this->input->post('id');
        $keuzeoptie->plaatsId = $this->input->post('plaats');
        $keuzeoptie->jaargangId = $this->input->post('jaar');
        $keuzeoptie->naam = $this->input->post('naam');
        $keuzeoptie->eindTijdstip = $this->input->post('eindTijdstip');
        $keuzeoptie->beginTijdstip = $this->input->post('beginTijdstip');
        $keuzeoptie->deadlineTijdstip = $this->input->post('deadlineTijdstip');

		// Model inladen
        $this->load->model('$keuzeoptie_model');
		
		// Keuzeoptie toevoegen of aanpassen
        if($keuzemogelijkheid->id == 0){
       		$this->$keuzeoptie_model->add($keuzeoptie);
        } else {
        	$this->$keuzeoptie_model->update($keuzeoptie);
        }

		// Redirect naar keuzemogelijkheid pagina
		redirect('admin/dash/keuzemogelijkheidbeheer/'. $$keuzeoptie->jaargangId);
    }
    
    public function delete($id)
	{
		
        $this->load->model('$keuzeoptie_model');

        $this->$keuzeoptie_model->delete($id);
		
		// Redirect to keuzemogelijkheidbeheer
		redirect('admin/dash/jaargangbeheer');
	}
}