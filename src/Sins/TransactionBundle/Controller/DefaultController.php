<?php

namespace Sins\TransactionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * Display all transactions
     *
     * 
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('SinsTransactionBundle:Transaction');

        $transactions = $repository->findAll();
        $debitsSum = $repository->getDebitResult();
        $creditsSum = $repository->getCreditResult();
        $balance = $repository->getBalance();

        return $this->render('SinsTransactionBundle:Default:index.html.twig', array(
            'transactions' => $transactions, 
            'debitsSum' => $debitsSum,
            'creditsSum' => $creditsSum,
            'balance' => $balance
        ));
	}
}
