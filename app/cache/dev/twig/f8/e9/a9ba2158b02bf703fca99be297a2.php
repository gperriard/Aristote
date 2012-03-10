<?php

/* SinsTransactionBundle:Default:index.html.twig */
class __TwigTemplate_f8e9a9ba2158b02bf703fca99be297a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("All transactions"), "html", null, true);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h2 class=\"row-fluid\">All transactions</h2>
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<table id=\"main\" class=\"tablesorter table table-bordered table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th colspan=\"2\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Amount"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tfoot>
\t\t\t\t<tr class=\"results\">
\t\t\t\t\t<td colspan=\"2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Total result"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "debitsSum"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "creditsSum"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Balance"), "html", null, true);
        echo "</td>
\t\t\t\t\t<td colspan=\"2\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "balance"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tfoot>
\t\t\t<tbody>
\t\t\t\t";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "transactions"));
        foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
            // line 28
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "registredAt"), "d.m.Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "transaction"), "description"), "name"), "html", null, true);
            echo "</td>

\t\t\t\t\t";
            // line 32
            if (($this->getAttribute($this->getContext($context, "transaction"), "amount") >= 0)) {
                // line 33
                echo "\t\t\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "amount"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td></td>
\t\t\t\t\t";
            } else {
                // line 36
                echo "\t\t\t\t\t<td></td>
\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "amount"), "html", null, true);
                echo "</td>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<a href=\"\" class=\"btn\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add debit transaction"), "html", null, true);
        echo "</a>
\t\t<a href=\"\" class=\"btn\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add a credit transaction"), "html", null, true);
        echo "</a>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SinsTransactionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
