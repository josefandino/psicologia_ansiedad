@extends('layouts.app')
@section('content')

<div class="container text-center mt-5">
   <h1 class="text-center">Enviar mensaje</h1>

   @include('Partials.sessions_status')
   
      <form action="{{ route('contact') }}" method="POST" >
         @csrf
         <div>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Nombres">
            <p class="text-danger"><strong>{{ $errors->first('name') }}</strong></p>
         </div>
         
         <div>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email...">
            <p class="text-danger"><strong>{{ $errors->first('email') }}</strong></p>      
         </div>
   
         <div>
            <input class="form-control" type="text" name="asunto" value="{{ old('asunto') }}" placeholder="Asunto...">
            <p class="text-danger"><strong>{{ $errors->first('asunto') }}</strong></p>
         </div>
   
         <div>
            <textarea class="form-control" name="contenido" id="" cols="30" rows="10" style="resize:none;">{{ old('contenido') }}</textarea>
            <p class="text-danger"><strong>{{ $errors->first('contenido') }}</strong></p>
         </div>
   
         <button type="submit" class="btn btn-primary mt-3">Enviar</button>
   
      </form>



   

</div>

@endsection