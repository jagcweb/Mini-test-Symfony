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

/* user/login.html.twig */
class __TwigTemplate_b5a0c9b049b5ddb265d843482d88671d60fd552ba7440c7acfa748c14aae0150 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"example-wrapper\">
    <h1>Login</h1>

    ";
        // line 11
        echo "    ";
        if (($context["error"] ?? null)) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messagekey", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            echo "
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 15)) {
            echo " ";
            // line 16
            echo "    <script>
        window.location.replace(\"/tasks\");
    </script>
";
        }
        // line 20
        echo "
    <div class=\"card\">
        <form action=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
            <div>
            <label for=\"username\">Email:</label>
            <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? null), "html", null, true);
        echo "\"/>
            </div>
            ";
        // line 28
        echo "
            <div>
            <label for=\"password\">Password:</label>
            <input type=\"password\" id=\"password\" name=\"_password\"/>
            </div>

            <div>
            <input style=\"margin-top:20px;\" type=\"submit\" value=\"Login\"/>
            </div>
        </form>
        <p>¿Todavía no estás registrado? <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">¡Regístrate!</a></p>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  100 => 28,  95 => 25,  89 => 22,  85 => 20,  79 => 16,  76 => 15,  73 => 14,  67 => 12,  64 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/login.html.twig", "C:\\xampp\\htdocs\\masterPHP\\Test-Ingeteam\\02-Symfony\\templates\\user\\login.html.twig");
    }
}
