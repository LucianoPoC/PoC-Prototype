<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 23:33
 */

namespace App;


class Management extends IOrganizationPrototype
{
    const UNIT = "Management";
    private $aDepartment = array('research' => 'research', 'planning' =>'planning', 'operations' => 'operations');

    public function __clone(){}

    public function setDepartment($department)
    {
        //Or $this->department = $this->aDepartment[$department];
        $this->department = array_search($department, $this->aDepartment);
    }
}