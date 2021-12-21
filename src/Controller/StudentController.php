<?php

namespace MVC\Controller;

use MVC\Core\Controller;
use MVC\Model\StudentReponsitory;
use MVC\Model\StudentModel;

class StudentController extends Controller
{
    function index()
    {
        $studentRepository = new StudentReponsitory;
        $d['student'] = $studentRepository->get();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["studentName"])) {

            $studentModel = new StudentModel;
            $studentRepository = new StudentReponsitory;

            $studentModel->setStudentName($_POST["studentName"]);
            $studentModel->setDob(date('Y-m-d H:i:s'));
            $studentModel->setGender($_POST["gender"]);

            if ($studentRepository->add($studentModel)) {
                header("Location: " . WEBROOT . "student/index");
            }
        }
        $this->render("create");
    }

    function edit($id)
    {

        $studentRp = new StudentReponsitory();

        $d["student"] = $studentRp->get($id);

        if (isset($_POST["studentName"])) {

            $studentModel = new StudentModel;
            $studentRepository = new StudentReponsitory;

            $studentModel->setId($id);
            $studentModel->setStudentName($_POST["studentName"]);
            $studentModel->setDob(date('Y-m-d H:i:s'));
            $studentModel->setGender($_POST["gender"]);

            if ($studentRepository->add($studentModel)) {
                header("Location: " . WEBROOT . "student/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }


    function delete($id)
    {
        $studentRepository = new StudentReponsitory;

        if ($studentRepository->delete($id)) {
            header("Location: " . WEBROOT . "student/index");
        }
    }
}