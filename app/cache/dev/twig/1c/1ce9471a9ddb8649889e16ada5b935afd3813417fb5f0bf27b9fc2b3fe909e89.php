<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7bdbcfddfb1764df7abea735fb5e1b5730dc9fc6fc6d20745d7b9524054ad8e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b99a32d4048dd44a48ddb290ccbddd05e3933a3a2147bcea73a3ae15ad4d9ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99a32d4048dd44a48ddb290ccbddd05e3933a3a2147bcea73a3ae15ad4d9ec4->enter($__internal_b99a32d4048dd44a48ddb290ccbddd05e3933a3a2147bcea73a3ae15ad4d9ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b99a32d4048dd44a48ddb290ccbddd05e3933a3a2147bcea73a3ae15ad4d9ec4->leave($__internal_b99a32d4048dd44a48ddb290ccbddd05e3933a3a2147bcea73a3ae15ad4d9ec4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_26ffc93bf456b1bf5805c5e8ee6724b50477409b84dbccdaa697d3d04902cd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ffc93bf456b1bf5805c5e8ee6724b50477409b84dbccdaa697d3d04902cd43->enter($__internal_26ffc93bf456b1bf5805c5e8ee6724b50477409b84dbccdaa697d3d04902cd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_26ffc93bf456b1bf5805c5e8ee6724b50477409b84dbccdaa697d3d04902cd43->leave($__internal_26ffc93bf456b1bf5805c5e8ee6724b50477409b84dbccdaa697d3d04902cd43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac431c582457a0f821b5881fa9c1d4bad43811b84229922185f45840cd23849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac431c582457a0f821b5881fa9c1d4bad43811b84229922185f45840cd23849->enter($__internal_5ac431c582457a0f821b5881fa9c1d4bad43811b84229922185f45840cd23849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ac431c582457a0f821b5881fa9c1d4bad43811b84229922185f45840cd23849->leave($__internal_5ac431c582457a0f821b5881fa9c1d4bad43811b84229922185f45840cd23849_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0e23b41f6f5e56762bba3e62938a575a3a9d7fded75f280be2175dd006dcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0e23b41f6f5e56762bba3e62938a575a3a9d7fded75f280be2175dd006dcfd->enter($__internal_de0e23b41f6f5e56762bba3e62938a575a3a9d7fded75f280be2175dd006dcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_de0e23b41f6f5e56762bba3e62938a575a3a9d7fded75f280be2175dd006dcfd->leave($__internal_de0e23b41f6f5e56762bba3e62938a575a3a9d7fded75f280be2175dd006dcfd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp5\\htdocs\\webadmin\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
