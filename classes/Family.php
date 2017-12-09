<?php

class Family {
	private $head;
	protected $members = [];

	public function __construct($head)
	{
		$this->head = $head;
		$this->members = $this->head->getMembers();
	}

	public function findByName($name){
		foreach ($this->members as $m) {
			if($m->name == $name){
				return $m;
			}
		}

		return null;
	}

	public function findByRelation($name, $relationship){
		$relationship = strtolower($relationship);
		$__members = [];

		switch ($relationship) {
			case 'brothers':
				$members = $this->findByName($name)->father->findChildrenByGender('M', $name);
				foreach ($members as &$member) {
					$__members[] = $member->name;
				}
				break;
			
			case 'sisters':
				$members = $this->findByName($name)->father->findChildrenByGender('F', $name);
				foreach ($members as &$member) {
					$__members[] = $member->name;
				}
				break;

			default:
				# code...
				break;
		}

		return $__members;
	}

	public function dd(){
		dd($this->members);
	}
}