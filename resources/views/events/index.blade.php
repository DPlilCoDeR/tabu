@extends('events.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Eventos</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th width="280px"></th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->title }}</td>
            <td>{{ $event->event_date }}</td>
            <td>{{ $event->hour }}</td>
            <td>{{ $event->location }}</td>
            <td>{{ $event->value }}</td>
            <td>{{ $event->description }}</td>
            <td>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection

@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Definition</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Definition</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Título</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Precio</th>
            <th>Descripción</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            {{-- <td>{{ ++$i ?? '' ?? '' }}</td> --}}
            <td>{{ $event->title }}</td>
            <td>{{ $event->event_date }}</td>
            <td>{{ $event->hour }}</td>
            <td>{{ $event->location }}</td>
            <td>{{ $event->value }}</td>
            <td>{{ $event->description }}</td>
            <td>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
        
@endsection