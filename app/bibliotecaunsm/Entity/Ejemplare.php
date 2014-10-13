<?php
namespace bibliotecaunsm\Entity;

class Ejemplare extends \Eloquent {

	protected $fillable = [];
    protected $table = 'ejemplar';
    protected $timestamp = false;
    protected $primarykey = array('CarreraID', 'TipoID','SituacionID');
}