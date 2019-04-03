@extends('adminlte::page')

@section('title', 'TECÁMAC')

@section('content_header')
    <h1> <span class="fa fa-home"></span> Pagina de inicio</h1><br>
@stop

@section('content')  
<div class="row" >
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">                        
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">                
                <div class="col-md-12">
                  <div class="alert alert-success text-center" role="alert">
                    <h4 style="display: inline;">Solicitud guardada correctamente!</h4>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>       
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->               
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>	
@stop