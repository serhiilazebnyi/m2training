<?php

namespace Training\TestOM\Model;

class PlayWithTest
{
    private $testObject;
    private $testObjectFactory;
    private $manager;

    public function __construct(
        Test $testObject,
        TestFactory $testObjectFactory,
        ManagerCustomImplementation $manager
    ) {
        $this->testObject = $testObject;
        $this->testObjectFactory = $testObjectFactory;
        $this->manager = $manager;
    }

    public function run()
    {
        // test object with constructor arguments managed by di.xml
        $this->testObject->log();

        echo '<hr>';

        // test object with custom constructor arguments
        // some arguments are defined here, others - from di.xml
        $customArrayList = ['item1' => 'aaaaa', 'item2' => 'bbbbb'];
        $newTestObject = $this->testObjectFactory->create([
            'arrayList' => $customArrayList, // Array ( [item1] => aaaaa [item2] => bbbbb )
            'manager' => $this->manager // Training\TestOM\Model\ManagerCustomImplementation
        ]);
        $newTestObject->log();
    }
}
