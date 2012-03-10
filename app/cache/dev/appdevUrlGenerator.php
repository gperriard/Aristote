<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_d8d83ae' => true,
       '_assetic_d8d83ae_0' => true,
       '_assetic_d8d83ae_1' => true,
       '_assetic_996d567' => true,
       '_assetic_996d567_0' => true,
       '_assetic_996d567_1' => true,
       '_assetic_996d567_2' => true,
       '_assetic_996d567_3' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'transactions' => true,
       'transactions_debit' => true,
       'transactions_credit' => true,
       'transactions_add' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_d8d83aeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/d8d83ae.css',  ),));
    }

    private function get_assetic_d8d83ae_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/d8d83ae_mopabootstrapbundle_1.css',  ),));
    }

    private function get_assetic_d8d83ae_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'd8d83ae',  'pos' => 1,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/d8d83ae_main_2.css',  ),));
    }

    private function get_assetic_996d567RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets/sys-javascripts.js',  ),));
    }

    private function get_assetic_996d567_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets/sys-javascripts_jquery-1.7.1.min_1.js',  ),));
    }

    private function get_assetic_996d567_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets/sys-javascripts_bootstrap-collapse_2.js',  ),));
    }

    private function get_assetic_996d567_2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 2,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets/sys-javascripts_tablesorter.min_3.js',  ),));
    }

    private function get_assetic_996d567_3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '996d567',  'pos' => 3,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/assets/sys-javascripts_application_4.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function gettransactionsRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/transactions',  ),));
    }

    private function gettransactions_debitRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::showDebitRecordsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/transactions/debit',  ),));
    }

    private function gettransactions_creditRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sins\\TransactionBundle\\Controller\\DefaultController::showCreditRecordsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/transactions/credit',  ),));
    }

    private function gettransactions_addRouteInfo()
    {
        return array(array (), array (  '_controller' => 'SinsTransactionRecordBundle:Default:new',), array (), array (  0 =>   array (    0 => 'text',    1 => '/transaction/add',  ),));
    }
}
