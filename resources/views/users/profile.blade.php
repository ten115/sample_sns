@extends('layouts.login')

@section('content')
<div class="content">
  <div class="Username">
    <label class="Username">UserName</label>
      <input name="username" class="Username" type="text" method="post" required="required"><br>
  </div>
  <div class="MailAddress">
    <label class="MailAddress">MailAddress</label>
      <input name="mail"class="mail" type="email" method="post" required="required"><br>
  </div>
  <div class="password1">
    <label class="password">PassWord</label>
      <input name="password1"class="password" type="password" method="post" required="required"><br>
  </div>
  <div class="password2">
    <label class="password">new Password</label>
      <input name="password2"class="password" type="password" method="post" required="required"><br>
  </div>
  <div class="bio">
    <label class="bio">Bio</label>
      <input name="bio"class="bio" type="text" method="post" required=""><br>
  </div>
  <div class="iconimage">
    <label class="iconimage">Icon Image</label>
      <input class="iconimage" type="" method="post" required=""><br>
  </div>

 <form action="" method="">
        <input type="submit" value="更新">

</div>


@endsection
