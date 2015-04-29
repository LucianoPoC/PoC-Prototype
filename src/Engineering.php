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
    private $development = "development";
    private $design = "design";
    private $sysAdministrator = "sys administrator";

    public function __clone(){}

    public function setDepartment($departmentCode)
    {
        switch($departmentCode) {
            case 301:
                $this->department = $this->development;
                break;
            case 302:
                $this->department = $this->design;
                break;
            case 303:
                $this->department = $this->sysAdministrator;
                break;
            default:
                $this->department = "Unrecognized Engineering";
                break;
        }
    }
}