<?php
namespace bibliotecaunsm\Entity;

class Materia extends \Eloquent {
	protected $fillable = [];
	protected $table = 'materia';
    protected $timestamp = false;
    protected $primarykey = 'IdMateria';
}