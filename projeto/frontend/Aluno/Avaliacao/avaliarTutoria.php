<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha/css/bootstrap.min.css" rel="stylesheet"/>

    <title>Alunos e Tutores</title>

    <style>
        body {
            background-color: #DCDCDC;
            font-family: 'Ubuntu', sans-serif;
        }

        .main {
            background-color: #FFFFFF;
            margin: 1em auto;
            border-radius: 1.5em;
            box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
        }

        a {
            text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
            color: white;
            text-decoration: none
        }
        p {
            text-align: center;
            max-width: 350px;  /* Limite maximo do texto*/
            white-space: nowrap; /* Removendo quebra de linha */
            overflow: hidden; /* Removendo a barra de rolagem */
            text-overflow: ellipsis; /* Adicionando "..." ao final do texto */
        }
        .cardmargin{
          margin-bottom: 5px;
        }
        
        .cardpadding{
          background-color: #FFFFFF;
          padding-bottom: 20px;
        }

    </style>

</head>

<body>
    <nav>
        <div class="container-fluid navbar navbar-dark bg-primary">
            <div id="myNavbar">
                <ul class="nav navbar-nav collapse navbar-collapse">
                    <li style="margin-left: -20px; font-size: 18pt"><a>Alunos e Tutores</a></li>
                </ul>
                <ul class="nav navbar-nav collapse navbar-collapse">
                    <li><a href="#">Página Inicial</a></li>
                    <li><a href="../Busca/agendamentoTutoria.php">Busca</a></li>
                    <li><a href="#">Minha Carteira</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <h3>
                Avaliar Tutoria
            </h3>
        </div>
    </div>
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <form name="form_avaliacao" method="POST" action="../../../backend/Aluno/Avaliacao/cadastroAvaliacao.php">
    <div class="panel panel-default main form-group">
        <div class="panel-body" style="padding-top: 50px">
            <div class="row form-group" style="margin-top: 10px; margin-left: 50px">
                <div class="col-md-4">
                    <label for="nomeTutorTitle">Nome do Tutor: </label>
                    <span for="nomeTutorValue">Natan Cypriano</span></br>

                    <label for="nomeTutorTitle">Conteúdo: </label>
                    <span for="nomeTutorValue">Matemática Financeira</span>
                </div>

                <div class="col-md-2">
                    <label for="nomeTutorTitle">Data: </label>
                    <span for="nomeTutorValue">20/07/2021</span>

                    <label for="nomeTutorTitle">Hora: </label>
                    <span for="nomeTutorValue">13:30</span>
                </div>

            </div>
            <div class="row form-group" style="margin-top: 10px; margin-left: 50px">
                <div class="col-md-3">
                    <label for="nota">Nota</label>
                    <input type="number" name="nota" class="form-control" id="nota" min="0" max="5">
                </div>
            </div>

            <div class="row form-group" style="margin-top: 10px; margin-left: 50px">
                <div class="col-md-6">
                    <label for="nota">Comentario</label>
                    <textarea cols="20" rows="10" class="form-control" name="comentario" id="comentario"></textarea>
                </div>
            </div>

            <div class="row" style="margin-top: 5em;">
                <div class="col-md-8"></div>
                <div class="col-md-2" style="margin-left:50px">
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
                <div>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    </div>

</body>


</html>