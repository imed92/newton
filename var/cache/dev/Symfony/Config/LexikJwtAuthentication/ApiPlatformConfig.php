<?php

namespace Symfony\Config\LexikJwtAuthentication;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 */
class ApiPlatformConfig 
{
    private $checkPath;
    private $usernamePath;
    private $passwordPath;
    
    /**
     * The login check path to add in OpenAPI.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function checkPath($value): self
    {
        $this->checkPath = $value;
    
        return $this;
    }
    
    /**
     * The path to the username in the JSON body.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function usernamePath($value): self
    {
        $this->usernamePath = $value;
    
        return $this;
    }
    
    /**
     * The path to the password in the JSON body.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function passwordPath($value): self
    {
        $this->passwordPath = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['check_path'])) {
            $this->checkPath = $value['check_path'];
            unset($value['check_path']);
        }
    
        if (isset($value['username_path'])) {
            $this->usernamePath = $value['username_path'];
            unset($value['username_path']);
        }
    
        if (isset($value['password_path'])) {
            $this->passwordPath = $value['password_path'];
            unset($value['password_path']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->checkPath) {
            $output['check_path'] = $this->checkPath;
        }
        if (null !== $this->usernamePath) {
            $output['username_path'] = $this->usernamePath;
        }
        if (null !== $this->passwordPath) {
            $output['password_path'] = $this->passwordPath;
        }
    
        return $output;
    }

}
