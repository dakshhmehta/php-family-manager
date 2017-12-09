<?php

class Member {
	public $name;
	public $gender;
	public $spouse;
	public $father;
	private $children = [];

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

		/*if($m->getSpouse() == null){
			$m->addSpouse($this); // So ofcourse, we have invert relation
		}*/

		return $this;
	}

	public function getSpouse(){
		return $this->spouse;
	}


	public function addChildren($members = array()){
		foreach ($members as &$m) {
			$this->children[] = $m;
			if($this->gender == 'M'){
				$m->father = $this;
			}
			else if($this->spouse){
				$m->father = $this->spouse;
			}
		}

		return $this;
	}

	public function hasChildren(){
		return count($this->children) > 0;
	}

	public function getMembers(){
		$members = [];
		$members[] = $this;
		if($this->getSpouse()){
			$members[] = $this->getSpouse();
		}
		if($this->hasChildren()){
			foreach ($this->children as &$member) {
				$members = array_merge($members, $member->getMembers());
			}

		}

		return $members;
	}

	public function findChildrenByGender($gender, $except = null){
		$children = [];

		foreach ($this->children as &$child) {
			if($child->gender == $gender){
				if($except == null || $except != $child->name){
					$children[] = $child;
				}
			}
		}

		return $children;
	}
}