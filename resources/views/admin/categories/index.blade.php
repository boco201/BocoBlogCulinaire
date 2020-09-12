@extends('admin.app')

@section('title', 'Blog Culinaire | Accueil')

@section('content')
<div class="container mt-4">
@if (count($errors) > 0)
      <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.
          <ul>
             @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
                </ul>
            </div>
 @endif

@if (session()->has('success'))
       <div class="alert alert-success">
           {{ session()->get('success') }}        
       </div>
@endif

@if (session()->has('danger'))
       <div class="alert alert-danger">
           {{ session()->get('danger') }}        
       </div>
@endif

@if (session()->has('secondary'))
       <div class="alert alert-secondary">
           {{ session()->get('secondary') }}        
       </div>
@endif
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <td>{{ Str::limit($category->description, 20) }}</td>
      <td><img src="{{ asset('image/categories/'.$category->image) }}" alt="" width="80" height="50"></td>
      <td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-secondary">Editer</a> </td>
      <td> 
          <form action="{{ route('admin.categories.destroy', $category->id) }}"  method="POST" enctype="multipart/form-data">
              @csrf 
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container">
<p>{{ $categories->links()}}</p>
</div>
@endsection

