@extends('layouts.principal')
@section('content')

<div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
              
{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
@include('usuario.forms.usr')
{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}

{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
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