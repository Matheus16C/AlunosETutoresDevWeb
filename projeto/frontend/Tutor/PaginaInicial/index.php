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
            width: 400px;
            height: 400px;
            margin: 8em auto;
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
          padding-top: 10px;
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
                    <li><a href="#">Minha Carteira</a></li>
                    <li><a href="#">Área do tutor</a></li>
                    <li><a href="#">Eventos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--div class="container" style="text-align: right; margin-right:100px">
        <div style="display: inline-block; margin-right: 10px;vertical-align:middle">
            <p style="color:black; margin-bottom: 0px">Olá, Aluno!</p>
            <div>
                <a style="color:black">Perfil</a> | 
                <a style="color:black">Sair</a>
            </div>
        </div>
        <div style="display: inline-block; vertical-align:middle">
            <img src="avatar_aluno.jpg" width="80" height="80">
        </div>

    </div-->
    
    <div class="container">
        <div class="row">
            <div class="col-md-9">  
                <div class="card text-center col-6" style="margin-top: 30px">
                <div class="card-header" style="border-bottom-style: none; padding-bottom: 10px;" >
                    <ul class="nav nav-tabs card-header-tabs" id="tabs">
                        <li class="nav-item">
                            <a style="color:black" class="active nav-link active" href="#aguardandoAceitacao" data-toggle="tab">Aguardando Aceitação</a>
                        </li>
                        <!---li class="nav-item">
                            <a style="color:black" class="nav-link" href="#link" data-toggle="tab">Feed</a>
                        </li-->
                        <li class="nav-item">
                            <a style="color:black" class="nav-link" href="#aulasIndividuais" data-toggle="tab">Aulas Individuais</a>
                        </li>
                        <li class="nav-item">
                            <a style="color:black" class="nav-link" href="#aulasColetivas" data-toggle="tab">Aulas Coletivas</a>
                        </li>
                    </ul>
                </div>
                <?php include '../../../backend/Tutor/PaginaInicial/aulasAguardandoAceitacao.php' ?>

                <div class="card-body" style="background-color:#f5f5f5;">
                    <div class="tab-content">
                        <div class="tab-pane active" id="aguardandoAceitacao">
                            <div class="container">
                                <div class="row">
                                
                                    <div class="col-md-4 cardmargin">
                                      <div class="card">
                                        <div class="card-body cardpadding">  
                                        <h3>
                                          <?php
                                            echo $rs['aluno'];
                                          ?>
                                        </h3>
                                        <h5>
                                          <?php
                                            echo $rs['area'];
                                          ?>
                                        </h5>
                                        <p>
                                          <?php
                                            echo $rs['comentario'];
                                          ?>
                                        </p>
                                        <h5>
                                          Data: 
                                          <?php
                                            echo $rs['dataaula'];
                                          ?>
                                          Duração: 
                                          <?php
                                            echo $rs['duracao'];
                                          ?>
                                        </h5>

                                        <button class="btn btn-success">Aceitar</button>
                                        <button class="btn btn-danger">Recusar</button>
                                        
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                                      while($row = pg_fetch_assoc($result)){
                                        if($cont%2==0){
                                          ?>
                                            
                                            <div class="row">
                                              <div class="col-md-4 cardmargin">
                                                <div class="card">
                                                <div class="card-body cardpadding">    
                                                  <h3>
                                                    <?php
                                                      echo $row['aluno'];
                                                    ?>
                                                  </h3>
                                                  <h5>
                                                    <?php
                                                      echo $row['area'];
                                                    ?>
                                                  </h5>
                                                  <p>
                                                    <?php
                                                      echo $row['comentario'];
                                                    ?>
                                                  </p>
                                                  <h5>
                                                    Data: 
                                                    <?php
                                                      echo $row['dataaula'];
                                                    ?>
                                                    Duração: 
                                                    <?php
                                                      echo $row['duracao'];
                                                    ?>
                                                  </h5>

                                                  <button class="btn btn-success">Aceitar</button>
                                                  <button class="btn btn-danger">Recusar</button>
                                                </div>
                                                </div>
                                              </div>
                                              

                                          <?php
                                        }else{
                                          ?>
                                            <div class="col-md-4 cardmargin">
                                              <div class="card">
                                              <div class="card-body cardpadding">    
                                              <h3>
                                                <?php
                                                  echo $row['aluno'];
                                                ?>
                                              </h3>
                                              <h5>
                                                <?php
                                                  echo $row['area'];
                                                ?>
                                              </h5>
                                              <p>
                                                <?php
                                                  echo $row['comentario'];
                                                ?>
                                              </p>
                                              <h5>
                                                Data: 
                                                <?php
                                                  echo $row['dataaula'];
                                                ?>
                                                Duração: 
                                                <?php
                                                  echo $row['duracao'];
                                                ?>
                                              </h5>

                                              <button class="btn btn-success">Aceitar</button>
                                              <button class="btn btn-danger">Recusar</button>
                                              </div>
                                              </div>
                                            </div>
                                          </div>
                                          <?php

                                        }
                                         $cont = $cont +1;
                                      }
                                    ?> 
                     <?php 
                      if($cont%2!=0){
                        
                      ?>
                        
                        </div>
                       <?php 
                      }
                      
                     ?>   
                      </div>
                      </div>    
                      <?php include '../../../backend/Tutor/PaginaInicial/aulasIndividuaisAceitas.php' ?>
                      <div class="tab-pane" id="aulasIndividuais">                       
                       <div class="container">
                                <div class="row">
                                
                                    <div class="col-md-4 cardmargin">
                                      <div class="card">
                                        <div class="card-body cardpadding">  
                                        <h3>
                                          <?php
                                            echo $rs['aluno'];
                                          ?>
                                        </h3>
                                        <h5>
                                          <?php
                                            echo $rs['area'];
                                          ?>
                                        </h5>
                                        <p>
                                          <?php
                                            echo $rs['comentario'];
                                          ?>
                                        </p>
                                        <h5>
                                          Data: 
                                          <?php
                                            echo $rs['dataaula'];
                                          ?>
                                          Duração: 
                                          <?php
                                            echo $rs['duracao'];
                                          ?>
                                        </h5>

                                        <button class="btn btn-danger">Cancelar</button>
                                    </div>
                                    </div>
                                    </div>
                                    <?php
                                      while($row = pg_fetch_assoc($result)){
                                        if($cont%2==0){
                                          ?>
                                            
                                            <div class="row">
                                              <div class="col-md-4 cardmargin">
                                                <div class="card">
                                                <div class="card-body cardpadding">    
                                                  <h3>
                                                    <?php
                                                      echo $row['aluno'];
                                                    ?>
                                                  </h3>
                                                  <h5>
                                                    <?php
                                                      echo $row['area'];
                                                    ?>
                                                  </h5>
                                                  <p>
                                                    <?php
                                                      echo $row['comentario'];
                                                    ?>
                                                  </p>
                                                  <h5>
                                                    Data: 
                                                    <?php
                                                      echo $row['dataaula'];
                                                    ?>
                                                    Duração: 
                                                    <?php
                                                      echo $row['duracao'];
                                                    ?>
                                                  </h5>

                                                  <button class="btn btn-danger">Cancelar</button>
                                                </div>
                                                </div>
                                              </div>
                                              

                                          <?php
                                        }else{
                                          ?>
                                            <div class="col-md-4 cardmargin">
                                              <div class="card">
                                              <div class="card-body cardpadding">    
                                              <h3>
                                                <?php
                                                  echo $row['aluno'];
                                                ?>
                                              </h3>
                                              <h5>
                                                <?php
                                                  echo $row['area'];
                                                ?>
                                              </h5>
                                              <p>
                                                <?php
                                                  echo $row['comentario'];
                                                ?>
                                              </p>
                                              <h5>
                                                Data: 
                                                <?php
                                                  echo $row['dataaula'];
                                                ?>
                                                Duração: 
                                                <?php
                                                  echo $row['duracao'];
                                                ?>
                                              </h5>

                                              <button class="btn btn-danger">Cancelar</button>
                                              </div>
                                              </div>
                                            </div>
                                          </div>
                                          <?php

                                        }
                                         $cont = $cont +1;
                                      }
                                    ?> 
                     <?php 
                      if($cont%2!=0){
                        
                      ?>
                        
                        </div>
                       <?php 
                      }
                      
                     ?>   
                      </div>
                      
                      </div>
                      <?php include '../../../backend/Tutor/PaginaInicial/aulasColetivas.php' ?>
                      <div class="tab-pane" id="aulasColetivas">
                      <div class="container">
                        <div class="row">
                            <div class="col-md-4 cardmargin">
                              <div class="card">
                                <div class="card-body cardpadding">  
                                <h3>
                                  <?php
                                    echo $rs['area'];
                                  ?>
                                </h3>
                                <h5>
                                  <?php
                                    echo $rs['descricao'];
                                  ?>
                                </h5>
                                <p>
                                  Quantidade de alunos inscritos:
                                  <?php
                                    echo $rs['qtd_alunos'];
                                  ?>
                                </p>
                                <h5>
                                  Data: 
                                  <?php
                                    echo $rs['dataaula'];
                                  ?>
                                  Duração: 
                                  <?php
                                    echo $rs['duracao'];
                                  ?>
                                </h5>

                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                            </div>
                            </div>
                            <?php
                              while($row = pg_fetch_assoc($result)){
                                if($cont%2==0){
                                  ?>
                                    
                                    <div class="row">
                                      <div class="col-md-4 cardmargin">
                                        <div class="card">
                                        <div class="card-body cardpadding">    
                                          <h3>
                                            <?php
                                              echo $row['area'];
                                            ?>
                                          </h3>
                                          <h5>
                                            <?php
                                              echo $row['descricao'];
                                            ?>
                                          </h5>
                                          <p>
                                            Quantidade de alunos inscritos:
                                            <?php
                                              echo $row['qtd_alunos'];
                                            ?>
                                          </p>
                                          <h5>
                                            Data: 
                                            <?php
                                              echo $row['dataaula'];
                                            ?>
                                            Duração: 
                                            <?php
                                              echo $row['duracao'];
                                            ?>
                                          </h5>

                                          <button class="btn btn-danger">Cancelar</button>
                                        </div>
                                        </div>
                                      </div>
                                      

                                  <?php
                                }else{
                                  ?>
                                    <div class="col-md-4 cardmargin">
                                      <div class="card">
                                      <div class="card-body cardpadding">    
                                      <h3>
                                        <?php
                                          echo $row['area'];
                                        ?>
                                      </h3>
                                      <h5>
                                        <?php
                                          echo $row['descricao'];
                                        ?>
                                      </h5>
                                      <p>
                                        Quantidade de alunos inscritos:
                                        <?php
                                          echo $row['qtd_alunos'];
                                        ?>
                                      </p>
                                      <h5>
                                        Data: 
                                        <?php
                                          echo $row['dataaula'];
                                        ?>
                                        Duração: 
                                        <?php
                                          echo $row['duracao'];
                                        ?>
                                      </h5>

                                      <button class="btn btn-danger">Cancelar</button>
                                      </div>
                                      </div>
                                    </div>
                                  </div>
                                  <?php

                                }
                                  $cont = $cont +1;
                              }
                            ?> 
                     <?php 
                      if($cont%2!=0){
                        
                      ?>
                        
                        </div>
                       <?php 
                      }
                      
                     ?>   
                      </div>
                      
                      </div>
                      
                </div>
              </div>
              </div>
            </div>
            
            
            <div class="col-md-3"> 
                <div style="text-align: center; margin-bottom: 40px; margin-top: 20px">
                
                    <div style="display: inline-block; margin-right: 10px;vertical-align:middle">
                        <p style="color:black; margin-bottom: 0px">Olá, <?php echo $nome[0]; ?>!</p>
                        <div>
                            <a style="color:black">Perfil</a> | 
                            <a style="color:black">Sair</a>
                        </div>
                    </div>
                    <div style="display: inline-block; vertical-align:middle">
                        <img src=<?php echo "../../../" . $tutor['foto']; ?> width="80" height="80">
                    </div>
                
                </div>

                <table class="table-condensed table-bordered table-striped">
                    <thead>
                        <tr>
                        <th colspan="7">
                            <span class="btn-group">
                                <a class="btn"><i class="icon-chevron-left"></i></a>
                                <a style="color:black" class="btn active">Julho 2021</a>
                                <a class="btn"><i class="icon-chevron-right"></i></a>
                            </span>
                        </th>
                        </tr>
                        <tr>
                            <th>Su</th>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="muted">29</td>
                            <td class="muted">30</td>
                            <td class="muted">31</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>13</td>
                            <td>14</td>
                            <td>15</td>
                            <td>16</td>
                            <td>17</td>
                            <td>18</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td class="btn-primary"><strong>20</strong></td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td class="muted">1</td>
                            <td class="muted">2</td>
                            <td class="muted">3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
