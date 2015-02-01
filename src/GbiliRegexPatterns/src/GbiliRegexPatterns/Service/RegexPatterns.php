<?php
namespace GbiliRegexPatterns\Service;

class RegexPatterns
{
    /**
     * contains an array of identifier to regex definitions 
     * or alias to identifier
     * array(
     *      'identifier' => array('pattern' => '/asdfasdf/g', 'message' => 'This allows this chars'),
     *      'identifier2' => array('pattern' => '/asdfasdf/g', 'message' => 'This allows this chars'),
     *      'alias1' => identifier2,
     * )
     */
    protected $patterns;

    public function __construct()
    {
    }

    /**
     * The patterns set by modules in config under key: $config['gbili_regex_patterns']['patterns']
     * @param $patterns array
     * @return self
     */
    public function setPatterns(array $patterns)
    {
        $this->patterns = $patterns;
        return $this;
    }

    /**
     * The patterns set by modules in config under key: $config['gbili_regex_patterns']['patterns']
     * @return array
     */
    public function getPatterns()
    {
        return $this->patterns;
    }

    /**
     * Given some identifier or alias, reutrn the definition. If the identifier maps to a string,
     * the identifier is considered an alias. If alias, the maped string is considered the real identifier.
     * 
     * @param array $identifier the key or alias under which the regex definition is stored
     * @return array
     */
    public function getDefinition($identifier)
    {
        do {
            if (!isset($this->patterns[$identifier])) {
                throw new \Exception('The regex definition identifier does not exist. make sure tu add it to your config');
            }
            $definition = $this->patterns[$identifier];
        } while (is_string($definition) && ($identifier = $definition));

        return $definition;
    }
}
