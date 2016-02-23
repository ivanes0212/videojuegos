<?php

/* uniVideojuegosBundle:plataforma:buscarPlataforma.html.twig */
class __TwigTemplate_7dc8b4295e2c19877130dfd361a7a72da1a33e6782ce0db4762d2e9234c06181 extends Twig_Template
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
        // line 6
        echo "
<script type=\"text/javascript\">
function submitform(obj) {
document.forms[\"selectPlataforma\"].submit();
}
</script>

";
        // line 14
        echo "<br>Buscar plataforma:
<form id=\"selectPlataforma\" action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("plataforma_responder_plataforma");
        echo "\" method=\"POST\">
    
   <select name=\"nombre\" onChange=\"submitform(this)\">
       <option value=\"Todas\">Todas</option> 
       
       ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plataforma"]) ? $context["plataforma"] : $this->getContext($context, "plataforma")));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 21
            echo "            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "nombre"), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plat"]) ? $context["plat"] : $this->getContext($context, "plat")), "nombre"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </select>  
    
    
   
    
</form>
    ";
    }

    public function getTemplateName()
    {
        return "uniVideojuegosBundle:plataforma:buscarPlataforma.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  55 => 21,  51 => 20,  43 => 15,  40 => 14,  31 => 6,  28 => 4,);
    }
}
