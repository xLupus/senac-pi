<h1>Pagina de Listagem de Categorias</h1>

<ul>
  @foreach($categories as $category)
    <li>{{$category->name}}</li>
  @endforeach
</ul>
