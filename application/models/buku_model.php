<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Model {

    public function getBook() {
        return array(
            array(
              'judul' => 'Belajar framework ci'
            ),
            array(
              'judul' => 'Belajar potosop'
            )
        );
    }
}
