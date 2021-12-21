<h1>Edit student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="studentName">studentName</label>
        <input type="text" class="form-control" id="studentName" placeholder="Enter a studentName" name="studentName"
            value="<?php if (isset($student["studentName"])) echo $student["studentName"]; ?>">
    </div>

    <div class="form-group col-6">
        <label for="gender">Gender</label>
        <label class="radio-inline"> <input type="radio" <?php if ($student['gender'] == 1) : ?> checked <?php endif ?>
                value="1" name="gender">Nam</label>
        <label class="radio-inline"><input type="radio" <?php if ($student['gender'] == 0) : ?> checked <?php endif ?>
                value="0" name="gender">Nữ</label>
    </div>
    <div class="text-left col-6">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>