<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_2748a68a7672a20d0a6a46ad690e6714c33cffec5f45496ded5221e36161312a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2748a68a7672a20d0a6a46ad690e6714c33cffec5f45496ded5221e36161312a->enter($__internal_2748a68a7672a20d0a6a46ad690e6714c33cffec5f45496ded5221e36161312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a5b8a92f9b326b444727f95026b54212b6b0dce0fb3767c6452529c0a297505b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5b8a92f9b326b444727f95026b54212b6b0dce0fb3767c6452529c0a297505b->enter($__internal_a5b8a92f9b326b444727f95026b54212b6b0dce0fb3767c6452529c0a297505b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2748a68a7672a20d0a6a46ad690e6714c33cffec5f45496ded5221e36161312a->leave($__internal_2748a68a7672a20d0a6a46ad690e6714c33cffec5f45496ded5221e36161312a_prof);

        
        $__internal_a5b8a92f9b326b444727f95026b54212b6b0dce0fb3767c6452529c0a297505b->leave($__internal_a5b8a92f9b326b444727f95026b54212b6b0dce0fb3767c6452529c0a297505b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
