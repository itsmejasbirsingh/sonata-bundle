<?php

/* SonataDatagridBundle:Search:results.html.twig */
class __TwigTemplate_4de5ee480a76e05c2362d9840a9a775b8247a39e23e2cadd698db79b1afa2aae extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDatagridBundle:Search:results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDatagridBundle:Search:results.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <form name=\"search\" method=\"get\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 2, $this->source); })()));
        echo "\">
        <div class=\"row\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "search", array()), 'widget');
        echo "
        </div>

        <div class=\"row\">
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "priceStart", array()), 'widget', array("horizontal_input_wrapper_class" => "col-sm-3", "attr" => array("min" => 1, "class" => "form-control", "placeholder" => "Start from")));
        // line 12
        echo "

            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "priceEnd", array()), 'widget', array("horizontal_input_wrapper_class" => "col-sm-3", "attr" => array("min" => 1, "class" => "form-control", "placeholder" => "End to")));
        // line 18
        echo "
        </div>

        <div class=\"row\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "sort", array()), 'widget', array("horizontal_input_wrapper_class" => "col-sm-3"));
        echo "
        </div>

        <div class=\"row col-sm-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Search\" />
        </div>
    </form>
</div>

<div class=\"row text-center\">
    ";
        // line 32
        $this->loadTemplate("SonataDatagridBundle:Search:pager.html.twig", "SonataDatagridBundle:Search:results.html.twig", 32)->display($context);
        // line 33
        echo "</div>

<div class=\"row\">
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new Twig_Error_Runtime('Variable "results" does not exist.', 36, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            echo "        <div class=\"col-sm-4\" itemscope itemtype=\"http://schema.org/Product\">
            ";
            // line 38
            $this->loadTemplate("SonataProductBundle:Catalog:_product_grid.html.twig", "SonataDatagridBundle:Search:results.html.twig", 38)->display($context);
            // line 39
            echo "        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SonataDatagridBundle:Search:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  100 => 39,  98 => 38,  95 => 37,  78 => 36,  73 => 33,  71 => 32,  58 => 22,  52 => 18,  50 => 14,  46 => 12,  44 => 8,  37 => 4,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <form name=\"search\" method=\"get\" action=\"{{ path(route) }}\">
        <div class=\"row\">
            {{ form_widget(form.search) }}
        </div>

        <div class=\"row\">
            {{ form_widget(form.priceStart, {horizontal_input_wrapper_class: 'col-sm-3', attr: {
                min: 1,
                class: 'form-control',
                placeholder: 'Start from'
            }}) }}

            {{ form_widget(form.priceEnd, {horizontal_input_wrapper_class: 'col-sm-3', attr: {
                min: 1,
                class: 'form-control',
                placeholder: 'End to'
            }}) }}
        </div>

        <div class=\"row\">
            {{ form_widget(form.sort, {horizontal_input_wrapper_class: 'col-sm-3'}) }}
        </div>

        <div class=\"row col-sm-3\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Search\" />
        </div>
    </form>
</div>

<div class=\"row text-center\">
    {% include 'SonataDatagridBundle:Search:pager.html.twig' %}
</div>

<div class=\"row\">
    {% for product in results %}
        <div class=\"col-sm-4\" itemscope itemtype=\"http://schema.org/Product\">
            {% include 'SonataProductBundle:Catalog:_product_grid.html.twig' %}
        </div>
    {% endfor %}
</div>", "SonataDatagridBundle:Search:results.html.twig", "/var/www/html/sonata-bundle/vendor/sonata-project/datagrid-bundle/src/Resources/views/Search/results.html.twig");
    }
}
