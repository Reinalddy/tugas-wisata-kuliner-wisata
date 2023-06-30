<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Login Admin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

body {
  background-image: url("/img/bg_login_admin.jpg");
  background-repeat: repeat;
  background-size: cover;
}
.login-form {
    width: 340px;
    margin: 12% auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form id="form-login">
        <h2 class="text-center">Admin Login</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email" id="email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required" name="password" id="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>     
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#form-login").on('submit', function(e){
      e.preventDefault();
      let data = $('#form-login').serialize();
      
      $.ajax({
        type: "post",
        url: "{{ url('/login-admin') }}",
        data: data,
        dataType: "json",
        success: function (response) {
          if(response.code == 200) {
            location.href = "{{ url('/dashboard') }}";
          } else if(response.code == 422) {
              $.each(response.data,function(field_name,error){
                $(document).find('[id='+field_name+']').after('<div class="invalid-feedback d-block">' + error + '</div>')
              })
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: response.message
            })
          }
          
        },error: function (e) {  
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: e.message
            })
        }
      });

    });

  });
</script>
</body>
</html>