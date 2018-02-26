<?php

class barangmod extends CI_Model {
	public function viewkredit() {
        $query = $this->db->query("select * from kredit");
        return $query;
    }
    public function viewahp() {
    	$ahp = $this->load->database('ahp', TRUE);
        $query = $ahp->query("select * from dummy")->result();
        return $query;
    }
}

?>