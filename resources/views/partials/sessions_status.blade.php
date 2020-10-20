
@if(session('status'))
   <h5 class="bg-warning text-center p-3">
      {{ session('status') }}
   </h5>
@endif

@if(session('danger'))
   <h5 class="bg-danger text-center p-3">
      {{ session('danger') }}
   </h5>
@endif

@if(session('primary'))
   <h5 class="bg-primary text-center p-3">
      {{ session('primary') }}
   </h5>
@endif

@if(session('success'))
   <h5 class="bg-success text-center p-3">
      {{ session('success') }}
   </h5>
@endif