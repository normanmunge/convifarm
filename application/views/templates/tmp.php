<?php
	$this->load->view('templates/header');
        $this->load->view('templates/leftpanel');
	$this->load->view($content);
	$this->load->view('templates/footer');
?>