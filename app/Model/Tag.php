<?php namespace App\Model;

class Tag extends Meta{
    use Scope\TagTrait;
	protected $table='metas';
}
