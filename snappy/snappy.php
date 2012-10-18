<?php

class Snappy
{
	protected $snappy;
	
	public static function make($binary = null, array $options = array())
	{
		return new Knp\Snappy\Pdf($binary, $options);
	}
}