<html>
<head>
<title>New Password Setup</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.7/dist/sweetalert2.min.js" charset="utf-8"></script>
</head>
<body>
<div class="container">
  <h2>Password Reset Form</h2>
  <form name="newpasswords" method="POST"  action="{{URL::to('api/setnewpassword')}}">
    @csrf
    <div class="form-group">
      <label for="pass">Password:</label>
      <input type="hidden" name="pcode" value="{{$code}}">
      <input type="password" class="form-control"  placeholder="Enter Password" name="pass" required>
    </div>
    <div class="form-group">
      <label for="cnfpwd">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter Confirm Password" name="cnfpass" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</body>
</html>
