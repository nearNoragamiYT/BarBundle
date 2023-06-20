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

/* InicioinicioBundle:Default:modal.html.twig */
class __TwigTemplate_7e6f91ed594335cadc72613405ae809d4e5124e14d5c1dbfcd20b49ebd090f1c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InicioinicioBundle:Default:modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "InicioinicioBundle:Default:modal.html.twig"));

        // line 1
        echo "<!-- Modal -->
<dialog id=\"Tapa\" class=\"size-modal-nueva-tapa\">
    <div class=\"modal-content\">
        <h4>Nueva tapa</h4>
       
       
    </div>
    <div class=\"modal-footer\" style=\"margin-bottom:10px;\">
        <a class=\"waves-effect waves-light btn right btn-enviar-correo\">Enviar</a>\t
        <a class=\"waves-effect waves-light btn red left close-modal-Tapa\">Cerrar</a>
    </div>
</dialog>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "InicioinicioBundle:Default:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Modal -->
<dialog id=\"Tapa\" class=\"size-modal-nueva-tapa\">
    <div class=\"modal-content\">
        <h4>Nueva tapa</h4>
       
       
    </div>
    <div class=\"modal-footer\" style=\"margin-bottom:10px;\">
        <a class=\"waves-effect waves-light btn right btn-enviar-correo\">Enviar</a>\t
        <a class=\"waves-effect waves-light btn red left close-modal-Tapa\">Cerrar</a>
    </div>
</dialog>", "InicioinicioBundle:Default:modal.html.twig", "C:\\xampp\\htdocs\\Barco\\src\\Inicio\\inicioBundle/Resources/views/Default/modal.html.twig");
    }
}
