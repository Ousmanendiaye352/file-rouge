<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_09d909e82921cc2420ae701bd3558ab7cce6bd5b240d4173ab1853b9a7ec86bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d909e82921cc2420ae701bd3558ab7cce6bd5b240d4173ab1853b9a7ec86bc->enter($__internal_09d909e82921cc2420ae701bd3558ab7cce6bd5b240d4173ab1853b9a7ec86bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1cf17bf87729f0b78b46a560f505ee90905330ba5d7e476563468f96fe47e51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf17bf87729f0b78b46a560f505ee90905330ba5d7e476563468f96fe47e51d->enter($__internal_1cf17bf87729f0b78b46a560f505ee90905330ba5d7e476563468f96fe47e51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_09d909e82921cc2420ae701bd3558ab7cce6bd5b240d4173ab1853b9a7ec86bc->leave($__internal_09d909e82921cc2420ae701bd3558ab7cce6bd5b240d4173ab1853b9a7ec86bc_prof);

        
        $__internal_1cf17bf87729f0b78b46a560f505ee90905330ba5d7e476563468f96fe47e51d->leave($__internal_1cf17bf87729f0b78b46a560f505ee90905330ba5d7e476563468f96fe47e51d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
