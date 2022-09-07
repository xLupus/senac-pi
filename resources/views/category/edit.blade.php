<h1>Editar Categoria</h1>

<!-- <form action="{{route('category.store')}}" method="post">  Metodo mais comum-->
<form action="{{route('category.update', $category->id)}}" method="post">
  @csrf
  @method('PUT')
  <label>Categoria:</label>
  <input type="text" name="name" value="{{$category->name}}">

  <input type="submit" value="Salvar">
</form>
