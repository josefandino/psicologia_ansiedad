@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                     </div>
                  @endif

                  <h3 class="text-center mb-5">Agregar resultados</h3>

                  <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">

                     @csrf

                     <input class="form-control bm-3" type="number" 
                        name="result" 
                        value="{{ old('result') }}"
                        placeholder="Resultado"
                     >
                     <p class="text-danger text-center "><strong>{{ $errors->first('result') }}</strong></p>
         
                     <button class="btn btn-success btn-block" type="submit">Agregar resultado</button>
				         <a href="{{ route('dashboard') }}" class="btn btn-danger float-right mt-2 mb-5"><i class="fas fa-window-close"></i> Cancelar</a>
                  </form>


               </div>
         </div>
      </div>
   </div>
</div>

<div class="bgCreate">
   <img src="{{ asset('img/bgapp.png') }}" alt="">
</div>
@endsection
