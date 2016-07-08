<?php

/* partials/base.html.twig */
class __TwigTemplate_8c97edeaaeff2383f40e49e88d574614475e1f6c0a48e0bc355024db31647f95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    </head>


      <body>

            <div class=\"hero\"></div>

            <header class=\"sticky\" data-top=\"0\" data-sticky-type=\"panel\" id=\"header\">
                <div class=\"sticky-element\">
                    ";
        // line 49
        echo "                    ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 49)->display($context);
        // line 50
        echo "                </div>
                <div class=\"ghost\"></div>
            </header>

            <div class=\"container main-container\">
                <div class=\"content\">
                    <h2>";
        // line 56
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2> ";
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "
                </div>
            </div>
            <!-- <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Mytheme Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div> -->


        </body>
        ";
        // line 68
        $this->displayBlock('bottom', $context, $blocks);
        // line 69
        echo "
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <link href=\"https://fonts.googleapis.com/css?family=Kreon:400,700|Ubuntu:400,500,700\" rel=\"stylesheet\">

        <title>";
        // line 20
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
        ";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "            ";
        // line 24
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://css/custom.min.css", 1 => 100), "method");
        // line 25
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
        ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", 1 => 101), "method");
        // line 29
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/custom.js"), "method");
        // line 30
        echo "            ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://js/sticky.js"), "method");
        // line 31
        echo "            ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 32
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"), "method");
            // line 33
            echo "                ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "method");
            // line 34
            echo "            ";
        }
        // line 35
        echo "            ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
        ";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
    }

    // line 68
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 68,  182 => 56,  175 => 35,  172 => 34,  169 => 33,  166 => 32,  163 => 31,  160 => 30,  157 => 29,  154 => 28,  151 => 27,  144 => 25,  141 => 24,  139 => 23,  136 => 22,  131 => 37,  128 => 27,  126 => 22,  117 => 20,  109 => 16,  103 => 14,  100 => 13,  94 => 11,  88 => 9,  86 => 8,  81 => 5,  78 => 4,  72 => 69,  70 => 68,  57 => 57,  53 => 56,  45 => 50,  42 => 49,  31 => 39,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         {% block head %}*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% if header.description %}*/
/*         <meta name="description" content="{{ header.description }}">*/
/*         {% else %}*/
/*         <meta name="description" content="{{ site.description }}">*/
/*         {% endif %}*/
/*         {% if header.robots %}*/
/*         <meta name="robots" content="{{ header.robots }}">*/
/*         {% endif %}*/
/*         <link rel="icon" type="image/png" href="{{ theme_url }}/images/favicon.png">*/
/* */
/*         <link href="https://fonts.googleapis.com/css?family=Kreon:400,700|Ubuntu:400,500,700" rel="stylesheet">*/
/* */
/*         <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             {# Custom styles for this theme #}*/
/*             {% do assets.add('theme://css/custom.min.css',100) %}*/
/*             {{ assets.css() }}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             {% do assets.add('https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',101) %}*/
/*             {% do assets.add('theme://js/custom.js') %}*/
/*             {% do assets.add( 'theme://js/sticky.js') %}*/
/*             {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion<=9 %}*/
/*                 {% do assets.add( 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}*/
/*                 {% do assets.add( 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}*/
/*             {% endif %}*/
/*             {{ assets.js() }}*/
/*         {% endblock %}*/
/* */
/*         {% endblock head %}*/
/*     </head>*/
/* */
/* */
/*       <body>*/
/* */
/*             <div class="hero"></div>*/
/* */
/*             <header class="sticky" data-top="0" data-sticky-type="panel" id="header">*/
/*                 <div class="sticky-element">*/
/*                     {# include the header + navigation #}*/
/*                     {% include 'partials/header.html.twig' %}*/
/*                 </div>*/
/*                 <div class="ghost"></div>*/
/*             </header>*/
/* */
/*             <div class="container main-container">*/
/*                 <div class="content">*/
/*                     <h2>{{ page.title }}</h2> {% block content %}{% endblock %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <!-- <div class="footer">*/
/*             <div class="container">*/
/*                 <p class="text-muted">Mytheme Theme for <a href="http://getgrav.org">Grav</a></p>*/
/*             </div>*/
/*         </div> -->*/
/* */
/* */
/*         </body>*/
/*         {% block bottom %}{% endblock %}*/
/* */
/* </html>*/
/* */
