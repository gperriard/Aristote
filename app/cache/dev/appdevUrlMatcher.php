<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _assetic_d8d83ae
        if ($pathinfo === '/css/d8d83ae.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d8d83ae',);
        }

        // _assetic_d8d83ae_0
        if ($pathinfo === '/css/d8d83ae_mopabootstrapbundle_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_d8d83ae_0',);
        }

        // _assetic_d8d83ae_1
        if ($pathinfo === '/css/d8d83ae_main_2.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_d8d83ae_1',);
        }

        // _assetic_996d567
        if ($pathinfo === '/assets/sys-javascripts.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_996d567',);
        }

        // _assetic_996d567_0
        if ($pathinfo === '/assets/sys-javascripts_jquery-1.7.1.min_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_996d567_0',);
        }

        // _assetic_996d567_1
        if ($pathinfo === '/assets/sys-javascripts_bootstrap-collapse_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_996d567_1',);
        }

        // _assetic_996d567_2
        if ($pathinfo === '/assets/sys-javascripts_tablesorter.min_3.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_996d567_2',);
        }

        // _assetic_996d567_3
        if ($pathinfo === '/assets/sys-javascripts_application_4.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_996d567_3',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // transactions
        if ($pathinfo === '/transactions') {
            return array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'transactions',);
        }

        // transactions_debit
        if ($pathinfo === '/transactions/debit') {
            return array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::showDebitRecordsAction',  '_route' => 'transactions_debit',);
        }

        // transactions_credit
        if ($pathinfo === '/transactions/credit') {
            return array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::showCreditRecordsAction',  '_route' => 'transactions_credit',);
        }

        // transactions_add
        if ($pathinfo === '/transaction/add') {
            return array (  '_controller' => 'SinsTransactionRecordBundle:Default:new',  '_route' => 'transactions_add',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
