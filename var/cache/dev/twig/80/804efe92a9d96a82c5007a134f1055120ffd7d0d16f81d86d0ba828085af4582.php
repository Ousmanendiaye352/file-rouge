<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_2dab2a9247879949205a2ce164154a8ea399e9f2d94fdd219b90b99174975337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dab2a9247879949205a2ce164154a8ea399e9f2d94fdd219b90b99174975337->enter($__internal_2dab2a9247879949205a2ce164154a8ea399e9f2d94fdd219b90b99174975337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_82a936496d7fb0671a6a47c7dd4a8adc13be2bfe8d850d91f4dc2a7e0939e873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a936496d7fb0671a6a47c7dd4a8adc13be2bfe8d850d91f4dc2a7e0939e873->enter($__internal_82a936496d7fb0671a6a47c7dd4a8adc13be2bfe8d850d91f4dc2a7e0939e873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2dab2a9247879949205a2ce164154a8ea399e9f2d94fdd219b90b99174975337->leave($__internal_2dab2a9247879949205a2ce164154a8ea399e9f2d94fdd219b90b99174975337_prof);

        
        $__internal_82a936496d7fb0671a6a47c7dd4a8adc13be2bfe8d850d91f4dc2a7e0939e873->leave($__internal_82a936496d7fb0671a6a47c7dd4a8adc13be2bfe8d850d91f4dc2a7e0939e873_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
