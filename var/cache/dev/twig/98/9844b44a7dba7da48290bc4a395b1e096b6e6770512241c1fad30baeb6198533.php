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

/* TapasTapasBundle:Default:tapa.html.twig */
class __TwigTemplate_48eaf1683748c5f17f333d5aadfc51a1231ebca5a5d36e1c0c6a298d80c41fe3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TapasTapasBundle:Default:tapa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "TapasTapasBundle:Default:tapa.html.twig"));

        $this->parent = $this->loadTemplate("::base.html.twig", "TapasTapasBundle:Default:tapa.html.twig", 2);
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

        echo "Tapa";
        
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
      <h1 class=\"mt-4 mb-3\">Todas nuestras tapas</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"http://placehold.it/750x500\" alt=\"\">
        </div>
        <div class=\"col-md-4\">
          <h3 class=\"my-3\"> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["id"] ?? $this->getContext($context, "id")), "nombre", [], "array"), "html", null, true);
        echo " </h3>
          <p> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["id"] ?? $this->getContext($context, "id")), "descripcion_espanol", [], "array"), "html", null, true);
        echo " </p>
          <h3 class=\"my-3\">Ingredientes</h3>
            ";
        // line 23
        echo $this->getAttribute(($context["id"] ?? $this->getContext($context, "id")), "ingredientes", [], "array");
        echo "
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Otras tapas</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TapasTapasBundle:Default:tapa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  98 => 21,  94 => 20,  79 => 7,  70 => 6,  52 => 4,  30 => 2,);
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
{% block titulo %}Tapa{% endblock %}
{# CONTENIDO #}
{% block contenido %}
<!-- Page Content -->
    <div class=\"container\">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class=\"mt-4 mb-3\">Todas nuestras tapas</h1>

      <!-- Portfolio Item Row -->
      <div class=\"row\">

        <div class=\"col-md-8\">
          <img class=\"img-fluid\" src=\"http://placehold.it/750x500\" alt=\"\">
        </div>
        <div class=\"col-md-4\">
          <h3 class=\"my-3\"> {{ id['nombre'] }} </h3>
          <p> {{id['descripcion_espanol']}} </p>
          <h3 class=\"my-3\">Ingredientes</h3>
            {{id['ingredientes'] | raw}}
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class=\"my-4\">Otras tapas</h3>

      <div class=\"row\">

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

        <div class=\"col-md-3 col-sm-6 mb-4\">
          <a href=\"#\">
            <img class=\"img-fluid\" src=\"http://placehold.it/500x300\" alt=\"\">
          </a>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
{% endblock %}", "TapasTapasBundle:Default:tapa.html.twig", "C:\\xampp\\htdocs\\Barco\\src\\Tapas\\TapasBundle/Resources/views/Default/tapa.html.twig");
    }
}
