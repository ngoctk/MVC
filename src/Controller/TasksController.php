<?php

namespace MVC\Controller;

use MVC\Core\Controller;
use MVC\Model\TasksModel;
use MVC\Model\TasksRepository;


class TasksController extends Controller
{
    function index()
    {
        $taskRepository = new TasksRepository;
        $d['tasks'] = $taskRepository->get();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"])) {

            $taskModel = new TasksModel;
            $taskRepository = new TasksRepository;


            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setCreated_at(date('Y-m-d H:i:s'));

            if ($taskRepository->add($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("create");
    }

    function edit($id)
    {

        $taskRp = new TasksRepository();

        $d["task"] = $taskRp->get($id);
        if (isset($_POST["title"])) {

            $taskModel = new TasksModel;
            $taskRepository = new TasksRepository;

            $taskModel->setId($id);
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setUpdated_at(date('Y-m-d H:i:s'));

            if ($taskRepository->add($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }


    function delete($id)
    {
        $taskRepository = new TasksRepository;

        if ($taskRepository->delete($id)) {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}