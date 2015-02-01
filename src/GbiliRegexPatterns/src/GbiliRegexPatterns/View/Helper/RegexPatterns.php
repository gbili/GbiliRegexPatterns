<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace GbiliRegexPatterns\View\Helper;

/**
 * View helper for retrieving stuff by identifier 
 */
class RegexPatterns extends \Zend\View\Helper\AbstractHelper
{
    /**
     * Association of identifiers to content
     * @var array
     */
    protected $service;

    /**
     * Given an identifier, return the associated content
     *
     * @param string
     * @return mixed
     */
    public function __invoke($identifier)
    {
        return $this->service->getDefinition($identifier);
    }

    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }
}
