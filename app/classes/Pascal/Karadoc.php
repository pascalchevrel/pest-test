<?php

namespace Pascal;

class Karadoc {

	public static function affirmation(string $str) : string {
		if ($str == "oui") {
			return "C'est pas faux";
		}
		return "J'ai faim";
	}

}
