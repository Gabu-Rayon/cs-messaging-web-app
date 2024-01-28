<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send A Message</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">CS Customer Messaging App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/message">Send A Message / Complaint</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="py-5">
  <div class="container">
    <!-- Conatct Us -->
    <h1 class="text-center mb-4">Send A Message</h1>
    <h2 class="mb-4">Get in touch with us</h2>
    <p>We're here to answer any questions you may have. Feel free to reach out via the form below or through the provided contact information.</p>
    
    <div class="row mt-5">
      <div class="col-lg-8 offset-lg-2">
        @if (session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

        <form method="POST" action="/message/send">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Sender Id</label>
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter Id e.g 2389">
                @error('user_id')
                 <div class="text-danger"> {{ $message }} </div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message_body" rows="3"></textarea>
                @error('message_body')
                  <div class="text-danger"> {{ $message }} </div>
               @enderror
              </div>

              <div class="mb-3">
                <label for="message" class="form-label">Response</label>
                <textarea class="form-control" id="message" name="response" rows="3"></textarea>               
              </div>

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" name="send_message">Send Message</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="py-4 bg-light">
  <div class="container text-center">
    <p class="mb-0">Copyright &copy; Gibsons 2024</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
      setTimeout(function() {
          $('.alert').alert('close');
      }, 3000); 
  });
</script>

</body>
</html>
