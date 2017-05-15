<?php
namespace schilter\gw2challenges\Domain\Model;

use Neos\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;
use Sandstorm\UserManagement\Domain\Service\UserCreationServiceInterface;

class Account extends \Neos\Flow\Security\Account {
	
	/**
	 * 
	 * @var string
	 */
	protected $apikey;
	
	/**
	 * 
	 * @ORM\ManyToOne(targetEntity="mini")
	 * @var \schilter\gw2challenges\Domain\Model\Mini
	 */
	protected $minis;
	
	
}