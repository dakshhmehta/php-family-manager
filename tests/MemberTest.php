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

	public function testCanHaveChildrenWithWife(){
		$I = new Member("Daksh", "M");
		$I->addSpouse("Wife Name");
		$child = new Member("Child 1", "M");

		$I->addChildren($child);

		$this->assertEquals(count($I->getMembers()), 3); // Expected 3, because Me, my wife and my child
	}

	public function testCanFindChildrenByGender(){
		$I = new Member("Daksh", "M");
		$I->addSpouse("Wife Name");
		$son = new Member("Child 1", "M");
		$daughter1 = new Member("Child 1", "F");
		$daughter2 = new Member("Child 2", "F");

		$I->addChildren([$son, $daughter1, $daughter2]);

		$this->assertEquals(count($I->findChildrenByGender('M')), 1);

		$this->assertEquals(count($I->findChildrenByGender('F')), 2);
	}
}