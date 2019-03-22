
<form action="<?php echo e(route('editarE', $concursos->getId())); ?>" method="get">

	<input type="text" name="nome" value="<?php echo e($concursos->getNome()); ?>">
	<input type="text" name="edital" value="<?php echo e($concursos->getEdital()); ?>">
	<input type="date" name="dataDeVecimentoDasInscricoes" value="<?php echo e($concursos->getVencimento()); ?>">
	<input type="date" name="dataDaFinal" value="<?php echo e($concursos->getFinal()); ?>">
	<input type="submit" name="" value="Atualizar">

</form>
<?php /* /home/lucas/Desktop/Concurso/resources/views/paginaE.blade.php */ ?>