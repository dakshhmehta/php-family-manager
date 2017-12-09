<?php

class Member {
	public $name;
	public $gender;

	public $father;
	public $mother;
	public $spouse;

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


	public function addChildren($members){
		if(! is_array($members)){
			$members = [$members];
		}

		foreach ($members as &$m) {
			if($this->gender == 'M'){
				if(! $this->getSpouse()) throw Exception("Can not have children without spouse.");

				$this->spouse->children[] = $m;
				$m->father = $this;
				$m->mother = $this->spouse;
			}
			else {
				if(! $this->getSpouse()) throw Exception("Can not have children without spouse.");

				$this->children[] = $m;
				$m->father = $this->spouse;
				$m->mother = $this;
			}
		}

		return $this;
	}

	public function hasChildren(){
		return count($this->getChildren()) > 0;
	}

	public function getMembers(){
		$members = [];
		$members[] = $this;
		if($this->getSpouse()){
			$members[] = $this->getSpouse();
		}
		if($this->hasChildren()){
			foreach ($this->getChildren() as &$member) {
				$members = array_merge($members, $member->getMembers());
			}

		}

		return $members;
	}

	public function getChildren(){
		if($this->gender == 'M' && $this->getSpouse() != null){
			return $this->getSpouse()->children;
		}

		return $this->children;
	}

	public function findChildrenByGender($gender, $except = null){
		$children = [];

		foreach ($this->getChildren() as &$child) {
			if($child->gender == $gender){
				if($except == null || $except != $child->name){
					$children[] = $child;
				}
			}
		}

		return $children;
	}
}