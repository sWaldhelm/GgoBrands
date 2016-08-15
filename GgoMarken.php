<?php

namespace GgoMarken;

use Doctrine\ORM\Tools\SchemaTool;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use GgoMarken\Models\Marken;


class GgoMarken extends \Shopware\Components\Plugin
{
	public function getCapabilities()
	{
		return [
				'install' => true,
				'update' => true,
				'enable' => true,
				'secureUninstall' => true
		];
	}
	
	public static function getSubscribedEvents()
	{
		return [
				//'Enlight_Controller_Action_PostDispatch_Backend_Article' => 'postDispatchBackendArticle',
				'Enlight_Controller_Dispatcher_ControllerPath_Backend_GgoMarken' => 'getBackendController'
		];
	}
	
	public function install(InstallContext $context)
    {
        $service = $this->container->get('shopware_attribute.crud_service');

        $em = $this->container->get('models');
        $schemaTool = new SchemaTool($em);
        $schemaTool->updateSchema(
            [ $em->getClassMetadata(\GgoMarken\Models\Marken::class) ],
            true
        );

        $service->update(
            's_articles_attributes',
            'ggo_brands',
            'single_selection',
            [
                'entity' => \GgoMarken\Models\Marken::class,
                'displayInBackend' => true,
                'label' => 'Marken',
            ],
            null,
            true
        );
    }
    
	public function uninstall(UninstallContext $context)
    {
//     	parent::uninstall($context);
    	
//      	$service = $this->container->get('shopware_attribute.crud_service');
//      	$service->delete('s_articles_attributes', 'ggo_brands', 'string');
    }
    
    public function getBackendController(\Enlight_Event_EventArgs $args)
    {
    	$this->container->get('Template')->addTemplateDir(
    			$this->getPath() . '/Resources/views/' 
    		);
    	   	
    	return $this->getPath() . '/Controllers/Backend/GgoMarken.php';
    }
}
?>