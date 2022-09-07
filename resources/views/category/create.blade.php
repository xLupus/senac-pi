<!-- <form action="{{route('category.store')}}" method="post">  Metodo mais comum-->
<form action="{{route('category.store')}}" method="post">
  @csrf
  <label>Categoria:</label>
  <input type="text" name="name">

  <input type="submit" value="Enviar">
</form>
