<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model {

    public function getBook() {
        return array(
            array(
              'judul' => 'Belajar framework ci',
              'pengarang' => 'Budi Raharjo',
              'penerbit' => 'Informatika'
            ),
            array(
              'judul' => 'Belajar photoshop',
              'pengarang' => 'Abdul Khadir',
              'penerbit' => 'Andi Offset'
            )
        );
    }
}
