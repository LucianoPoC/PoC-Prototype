<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 23:26
 */

namespace App;

ini_set("display_errors", true);
class Client
{
    private $marketPrototype;
    private $managerPrototype;
    private $engineerPrototype;

    private $modelClass;
    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->makeConcretePrototype();
        $Tess = clone $this->marketPrototype;
        $this->setEmployee($Tess, "Tess Smith", 101, "ts101-1234", "tess.png");
        $this->showEmployee($Tess);
        $Jacob = clone $this->marketPrototype;
        $this->setEmployee($Jacob, "Jacob Jones", 102, "ts102-1234", "jacob.png");
        $this->showEmployee($Jacob);
        $Ricky = clone $this->managerPrototype;
        $this->setEmployee($Ricky, "Ricky Rodriguez", "planning", "ts203-1234", "ricky.png");
        $this->showEmployee($Ricky);
        $Olivia = clone $this->engineerPrototype;
        $this->setEmployee($Olivia, "Olivia Perez", "design", "ts302-1234", "olivia.png");
        $this->showEmployee($Olivia);
        $John = clone $this->engineerPrototype;
        $this->setEmployee($John, "John Jackson", "development", "ts303-1234", "john.png");
        $this->showEmployee($John);

        //Dynamic request class
        $aDataBD = array('Management');
        $className = $aDataBD[0];
        $this->modelClass = new $className;
        echo $this->modelClass;
        $TessDynamic = clone $this->modelClass;
        $this->setEmployee($TessDynamic, "Tess Smith Dynamic", 101, "ts101-1235", "tess.png");
        $this->showEmployee($TessDynamic);
    }


    private function makeConcretePrototype()
    {
        $this->marketPrototype = new Marketing();
        $this->managerPrototype = new Management();
        $this->engineerPrototype = new Engineering();
    }

    private function setEmployee(IOrganizationPrototype $employeeNow, $name, $departmentCode, $id, $picture)
    {
        $employeeNow->setDepartment($departmentCode);
        $employeeNow->setId($id);
        $employeeNow->setName($name);
        $employeeNow->setEmployeePicture("pictures/".$picture);
    }

    private function showEmployee(IOrganizationPrototype $employeeNow)
    {
        echo $employeeNow->getId().'<br />';
        echo $employeeNow->getName().'<br />';
        echo $employeeNow->getDepartment().": ".$employeeNow::UNIT.'<br />';
    }
}