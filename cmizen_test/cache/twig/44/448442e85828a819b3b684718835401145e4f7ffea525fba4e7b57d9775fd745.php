<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_f37de7a33070d1c276aeedbff88885be6a20d2f417510a24bf1a9f2c0ff60500 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"sidebar\">
    <a href=\".\">
        <div class=\"mugshot\">
            <img src=\"";
        // line 4
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/clive-mizen.jpg\" alt=\"Clive Mizen Mugshot\"/>
        </div>
    </a>
    <nav>
        <ul>
            <li>
                <a href=\".\">
                    <div class=\"slide\"></div>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href=\"./links\">
                    <div class=\"slide\"></div>
                    <span>Links page</span>
                </a>
            </li>
            <li>
                <a href=\"./contact\">
                    <div class=\"slide\"></div>
                    <span>Contact</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class=\"social\">
        <h4>Get in Touch:</h4>
        <ul>
            <li>
                <a class=\"icon facebook\" href=\"https://www.facebook.com/clive.mizen\" target=\"_blank\">Facebook</a>
            </li>
            <li>
                <a class=\"icon linkedin\" href=\"https://uk.linkedin.com/in/clive-mizen-24b39942\" target=\"_blank\">Linkedin</a>
            </li>
            <li>
                <a class=\"icon email\" href=\"mailto:info@clivemizen.com\" target=\"_blank\">Email</a>
            </li>
        </ul>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <section class="sidebar">*/
/*     <a href=".">*/
/*         <div class="mugshot">*/
/*             <img src="{{ theme_url }}/images/clive-mizen.jpg" alt="Clive Mizen Mugshot"/>*/
/*         </div>*/
/*     </a>*/
/*     <nav>*/
/*         <ul>*/
/*             <li>*/
/*                 <a href=".">*/
/*                     <div class="slide"></div>*/
/*                     <span>Home</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="./links">*/
/*                     <div class="slide"></div>*/
/*                     <span>Links page</span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="./contact">*/
/*                     <div class="slide"></div>*/
/*                     <span>Contact</span>*/
/*                 </a>*/
/*             </li>*/
/*         </ul>*/
/*     </nav>*/
/*     <div class="social">*/
/*         <h4>Get in Touch:</h4>*/
/*         <ul>*/
/*             <li>*/
/*                 <a class="icon facebook" href="https://www.facebook.com/clive.mizen" target="_blank">Facebook</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a class="icon linkedin" href="https://uk.linkedin.com/in/clive-mizen-24b39942" target="_blank">Linkedin</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a class="icon email" href="mailto:info@clivemizen.com" target="_blank">Email</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </section>*/
/* */
