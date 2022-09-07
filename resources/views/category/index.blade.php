<h1>Pagina de Listagem de Categorias</h1>

<ul>
  @foreach($categories as $category)
    <li> {{$category->name}}
      <a href="{{ route('category.edit', $category->id) }}">Editar</a>
      <a href="{{ route('category.destroy', $category->id) }}">Apagar</a>
    </li>
  @endforeach
</ul>
