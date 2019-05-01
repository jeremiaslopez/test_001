@extends('layouts.principal')

@if(Session::has('message'))
<div class="alert-succes alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>{{Session::get('message')}}
</div>
@endif

@section('content')
<div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
<table class="table">
<thead>
	<th>Nombre</th>
	<th>Correo</th>
	<th>Operacion</th>
</thead>
@foreach($users as $user)
<tbody>
	<td>{{$user->name}}</td>
	<td>{{$user->email}}</td>
	<td>{!!link_to_route('usuario.edit',$title='Editar',$parameters=$user->id,$attributes=['class'=>'btn btn-primary'])!!}</td>
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
