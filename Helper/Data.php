<?php
namespace Chapagain\GoogleTagManager\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
	* @var \Magento\Framework\App\Config\ScopeConfigInterface
	*/
	protected $scopeConfig;
	
	const XML_PATH_GTM_ENABLED = 'chapagain_googletagmanager/general/enabled';
	const XML_PATH_GTM_ENABLED_DATA_LAYER = 'chapagain_googletagmanager/general/enabled_data_layer';
	const XML_PATH_GTM_CONTAINER_ID = 'chapagain_googletagmanager/general/container_id';

	public function __construct(
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig		
	)
	{
		$this->scopeConfig = $scopeConfig;	
	}
	
	/**
	 * Check if the module is enabled
	 * 
	 * @return boolean 0 or 1
	 */ 
	public function getIsEnable()
    { 			
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;	
        return $this->scopeConfig->getValue(self::XML_PATH_GTM_ENABLED, $storeScope);
    }
    
    /**
	 * Check if data layered is enabled or not
	 * 
	 * @return boolean 0 or 1
	 */ 
	public function getIsEnableDataLayer()
    { 			
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;	
        return $this->scopeConfig->getValue(self::XML_PATH_GTM_ENABLED_DATA_LAYER, $storeScope);
    }
    
    /**
	 * Get container id
	 * 
	 * @return string
	 */ 
	public function getContainerId()
    { 			
		$storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;	
        $containerId = $this->scopeConfig->getValue(self::XML_PATH_GTM_CONTAINER_ID, $storeScope);
        return trim($containerId);
    }
}
