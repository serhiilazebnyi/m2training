<?php

namespace Training\TestOM\Model;

class Test
{
    private $manager;
    private $arrayList;
    private $name;
    private $number;
    private $managerFactory;

    public function __construct(
        ManagerInterface $manager,
        $name,
        int $number,
        array $arrayList,
        ManagerInterfaceFactory $managerFactory //generated/code/Training/TestOM/Model/ManagerInterfaceFactory.php
    ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
        $this->managerFactory = $managerFactory;
    }

    public function log()
    {
        print_r(get_class($this->manager)); //Training\AdditionalTestOM\Model\ManagerCustom
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
        echo '<br>';
        $newManager = $this->managerFactory->create();
        print_r(get_class($newManager)); //Training\AdditionalTestOM\Model\ManagerCustom
    }
}
