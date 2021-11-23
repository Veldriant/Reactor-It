<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact-us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header">
                Contact Us
              </div>
              <div class="card-body">
                <form  method="POST" action="<?php echo e(route('contact.submit')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" required />
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control" required />
                  </div>
                  <div class="form-group">
                      <label for="msg">Message</label>
                      <textarea name="msg" class="form-control"></textarea>
                  </div>
                  <input type="submit" value='Submit' class="btn btn-primary float-right" />
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php /**PATH /home/dev0/EngLara3/resources/views/contact-us.blade.php ENDPATH**/ ?>