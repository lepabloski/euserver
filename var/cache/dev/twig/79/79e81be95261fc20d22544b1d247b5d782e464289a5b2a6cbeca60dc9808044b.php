<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_bcaa20b8ce1b12e94dbe317061894b233fe365163af3a349e67f5b4a8ed9b3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcaa20b8ce1b12e94dbe317061894b233fe365163af3a349e67f5b4a8ed9b3e4->enter($__internal_bcaa20b8ce1b12e94dbe317061894b233fe365163af3a349e67f5b4a8ed9b3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b4a88555bc1a80d9f3a5a290bbb095e02b4fa5ed5df8918639bf78faa1237a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a88555bc1a80d9f3a5a290bbb095e02b4fa5ed5df8918639bf78faa1237a6e->enter($__internal_b4a88555bc1a80d9f3a5a290bbb095e02b4fa5ed5df8918639bf78faa1237a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcaa20b8ce1b12e94dbe317061894b233fe365163af3a349e67f5b4a8ed9b3e4->leave($__internal_bcaa20b8ce1b12e94dbe317061894b233fe365163af3a349e67f5b4a8ed9b3e4_prof);

        
        $__internal_b4a88555bc1a80d9f3a5a290bbb095e02b4fa5ed5df8918639bf78faa1237a6e->leave($__internal_b4a88555bc1a80d9f3a5a290bbb095e02b4fa5ed5df8918639bf78faa1237a6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6cf1e6509f48ff4312603c960d812996481602aabced7f40ff1dbb4520056a36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cf1e6509f48ff4312603c960d812996481602aabced7f40ff1dbb4520056a36->enter($__internal_6cf1e6509f48ff4312603c960d812996481602aabced7f40ff1dbb4520056a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_355c65c528fd95de8d035f68c06906a9bc101b0e1be2f4bd491ee0660631b3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355c65c528fd95de8d035f68c06906a9bc101b0e1be2f4bd491ee0660631b3c2->enter($__internal_355c65c528fd95de8d035f68c06906a9bc101b0e1be2f4bd491ee0660631b3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_355c65c528fd95de8d035f68c06906a9bc101b0e1be2f4bd491ee0660631b3c2->leave($__internal_355c65c528fd95de8d035f68c06906a9bc101b0e1be2f4bd491ee0660631b3c2_prof);

        
        $__internal_6cf1e6509f48ff4312603c960d812996481602aabced7f40ff1dbb4520056a36->leave($__internal_6cf1e6509f48ff4312603c960d812996481602aabced7f40ff1dbb4520056a36_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea52cd690a40728585e4c25f179ca1b24a1fec068e2796f6e64c4717170ed41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea52cd690a40728585e4c25f179ca1b24a1fec068e2796f6e64c4717170ed41a->enter($__internal_ea52cd690a40728585e4c25f179ca1b24a1fec068e2796f6e64c4717170ed41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3c66c1b484b5109d4370ea8cb6cf026c2561d38502313722b796e000031b9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c66c1b484b5109d4370ea8cb6cf026c2561d38502313722b796e000031b9e1->enter($__internal_d3c66c1b484b5109d4370ea8cb6cf026c2561d38502313722b796e000031b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d3c66c1b484b5109d4370ea8cb6cf026c2561d38502313722b796e000031b9e1->leave($__internal_d3c66c1b484b5109d4370ea8cb6cf026c2561d38502313722b796e000031b9e1_prof);

        
        $__internal_ea52cd690a40728585e4c25f179ca1b24a1fec068e2796f6e64c4717170ed41a->leave($__internal_ea52cd690a40728585e4c25f179ca1b24a1fec068e2796f6e64c4717170ed41a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f2633c8d7a4ec40973d66e4d2f9604b25d1993997885878e9968e5d1e36455a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2633c8d7a4ec40973d66e4d2f9604b25d1993997885878e9968e5d1e36455a->enter($__internal_3f2633c8d7a4ec40973d66e4d2f9604b25d1993997885878e9968e5d1e36455a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c234350fe0971f8d8a2b3d3821805670f4abcd565f4d1e422d540299d31037cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c234350fe0971f8d8a2b3d3821805670f4abcd565f4d1e422d540299d31037cb->enter($__internal_c234350fe0971f8d8a2b3d3821805670f4abcd565f4d1e422d540299d31037cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c234350fe0971f8d8a2b3d3821805670f4abcd565f4d1e422d540299d31037cb->leave($__internal_c234350fe0971f8d8a2b3d3821805670f4abcd565f4d1e422d540299d31037cb_prof);

        
        $__internal_3f2633c8d7a4ec40973d66e4d2f9604b25d1993997885878e9968e5d1e36455a->leave($__internal_3f2633c8d7a4ec40973d66e4d2f9604b25d1993997885878e9968e5d1e36455a_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\euserver\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
