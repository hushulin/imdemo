<?php

/* /usr/share/nginx/html/imdemo/themes/rainlab-vanilla/pages/account.htm */
class __TwigTemplate_88982652fc94e71d98e5a1e714581126e52ab96e72b0e158388188f7fc0204dd extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/usr/share/nginx/html/imdemo/themes/rainlab-vanilla/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% component 'account' %}*/
