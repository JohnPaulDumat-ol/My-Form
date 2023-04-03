<?php 
$title = 'Index';
require_once 'includes/header.php' ?>
<body>
    <h1 class="text-center"> REGISTRATION FOR IT CONFERENCE </h1>

   
   <form>
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
</form>

  <div class="form-group">
  <label for="birthdaytime">Date of Birth:</label>
  <input type="datetime-local" id="birthday" name="birthday">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">SPECAILTY</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>

  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>

  <select class="custom-select" id="inputGroupSelect01">
    <option selected>Choose...</option>
    <option value="1">Database Admin</option>
    <option value="2">Software Developer</option>
    <option value="3">Web Administrator</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">OTHERS</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>

<div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>



 
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<?php require_once 'includes/footer.php' ?>