<?php

namespace MVC\Model;

use MVC\Model\TasksResourceModel;

class TasksRepository
{
    function add($model)
    {
        $taskResourceModel = new TasksResourceModel;
        return $taskResourceModel->save($model);
    }
    public function delete($id)
    {
        $taskResourceModel = new TasksResourceModel;
        return $taskResourceModel->delete($id);
    }
    public function get($id = null)
    {
        $taskResourceModel = new TasksResourceModel;
        return $taskResourceModel->select($id);
    }
}