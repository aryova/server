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

/* @PrestaShop/Admin/Sell/Address/Blocks/form.html.twig */
class __TwigTemplate_10e230d281cff969420c19712e3abb68f6624ba57441a1afa3662538c3d5789f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'customer_information' => [$this, 'block_customer_information'],
            'address_form_widget' => [$this, 'block_address_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["addressForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? null), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Addresses", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
  </div>

  <div class=\"card-block row\">
    <div class=\"card-text\">
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? null), 'errors');
        echo "

      ";
        // line 39
        $this->displayBlock('customer_information', $context, $blocks);
        // line 57
        echo "      ";
        $this->displayBlock('address_form_widget', $context, $blocks);
        // line 60
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
        ";
        // line 67
        echo "        ";
        if ((array_key_exists("displayInIframe", $context) && (($context["displayInIframe"] ?? null) == true))) {
            // line 68
            echo "          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        ";
        } else {
            // line 70
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cancelPath", $context)) ? (_twig_default_filter(($context["cancelPath"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_addresses_index"))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
        ";
        }
        // line 72
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>
</div>
";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["addressForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 39
    public function block_customer_information($context, array $blocks = [])
    {
        // line 40
        echo "        ";
        if ( !(null === ($context["customerInformation"] ?? null))) {
            // line 41
            echo "          ";
            if ($this->getAttribute(($context["addressForm"] ?? null), "id_customer", [], "any", true, true)) {
                // line 42
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "form_widget_with_error", [0 => $this->getAttribute(($context["addressForm"] ?? null), "id_customer", [])], "method"), "html", null, true);
                echo "
          ";
            }
            // line 44
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customer", [], "Admin.Global"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_customers_view", ["customerId" => ($context["customerId"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                ";
            // line 51
            echo twig_escape_filter($this->env, ($context["customerInformation"] ?? null), "html", null, true);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 56
        echo "      ";
    }

    // line 57
    public function block_address_form_widget($context, array $blocks = [])
    {
        // line 58
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["addressForm"] ?? null), 'widget');
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 58,  148 => 57,  144 => 56,  136 => 51,  131 => 49,  125 => 46,  121 => 44,  115 => 42,  112 => 41,  109 => 40,  106 => 39,  100 => 80,  93 => 76,  85 => 72,  79 => 70,  75 => 68,  72 => 67,  65 => 60,  62 => 57,  60 => 39,  55 => 37,  47 => 32,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig", "/home/forge/aryova.com/src/PrestaShopBundle/Resources/views/Admin/Sell/Address/Blocks/form.html.twig");
    }
}
