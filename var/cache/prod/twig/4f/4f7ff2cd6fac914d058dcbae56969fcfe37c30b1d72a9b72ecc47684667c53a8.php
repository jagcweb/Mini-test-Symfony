<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* task/tasks.html.twig */
class __TwigTemplate_93d593f5bb6044605c5c660065b89da822ea6f205163d0f18e42539451ff966b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "task/tasks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tareas";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"example-wrapper\">

    ";
        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 10), "flashbag", [], "method", false, false, false, 10), "get", [0 => "message"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <h1>Tareas</h1>
    <div id=\"cards\">
        ";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15), "rol", [], "any", false, false, false, 15) == "admin")) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["all_tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["admin_task"]) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_task"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\">Editar</a>
            <a style=\"margin-left:25px;\"  href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["admin_task"], "id", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\">Borrar</a>
                <div class=\"card\">
                    <span>Priority: ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_task"], "priority", [], "any", false, false, false, 20), "html", null, true);
                echo "</span>
                    <h1>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_task"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</h1>
                    <p>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["admin_task"], "description", [], "any", false, false, false, 22), "html", null, true);
                echo "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin_task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["user_tasks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user_task"]) {
                // line 27
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user_task"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">Editar</a>
            <a style=\"margin-left:25px;\"  href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user_task"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">Borrar</a>
                <div class=\"card\">
                    <span>Priority: ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_task"], "priority", [], "any", false, false, false, 30), "html", null, true);
                echo "</span>
                    <h1>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_task"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</h1>
                    <p>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user_task"], "description", [], "any", false, false, false, 32), "html", null, true);
                echo "</p>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "task/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 36,  150 => 35,  141 => 32,  137 => 31,  133 => 30,  128 => 28,  123 => 27,  118 => 26,  115 => 25,  106 => 22,  102 => 21,  98 => 20,  93 => 18,  88 => 17,  83 => 16,  81 => 15,  77 => 13,  68 => 11,  63 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "task/tasks.html.twig", "C:\\xampp\\htdocs\\masterPHP\\Test-Ingeteam\\02-Symfony\\templates\\task\\tasks.html.twig");
    }
}
