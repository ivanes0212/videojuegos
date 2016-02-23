<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_dd1ac00c944efb1c99c899c82ec95d77b0cfe3c6f05a93a529adc330d482f16f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1060 => 333,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  989 => 310,  983 => 308,  981 => 307,  979 => 306,  971 => 304,  957 => 301,  954 => 300,  946 => 296,  942 => 295,  939 => 294,  928 => 286,  924 => 285,  921 => 284,  916 => 280,  908 => 278,  904 => 277,  902 => 276,  900 => 275,  897 => 274,  881 => 265,  879 => 264,  876 => 263,  869 => 259,  867 => 258,  843 => 257,  840 => 255,  837 => 253,  835 => 252,  833 => 251,  826 => 247,  822 => 245,  819 => 244,  808 => 235,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 227,  791 => 226,  789 => 225,  786 => 224,  782 => 221,  779 => 216,  751 => 206,  748 => 205,  739 => 200,  735 => 198,  728 => 192,  726 => 191,  719 => 187,  717 => 186,  714 => 185,  704 => 182,  701 => 180,  699 => 179,  687 => 173,  683 => 170,  681 => 169,  663 => 160,  661 => 159,  658 => 158,  654 => 155,  652 => 154,  649 => 153,  643 => 149,  633 => 144,  629 => 141,  627 => 140,  624 => 139,  620 => 136,  617 => 135,  614 => 133,  609 => 129,  599 => 128,  594 => 127,  592 => 126,  589 => 124,  584 => 122,  579 => 118,  577 => 116,  576 => 115,  575 => 114,  570 => 112,  567 => 110,  562 => 108,  556 => 104,  554 => 103,  552 => 102,  550 => 101,  548 => 100,  544 => 99,  541 => 97,  539 => 96,  522 => 92,  519 => 91,  505 => 88,  502 => 87,  477 => 82,  472 => 79,  470 => 78,  465 => 77,  463 => 76,  443 => 74,  425 => 64,  421 => 62,  412 => 60,  410 => 59,  399 => 56,  397 => 55,  383 => 49,  370 => 45,  357 => 37,  349 => 34,  346 => 33,  339 => 28,  330 => 23,  317 => 17,  295 => 11,  287 => 5,  282 => 3,  263 => 294,  260 => 293,  257 => 291,  250 => 274,  245 => 270,  242 => 269,  212 => 224,  146 => 147,  129 => 122,  126 => 121,  124 => 108,  100 => 36,  354 => 329,  65 => 17,  20 => 1,  806 => 234,  803 => 487,  792 => 485,  784 => 482,  771 => 481,  723 => 190,  706 => 471,  694 => 467,  690 => 174,  675 => 462,  673 => 165,  656 => 460,  645 => 150,  630 => 452,  625 => 450,  621 => 449,  618 => 448,  602 => 445,  597 => 442,  545 => 407,  528 => 406,  525 => 405,  523 => 404,  518 => 402,  513 => 400,  202 => 94,  462 => 202,  449 => 198,  446 => 75,  441 => 196,  439 => 71,  431 => 189,  429 => 66,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 54,  373 => 46,  351 => 328,  348 => 140,  342 => 30,  335 => 134,  329 => 131,  325 => 129,  323 => 19,  320 => 127,  303 => 122,  300 => 13,  286 => 112,  275 => 330,  270 => 316,  267 => 101,  256 => 96,  233 => 87,  226 => 84,  200 => 72,  181 => 185,  165 => 83,  150 => 55,  81 => 32,  417 => 143,  411 => 140,  405 => 137,  395 => 135,  388 => 134,  382 => 131,  377 => 47,  359 => 123,  356 => 330,  350 => 120,  347 => 119,  338 => 135,  333 => 115,  324 => 112,  313 => 110,  308 => 109,  237 => 262,  234 => 90,  207 => 216,  186 => 190,  180 => 70,  161 => 162,  114 => 91,  389 => 51,  386 => 159,  380 => 160,  378 => 157,  371 => 127,  367 => 155,  363 => 153,  361 => 146,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 26,  331 => 140,  328 => 22,  326 => 21,  321 => 18,  315 => 125,  307 => 287,  302 => 125,  296 => 121,  290 => 7,  288 => 118,  281 => 98,  274 => 96,  265 => 299,  259 => 103,  255 => 284,  253 => 100,  248 => 94,  232 => 249,  222 => 238,  216 => 79,  213 => 78,  210 => 77,  197 => 71,  194 => 197,  184 => 63,  178 => 184,  175 => 58,  172 => 62,  170 => 84,  155 => 55,  152 => 54,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 334,  1055 => 648,  1051 => 332,  1048 => 331,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 305,  972 => 608,  970 => 607,  967 => 303,  963 => 302,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 287,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 271,  888 => 270,  884 => 267,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 250,  828 => 538,  824 => 246,  815 => 239,  812 => 238,  810 => 529,  807 => 528,  800 => 523,  796 => 521,  790 => 519,  788 => 484,  780 => 513,  774 => 212,  770 => 507,  764 => 505,  762 => 504,  754 => 208,  745 => 203,  742 => 202,  740 => 491,  737 => 199,  732 => 197,  724 => 484,  718 => 482,  705 => 480,  702 => 469,  698 => 468,  696 => 178,  692 => 175,  686 => 465,  682 => 464,  678 => 168,  676 => 467,  671 => 164,  668 => 163,  664 => 463,  655 => 457,  646 => 451,  642 => 449,  640 => 148,  636 => 145,  628 => 444,  626 => 443,  622 => 442,  616 => 447,  603 => 439,  591 => 436,  587 => 123,  578 => 432,  574 => 113,  565 => 109,  563 => 410,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  542 => 421,  536 => 95,  534 => 418,  530 => 417,  527 => 416,  514 => 415,  297 => 200,  293 => 107,  289 => 113,  280 => 194,  276 => 111,  271 => 190,  262 => 98,  251 => 182,  249 => 92,  77 => 25,  191 => 196,  188 => 194,  185 => 66,  174 => 74,  167 => 71,  153 => 77,  134 => 133,  118 => 49,  113 => 40,  104 => 74,  97 => 41,  127 => 35,  110 => 38,  90 => 27,  84 => 33,  70 => 19,  76 => 25,  58 => 14,  34 => 5,  53 => 11,  480 => 162,  474 => 80,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 70,  435 => 69,  430 => 144,  427 => 65,  423 => 63,  413 => 134,  409 => 132,  407 => 138,  402 => 58,  398 => 136,  393 => 126,  387 => 164,  384 => 132,  381 => 48,  379 => 119,  374 => 128,  368 => 340,  365 => 41,  362 => 39,  360 => 38,  355 => 143,  341 => 117,  337 => 27,  322 => 101,  314 => 16,  312 => 124,  309 => 288,  305 => 108,  298 => 12,  294 => 90,  285 => 4,  283 => 115,  278 => 331,  268 => 300,  264 => 84,  258 => 187,  252 => 283,  247 => 273,  241 => 90,  229 => 85,  220 => 81,  214 => 231,  177 => 69,  169 => 168,  140 => 55,  132 => 51,  128 => 42,  107 => 37,  61 => 2,  273 => 317,  269 => 107,  254 => 92,  243 => 88,  240 => 263,  238 => 85,  235 => 250,  230 => 244,  227 => 243,  224 => 241,  221 => 80,  219 => 237,  217 => 232,  208 => 76,  204 => 215,  179 => 69,  159 => 158,  143 => 56,  135 => 46,  119 => 95,  102 => 30,  71 => 15,  67 => 18,  63 => 21,  59 => 13,  87 => 26,  38 => 7,  94 => 45,  89 => 37,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  201 => 213,  196 => 211,  183 => 189,  171 => 173,  166 => 167,  163 => 82,  158 => 80,  156 => 157,  151 => 152,  142 => 59,  138 => 47,  136 => 138,  121 => 107,  117 => 37,  105 => 34,  91 => 44,  62 => 16,  49 => 12,  21 => 2,  26 => 3,  31 => 4,  28 => 3,  24 => 3,  25 => 35,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 10,  44 => 8,  27 => 3,  79 => 26,  72 => 21,  69 => 11,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 139,  131 => 132,  123 => 61,  120 => 38,  115 => 40,  111 => 90,  108 => 33,  101 => 33,  98 => 29,  96 => 53,  83 => 35,  74 => 22,  66 => 10,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 223,  203 => 73,  199 => 212,  193 => 73,  189 => 66,  187 => 84,  182 => 87,  176 => 178,  173 => 177,  168 => 61,  164 => 163,  162 => 59,  154 => 153,  149 => 148,  147 => 75,  144 => 144,  141 => 143,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 94,  112 => 39,  109 => 87,  106 => 86,  103 => 32,  99 => 54,  95 => 39,  92 => 31,  86 => 36,  82 => 26,  80 => 24,  73 => 23,  64 => 3,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
