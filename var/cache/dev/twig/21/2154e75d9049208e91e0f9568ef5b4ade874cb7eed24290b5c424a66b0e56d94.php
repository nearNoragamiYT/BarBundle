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

/* @ContactarContactar/Default/bares.html.twig */
class __TwigTemplate_ce86588f3bfdb240c5d2962da4e5287d7e81f9d7981f779f00daafb2459635bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContactarContactar/Default/bares.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@ContactarContactar/Default/bares.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@ContactarContactar/Default/bares.html.twig", 2);
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

        echo "Bares";
        
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
        echo "
<div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Bar Juan
        <small>Bares</small>
      </h1>
        <!-- BAR Celaya -->
  ";
        // line 15
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "Celaya") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 16
            echo "  <!-- BAR Celaya -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.0460652610864!2d-100.81213799936798!3d20.528348028258698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba9ad022c393%3A0x49792f7e6680ad15!2sMarquesa!5e0!3m2!1sen!2smx!4v1686343816938!5m2!1sen!2smx\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Celaya
        <br>Marquesa
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR Comonfort -->
  ";
        }
        // line 46
        echo "  ";
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "Comonfort") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 47
            echo "  <!-- BAR Comonfort -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463.727941099826!2d-100.76476892186237!3d20.715747715637715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca853baeb10e3%3A0xd633b17e9de619e7!2sBar%20El%20Rinc%C3%B3n%20Brujo!5e0!3m2!1sen!2smx!4v1686343631712!5m2!1sen!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Comonfort
        <br>Bar El Rincón Brujo
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR Empalme_Escobedo -->
  ";
        }
        // line 77
        echo "  ";
        if (((($context["sitio"] ?? $this->getContext($context, "sitio")) == "Empalme_Escobedo") || (($context["sitio"] ?? $this->getContext($context, "sitio")) == "todos"))) {
            // line 78
            echo "  <!-- BAR Empalme_Escobedo -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1866.476826317802!2d-100.750952461765!3d20.671464504753597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDQwJzE3LjMiTiAxMDDCsDQ0JzU4LjgiVw!5e0!3m2!1sen!2smx!4v1686340446961!5m2!1sen!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Empalme Escobedo
        <br>Bar la kika
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR MADRID -->
  ";
        }
        // line 108
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@ContactarContactar/Default/bares.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 108,  161 => 78,  158 => 77,  126 => 47,  123 => 46,  91 => 16,  89 => 15,  79 => 7,  70 => 6,  52 => 4,  30 => 2,);
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
{% block titulo %}Bares{% endblock %}
{# CONTENIDO #}
{% block contenido %}

<div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
        <h1 class=\"mt-4 mb-3\">Bar Juan
        <small>Bares</small>
      </h1>
        <!-- BAR Celaya -->
  {% if sitio=='Celaya' or sitio=='todos'%}
  <!-- BAR Celaya -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.0460652610864!2d-100.81213799936798!3d20.528348028258698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba9ad022c393%3A0x49792f7e6680ad15!2sMarquesa!5e0!3m2!1sen!2smx!4v1686343816938!5m2!1sen!2smx\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Celaya
        <br>Marquesa
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR Comonfort -->
  {% endif %}
  {% if sitio=='Comonfort' or sitio=='todos'%}
  <!-- BAR Comonfort -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7463.727941099826!2d-100.76476892186237!3d20.715747715637715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842ca853baeb10e3%3A0xd633b17e9de619e7!2sBar%20El%20Rinc%C3%B3n%20Brujo!5e0!3m2!1sen!2smx!4v1686343631712!5m2!1sen!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Comonfort
        <br>Bar El Rincón Brujo
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR Empalme_Escobedo -->
  {% endif %}
  {% if sitio=='Empalme_Escobedo' or sitio=='todos'%}
  <!-- BAR Empalme_Escobedo -->
  <div class=\"row\">
    <!-- Map Column -->
    <div class=\"col-lg-8 mb-4\">
      <!-- Embedded Google Map -->
      <iframe width=\"100%\" height=\"400px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1866.476826317802!2d-100.750952461765!3d20.671464504753597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDQwJzE3LjMiTiAxMDDCsDQ0JzU4LjgiVw!5e0!3m2!1sen!2smx!4v1686340446961!5m2!1sen!2smx\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class=\"col-lg-4 mb-4\">
      <h3>Detalles</h3>
      <p>
        Bar de Empalme Escobedo
        <br>Bar la kika
        <br>
      </p>
      <p>
        <abbr title=\"Phone\">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title=\"Email\">E</abbr>:
        <a href=\"mailto:name@example.com\">name@example.com
        </a>
      </p>
      <p>
        <abbr title=\"Hours\">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- BAR MADRID -->
  {% endif %}
</div>
{% endblock %}
", "@ContactarContactar/Default/bares.html.twig", "C:\\xampp\\htdocs\\Barco\\src\\Contactar\\ContactarBundle\\Resources\\views\\Default\\bares.html.twig");
    }
}
