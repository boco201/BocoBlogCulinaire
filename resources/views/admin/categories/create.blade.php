@extends('admin.app')

@section('title', 'Create')

@section('content')

<h1>Ajouter une catégorie</h1>
<form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
  @csrf
   <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="category_name">Nom  la categorie</label>
                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Ajouter une catégorie">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="facultatif"></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label for="image">upload image</label>
                <input type="file" class="form-control btn btn-primary" name="image">
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Ajouter une categorie</button>
        </div>
    </div>
    </form>

@endsection
