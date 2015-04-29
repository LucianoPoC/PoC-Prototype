<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 23:33
 */

namespace App;


class Engineering extends IOrganizationPrototype
{
    const UNIT = "Engineering";
    private $aDepartment = array('development', 'design', 'sys administrator');

    public function __clone(){}

    public function setDepartment($department)
    {
        $this->department = array_search($department, array_flip($this->aDepartment));
    }
}