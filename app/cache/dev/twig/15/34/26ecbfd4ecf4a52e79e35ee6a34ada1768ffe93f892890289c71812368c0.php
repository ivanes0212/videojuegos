<?php

/* uniVideojuegosBundle::layout.html.twig */
class __TwigTemplate_153426ecbfd4ecf4a52e79e35ee6a34ada1768ffe93f892890289c71812368c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    

    

";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  92 => 36,  80 => 30,  74 => 27,  67 => 23,  63 => 22,  59 => 21,  53 => 20,  50 => 19,  46 => 18,  31 => 5,  28 => 4,);
    }
}
