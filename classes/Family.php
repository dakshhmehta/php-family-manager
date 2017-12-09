<?php

class Family {
	protected $members = [];

	public function addMember(Member $m){
		$family = [$m];

		$spouse = $m->getSpouse();
		if($spouse != null){
			$family[] = $spouse;
		}

		$this->members[] = $family;

		return $this;
	}
}