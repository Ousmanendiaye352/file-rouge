<?php

/* admin/index.html.twig */
class __TwigTemplate_946b988a10d7a375c92e0055fd9f8c4dd70f20b56ae50d2c684b937e36a2bd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d65dc93ee214a5dd25d6c56bd922af38a58394268dfdd356fcf5723731267bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d65dc93ee214a5dd25d6c56bd922af38a58394268dfdd356fcf5723731267bd->enter($__internal_2d65dc93ee214a5dd25d6c56bd922af38a58394268dfdd356fcf5723731267bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_16e502a76b99eec15ef59aa09cc5ef1a0dd814a64d8290aad5ff39b3cf1041e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e502a76b99eec15ef59aa09cc5ef1a0dd814a64d8290aad5ff39b3cf1041e6->enter($__internal_16e502a76b99eec15ef59aa09cc5ef1a0dd814a64d8290aad5ff39b3cf1041e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d65dc93ee214a5dd25d6c56bd922af38a58394268dfdd356fcf5723731267bd->leave($__internal_2d65dc93ee214a5dd25d6c56bd922af38a58394268dfdd356fcf5723731267bd_prof);

        
        $__internal_16e502a76b99eec15ef59aa09cc5ef1a0dd814a64d8290aad5ff39b3cf1041e6->leave($__internal_16e502a76b99eec15ef59aa09cc5ef1a0dd814a64d8290aad5ff39b3cf1041e6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_be53871edeea1eafa1de89cbd9a9a69de6a81b0dc9c0bb4183502405f5dc126e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be53871edeea1eafa1de89cbd9a9a69de6a81b0dc9c0bb4183502405f5dc126e->enter($__internal_be53871edeea1eafa1de89cbd9a9a69de6a81b0dc9c0bb4183502405f5dc126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23d9c788386c86926f7d9a9835e21727429de6e7228c5363bfca6acba4959c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d9c788386c86926f7d9a9835e21727429de6e7228c5363bfca6acba4959c29->enter($__internal_23d9c788386c86926f7d9a9835e21727429de6e7228c5363bfca6acba4959c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_23d9c788386c86926f7d9a9835e21727429de6e7228c5363bfca6acba4959c29->leave($__internal_23d9c788386c86926f7d9a9835e21727429de6e7228c5363bfca6acba4959c29_prof);

        
        $__internal_be53871edeea1eafa1de89cbd9a9a69de6a81b0dc9c0bb4183502405f5dc126e->leave($__internal_be53871edeea1eafa1de89cbd9a9a69de6a81b0dc9c0bb4183502405f5dc126e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block body %}
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "admin/index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/index.html.twig");
    }
}
