<?php
class Ingredient{
	
	public $name;
	public $id;
	public $imgname;
	public $imgattrib;
	public $description;
	
	
	function __construct($name="",$id=0,$imgname="",$imgattrib="",$description=""){
		$this->name = $name;
		$this->id = $id;
		$this->imgname = $imgname;
		$this->imgattrib = $imgattrib;
		$this->description = $description;
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
		$ningredient->id= $row['ingredient_id'];
		return $ningredient;
	}
	
}