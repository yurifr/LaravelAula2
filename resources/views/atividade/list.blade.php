<h1>Lista de Atividades</h1>
<hr>
@foreach($atividades as $atividade)
	<h3>{{$atividade->scheduledto}}</h3>
	<p>{{$atividade->title}}</p>
	<p>{{$atividade->description}}</p>
	<br>
@endforeach



<!-- \Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')  -->