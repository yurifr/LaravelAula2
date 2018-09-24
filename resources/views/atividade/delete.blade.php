<center><h1>Excluir Registro</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<p>Você realmente deseja excluir a atividade {{$atividade->id}}?</p>
	<input type="submit" value="Deletar">
</form>
</center>