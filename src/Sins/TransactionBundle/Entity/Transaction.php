<?php

namespace Sins\TransactionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sins\TransactionBundle\Entity\Transaction
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sins\TransactionBundle\Entity\TransactionRepository")
 */
class Transaction
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
     * @var decimal $amount
     *
     * @ORM\Column(name="amount", type="decimal")
     */
    private $amount;

    /**
     * @var datetime $registredAt
     *
     * @ORM\Column(name="registred_at", type="datetime")
     */
    private $registredAt;

    /**
     * @ORM\ManyToOne(targetEntity="TransactionAction", inversedBy="transactions")
     * @ORM\JoinColumn(name="transaction_action_id", referencedColumnName="id", nullable=false)
     */
    protected $action;

    /**
     * @ORM\ManyToOne(targetEntity="TransactionDescription", inversedBy="transactions")
     * @ORM\JoinColumn(name="transaction_description_id", referencedColumnName="id", nullable=false)
     */
    protected $description;

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
     * Set amount
     *
     * @param decimal $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Get amount
     *
     * @return decimal 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set registredAt
     *
     * @param datetime $registredAt
     */
    public function setRegistredAt($registredAt)
    {
        $this->registredAt = $registredAt;
    }

    /**
     * Get registredAt
     *
     * @return datetime 
     */
    public function getRegistredAt()
    {
        return $this->registredAt;
    }

    /**
     * Set action
     *
     * @param Sins\TransactionBundle\Entity\TransactionAction $action
     */
    public function setAction(\Sins\TransactionBundle\Entity\TransactionAction $action)
    {
        $this->action = $action;
    }

    /**
     * Get action
     *
     * @return Sins\TransactionBundle\Entity\TransactionAction 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set description
     *
     * @param Sins\TransactionBundle\Entity\TransactionDescription $description
     */
    public function setDescription(\Sins\TransactionBundle\Entity\TransactionDescription $description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return Sins\TransactionBundle\Entity\TransactionDescription 
     */
    public function getDescription()
    {
        return $this->description;
    }
}