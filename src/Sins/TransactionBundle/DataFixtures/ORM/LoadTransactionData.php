<?php
namespace Sins\TransactionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

use Sins\TransactionBundle\Entity\Transaction;
use Sins\TransactionBundle\Entity\TransactionDescription;
use Sins\TransactionBundle\Entity\TransactionAction;

class LoadTransactionData extends AbstractFixture
{
	protected $descriptions = array('Salary', 'Donation to UNICEF', 'Swisscom bill', 'UBS debt for the car');
	protected $actions = array('collection', 'transfer', 'payement', 'repayement');

    public function load(ObjectManager $manager)
    {
    	$this->loadTransactionDescription($manager);
		$this->loadTransactionAction($manager);

    	$j = 0;

        for ($i = 1; $i <= 30; ) {

	        switch($j) {
	        	case 0:
        			$amount = 16000;
	        		break;
	        	case 1:
        			$amount = -(100 + $i);
	        		break;
	        	case 2:
        			$amount = -45;
	        		break;
	        	case 3:
        			$amount = -300;
	        		break;
	        }

			$transaction = new Transaction();
			$transaction->setAction($manager->merge($this->getReference($this->actions[$j])));
			$transaction->setDescription($manager->merge($this->getReference($this->descriptions[$j])));
			$transaction->setAmount($amount);
			$transaction->setRegistredAt(new \DateTime('2012-01-'.$i));
	        $manager->persist($transaction);

        	$j++;
	        $i++;

	        if($j == 4) {
	        	$j = 0;
	        }
    	}

        $manager->flush();
    }

    public function loadTransactionDescription(ObjectManager $manager)
    {
        
        foreach ($this->descriptions as $currentDescription) {
            $description = new TransactionDescription();
            $description->setName($currentDescription);
            $manager->persist($description);
            $this->addReference($currentDescription, $description);
   	    }

        $manager->flush();
    }

    public function loadTransactionAction(ObjectManager $manager) 
    {

        foreach ($this->actions as $currentAction) {
            $action = new TransactionAction();
            $action->setName($currentAction);
            $manager->persist($action);
			$this->addReference($currentAction, $action);
        }

        $manager->flush();
    }
}
