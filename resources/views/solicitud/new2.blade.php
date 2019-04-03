@extends('adminlte::page')

@section('title', 'TECÁMAC')

@section('content_header')
<h1>
    <span class="fa fa-pencil-square">
    </span>
    Nueva solicitud
</h1>
<br>
    @stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-1 col-xs-0">
                        </div>
                        <div class="col-md-10" style=" background-color: #F0F0F0 ;"><br>
                            <div class="row">
                                  <div class="col-sm-3 col-xs-12" >
                                    <label>CURP</label>
                                    <input onchange="getData()" value="JADL920807HSWSS09" class="form form-control" type="text" name="curp" required="true">
                                  </div>
                                  <div class="col-sm-3 col-xs-12" >
                                    <label>Nombre</label>
                                    <input readonly="true" value="" class="form form-control" type="text" id="nombre" name="nombre" required="true">
                                  </div>
                                  <div class="col-sm-3 col-xs-12" >
                                    <label>Apellido Paterno</label>
                                    <input readonly="true" value="" class="form form-control" type="text" id="aPat" name="aPat" required="true">
                                  </div>
                                  <div class="col-sm-3 col-xs-12" >
                                    <label>Apellido Materno</label>
                                    <input readonly="true" value="" class="form form-control" type="text" id="aMat" name="aMat" required="true">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span id="red" class="info-box-icon bg-aqua">
                                            <i class="fa fa-home">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Carta entrega de la casa
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-danger">Sin entregar <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-user">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               INE
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-file">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                              Comprobante de domicilio
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>  <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-home">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Carta entrega de la casa
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-user">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Fotografías
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-map">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Croquis
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div><div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-users">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Firma de vecinos
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-money">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                               Pagos en regla de predio y agua 
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                 <div class="col-sm-6 col-xs-12" >
                                    <div class="info-box">
                                        <span class="info-box-icon bg-aqua">
                                            <i class="fa fa-copy">
                                            </i>
                                        </span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">
                                              Dictamen de protección civil 
                                            </span>
                                            <span class="info-box-number">
                                               Status:
                                            </span>
                                            <label class="text-success">Entregada <span class="fa fa-check-square"></span></label>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                </div>
                                <div class="row" style="display: none" id="contMsg">                
                <div class="col-md-12">
                  <div class="alert alert-warning text-center" role="alert">
                    <h4 style="display: inline;">No se puede guardar la solicitud puesto que le faltan requisitos por entregar!</h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>       
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->               
              </div>
                                <div class="row text-center">
                                  <input onclick="displayMsg()" class="form form-control btn btn-danger" type="button" value="Guardar" ></input>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    @push ('js')
    <script>
        function displayMsg(){
            $("#contMsg").show();
            $("#red").removeClass('bg-aqua').addClass('bg-red');
        }
        function getData()
        {
            $("#nombre").val("Juan");
            $("#aPat").val("Perez");
            $("#aMat").val("Hernandez");
        }
    </script>
