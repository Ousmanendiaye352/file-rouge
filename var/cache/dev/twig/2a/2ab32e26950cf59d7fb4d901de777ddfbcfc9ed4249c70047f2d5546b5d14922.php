<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_7b345f3f7b1658c85c8e0a99efaa3f0f30aae406a14bccd8cbb9264317255cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b345f3f7b1658c85c8e0a99efaa3f0f30aae406a14bccd8cbb9264317255cfa->enter($__internal_7b345f3f7b1658c85c8e0a99efaa3f0f30aae406a14bccd8cbb9264317255cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_835df29f060aa413069c8195f39fc3987f4422e3d97a3083d0336672c37fb188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835df29f060aa413069c8195f39fc3987f4422e3d97a3083d0336672c37fb188->enter($__internal_835df29f060aa413069c8195f39fc3987f4422e3d97a3083d0336672c37fb188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7b345f3f7b1658c85c8e0a99efaa3f0f30aae406a14bccd8cbb9264317255cfa->leave($__internal_7b345f3f7b1658c85c8e0a99efaa3f0f30aae406a14bccd8cbb9264317255cfa_prof);

        
        $__internal_835df29f060aa413069c8195f39fc3987f4422e3d97a3083d0336672c37fb188->leave($__internal_835df29f060aa413069c8195f39fc3987f4422e3d97a3083d0336672c37fb188_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}