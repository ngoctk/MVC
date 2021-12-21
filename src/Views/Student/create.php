<h1>Create student</h1>
<form method='post' action='#'>
    <div class="form-group col-6">
        <label for="">Name</label>
        <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Enter a name">
    </div>
    <div class="form-group col-6">
        <label for="gender">Gender</label>
        <label class="radio-inline"> <input type="radio" value="1" name="gender">Nam</label>
        <label class="radio-inline"><input type="radio" value="0" name="gender">Nữ</label>
    </div>
    <div class="text-left col-6">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>