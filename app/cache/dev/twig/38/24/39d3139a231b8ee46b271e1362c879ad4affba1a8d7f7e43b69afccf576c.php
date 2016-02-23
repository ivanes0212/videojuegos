<?php

/* uniVideojuegosBundle:tipos:buscarTipos.html.twig */
class __TwigTemplate_382439d3139a231b8ee46b271e1362c879ad4affba1a8d7f7e43b69afccf576c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniVideojuegosBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniVideojuegosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<br>Buscar tipos:
<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tipos_responder_tipos");
        echo "\" method=\"POST\">
    <input type=\"text\" name=\"nombre\" value=\"Tipos a buscar\">
    <input type=\"submit\" value=\"OK\">
</form>

";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle:tipos:buscarTipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  31 => 5,  28 => 4,);
    }
}
