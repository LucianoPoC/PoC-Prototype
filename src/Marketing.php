<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 23:30
 */

namespace App;


class Marketing extends IOrganizationPrototype
{
    const UNIT = "Marketing";
    private $aDepartment = array(101 => 'sales', 102 => 'promotion', 103 =>'strategic');

    public function __clone(){}

    public function setDepartment($departmentCode)
    {
        $this->department = $this->aDepartment[$departmentCode];
    }
}