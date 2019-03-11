<?php
defined('BASEPATH') or exit(' No Direct Allowed');

class BukuModel extends CI_Model
{

	public function getBook()
	{

		return array(

			array(

				'judul' => 'mama suka',
				'pengarang' => 'nopal',
				'penerit' => 'shiny'
			),

			array(
				'judul' => 'mama gk suka',
				'pengarang' => 'nepal',
				'penerit' => 'dark'
			)
		);
	}
}
