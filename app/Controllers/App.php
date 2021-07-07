<?php

namespace App\Controllers;

class App extends BaseController
{
	public function index()
	{
		$data['title'] = "CodeIgniter + Tailwind!";

		return view('app_index', $data);
	}
}
