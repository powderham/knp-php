<?php require 'layout/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-xs-6">
      <h1>Add your Pet</h1>
      <form action="/pets_new.php" method="POST">

      <div class="form-group">
          <label for="pet-name" class="control-label">Pet Name</label>
          <input type="text" name="name" id="pet-name" class="form-control" />
      </div>
      <div class="form-group">
          <label for="pet-breed" class="control-label">Breed</label>
          <input type="text" name="breed" id="pet-breed" class="form-control" />
      </div>
      <div class="form-group">
          <label for="pet-weight" class="control-label">Weight</label>
          <input type="number" name="weight" id="pet-weight" class="form-control" />
      </div>
      <div class="form-group">
          <label for="pet-bio" class="control-label">Pet Bio</label>
          <textarea name="bio" id="pet-bio" class="form-control"></textarea>
      </div>
      </form>
      <button type="submit" class="btn btn-primary">
        <span class="glyphicon glyphicon-heart"></span> Add
      </button>
    </div>
  </div>
</div>

<?php require 'layout/footer.php'; ?>
