<?php ?>

<h1>Submit a bug</h1>

<form>
    <div class="form-group">
        <label for="formGroupExampleInput">Short description about your bug</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Description">
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Program Section</label>
            <input type="email" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Project Version</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Category</label>
            <input type="password" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Select your Operating System</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Windows 7</option>
            <option>Windows 8</option>
            <option>Windows 10</option>
            <option>macOS</option>
            <option>Linux</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Describe your bugs</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Other useful information</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Give us some screenshots to comprehend/retrace your bugs</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">This form has been filled in truly and accurately</label>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>