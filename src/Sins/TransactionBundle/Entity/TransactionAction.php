<?php

namespace Sins\TransactionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sins\TransactionBundle\Entity\TransactionAction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TransactionAction
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="Transaction", mappedBy="action")
     */
    protected $transactions;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    public function __construct()
    {
        $this->transactions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add transactions
     *
     * @param Sins\TransactionBundle\Entity\Transaction $transactions
     */
    public function addTransaction(\Sins\TransactionBundle\Entity\Transaction $transactions)
    {
        $this->transactions[] = $transactions;
    }

    /**
     * Get transactions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTransactions()
    {
        return $this->transactions;
    }
}