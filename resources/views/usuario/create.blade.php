@extends('layouts.principal')

@section('content')
<div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
                  @include('usuario.forms.usr')
                  {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                  {!!Form::close()!!}
                </div>
                <!-- /.box-header -->
                
              </div><!-- /.row -->
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div><!-- /.col -->
    </div><!-- /.row -->
   </section>
 @stop