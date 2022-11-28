<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="main-content">
      <form
        id="login-form"
        name="myForm"
        action="login.php"
        method="post"
        onsubmit="validate()"
      >

        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" />
          <p class="msgUser"></p>

          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" />
          <p class="msgPass">Please provide your password!</p>

          <button type="submit">Login</button>
          <label> <input type="checkbox" name="remember" /> Remember me </label>
        </div>

        <div class="container" style="background-color: #f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
          <span class="password">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <script>
      let msgUser = document.getElementsByClassName('msgUser')[0].innerHTML = "";
      let msgPass = document.getElementsByClassName('msgPass')[0].innerHTML = "";

      function validate() {
        if (document.myForm.username.value == "" && document.myForm.password.value == "") {
          //alert( "Please provide your password!" );
          document.myForm.password.focus();
          document.getElementsByClassName('msgPass')[0].innerHTML =
            "Please provide your password!";
          return false;
        }

        if (document.myForm.username.value == "") {
          //alert( "Please provide your username!" );
          document.myForm.username.focus();
          document.getElementsByClassName('msgUser')[0].innerHTML =
            "Please provide your username!";
          return false;
        }

        if (document.myForm.password.value == "") {
          //alert( "Please provide your password!" );
          document.myForm.password.focus();
          document.getElementsByClassName('msgPass')[0].innerHTML =
            "Please provide your password!";
          return false;
        }


        //return(true);
      }
    </script>

  </body>
</html>
