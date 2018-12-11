
<link rel="stylesheet" type="text/css" href="/css/css.css">

  <div class="form content">
    <p ><font size="5">CECOCA Register Page</font></p>

    <form class="login-form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
      <!-- <h6 class="reg">Username :</h6> -->
      <input type="text" placeholder="USERNAME" name="userUname"/>
      <input type="email" placeholder="EMAIL"name="userEmail"/>
      <input type="number" placeholder="PHONE NUMBER" name="userPnumber"/>
      <input type="text" placeholder="ADDRESS" name="userAddress"/>
      <input type="date" placeholder="BIRTH" name="userBirth"/>
      <input type="password" placeholder="PASSWORD" name="userPw"/>
      <button type="submit" class="btn btn-md btn-primary"><a href="/login">Sign Up</a></button>
      <p class="message">Already registered? <a href="/login">Sign In</a></p>
    </form>

</div>

