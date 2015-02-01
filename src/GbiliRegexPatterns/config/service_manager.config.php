<?php
namespace GbiliRegexPatterns;
return array(
    'factories' => array(
        'GbiliRegexPatterns\Service\RegexPatterns' => function ($sm) {
            $config = $sm->get('Config');
            if (!isset($config['gbili_regex_patterns'])) {
                $config['gbili_regex_patterns'] = array();
            }
            if (!isset($config['gbili_regex_patterns']['patterns'])) {
                $config['gbili_regex_patterns']['patterns'] = array();
            }
            $service = new Service\RegexPatterns;
            $service->setPatterns($config['gbili_regex_patterns']['patterns']);
            return $service;
        },
    ),
    'aliases' => array(
        'gbiliRegexPatterns' => 'GbiliRegexPatterns\Service\RegexPatterns',
    ),
);
