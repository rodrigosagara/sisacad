<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema Acadêmico</title>

    <!--estilos-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{url('node_modules/materialize-css/dist/css/materialize.min.css')}}">
    <link rel="shortcut icon" href="http://placehold.it/16x16" type="image/x-icon">
</head>

<body>
    <nav class="blue">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" class="brand-logo center">Sistema Acadêmico</a>
          <!-- mobile menu trigger -->
          <a href="#" data-activates="mobile-menu" class="button-collapse hide-on-large"><i class="material-icons">menu</i></a>
          <!-- desktop menu content -->
          <ul class="right hide-on-med-and-down">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('painel/turma')}}">Turmas</a></li>
            <li><a href="{{url('painel/aluno')}}">Alunos</a></li>
          </ul>
          <!-- mobile and tablet menu content -->
          <ul id="mobile-menu" class="side-nav">
            <li>
              <div class="userView">
                <div class="background">
                  <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="">
                </div>
                <a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt=""></a>
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
              </div>
            </li>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('painel/turma')}}">Turmas</a></li>
            <li><a href="{{url('painel/aluno')}}">Alunos</a></li>
          </ul>
        </div>
      </div>
    </nav>
    @yield('conteudo')

    <footer class="page-footer blue">
      <div class="footer-copyright">
        <div class="container">
          © 2019 Todos os direitos reservados
          <a class="grey-text text-lighten-4 right" href="mailto:rodrigo.sagara8@gmail.com">Desenvolvido por: Rodrigo Santos</a>
        </div>
      </div>
    </footer>
    <!--scripts-->
    <script src="{{url('node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('node_modules/materialize-css/dist/js/materialize.min.js')}}"></script>
    <script>
    $().ready(() => {
        $(".button-collapse").sideNav();
        $(".modal").modal();            
    })
    </script>
</body>

</html>