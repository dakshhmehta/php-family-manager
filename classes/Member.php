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

		return $this;
	}

	public function addChildren($members){
		if(! is_array($members)){
			$members = [$members];
		}

		foreach ($members as &$m) {
			if($this->gender == 'M'){
				if(! $this->spouse) throw new Exception("Can not have children without spouse.");

				$this->spouse->children[] = $m;
				$m->father = $this;
				$m->mother = $this->spouse;
			}
			else {
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
		if($this->spouse){
			$members[] = $this->spouse;
		}
		if($this->hasChildren()){
			foreach ($this->getChildren() as &$member) {
				$members = array_merge($members, $member->getMembers());
			}

		}

		return $members;
	}

	public function getChildren(){
		if($this->gender == 'M' && $this->spouse != null){
			return $this->spouse->children;
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

	public function formatted(){
		$output = $this->name."\n";
		if($this->father){
			$output .= "Father: ".$this->father->name."\n";
		}
		if($this->mother){
			$output .= "Mother: ".$this->mother->name."\n";
		}
		$children = $this->getChildren();
		$__children = [];
		foreach ($children as &$child) {
			$__children[] = $child->name;
		}

		$output .= "Children: ".implode(', ', $__children);
		$output .= "\n======================================";

		return $output;
	}
}