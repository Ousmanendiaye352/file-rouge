<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_f8cee978a7718ba67f4bbec36915dab429ad184ca4596b9a9af75d22ddc4604b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8cee978a7718ba67f4bbec36915dab429ad184ca4596b9a9af75d22ddc4604b->enter($__internal_f8cee978a7718ba67f4bbec36915dab429ad184ca4596b9a9af75d22ddc4604b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5d7ef8279edda362d76a1bc3168e8fd2f974659f3652e560b143328b0b07ba5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7ef8279edda362d76a1bc3168e8fd2f974659f3652e560b143328b0b07ba5f->enter($__internal_5d7ef8279edda362d76a1bc3168e8fd2f974659f3652e560b143328b0b07ba5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f8cee978a7718ba67f4bbec36915dab429ad184ca4596b9a9af75d22ddc4604b->leave($__internal_f8cee978a7718ba67f4bbec36915dab429ad184ca4596b9a9af75d22ddc4604b_prof);

        
        $__internal_5d7ef8279edda362d76a1bc3168e8fd2f974659f3652e560b143328b0b07ba5f->leave($__internal_5d7ef8279edda362d76a1bc3168e8fd2f974659f3652e560b143328b0b07ba5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
