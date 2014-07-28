<?php

/* BWFSiteBundle:Ceram:index.html.twig */
class __TwigTemplate_d516a585c904e1d8c1f8a33173d70ca1865bdc4313d1ff97bda319f32e0a8fc9 extends Twig_Template
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
        // line 2
        echo "<p>";
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>

<h2><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("bwf_site_acceuil");
        echo "\">[ retour page d'accès ]</a></h2>
";
    }

    public function getTemplateName()
    {
        return "BWFSiteBundle:Ceram:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  19 => 2,);
    }
}
