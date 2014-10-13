<?php
namespace bibliotecaunsm\Entity;

class Facultad extends \Eloquent {
	protected $fillable = [];
    protected $table = 'facultad';
    protected $timestamp = false;
    protected $primarykey = 'FacultadID';
}