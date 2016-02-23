<?php

/* uniVideojuegosBundle:Default:index.html.twig */
class __TwigTemplate_e17cbcf5b99f05f0f6f490de043ad37118208368311a048bb841d1fd30d29b61 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/univideojuegos/imagenes/uniencounter.jpeg"), "html", null, true);
        echo "\"width=20% height=10%>
    <br>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("plataforma_buscar_plataforma");
        echo "\">Buscar Plataforma</a>
    <br>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tipo_buscar_tipo");
        echo "\">Buscar Tipo</a>
    ";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  37 => 7,  31 => 5,  28 => 4,);
    }
}
