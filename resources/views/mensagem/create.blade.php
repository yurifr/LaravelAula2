<center><h1>Formulário de Cadastro de Mensagens</h1></center>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagens" method="post">
	{{ csrf_field() }}
	Título: 		<input type="text" name="titulo"><br><br>
	Texto:		<input type="text" name="texto"><br><br>
	Autor:  <input type="text" name="autor"><br><br>
	<input type="submit" value="Salvar">
</form>