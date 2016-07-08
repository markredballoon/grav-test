<?php

/* partials/homepage.html.twig */
class __TwigTemplate_8616387fd8c046fed2cb39db95b4f89a1a730cbe4fdbb6e98f27d71929f4c103 extends Twig_Template
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

          <div class=\"hero\">

          </div>
        <header class=\"sticky\" data-top=\"0\" data-sticky-type=\"panel\" id=\"header\">
            <div class=\"sticky-element\">
                ";
        // line 50
        echo "                ";
        $this->loadTemplate("partials/header.html.twig", "partials/homepage.html.twig", 50)->display($context);
        // line 51
        echo "            </div>
            <div class=\"ghost\"></div>
        </header>
        <div class=\"container main-container\">
            <!-- ";
        // line 55
        $this->loadTemplate("partials/sidebar.html.twig", "partials/homepage.html.twig", 55)->display($context);
        echo " -->
            <section class=\"content\">

                ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
                <h2>About me</h2>
                <article class=\"about-me\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "content_about"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            echo "                        ";
            echo $this->getAttribute($context["post"], "content", array());
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </article>


                <h2>News</h2>

                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "content_news"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 71
            echo "                <article class=\"news\">
                    <div class=\"meta\">
                        <div class=\"date\">
                            ";
            // line 74
            echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M Y");
            echo "
                        </div>
                    </div>
                    <h3>";
            // line 77
            echo $this->getAttribute($context["post"], "title", array());
            echo "</h3>
                    <div class=\"news-content\">
                        ";
            // line 79
            echo $this->getAttribute($context["post"], "content", array());
            echo "
                    </div>
                </article>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                <div class=\"view-more\">
                    <p><a href=\"./archive\">View more</a></p>
                </div>

            </section>

            <h2>Gallery</h2>
        </div>

        <section class=\"gallery\">
            <div class=\"gallery-inner\">
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => "content_gallery"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["pages"]) {
            // line 95
            echo "                    ";
            echo $this->getAttribute($context["pages"], "content", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                <!-- ";
        echo $this->getAttribute($this->env->getExtension('ImageCollageTwigExtension')->imageCollage($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "html", array());
        echo " -->
            </div>
        </section>

        <div class=\"container\">

        </div>
        <!-- <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Mytheme Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div> -->


    </body>
    ";
        // line 112
        $this->displayBlock('bottom', $context, $blocks);
        // line 113
        echo "</html>
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

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    // line 112
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 112,  271 => 58,  264 => 35,  261 => 34,  258 => 33,  255 => 32,  252 => 31,  249 => 30,  246 => 29,  243 => 28,  240 => 27,  233 => 25,  230 => 24,  228 => 23,  225 => 22,  220 => 37,  217 => 27,  215 => 22,  206 => 20,  198 => 16,  192 => 14,  189 => 13,  183 => 11,  177 => 9,  175 => 8,  170 => 5,  167 => 4,  162 => 113,  160 => 112,  141 => 97,  132 => 95,  128 => 94,  115 => 83,  105 => 79,  100 => 77,  94 => 74,  89 => 71,  85 => 70,  78 => 65,  69 => 63,  65 => 62,  60 => 59,  58 => 58,  52 => 55,  46 => 51,  43 => 50,  31 => 39,  29 => 4,  24 => 1,);
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
/*           <div class="hero">*/
/* */
/*           </div>*/
/*         <header class="sticky" data-top="0" data-sticky-type="panel" id="header">*/
/*             <div class="sticky-element">*/
/*                 {# include the header + navigation #}*/
/*                 {% include 'partials/header.html.twig' %}*/
/*             </div>*/
/*             <div class="ghost"></div>*/
/*         </header>*/
/*         <div class="container main-container">*/
/*             <!-- {% include 'partials/sidebar.html.twig' %} -->*/
/*             <section class="content">*/
/* */
/*                 {% block content %}{% endblock %}*/
/* */
/*                 <h2>About me</h2>*/
/*                 <article class="about-me">*/
/*                     {% for post in page.collection('content_about') %}*/
/*                         {{ post.content }}*/
/*                     {% endfor %}*/
/*                 </article>*/
/* */
/* */
/*                 <h2>News</h2>*/
/* */
/*                 {% for post in page.collection('content_news') %}*/
/*                 <article class="news">*/
/*                     <div class="meta">*/
/*                         <div class="date">*/
/*                             {{ post.date|date("M Y") }}*/
/*                         </div>*/
/*                     </div>*/
/*                     <h3>{{ post.title }}</h3>*/
/*                     <div class="news-content">*/
/*                         {{ post.content }}*/
/*                     </div>*/
/*                 </article>*/
/*                 {% endfor %}*/
/*                 <div class="view-more">*/
/*                     <p><a href="./archive">View more</a></p>*/
/*                 </div>*/
/* */
/*             </section>*/
/* */
/*             <h2>Gallery</h2>*/
/*         </div>*/
/* */
/*         <section class="gallery">*/
/*             <div class="gallery-inner">*/
/*                 {% for pages in page.collection('content_gallery') %}*/
/*                     {{ pages.content }}*/
/*                 {% endfor %}*/
/*                 <!-- {{ images_collage(page.media.images).html }} -->*/
/*             </div>*/
/*         </section>*/
/* */
/*         <div class="container">*/
/* */
/*         </div>*/
/*         <!-- <div class="footer">*/
/*             <div class="container">*/
/*                 <p class="text-muted">Mytheme Theme for <a href="http://getgrav.org">Grav</a></p>*/
/*             </div>*/
/*         </div> -->*/
/* */
/* */
/*     </body>*/
/*     {% block bottom %}{% endblock %}*/
/* </html>*/
/* */
