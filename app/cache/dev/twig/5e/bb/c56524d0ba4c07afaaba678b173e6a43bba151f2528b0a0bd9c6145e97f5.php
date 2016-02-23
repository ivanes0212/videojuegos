<?php

/* uniVideojuegosBundle:plataforma:responderPlataforma.html.twig */
class __TwigTemplate_5ebbc56524d0ba4c07afaaba678b173e6a43bba151f2528b0a0bd9c6145e97f5 extends Twig_Template
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
        echo "<h1>Listado de juegos en ";
        echo twig_escape_filter($this->env, (isset($context["nomPlat"]) ? $context["nomPlat"] : $this->getContext($context, "nomPlat")), "html", null, true);
        echo ":</h1>

        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "               ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "platjue"));
            foreach ($context['_seq'] as $context["_key"] => $context["pl"]) {
                // line 9
                echo "            
            
        <h2><a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_show", array("id" => $this->getAttribute((isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl")), "nombre"), "html", null, true);
                echo "</a></h2>
              
        Puntuación: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pl"]) ? $context["pl"] : $this->getContext($context, "pl")), "puntuacion"), "html", null, true);
                echo " 
       
       
                <br>
                
                
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle:plataforma:responderPlataforma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  70 => 20,  57 => 13,  50 => 11,  46 => 9,  41 => 8,  37 => 7,  31 => 5,  28 => 4,);
    }
}
