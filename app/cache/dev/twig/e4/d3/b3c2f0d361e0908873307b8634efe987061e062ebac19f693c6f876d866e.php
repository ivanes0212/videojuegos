<?php

/* uniVideojuegosBundle:tipos:responderTipos.html.twig */
class __TwigTemplate_e4d3b3c2f0d361e0908873307b8634efe987061e062ebac19f693c6f876d866e extends Twig_Template
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
        echo "<h1>Listado de juegos de este tipo: ";
        echo twig_escape_filter($this->env, (isset($context["nomTip"]) ? $context["nomTip"] : $this->getContext($context, "nomTip")), "html", null, true);
        echo "</h1>
    
           ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "               <h3>Juegos de tipo -->  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</h3>
               ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipjues"));
            foreach ($context['_seq'] as $context["_key"] => $context["tp"]) {
                // line 10
                echo "            
            
        <h2><a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("juegos_show", array("id" => $this->getAttribute((isset($context["tp"]) ? $context["tp"] : $this->getContext($context, "tp")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tp"]) ? $context["tp"] : $this->getContext($context, "tp")), "nombre"), "html", null, true);
                echo "</a></h2>
             
            <br>
            Plataforma en la que está este juego:
            <br>
            <br>
            ";
                // line 18
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tp"]) ? $context["tp"] : $this->getContext($context, "tp")), "jueplat"));
                foreach ($context['_seq'] as $context["_key"] => $context["jp"]) {
                    // line 19
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["jp"]) ? $context["jp"] : $this->getContext($context, "jp")), "nombre"), "html", null, true);
                    echo "
            
            <br>
            
            
               
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jp'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                
                
";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle:tipos:responderTipos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  89 => 27,  83 => 26,  69 => 19,  65 => 18,  54 => 12,  50 => 10,  46 => 9,  41 => 8,  37 => 7,  31 => 5,  28 => 4,);
    }
}
