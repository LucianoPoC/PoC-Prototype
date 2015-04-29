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
    private $sales = "sales";
    private $promotion = "promotion";
    private $strategic = "strategic";

    public function __clone(){}

    public function setDepartment($departmentCode)
    {
        switch($departmentCode) {
            case 101:
                $this->department = $this->sales;
                break;
            case 102:
                $this->department = $this->promotion;
                break;
            case 103:
                $this->department = $this->strategic;
                break;
            default:
                $this->department = "Unrecognized Marketing";
                break;
        }
    }
}