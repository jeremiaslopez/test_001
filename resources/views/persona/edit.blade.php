@extends('layouts.principal')
@section('content')

<div class="content-wrapper">
        
  <!-- Main content -->
  <section class="content">
    
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">              
            {!!Form::model($personas,['route'=>['persona.update',$personas->id],'method'=>'PUT'])!!}

            @include('persona.forms.persona')

            {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
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