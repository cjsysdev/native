<!DOCTYPE html>
<html>
  <head>
    <title>Native Exercise</title>
    <link rel="stylesheet" href="views/style.css" />
  </head>

  <body id="main">
    <div class="default-margin">
      <nav>
        <ul>
          <li>
            <a id="loginLink" href="">LOGIN</a>
          </li>
          <li>
            <a id="registerLink" href="">REGISTER</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="default-margin">
      <form id="loginForm">
        <input name="username" type="text" placeholder="username" />
        <input name="password" type="password" placeholder="password" />
        <button type="submit">Submit</button>
      </form>
      <form id="registerForm" hidden>
        <input name="name" type="text" placeholder="name" />
        <input name="username" type="text" placeholder="username" />
        <input name="password" type="password" placeholder="password" />
        <input
          name="confirm_password"
          type="password"
          placeholder="confirm password"
        />
        <button type="submit">Submit</button>
      </form>
    </div>
  </body>

  <script src="views/scripts.js"></script>
</html>
