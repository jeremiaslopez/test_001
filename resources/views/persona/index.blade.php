@extends('layouts.principal')
@section('content')
<div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              @if(Session::has('message'))
              <div class="alert-succes alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>{{Session::get('message')}}
              </div>
              @endif
            
              <div class="box">
                {!!Form::open(['route'=>['persona.index',
                ],'method'=>'GET', 'class' => 'navbar-form navbar-left pull-right'])!!}
                <div class="form-group">
                {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
                </div>
                {!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}
                {!!Form::close()!!}
              </div>
              <br><br>
              <div class="box">
            
                <div class="box-header with-border">
                  <table class="table">
                    <thead>
                      <th>Nombre</th>
                      <th>Telefono</th>
                      <th>Opción</th>
                    </thead>
                    @foreach($personas as $persona)
                    <tbody>
                      <td>{{$persona->nombre.' '.$persona->aPaterno.' '.$persona->aMaterno}}</td>
                      <td>{{$persona->telefono}}</td>
                      <td>
                        {!!link_to_route('persona.edit',$title='Editar',$parameters=$persona->id,$attributes=['class'=>'btn btn-primary'])!!}
                        {!!Form::open(['route'=>['persona.destroy',$persona->id],'method'=>'DELETE'])!!}
                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                        {!!Form::close()!!}
                      </td>
                    </tbody>
                    @endforeach	
                  </table>
                </div>
                <!-- /.box-header -->
                
                  </div><!-- /.row -->
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->

        </section>

@stop
