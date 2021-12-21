<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
            <a href="/mvc/student/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new student</a>
            <tr>
                <th>studentId</th>
                <th>studentName</th>
                <th>dob</th>
                <th>gender</th>
                <th class="text-center" style="width: 160px;">Action</th>
            </tr>
        </thead>
        <?php
        foreach ($student as $stu) : ?>
        <tr>
            <td><?= $stu['studentId'] ?></td>
            <td><?= $stu['studentName'] ?></td>
            <td><?= $stu['dob'] ?></td>
            <td><?= $stu['gender'] ?></td>
            <td>
            <td class='text-center'><a class='btn btn-info btn-xs'
                    href='/mvc/student/edit/<?= $stu["studentId"] ?>'><span class='glyphicon glyphicon-edit'></span>
                    Edit</a> <a href='/mvc/student/delete/<?= $stu["studentId"] ?>' class='btn btn-danger btn-xs'><span
                        class='glyphicon glyphicon-remove'></span> Del</a></td>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</div>