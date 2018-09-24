<h1>Lista de Mensagem</h1>
<hr>

  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($mensagens as $mensagem)
	<h3>Título: <b><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a></b></h3>
  <p>Texto: <b>{{$mensagem->texto}}</b></p>
	<p>Autor: <b>{{$mensagem->autor}}</b></p>
  @auth
  <p>Ações: 
    <a href="/mensagens/{{$mensagem->id}}">Sobre</a>
    <a href="/mensagens/{{$mensagem->id}}/edit">Editar</a> 
    <a href="/mensagens/{{$mensagem->id}}/delete">Deletar</a>
  </p>
@endauth
	<br>
@endforeach
@auth
<br>
<p><a href="/mensagens/create">Criar nova mensagem</a></p>
@endauth



<button class="aaa"><a class="aaa" href="/login">Login</a></button>
<button class="aaa"><a class="aaa" href="/register">Register</a></button>
<style type="text/css">
  .aaa{
    font-size: 16px;
    background-color: #007bff;
    color:white;
    text-decoration: none
  }
</style>
