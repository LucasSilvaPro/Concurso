<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    protected $fillable=[
    	'nome','edital','dataDeVencimentoDasInscricoes','dataDaFinal',
    ];

    public function getId(){return $this->id;}
    public function getNome(){return $this->nome;}
    public function getEdital(){return $this->edital;}
    public function getVencimento(){return $this->dataDeVecimentoDasInscricoes;}
    public function getFinal(){return $this->dataDaFinal;}
}
