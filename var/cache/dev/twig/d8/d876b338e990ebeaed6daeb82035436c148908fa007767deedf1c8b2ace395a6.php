<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Inicioinicio/Default/nuevaTapa.html.twig */
class __TwigTemplate_7570a1bca4805d52aaabb795872e3ea86e497bba5932d51ca5bb80283263c8ba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'titulo' => [$this, 'block_titulo'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Inicioinicio/Default/nuevaTapa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Inicioinicio/Default/nuevaTapa.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Inicioinicio/Default/nuevaTapa.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titulo($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titulo"));

        echo "Nueva tapa
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 8
        echo "\t<header>
\t";
        // line 10
        echo "\t
\t\t";
        // line 50
        echo "
\t\t";
        // line 52
        echo "\t\t<div class=\"carousel carousel-slider center\" data-indicators=\"true\">

\t\t\t<div class=\"carousel-item  white-text\" style=\"background-image: url(";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/slide01.png"), "html", null, true);
        echo ")\">
\t\t\t\t<h2>First Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your first panel</p>
\t\t\t\t<div class=\"carousel-fixed-item right\">
\t\t\t\t\t<a class=\"btn waves-effect white grey-text darken-text-2 left\">button</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item amber white-text\" style=\"background-image: url(";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/slide02.png"), "html", null, true);
        echo ")\">
\t\t\t\t<h2>Second Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your second panel</p>
\t\t\t</div>
\t\t\t<div class=\"carousel-item green white-text\" style=\"background-image: url(";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/slide03.png"), "html", null, true);
        echo ")\">
\t\t\t\t<h2>Third Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your third panel</p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- Page Content -->
\t<div class=\"container-fluid\">
\t\t<h1 class=\"my-4\">Nuestras mejores tapas</h1>

\t\t<div class=\"row\">
\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultTapas"] ?? $this->getContext($context, "resultTapas")));
        foreach ($context['_seq'] as $context["_key"] => $context["datosDentroDelContenido"]) {
            // line 77
            echo "\t\t\t\t";
            // line 78
            echo "\t\t\t\t<div class=\"col-lg-4 col-sm-6 portfolio-item\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tapas_tapas_homepage", ["id" => $this->getAttribute($context["datosDentroDelContenido"], "idtapa", [], "array")]), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tapas_tapas_homepage", ["id" => $this->getAttribute($context["datosDentroDelContenido"], "idtapa", [], "array")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["datosDentroDelContenido"], "nombre", [], "array"), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["datosDentroDelContenido"], "descripcion_espanol", [], "array"), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 94
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['datosDentroDelContenido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "\t\t</div>
\t\t<!-- /.row -->
\t\t<div class=\"containerB\">
\t\t\t<input type=\"checkbox\" id=\"btn-mas\">
\t\t\t<div
\t\t\t\tclass=\"redes\">
\t\t\t\t";
        // line 102
        echo "\t\t\t\t<a id=\"btnModal\" class=\"fa fa-plus btn\" data-toggle=\"tooltip\" title=\"Nueva Tapa\" delay: { \"show\" : 500, \"hide\" : 100 }></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-youtube\"></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-pinterest\"></a>
\t\t\t\t";
        // line 109
        echo "\t\t\t</div>
\t\t\t<div class=\"btn-mas\">
\t\t\t\t<label for=\"btn-mas\" class=\"fa fa-plus\"></label>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.containerB-->
\t</div>
\t";
        // line 116
        $this->loadTemplate("InicioinicioBundle:Default:modal.html.twig", "@Inicioinicio/Default/nuevaTapa.html.twig", 116)->display($context);
        // line 117
        echo "\t<!-- /.container-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Inicioinicio/Default/nuevaTapa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 117,  187 => 116,  178 => 109,  172 => 102,  164 => 95,  158 => 94,  147 => 85,  140 => 83,  134 => 80,  130 => 78,  128 => 77,  124 => 76,  110 => 65,  103 => 61,  93 => 54,  89 => 52,  86 => 50,  83 => 10,  80 => 8,  71 => 7,  52 => 4,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Plantilla de nuestra apliacion #}
{% extends 'base.html.twig' %}
{# Titulo #}
{% block titulo %}Nueva tapa
{% endblock %}
{# CONTENIDO #}
{% block contenido %}
\t<header>
\t{# boostrap #}
\t
\t\t{# <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t\t\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t\t\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\tclass=\"carousel-inner\" role=\"listbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Slide One - Set the background image for this slide in the line below -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item active\" style=\"background-image: url({{asset('imagen/slide01.png')}})\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Bar juan</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Lugar para convivir en parejas y amigos</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Slide Two - Set the background image for this slide in the line below -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url({{asset('imagen/slide02.png')}})\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Bar juan</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Carta ronvada todos los meses</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<!-- Slide Three - Set the background image for this slide in the line below -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-item\" style=\"background-image: url({{asset('imagen/slide03.png')}})\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Bar juan</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Comida tradicional y de autor</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div> #}

\t\t{# materialize #}
\t\t<div class=\"carousel carousel-slider center\" data-indicators=\"true\">

\t\t\t<div class=\"carousel-item  white-text\" style=\"background-image: url({{asset('imagen/slide01.png')}})\">
\t\t\t\t<h2>First Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your first panel</p>
\t\t\t\t<div class=\"carousel-fixed-item right\">
\t\t\t\t\t<a class=\"btn waves-effect white grey-text darken-text-2 left\">button</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"carousel-item amber white-text\" style=\"background-image: url({{asset('imagen/slide02.png')}})\">
\t\t\t\t<h2>Second Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your second panel</p>
\t\t\t</div>
\t\t\t<div class=\"carousel-item green white-text\" style=\"background-image: url({{asset('imagen/slide03.png')}})\">
\t\t\t\t<h2>Third Panel</h2>
\t\t\t\t<p class=\"white-text\">This is your third panel</p>
\t\t\t</div>
\t\t</div>
\t</header>
\t<!-- Page Content -->
\t<div class=\"container-fluid\">
\t\t<h1 class=\"my-4\">Nuestras mejores tapas</h1>

\t\t<div class=\"row\">
\t\t\t{% for datosDentroDelContenido in resultTapas %}
\t\t\t\t{# {% if datosDentroDelContenido['top'] == \"t\" %} #}
\t\t\t\t<div class=\"col-lg-4 col-sm-6 portfolio-item\">
\t\t\t\t\t<div class=\"card h-100\">
\t\t\t\t\t\t<a href=\"{{path('tapas_tapas_homepage',{'id':datosDentroDelContenido['idtapa']})}}\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">
\t\t\t\t\t\t\t\t<a href=\"{{path('tapas_tapas_homepage',{'id':datosDentroDelContenido['idtapa']})}}\">{{datosDentroDelContenido['nombre']}}</a>
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p class=\"card-text\">{{datosDentroDelContenido['descripcion_espanol']}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Card link</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"card-link\">Another link</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{# {% endif %} #}
\t\t\t{% endfor %}
\t\t</div>
\t\t<!-- /.row -->
\t\t<div class=\"containerB\">
\t\t\t<input type=\"checkbox\" id=\"btn-mas\">
\t\t\t<div
\t\t\t\tclass=\"redes\">
\t\t\t\t{# <a href=\"#\" class=\"fa fa-facebook\" data-toggle=\"tooltip\" title=\"Facebook\" delay: { \"show\": 500, \"hide\": 100 }> </a> #}
\t\t\t\t<a id=\"btnModal\" class=\"fa fa-plus btn\" data-toggle=\"tooltip\" title=\"Nueva Tapa\" delay: { \"show\" : 500, \"hide\" : 100 }></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-youtube\"></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t<a href=\"#\" class=\"fa fa-pinterest\"></a>
\t\t\t\t{# <a href=\"#\" class=\"fa fa-youtube\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-pinterest\"></a> #}
\t\t\t</div>
\t\t\t<div class=\"btn-mas\">
\t\t\t\t<label for=\"btn-mas\" class=\"fa fa-plus\"></label>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.containerB-->
\t</div>
\t{% include 'InicioinicioBundle:Default:modal.html.twig' %}
\t<!-- /.container-->
{% endblock %}
", "@Inicioinicio/Default/nuevaTapa.html.twig", "C:\\xampp\\htdocs\\Barco\\src\\Inicio\\inicioBundle\\Resources\\views\\Default\\nuevaTapa.html.twig");
    }
}
