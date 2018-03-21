<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index() {
		$this->response->body(View::factory('main'));
	}

	public function action_new() {
		$post = $this->request->post();
		$query = DB::query(Database::INSERT, 'INSERT INTO links (link) VALUES (:link)')
			->bind(':link', $post['link']);
		$query->execute();

		$link = $this->numberToHash(mysql_insert_id());
		$data = array(
			'link' => $link,
		);
		$this->response->body(View::factory('new', $data));
	}

	public function action_stats($hash) {
		$link_id = $this->hashToNumber($hash);
		$query = DB::query(Database::SELECT, 'SELECT * FROM stats WHERE link_id = (:link_id)')
					->bind(':link_id', $link_id);
		$query->execute(); // here we store any kind of user data like in previous project

		$this->response->body(View::factory('new', $query));
	}

	public $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

	public function numberToHash($number) {
		$hash = '';
		$alphabetLength = strlen($this->alphabet);

		do {
			$hash = $this->alphabet[$number % $alphabetLength] . $hash;
			$number = floor($number / $alphabetLength);
		}
		while($number);

		return $hash;
	}

	public function hashToNumber($hash) {
		$number = 0;
		$alphabetLength = strlen($this->alphabet);

		for($i = 0; $i < strlen($hash); $i++) {
			$number = $number * $alphabetLength + strpos($this->alphabet, $hash[$i]);
		}

		return $number;
	}

} // End Welcome
