<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      background: #f7f7f7;
    }
    .login-container {
      margin-top: 80px;
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .social-icon i {
      font-size: 1.5rem;
      color: #0d6efd;
      margin: 0 10px;
      cursor: pointer;
      transition: 0.3s;
    }
    .social-icon i:hover {
      color: #0a58ca;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5">
      <div class="login-container">
        <h3 class="text-center mb-4">Sign In</h3>
        @if(session('success'))
            <div class="alert alert-success">
             {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
         <div class="alert alert-danger">
            {{ session('error') }}
         </div>
        @endif
        <form method="POST" action="{{ url('/proseslogin') }}">
            @csrf
          
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email">
          </div>
          @error('email')
              <div><small class="text-danger">{{$message}}</small></div>
          @enderror
            
          <label for="password" class="form-label">Password</label>
          <div class="input-group mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
              <span class="input-group-text bg-white border-start-0 show-password" >
                <i class="fas fa-eye-slash text-muted" id="password-lock"></i>
              </span>
          </div>
          @error('password')
              <div><small class="text-danger">{{$message}}</small></div>
          @enderror

          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
            </div>
            <a href="#" class="text-decoration-none">Forgot password?</a>
          </div>

          <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>

          <div class="text-center">
            <p class="mb-1">Not a member? <a href="{{ route('register') }}">Register</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional if not using modal/tooltip/etc) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    $('.show-password').on('click', function() {
      const passwordInput = $('#password');
      const icon = $('#password-lock');

      if (passwordInput.attr('type') === 'password') {
        passwordInput.attr('type', 'text');
        icon.attr('class', 'fas fa-eye text-muted');
      } else {
        passwordInput.attr('type', 'password');
        icon.attr('class', 'fas fa-eye-slash text-muted');
      }
    });
  });
</script>

</body>
</html>
