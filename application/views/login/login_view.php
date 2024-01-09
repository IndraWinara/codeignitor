<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 25px;" data-bs-whatever="@getbootstrap">Login</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Please Sign In First</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url() ?>index.php/user/login" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" class="form-control" name="username" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" id="recipient-pass">
          </div>
          <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
      <div class="modal-footer" style="display: flex; flex-direction: column;">
        Dont have an account ? 
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">sign up</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Sign Up</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url() ?>index.php/user/signup" method="post">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Username</label>
            <input type="text" required class="form-control" name="username" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Email</label>
            <input type="email" required class="form-control" name="email" id="recipient-pass">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="password" required class="form-control" name="password" id="recipient-pass">
          </div>
          <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
      </div>
      <div class="modal-footer">
      Already have account ? 
        <button class="btn btn-primary" data-bs-target="#exampleModal" data-bs-toggle="modal">login</button>
      </div>
    </div>
  </div>
</div>

