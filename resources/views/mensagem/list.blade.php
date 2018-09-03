<h1>Lista de Mensagens</h1>
<hr>
@foreach($mensagens as $mensagem)
	<h3>{{$mensagem->autor}}</h3>
	<p><a href="/mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a></p>
	<p>{{$mensagem->texto}}</p>
	<br>
@endforeach



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->