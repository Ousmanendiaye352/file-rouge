<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_7aa04535162bdb52a5bb36ef2143cc16a1bec77d5e2abb28d39fc43662e121ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa04535162bdb52a5bb36ef2143cc16a1bec77d5e2abb28d39fc43662e121ba->enter($__internal_7aa04535162bdb52a5bb36ef2143cc16a1bec77d5e2abb28d39fc43662e121ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a443896fe88ebf3fdbd5eb061c3962195d74db21953e19f5bac3d06ae84eca09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a443896fe88ebf3fdbd5eb061c3962195d74db21953e19f5bac3d06ae84eca09->enter($__internal_a443896fe88ebf3fdbd5eb061c3962195d74db21953e19f5bac3d06ae84eca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7aa04535162bdb52a5bb36ef2143cc16a1bec77d5e2abb28d39fc43662e121ba->leave($__internal_7aa04535162bdb52a5bb36ef2143cc16a1bec77d5e2abb28d39fc43662e121ba_prof);

        
        $__internal_a443896fe88ebf3fdbd5eb061c3962195d74db21953e19f5bac3d06ae84eca09->leave($__internal_a443896fe88ebf3fdbd5eb061c3962195d74db21953e19f5bac3d06ae84eca09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
