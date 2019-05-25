<?php
class Ingredient{
	
	public $name;
	public $id;
	public $imgname;
	public $imgattrib;
	public $description;
	public $unit;
	public $cost;
	public $short;
	public $tim;
	
	function __construct($name="",$id=0,$imgname="",$imgattrib="",$description="",$unit="",$cost="",$short="",$tim=""){
		$this->name = $name;
		$this->id = $id;
		$this->imgname = $imgname;
		$this->imgattrib = $imgattrib;
		$this->description = $description;
		$this->unit = $unit;
		$this->cost = $cost;
		$this->short = $short;
		$this->tim = $tim;
	}
	
	function __toString(){
		return $this->name;
	}

	public static function getIngredientFromRow($row){
		$ningredient = new Ingredient();
		$ningredient->name = $row['ingredient_name'];
		$ningredient->imgname = $row['image_filename'];
		$ningredient->imgattrib = $row['image_attribution'];
		$ningredient->description = $row['description'];
		$ningredient->unit = $row['unit'];
		$ningredient->cost = $row['cost'];
		$ningredient->short = $row['short'];
		$ningredient->tim = $row['tim'];
		$ningredient->id= $row['ingredient_id'];
		return $ningredient;
	}
	
}
