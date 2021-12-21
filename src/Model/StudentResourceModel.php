<?php

namespace MVC\Model;


use MVC\Model\StudentModel;

use MVC\Core\ResourceModel;

class StudentResourceModel extends ResourceModel
{
    public function __construct()
    {
        $studentModel = new StudentModel;
        parent::_init('student', 'studentId', $studentModel);
    }
}