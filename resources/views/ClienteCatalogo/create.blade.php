
@extends("layouts.master")
@section("content")

<div class="tab-pane fade show active">

    <h1>Pagina de create</h1>
</div>

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Añadir Cliente
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/ClienteCatalogo/create') }}" method="POST">

	            @csrf

	            <div class="form-group">
	               <label for="title">Título</label>
	               <input type="text" name="title" id="title" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="title">A&ntilde;o</label>
	               <input type="number" name="year" id="year">
	            </div>

	            <div class="form-group">
	            	<label for="title">Director</label>
	               <input type="text" name="director" id="director" class="form-control">
	            </div>

	            <div class="form-group">
	            	<label for="title">P&oacute;ster</label>
	               <input type="text" name="poster" id="poster" class="form-control">
	            </div>

	            <div class="form-group">
	               <label for="synopsis">Resumen</label>
	               <textarea name="synopsis" id="synopsis" class="form-control" rows="3"></textarea>
	            </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Añadir Cliente
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>


@endsection
