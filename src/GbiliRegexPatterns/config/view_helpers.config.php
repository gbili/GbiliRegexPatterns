<?php
namespace GbiliRegexPatterns;
return array(
    'factories' => array(
        'getRegexDefinition' => function ($vhm) {
            $sm = $vhm->getServiceLocator();
            $service = $sm->get('GbiliRegexPatterns\Service\RegexPatterns');
            $vh = new View\Helper\RegexPatterns;
            $vh->setService($service);
            return $service;
        },
    ),
);
