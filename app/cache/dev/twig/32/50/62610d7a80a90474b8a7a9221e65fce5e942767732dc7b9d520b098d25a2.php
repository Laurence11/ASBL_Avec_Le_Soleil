<?php

/* BWFSiteBundle:Acceuil:index.html.twig */
class __TwigTemplate_325062610d7a80a90474b8a7a9221e65fce5e942767732dc7b9d520b098d25a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>
<h2><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("bwf_site_eft");
        echo "\">[ EFT ]</a></h2>
<h2><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("bwf_site_alpha");
        echo "\">[ Alphabétisation ]</a></h2>
<h2><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bwf_site_ceram");
        echo "\">[ Céramique ]</a></h2>";
    }

    public function getTemplateName()
    {
        return "BWFSiteBundle:Acceuil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
