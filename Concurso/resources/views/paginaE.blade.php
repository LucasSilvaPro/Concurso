
<form action="{{route('editarE', $concursos->getId())}}" method="get">

	<input type="text" name="nome" value="{{$concursos->getNome()}}">
	<input type="text" name="edital" value="{{$concursos->getEdital()}}">
	<input type="date" name="dataDeVecimentoDasInscricoes" value="{{$concursos->getVencimento()}}">
	<input type="date" name="dataDaFinal" value="{{$concursos->getFinal()}}">
	<input type="submit" name="" value="Atualizar">

</form>