    @extends('adminlte::page')


    @section('title', 'Dashboard')

    @section('content_header')





    @stop


    @section('content')

        <p></p>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $count }}</h3>

                                <p>Itens cadastrados</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a  data-toggle="tooltip"  data-placement="top" title="Clique para saber mais sobre os itens cadastrados " href="item" class="small-box-footer">Mais Informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $countA }}<sup style="font-size: 20px"></sup></h3>

                                <p>Antenas cadastradas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="antena" class="small-box-footer">Mais Informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $countTag }}</h3>

                                <p>Tags ativas</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="tag" class="small-box-footer">Mais Informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $lavanderia }}</h3>
    
                                <p>Itens na lavanderia </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais Informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>

                <!-- /.row CARDS INICIAIS AQUIIIIIIIIIIIIIIIII-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Quantidade de itens em cada setor</h3>

                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <th>Local</th>
                                        <th>Quantidade</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lavanderia</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <td>Berçario</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                          <td>Cti</td>
                                          <td>150</td>
                                      </tr>
                                      <tr>
                                          <td>Infermaria</td>
                                          <td>100</td>
                                      </tr>
                                      
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Produtos com alta taxa de extravio</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Produto</th>
                                            <th>Preço</th>
                                            <th>Porcentagem</th>
                                            <th>Estatísticas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1"
                                                    class="img-circle img-size-32 mr-2">
                                                Lençol king
                                            </td>
                                            <td>R$150,00</td>
                                            <td>
                                                <small class="text-success mr-1">
                                                    <i class="fas fa-arrow-up"></i>
                                                    12%
                                                </small>
                                                35%
                                            </td>
                                            <td>
                                                <a href="item/1" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1"
                                                    class="img-circle img-size-32 mr-2">
                                                Fronha Travesseiro
                                            </td>
                                            <td>R$150,00</td>
                                            <td>
                                                <small class="text-warning mr-1">
                                                    <i class="fas fa-arrow-down"></i>
                                                    0.5%
                                                </small>
                                                45%
                                            </td>
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1"
                                                    class="img-circle img-size-32 mr-2">
                                                Cobertor Casal
                                            </td>
                                            <td>R$200,00</td>
                                            <td>
                                                <small class="text-danger mr-1">
                                                    <i class="fas fa-arrow-down"></i>
                                                    3%
                                                </small>
                                                10%
                                            </td>
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="dist/img/default-150x150.png" alt="Product 1"
                                                    class="img-circle img-size-32 mr-2">
                                                Cobertor
                                                <span class="badge bg-danger">NEW</span>
                                            </td>
                                            <td>R$123,30</td>
                                            <td>
                                                <small class="text-success mr-1">
                                                    <i class="fas fa-arrow-up"></i>
                                                    63%
                                                </small>
                                                87%
                                            </td>
                                            <td>
                                                <a href="#" class="text-muted">
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
            </div>
            <!-- /.row sEGUNDA LINHAAAAAAAAAAAAAA-->

            <div class="row">
                <div class="col">
                    <!--a-->
                </div>
                <div class="col">
                    <!--a-->
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2 bg-gradient-dark">
                            <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <h5 class="card-title text-primary text-white"></h5>
                                <p class="card-text text-white pb-2 pt-1"></p>
                                <a href="#" class="text-white"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
                            <div class="card-img-overlay d-flex flex-column justify-content-center">
                                <h5 class="card-title text-white mt-5 pt-2"><a href=""></a></h5>
                                <p class="card-text pb-2 pt-1 text-white">
                                     <br>
                                     <br>
                                    
                                </p>
                                <a href="#" class="text-white"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <div class="card mb-2">
                            <img class="card-img-top" src="../dist/img/photo3.jpg" alt="Dist Photo 3">
                            <div class="card-img-overlay">
                                <br>
                                <br>
                                <h5 class="card-title text-white">Os melhores hospitais</h5>
                                <p class="card-text pb-0.5 pt-0.5 text-white">
                                    
                                Premiação inédita revela   <br>
                                os melhores hospitais públicos <br>
                                do Brasil <br>
                                   
                                <a class="color:red;"href="https://www.conass.org.br/ranking-inedito-revela-os-melhores-hospitais-publicos-do-brasil/" class="text-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>




        @csrf
    @stop

    @section('css')

    @stop

    @section('js')

    @stop
