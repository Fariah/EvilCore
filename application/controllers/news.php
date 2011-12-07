<?php

/**
 *
 */
class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_mdl');
	}

	public function index()
	{
		$data['news'] = $this->news_mdl->get_news();
	}

	public function view($slug)
	{
		$data['news'] = $this->news_mdl->get_news($slug);
	}
}