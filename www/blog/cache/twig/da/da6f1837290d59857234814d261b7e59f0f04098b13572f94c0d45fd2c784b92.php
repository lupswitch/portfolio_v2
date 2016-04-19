<?php

/* partials/blog_sidebar_footer.html.twig */
class __TwigTemplate_8bf35960cacab94de93b81cbe9d7f8296ece19f22b448573bb9708704da40cbf extends Twig_Template
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
        echo "</div>
</div>
</div>

<div class=\"span3\" id=\"side-bar\">
";
        // line 6
        $this->loadTemplate("partials/sidebar.html.twig", "partials/blog_sidebar_footer.html.twig", 6)->display($context);
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* <div class="span3" id="side-bar">*/
/* {% include 'partials/sidebar.html.twig' %}*/
/* </div>*/
/* */
