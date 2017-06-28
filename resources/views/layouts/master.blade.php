<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    @yield("css")
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/registracion">Register</a>
        </li>
        <li>
          <a href="/login">Login</a>
        </li>
      </ul>
      @yield("contenido")
      <footer>
        2017. Derechos reservados
      </footer>
    </nav>
  </body>
</html>
