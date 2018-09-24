<center>
  <h1>Lista de Atividades</h1>
<br><br>
</center>
  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($atividades as $atividade)
<br><br>
	<b>Título: </b><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a>
  <p><b>Agendado para: </b>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</p>
	<p><b>Descrição: </b>{{$atividade->description}}</p>

@auth
  <p><b>Ações: </b>
    <b><a href="/atividades/{{$atividade->id}}">Sobre</a></b>
    <b><a href="/atividades/{{$atividade->id}}/edit">Editar</a></b> 
    <b><a href="/atividades/{{$atividade->id}}/delete">Deletar</a></b>
  </p>
@endauth
@endforeach
<br>

@auth
<p><a href="/atividades/create">Criar nova atividade</a></p>
@endauth


<button class="aaa"><a class="aaa" href="/login">Login</a></button>
<button class="aaa"><a class="aaa" href="/register">Register</a></button>
<style type="text/css">
  .aaa{
    font-size: 16px;
    font-style: sans-serif;
    background-color: #007bff;
    color:white;
    text-decoration: none
  }
</style>