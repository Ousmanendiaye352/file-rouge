<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_8e55ca8d9ec6c75c3c776466b0dc830c92eefdad29d1f10190f0dd010efc91f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e55ca8d9ec6c75c3c776466b0dc830c92eefdad29d1f10190f0dd010efc91f9->enter($__internal_8e55ca8d9ec6c75c3c776466b0dc830c92eefdad29d1f10190f0dd010efc91f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7bb73b7da10ca70f0dcbe69082d37bd50b77895afda485f4910fd51c9b795c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb73b7da10ca70f0dcbe69082d37bd50b77895afda485f4910fd51c9b795c43->enter($__internal_7bb73b7da10ca70f0dcbe69082d37bd50b77895afda485f4910fd51c9b795c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8e55ca8d9ec6c75c3c776466b0dc830c92eefdad29d1f10190f0dd010efc91f9->leave($__internal_8e55ca8d9ec6c75c3c776466b0dc830c92eefdad29d1f10190f0dd010efc91f9_prof);

        
        $__internal_7bb73b7da10ca70f0dcbe69082d37bd50b77895afda485f4910fd51c9b795c43->leave($__internal_7bb73b7da10ca70f0dcbe69082d37bd50b77895afda485f4910fd51c9b795c43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}