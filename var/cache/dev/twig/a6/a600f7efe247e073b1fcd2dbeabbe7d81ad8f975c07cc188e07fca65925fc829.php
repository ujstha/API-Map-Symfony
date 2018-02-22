<?php

/* index.html.twig */
class __TwigTemplate_9e689e337db70db87d68375a6d72fbb48a043e1eb1315346a52d5ba52317eb39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_347804e5ca58a4b38dd23457f8d7cc82eea4623ef20a200a0fbd25e16ac4ce95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_347804e5ca58a4b38dd23457f8d7cc82eea4623ef20a200a0fbd25e16ac4ce95->enter($__internal_347804e5ca58a4b38dd23457f8d7cc82eea4623ef20a200a0fbd25e16ac4ce95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_347804e5ca58a4b38dd23457f8d7cc82eea4623ef20a200a0fbd25e16ac4ce95->leave($__internal_347804e5ca58a4b38dd23457f8d7cc82eea4623ef20a200a0fbd25e16ac4ce95_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dd7508a931e2cf268761a6e63b185ed1527dcb0490571cf722161ca1180daa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd7508a931e2cf268761a6e63b185ed1527dcb0490571cf722161ca1180daa2->enter($__internal_2dd7508a931e2cf268761a6e63b185ed1527dcb0490571cf722161ca1180daa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"body\">
        <h3>Get-Location</h3>
        <p>Get address by typing latitude and longitute or get latitude and longitude by typing address below. You can also change color, shape of marker and also you can hide/show or add/delete the marker. If you can't see map then please reload the page.</p>
    </div>
    <div class=\"overall\">

    <p style=\"text-transform:uppercase; font:20px normal; text-align:center;\"> Google Map API
        <div id=\"map\"></div>
    <p>
            
        <div class=\"container-col\">
            <div class=\"container-col-sub\">
                <div class=h3>
                    <h3>Editing and Searching Options</h3>
                </div>
                    
                <div class=address>
                    <form id=\"location-form\">                                    
                        <input id=\"address\" class=\"btn\" type=\"textbox\" placeholder=\"Type place's name OR Latitude and Longitude here.....\">
                                       
                        <input id=\"provide-location\" class=\"btn btn1\" type=\"submit\" value=\"Get Address\">
                    </form>
                </div>
                <div class=\"card-block\" id=\"formatted-address\"></div>
                <div class=\"card-block\" id=\"address-components\"></div>
                <div class=\"card-block\" id=\"geometry\"></div>

                <hr>                     
                        
                <div class=\"address\">
                    <input type=\"color\" id=\"marker-color\" class=\"btn\">
                                    
                    <input id=\"provide-color\" class=\"btn btn1\" type=\"button\" value=\"Change Marker's Color\">
                </div>

                <hr>
                                
                <div class=\"address\">
                    <input id=\"marker-icon\" class=\"btn\" type=\"url\" list=\"defaultURLs\" placeholder=\"Choose One....\" required>
                    <datalist id=\"defaultURLs\">
                        <option value=\"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png\" label=\"Beach Flag\">
                            
                        <option value=\"http://maps.google.com/mapfiles/ms/icons/arts.png\" label=\"Arts\">

                        <option value=\"http://maps.google.com/mapfiles/ms/icons/landmarks-jp.png\" label=\"Landmarks\">
                    </datalist>
                                    
                    <input id=\"provide-icon\" class=\"btn btn1\" type=\"button\" value=\"Change Marker's Style\">
                </div>

                <hr>

                <input id=\"hide-marker\" class=\"btn btn1 btn2\" type=button value=\"Hide Marker Icon\">
                        
                <input id=\"show-marker\" class=\"btn btn1 btn2\" type=button value=\"Show Marker Icon\">
                        
                <input id=\"delete-marker\" class=\"btn btn1 btn2\" type=button value=\"Delete Marker Icon\">
                        
            </div>
        </div>
    </div>

";
        
        $__internal_2dd7508a931e2cf268761a6e63b185ed1527dcb0490571cf722161ca1180daa2->leave($__internal_2dd7508a931e2cf268761a6e63b185ed1527dcb0490571cf722161ca1180daa2_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"body\">
        <h3>Get-Location</h3>
        <p>Get address by typing latitude and longitute or get latitude and longitude by typing address below. You can also change color, shape of marker and also you can hide/show or add/delete the marker. If you can't see map then please reload the page.</p>
    </div>
    <div class=\"overall\">

    <p style=\"text-transform:uppercase; font:20px normal; text-align:center;\"> Google Map API
        <div id=\"map\"></div>
    <p>
            
        <div class=\"container-col\">
            <div class=\"container-col-sub\">
                <div class=h3>
                    <h3>Editing and Searching Options</h3>
                </div>
                    
                <div class=address>
                    <form id=\"location-form\">                                    
                        <input id=\"address\" class=\"btn\" type=\"textbox\" placeholder=\"Type place's name OR Latitude and Longitude here.....\">
                                       
                        <input id=\"provide-location\" class=\"btn btn1\" type=\"submit\" value=\"Get Address\">
                    </form>
                </div>
                <div class=\"card-block\" id=\"formatted-address\"></div>
                <div class=\"card-block\" id=\"address-components\"></div>
                <div class=\"card-block\" id=\"geometry\"></div>

                <hr>                     
                        
                <div class=\"address\">
                    <input type=\"color\" id=\"marker-color\" class=\"btn\">
                                    
                    <input id=\"provide-color\" class=\"btn btn1\" type=\"button\" value=\"Change Marker's Color\">
                </div>

                <hr>
                                
                <div class=\"address\">
                    <input id=\"marker-icon\" class=\"btn\" type=\"url\" list=\"defaultURLs\" placeholder=\"Choose One....\" required>
                    <datalist id=\"defaultURLs\">
                        <option value=\"https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png\" label=\"Beach Flag\">
                            
                        <option value=\"http://maps.google.com/mapfiles/ms/icons/arts.png\" label=\"Arts\">

                        <option value=\"http://maps.google.com/mapfiles/ms/icons/landmarks-jp.png\" label=\"Landmarks\">
                    </datalist>
                                    
                    <input id=\"provide-icon\" class=\"btn btn1\" type=\"button\" value=\"Change Marker's Style\">
                </div>

                <hr>

                <input id=\"hide-marker\" class=\"btn btn1 btn2\" type=button value=\"Hide Marker Icon\">
                        
                <input id=\"show-marker\" class=\"btn btn1 btn2\" type=button value=\"Show Marker Icon\">
                        
                <input id=\"delete-marker\" class=\"btn btn1 btn2\" type=button value=\"Delete Marker Icon\">
                        
            </div>
        </div>
    </div>

{% endblock %}


", "index.html.twig", "C:\\my_project_task\\templates\\index.html.twig");
    }
}
