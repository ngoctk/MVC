<?php

namespace MVC\Model;

class StudentModel
{
    public $studentId;
    public $studentName;
    public $dob;
    public $gender;

    /**
     * Get the value of studentId
     */
    public function getId()
    {
        return $this->studentId;
    }

    /**
     * Set the value of studentId
     *
     * @return  self
     */
    public function setId($studentId)
    {
        $this->studentId = $studentId;

        return $this;
    }

    /**
     * Get the value of studentName
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    /**
     * Set the value of studentName
     *
     * @return  self
     */
    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
}