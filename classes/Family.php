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

		throw new Exception("No member exists with the specified name.");
	}

	public function findByRelation($name, $relationship){
		$relationship = strtolower($relationship);
		$__members = [];

		$member = $this->findByName($name);

		switch ($relationship) {
			case 'grand daughter':
			case 'sisters':
				if($member->mother != null)
					$members = $member->mother->findChildrenByGender('F', $name);
				else
					$members = null;
				break;

			case 'brothers':
				if($member->mother != null)
					$members = $member->mother->findChildrenByGender('M', $name);
				else
					$members = null;
				break;
			
			case 'daughter':
				$members = $member->findChildrenByGender('F');				
				break;

			case 'son':
				$members = $member->findChildrenByGender('M');
				break;

			case 'children':
				$members = $member->getChildren();
				break;

			case 'mother':
				$members = $member->mother;
				break;

			case 'father':
				$members = $member->father;
				break;

			case 'cousins':
				
				break;

			default:
				# code...
				break;
		}

		if(is_array($members)){
			foreach ($members as &$member) {
				$__members[] = $member->name;
			}
		}
		else {
			$__members = $members->name;
		}

		return $__members;
	}

	public function save(){
		return storage()->set('family', $this);
	}

	public function getMembers($gender = null)
	{
		if($gender == null){
			return $this->members;
		}

		$members = [];
		foreach ($this->members as &$member) {
			if($gender == $member->gender){
				$members[] = $member;
			}
		}

		return $members;
	}

	public function dd(){
		dd($this->members);
	}
}