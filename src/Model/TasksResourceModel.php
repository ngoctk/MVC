<?php

namespace MVC\Model;

use MVC\Model\TasksModel;

use MVC\Core\ResourceModel;

class TasksResourceModel extends ResourceModel
{
    public function __construct()
    {
        $taskModel = new TasksModel;
        parent::_init('tasks', 'id', $taskModel);
    }
}