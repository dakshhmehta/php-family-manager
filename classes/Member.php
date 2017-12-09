<?php

class Member {
	private $name;
	private $gender;
	private $spouse;

	public function __construct($name, $gender)
	{
		$this->name = $name;
		$this->gender = $gender;
	}

	protected function invertGender($g){
		if($g == 'M') return 'F';

		return 'M';
	}

	public function addSpouse($name){
		$g = $this->invertGender($this->gender);

		$m = new Member($name, $g); // This is queen
		$this->spouse = $m; // This is king, marrying to queen
		$m->addSpouse($this); // So ofcourse, we have invert relation

		return $this;
	}
}