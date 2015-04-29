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
    private $research = "research";
    private $planning = "planning";
    private $operations = "operations";

    public function __clone(){}

    public function setDepartment($departmentCode)
    {
        switch($departmentCode) {
            case 201:
                $this->department = $this->research;
                break;
            case 202:
                $this->department = $this->planning;
                break;
            case 203:
                $this->department = $this->operations;
                break;
            default:
                $this->department = "Unrecognized Management";
                break;
        }
    }
}