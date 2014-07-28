<?php

/* BWFSiteBundle:Alpha:index.html.twig */
class __TwigTemplate_c64b44fb5570ff9c0a9353994795b8f587f01f9628cd3ff919b726bd55f2a176 extends Twig_Template
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
        return "BWFSiteBundle:Alpha:index.html.twig";
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
