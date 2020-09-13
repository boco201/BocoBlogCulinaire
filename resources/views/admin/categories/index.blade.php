@extends('admin.app')

@section('title', 'accueil')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">TITRE</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">IMAGE</th>
      <th scope="col">EDITER</th>
      <th scope="col">SUPPRIMER</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{ $category->id }}</th>
      <th scope="row">{{ $category->category_name }}</th>
      <td>{{ Str::limit ($category->description, 100) }}</td>
      <td>
              <img src="{{ asset('image/categories/'.$category->image) }}" alt="" width="80" height="50">
          </td>
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
<p>{{ $categories->links()}}</p>
@endsection

