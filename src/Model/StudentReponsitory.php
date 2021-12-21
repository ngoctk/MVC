<?php

namespace MVC\Model;

use MVC\Model\StudentResourceModel;

class StudentReponsitory
{
    function add($model)
    {
        $studentResourceModel = new StudentResourceModel;
        return $studentResourceModel->save($model);
    }
    public function delete($id)
    {
        $studentResourceModel = new StudentResourceModel;
        return $studentResourceModel->delete($id);
    }
    public function get($id = null)
    {
        $studentResourceModel = new StudentResourceModel;
        return $studentResourceModel->select($id);
    }
}