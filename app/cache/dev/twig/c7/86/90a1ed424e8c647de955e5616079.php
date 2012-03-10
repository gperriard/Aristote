<?php

/* ::base.html.twig */
class __TwigTemplate_c78690a1ed424e8c647de955e5616079 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"brand\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("transactions"), "html", null, true);
        echo "\">Aristote</a>
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>
                    <div class=\"nav-collapse\">
                        <ul class=\"nav\">
                            <li><a href=\"#\">Bla1</a></li>
                            <li><a href=\"#\">Bla2</a></li>
                            <li><a href=\"#\">Bla3</a></li>
                            <li><a href=\"#\">Bla4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container main\">
        ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Aristote";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d8d83ae_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8d83ae_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d8d83ae_mopabootstrapbundle_1.css");
            // line 12
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
            // asset "d8d83ae_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8d83ae_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d8d83ae_main_2.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        } else {
            // asset "d8d83ae"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8d83ae") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d8d83ae.css");
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "996d567_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_996d567_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/sys-javascripts_jquery-1.7.1.min_1.js");
            // line 47
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "996d567_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_996d567_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/sys-javascripts_bootstrap-collapse_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "996d567_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_996d567_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/sys-javascripts_tablesorter.min_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
            // asset "996d567_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_996d567_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/sys-javascripts_application_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "996d567"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_996d567") : $this->env->getExtension('assets')->getAssetUrl("_controller/assets/sys-javascripts.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 49
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
