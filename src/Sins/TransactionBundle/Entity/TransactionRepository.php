<?php

namespace Sins\TransactionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TransactionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TransactionRepository extends EntityRepository
{
	/**
     * Get debit transactions
     *
     * @return array Transactions
     */
    public function getDebitTransactions()
    {
      $qb = $this->createQueryBuilder('t')
        ->select('t')
        ->where('t.amount >= ?0')
        ->orderBy('t.registredAt', 'ASC')
        ->setParameter(0, 0);
      
      return $qb->getQuery()->getResult();
    }

    /**
     * Get credit transactions
     *
     * @return array Transactions
     */
    public function getCreditTransactions()
    {
	    $qb = $this->createQueryBuilder('t')
        ->select('t')
     		->where('t.amount < ?0')
        ->orderBy('t.registredAt', 'ASC')
     		->setParameter(0, 0);
   		
   		return $qb->getQuery()->getResult();
    }

    /**
     * Get the difference beetween debit and credit amounts, by period
     *
     * @param Datetime $startDate, Datetime $endDate
     * @return string Amount
     */
    public function getBalance(\Datetime $startDate = null, \Datetime $endDate = null) 
    {
      if (!$endDate) {
        $endDate = new \DateTime();
      }

      if ($startDate) {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(r.amount)');
        $qb->where($qb->expr()->between('t.registredAt', ':start_date', ':end_date'));
        $qb->setParameters(array(
          'start_date' => $startDate, 
          'end_date' => $end_date
        ));

      }
      else {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(t.amount)');
        $qb->where($qb->expr()->lte('t.registredAt', ':end_date'));
        $qb->setParameters(array( 
          'end_date' => $endDate
        ));

      }

      return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get the sum of debit amounts, by period
     *
     * @param Datetime $startDate, Datetime $endDate
     * @return string Amount
     */
    public function getDebitResult(\Datetime $startDate = null, \Datetime $endDate = null)
    {
      if (!$endDate) {
        $endDate = new \DateTime();
      }

      if ($startDate) {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(t.amount)');
        $qb->where($qb->expr()->andX(
          $qb->expr()->between('t.registredAt', ':start_date', ':end_date'),
          $qb->expr()->gte('t.amount', '?0')
        ));

        $qb->setParameters(array(
          'start_date' => $startDate, 
          'end_date' => $endDate,
          0 => 0
        ));

      }
      else {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(t.amount)');
        $qb->where($qb->expr()->andX(
          $qb->expr()->lte('t.registredAt', ':end_date'),
          $qb->expr()->gte('t.amount', '?0')
        ));

        $qb->setParameters(array(
          'end_date' => $endDate,
          0 => 0
        )); 

      }

      return $qb->getQuery()->getSingleScalarResult();
    }

    /**
     * Get the sum of credit amounts, by period
     *
     * @param Datetime $startDate, Datetime $endDate
     * @return string Amount
     */
    public function getCreditResult(\Datetime $startDate = null, \Datetime $endDate = null)
    {
      if (!$endDate) {
        $endDate = new \DateTime();
      }

      if ($startDate) {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(t.amount)');
        $qb->where($qb->expr()->andX(
          $qb->expr()->between('t.registredAt', ':start_date', ':end_date'),
          $qb->expr()->lt('t.amount', '?0')
        ));

        $qb->setParameters(array(
          'start_date' => $startDate, 
          'end_date' => $endDate,
          0 => 0
        ));

      }
      else {
        $qb = $this->createQueryBuilder('t');
        $qb->select('SUM(t.amount)');
        $qb->where($qb->expr()->andX(
          $qb->expr()->lte('t.registredAt', ':end_date'),
          $qb->expr()->lt('t.amount', '?0')
        ));

        $qb->setParameters(array(
          'end_date' => $endDate,
          0 => 0
        ));

      }

      return $qb->getQuery()->getSingleScalarResult();
    }
}