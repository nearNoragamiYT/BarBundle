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

/* @NosotrosIInosotros/Default/index.html.twig */
class __TwigTemplate_dc3f14afe770ceb3be7e7cdb4cf08f0d32550b0c8cc5ccf05c2334586e1fc351 extends \Twig\Template
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
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NosotrosIInosotros/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NosotrosIInosotros/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "@NosotrosIInosotros/Default/index.html.twig", 2);
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

        echo "Nuestro equipo ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_contenido($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenido"));

        // line 7
        echo "<!-- Page Content -->
<div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Bar Juan
        <small>Equipo</small>
      </h1>
<!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Imagen/nosotros.png"), "html", null, true);
        echo "\" alt=\"\">
<h2>Nuestro equipo</h2>
      <!-- Marketing Icons Section -->
      <div class=\"row\">
      
      <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Chef</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("imagen/paco.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>

      </div>
      <!-- /.row -->


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@NosotrosIInosotros/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  115 => 35,  99 => 22,  89 => 15,  79 => 7,  70 => 6,  52 => 4,  30 => 2,);
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
{% extends '::base.html.twig' %}
{# Titulo #}
{% block titulo %}Nuestro equipo {% endblock %}
{# CONTENIDO #}
{% block contenido %}
<!-- Page Content -->
<div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Bar Juan
        <small>Equipo</small>
      </h1>
<!-- Image Header -->
      <img class=\"img-fluid rounded mb-4\" src=\"{{ asset('Imagen/nosotros.png') }}\" alt=\"\">
<h2>Nuestro equipo</h2>
      <!-- Marketing Icons Section -->
      <div class=\"row\">
      
      <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{asset('imagen/paco.png')}}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{asset('imagen/paco.png')}}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Chef</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>
    <div class=\"col-lg-4 mb-4\">
      <div class=\"card h-100 text-center\">
        <img class=\"card-img-top\" src=\"{{asset('imagen/paco.png')}}\" alt=\"\">
        <div class=\"card-body\">
          <h4 class=\"card-title\">Paco Gómez</h4>
          <h6 class=\"card-subtitle mb-2 text-muted\">Director</h6>
          <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
        </div>
        <div class=\"card-footer\">
          <a href=\"#\">name@example.com</a>
        </div>
      </div>
    </div>

      </div>
      <!-- /.row -->


</div>
{% endblock %}", "@NosotrosIInosotros/Default/index.html.twig", "C:\\xampp\\htdocs\\Barco\\src\\NosotrosII\\nosotrosBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
