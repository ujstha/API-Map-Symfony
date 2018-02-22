<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_015bcecf5a1cd76439a964ee9de4faab22b5242b53f506a5544d755a5faf646a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c0167843eb034186a2ee05bb3b87c3f79989aec2a6826509d4d0e9625769fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0167843eb034186a2ee05bb3b87c3f79989aec2a6826509d4d0e9625769fe9->enter($__internal_1c0167843eb034186a2ee05bb3b87c3f79989aec2a6826509d4d0e9625769fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1c0167843eb034186a2ee05bb3b87c3f79989aec2a6826509d4d0e9625769fe9->leave($__internal_1c0167843eb034186a2ee05bb3b87c3f79989aec2a6826509d4d0e9625769fe9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88467ecdd886e6f0d24f40031cb8ed1e1cf1f1d9360ba16ac3f2d4092175ba15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88467ecdd886e6f0d24f40031cb8ed1e1cf1f1d9360ba16ac3f2d4092175ba15->enter($__internal_88467ecdd886e6f0d24f40031cb8ed1e1cf1f1d9360ba16ac3f2d4092175ba15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_88467ecdd886e6f0d24f40031cb8ed1e1cf1f1d9360ba16ac3f2d4092175ba15->leave($__internal_88467ecdd886e6f0d24f40031cb8ed1e1cf1f1d9360ba16ac3f2d4092175ba15_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_27200e617bf58fd32087f9caba59eb8bee07ccfa58b1a9aad78f809c108c4f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27200e617bf58fd32087f9caba59eb8bee07ccfa58b1a9aad78f809c108c4f73->enter($__internal_27200e617bf58fd32087f9caba59eb8bee07ccfa58b1a9aad78f809c108c4f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_27200e617bf58fd32087f9caba59eb8bee07ccfa58b1a9aad78f809c108c4f73->leave($__internal_27200e617bf58fd32087f9caba59eb8bee07ccfa58b1a9aad78f809c108c4f73_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b05b106cab5e888097cafefcdb9302117518d9905c26d2c0334cbff67d594be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05b106cab5e888097cafefcdb9302117518d9905c26d2c0334cbff67d594be4->enter($__internal_b05b106cab5e888097cafefcdb9302117518d9905c26d2c0334cbff67d594be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b05b106cab5e888097cafefcdb9302117518d9905c26d2c0334cbff67d594be4->leave($__internal_b05b106cab5e888097cafefcdb9302117518d9905c26d2c0334cbff67d594be4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\my_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
