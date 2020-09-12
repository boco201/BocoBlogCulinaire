@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-12">
            <div class="form-group">
               <label for="name">Nom</label>
               <input type="text" class="form-control" name="name">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
               <label for="email">Email: </label>
               <input type="text" class="form-control" name="email">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
               <label for="description">Description: </label>
               <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </div>
</div>
@endsection