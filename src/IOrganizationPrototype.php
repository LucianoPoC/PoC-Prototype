<?php
/**
 * Created by PhpStorm.
 * User: luciano
 * Date: 28/04/15
 * Time: 23:28
 */

namespace App;


abstract class IOrganizationPrototype {
    protected $id;
    protected $name;
    protected $employeePicture;
    protected $department;

    abstract public function __clone();
    abstract public function setDepartment($departmentCode);

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmployeePicture()
    {
        return $this->employeePicture;
    }

    /**
     * @param mixed $employeePicture
     */
    public function setEmployeePicture($employeePicture)
    {
        $this->employeePicture = $employeePicture;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

}