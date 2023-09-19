<?php

Class Aritmatika {

	public function plus($a, $b) {
		try {
			if (!is_int($a) || !is_int($b)) {
				return false;
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
		return $a + $b;
	}
	public function minus($a, $b) {
		try {
			if (!is_int($a) || !is_int($b)) {
				return false;
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
		return $a - $b;
	}
	public function multiply($a, $b) {
		try {
			if (!is_int($a) || !is_int($b)) {
				return false;
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
		return $a * $b;
	}
	public function divide($a, $b) {
		try {
			if (!is_int($a) || !is_int($b)) {
				return false;
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
		return $a / $b;
	}
}
