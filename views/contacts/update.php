

<h1>Update Contact</h1>
    <form action="index.php?controller=contacts&action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
    <div class="form-group">
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm"  value="<?php echo $contact['name']; ?>" id="name" name="name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm"  value="<?php echo $contact['email']; ?>" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Phone number</label>
            <div class="col-sm-10">
            <input type="tel" class="form-control form-control-sm"  value="<?php echo $contact['phone']; ?>" id="phone" name="phone" required>
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" class= "btn btn-primary mb-2" value="Update">
        </div>
    </div>
    </form>