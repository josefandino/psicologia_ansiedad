@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card">

               <div class="card-body">
                  @if (session('status'))
                     <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                     </div>
                  @endif
                  <h3 class="text-center">Hola {{ Auth::user()->name }}</h3>, 
                  <p class="text-center"> Bienvenid@ a la Terapia del día @php echo date('d-m-Y'); @endphp</p>

                  @include('partials.sessions_status')

                  <div class="text-right mb-3">
                     <a class="btn btn-success" href="{{ route('results.create') }}">Agregar </a>
                  </div>

                  <div class="tableBody">
                     <table id="students" class="table table-secondary table-striped table-hover table-bordered">
                     <thead class="">
                        <tr class="text-center border border-dander">
                           <th class="">No.</th>
                           <th class="">Fecha</th>
                           <th class="">Resultado pulsaciones</th>
                        </tr>
                     </thead>

                     <tbody class="tableFilas">
                        @guest

                           <h3 class="text-center bg-warning p-4">NO hay datos registrados</h3>                     

                        @else
                        @foreach ($results as $result)
                           <tr>
                              <td class="text-center">{{ $result->id }}</td>
                              <td class="text-center">{{ $result->created_at->formatLocalized('%H: %M:%S - %A %d %b %Y') }}</td>
                              <td class="text-center">{{ $result->result }}</td>
                           </tr>                            
                        @endforeach
                        @endguest
                        
                     </tbody>
                  </table>
                  </div>
                  <div class="pagination"></div>
               </div>
               </div>
         </div>
      </div>
   </div>
</div>
@endsection
