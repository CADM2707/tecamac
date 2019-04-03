@extends('adminlte::page')

@section('title', 'TECÁMAC')

@section('content_header')
    <h1 style=" color: #454747"> <span class="fa fa-home"></span> Pagina de inicio</h1><br>
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                  <p class="text-center">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid img-thumbnail" alt="Responsive image" style="border: none">
                  </p>              
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
