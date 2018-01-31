<?php

class MemberTest extends TestCase
{
	public function testMemberIsCreated(){
		$I = new Member("Daksh", "M");

		$this->assertEquals($I->name, "Daksh");
		$this->assertEquals($I->gender, "M");
	}

	public function testCanMarryMember(){
		$I = new Member("Daksh", "M");
		$I->addSpouse("Some Name");

		$this->assertEquals($I->spouse->name, "Some Name");
		$this->assertEquals($I->spouse->gender, "F"); // This also checks internal method invertGender
	}

	/**
	 * @expectedException \Exception
	 */
	public function testCantHaveChildrenWithoutWife(){
		$I = new Member("Daksh", "M");
		$child = new Member("Child 1", "M");

		$I->addChildren($child);
	}
}