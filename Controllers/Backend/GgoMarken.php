<?php 
use GgoMarken\Models\Marken;

class Shopware_Controllers_Backend_GgoMarken extends Shopware_Controllers_Backend_Application										   
{
	protected $model = 'Shopware\CustomModels\Marken';
	protected $alias = 'marken';
	
/*	protected function getListQuery()
	{
		$builder = parent::getListQuery();
	
		$builder->leftJoin('brand.name', 'name');
		$builder->addSelect(array('name'));
	
		return $builder;
	}
	
	protected function getDetailQuery($id)
	{
		$builder = parent::getDetailQuery($id);
	
		$builder->leftJoin('brand.name', 'name');
	
		$builder->addSelect(array('name'));
	
		return $builder;
	}*/
}

?>