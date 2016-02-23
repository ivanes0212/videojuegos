<?php

/* ::base.html.twig */
class __TwigTemplate_c84bbbd31d7f2e45f804914f4d535e0020c6ace7496e0dc1c73f53fbcd23968d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
       <div id=\"cabecera\">
            ";
        // line 13
        $this->displayBlock('cabecera', $context, $blocks);
        // line 23
        echo "        </div>
       
         <div id=\"cuerpo\">
            ";
        // line 26
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 27
        echo "        </div>
        
         <div id=\"pie\">
            ";
        // line 30
        $this->displayBlock('pie', $context, $blocks);
        // line 39
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/univideojuegos/css/fuente.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 13
    public function block_cabecera($context, array $blocks = array())
    {
        // line 14
        echo "                <h1><font color=\"#CBCBFD\" size=\"30\">Clasificación mundial de Juegos</font></h1>
                <h3>
                    <ul id=\"nav\">
        <li id=\"nav-1\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("juegos");
        echo "\">Juegos</a></li>
\t<li id=\"nav-2\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("tipos");
        echo "\">Tipos</a></li>
\t<li id=\"nav-3\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("plataforma");
        echo "\">Plataforma</a></li>
                    </ul>
                </h3>
            ";
    }

    // line 26
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    // line 30
    public function block_pie($context, array $blocks = array())
    {
        // line 31
        echo "                <h6><font color=\"#CBCBFD\">
                    CONTACTO -> ivanesfc@hotmail.com
                    <br>
                    SITIO WEB -> misjuegos.com
                    <br>
                    CENTRO -> uni Eibar-Ermua
                    </font></h6>
            ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 31,  112 => 30,  107 => 26,  95 => 18,  91 => 17,  86 => 14,  83 => 13,  76 => 7,  73 => 6,  60 => 39,  58 => 30,  51 => 26,  44 => 13,  36 => 9,  34 => 6,  30 => 5,  24 => 1,  99 => 19,  92 => 36,  80 => 30,  74 => 27,  67 => 5,  63 => 22,  59 => 21,  53 => 27,  50 => 19,  46 => 23,  31 => 5,  28 => 4,);
    }
}
