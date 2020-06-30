<?php

namespace Engine;

class Flasher 
{
	public static function set_message($keterangan, $pesan)
	{
		$_SESSION['message'] = [
			'pesan' => $pesan, 
			'ket'   => $keterangan
		];
	}

	public static function get_message($ket)
	{
		if (@$_SESSION['message']['ket'] == $ket) 
		{
			unset($_SESSION['message']['ket']);
			return $_SESSION['message']['pesan'];
		}
	}
}