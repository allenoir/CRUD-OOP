<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Username:</label>
    <input type="text" name="name" value="<?php if(isset($row)) { echo $row['name']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Email:</label>
    <input type="email" name="email" value="<?php if(isset($row)) { echo $row['email']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Phone:</label>
    <input type="text" name="phone" value="<?php if(isset($row)) { echo $row['phone']; } ?>" class="form-control" / required>
</div>
<div class="col-md-6 col-sm-12 form-group">
    <label for="register-form-name">Subject:</label>
    <input type="text" name="subject" value="<?php if(isset($row)) { echo $row['subject']; } ?>" class="form-control" / required>
</div>
<div class="col-md-12 col-sm-12 form-group">
    <label for="register-form-name">Message:</label>
    <textarea class="form-control" name="message" placeholder="Message..."><?php if(isset($row)) { echo $row['message']; } ?></textarea>
</div>