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
                <h3>{{$count}}</h3>

                <p>Itens cadastrados</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="item" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$countA}}<sup style="font-size: 20px"></sup></h3>

                <p>Antenas cadastradas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="antena" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$countTag}}</h3>

                <p>Tags ativas</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="tag" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$lavanderia}}</h3>

                <p>Itens na lavanderia </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Mais Informações <i class="fas fa-arrow-circle-right"></i></a>
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
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
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


    </section>





    @csrf
    @stop

    @section('css')
    
    @stop

    @section('js')

    @stop