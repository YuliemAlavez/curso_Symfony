<?php

namespac Curso\MainBundle\Entity;

use Doctrine\ORM\Mapping ar ORM;

/**
*
* @ORM\Entity
*
*/
class Producto{
	/**
	* @ORM\Id
	* @ORM\Coumn(type="integer")
	* @ORM\GeneratedValue
	*/
	protected $id;

	/**
	* @ORM\Coumn(type="string". lenght=100)
	*/
	protected $nombre;

	/**
	* @ORM\Coumn(type="string". lenght=100)
	*/
	protected $precio;

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre=$nombre;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio($precio){
		$this->precio=$precio;
	}

}