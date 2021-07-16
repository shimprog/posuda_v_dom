<?php

/* plaza/module/ptcontrolpanel.twig */
class __TwigTemplate_26207e85d8f79957473b4cbb742e1c0a48c9f880df6008d97f100e1113ac971d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-ptcontrolpanel\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb theme-option-breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 22
        if ((isset($context["error_load_file"]) ? $context["error_load_file"] : null)) {
            // line 23
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_load_file"]) ? $context["error_load_file"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 27
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 28
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 32
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 37
        echo (isset($context["text_dashboard_menu"]) ? $context["text_dashboard_menu"] : null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">";
        // line 40
        $context["i"] = 0;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plaza_menus"]) ? $context["plaza_menus"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 42
            if ($this->getAttribute($context["menu"], "child", array())) {
                // line 43
                echo "                                    <li";
                if ($this->getAttribute($context["menu"], "active", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 44
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" data-toggle=\"collapse\" class=\"parent";
                if ( !$this->getAttribute($context["menu"], "active", array())) {
                    echo " collapsed";
                }
                echo "\">";
                echo $this->getAttribute($context["menu"], "title", array());
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 45
                echo (isset($context["i"]) ? $context["i"] : null);
                echo "\" class=\"collapse";
                if ($this->getAttribute($context["menu"], "active", array())) {
                    echo " in";
                }
                echo "\">";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["menu"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 47
                    echo "                                                <li";
                    if ($this->getAttribute($context["item"], "active", array())) {
                        echo " class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</a></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                                        </ul>
                                    </li>";
            } else {
                // line 52
                echo "                                    <li";
                if ($this->getAttribute($context["menu"], "active", array())) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"";
                echo $this->getAttribute($context["menu"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["menu"], "title", array());
                echo "</a></li>";
            }
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-magic\"></i>";
        // line 64
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
                            <div class=\"panel-select\">
                                <select id=\"input-store\" class=\"form-control\">";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 68
            echo "                                        <option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            if (($this->getAttribute($context["store"], "store_id", array()) == 0)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </select>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-3 col-left\">
                                <ul class=\"nav nav-tabs menu-sections\">
                                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-tachometer\" aria-hidden=\"true\"></i>";
        // line 76
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
                                    <li><a href=\"#tab-font\" data-toggle=\"tab\"><i class=\"fa fa-font\" aria-hidden=\"true\"></i>";
        // line 77
        echo (isset($context["tab_font"]) ? $context["tab_font"] : null);
        echo "</a></li>
                                    <li><a href=\"#tab-catalog\" data-toggle=\"tab\"><i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>";
        // line 78
        echo (isset($context["tab_catalog"]) ? $context["tab_catalog"] : null);
        echo "</a></li>
                                    <li><a href=\"#tab-product\" data-toggle=\"tab\"><i class=\"fa fa-cube\" aria-hidden=\"true\"></i>";
        // line 79
        echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
        echo "</a></li>
                                    <li><a href=\"#tab-category\" data-toggle=\"tab\"><i class=\"fa fa-tags\" aria-hidden=\"true\"></i>";
        // line 80
        echo (isset($context["tab_category"]) ? $context["tab_category"] : null);
        echo "</a></li>
                                    <li><a href=\"#tab-advance\" data-toggle=\"tab\"><i class=\"fa fa-fire\" aria-hidden=\"true\"></i>";
        // line 81
        echo (isset($context["tab_advance"]) ? $context["tab_advance"] : null);
        echo "</a></li>
                                </ul>
                            </div>
                            <div class=\"col-md-9 col-right\">
                                <div class=\"panel-body\">
                                    <form action=\"";
        // line 86
        echo (isset($context["action_import"]) ? $context["action_import"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-data\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"file\" />
                                    </form>
                                    <form action=\"";
        // line 89
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ptcontrolpanel\" class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_status\" value=\"1\" />
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane active\" id=\"tab-general\">";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 94
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 96
            echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_header_layout[";
            // line 98
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                                                                    <option value=\"1\"";
            // line 99
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_header_layout"]) ? $context["module_ptcontrolpanel_header_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "1")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
            echo " 1</option>
                                                                    <option value=\"2\"";
            // line 100
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_header_layout"]) ? $context["module_ptcontrolpanel_header_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
            echo " 2</option>
                                                                    <option value=\"3\"";
            // line 101
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_header_layout"]) ? $context["module_ptcontrolpanel_header_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "3")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
            echo " 3</option>
                                                                    <option value=\"4\"";
            // line 102
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_header_layout"]) ? $context["module_ptcontrolpanel_header_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "4")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["entry_header"]) ? $context["entry_header"] : null);
            echo " 4</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 108
            echo (isset($context["entry_responsive"]) ? $context["entry_responsive"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_responsive_type[";
            // line 110
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                                                                    <option value=\"responsive\"";
            // line 111
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_responsive_type"]) ? $context["module_ptcontrolpanel_responsive_type"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "responsive")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_responsive_layout"]) ? $context["text_responsive_layout"] : null);
            echo "</option>
                                                                    <option value=\"specified\"";
            // line 112
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_responsive_type"]) ? $context["module_ptcontrolpanel_responsive_type"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "specified")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_specified_layout"]) ? $context["text_specified_layout"] : null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 118
            echo (isset($context["entry_sticky_header"]) ? $context["entry_sticky_header"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 120
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sticky_header[";
            // line 121
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 122
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\"";
            // line 123
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_sticky_header"]) ? $context["module_ptcontrolpanel_sticky_header"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 128
            echo (isset($context["entry_scroll_top"]) ? $context["entry_scroll_top"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 130
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_scroll_top[";
            // line 131
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 132
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\"";
            // line 133
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_scroll_top"]) ? $context["module_ptcontrolpanel_scroll_top"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 138
            echo (isset($context["entry_lazy_load"]) ? $context["entry_lazy_load"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 140
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_lazy_load[";
            // line 141
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 142
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\"";
            // line 143
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_lazy_load"]) ? $context["module_ptcontrolpanel_lazy_load"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 148
            echo (isset($context["entry_loader_image"]) ? $context["entry_loader_image"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <a href=\"\" id=\"thumb-image";
            // line 150
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute((isset($context["thumb"]) ? $context["thumb"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" alt=\"\" title=\"\"  /></a>
                                                                <input type=\"hidden\" id=\"input-image";
            // line 151
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_loader_img[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_loader_img"]) ? $context["module_ptcontrolpanel_loader_img"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-font\">";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 160
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-body-";
            // line 162
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_body"]) ? $context["tab_body"] : null);
            echo "</a></li>
                                                            <li><a href=\"#tab-header-";
            // line 163
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_heading"]) ? $context["tab_heading"] : null);
            echo "</a></li>
                                                            <li><a href=\"#tab-link-";
            // line 164
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_link"]) ? $context["tab_link"] : null);
            echo "</a></li>
                                                            <li><a href=\"#tab-button-";
            // line 165
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_button"]) ? $context["tab_button"] : null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-body-";
            // line 169
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-body-demo-";
            // line 173
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 180
            echo (isset($context["entry_global_font"]) ? $context["entry_global_font"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_body_font_family_id[";
            // line 182
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" onchange=\"chooseBodyFont(this.value,";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ")\">
                                                                            <option value=\"10000\"";
            // line 183
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_family_id"]) ? $context["module_ptcontrolpanel_body_font_family_id"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == 10000)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_choose_font"]) ? $context["text_choose_font"] : null);
            echo "</option>";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fonts"]) ? $context["fonts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 185
                echo "                                                                                <option value=\"";
                echo $this->getAttribute($context["font"], "id", array());
                echo "\"";
                if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_family_id"]) ? $context["module_ptcontrolpanel_body_font_family_id"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["font"], "id", array()))) {
                    echo " selected=\"selected\"";
                }
                // line 186
                echo "                                                                                        id=\"body-font-";
                echo $this->getAttribute($context["font"], "id", array());
                echo "\" data-family=\"";
                echo $this->getAttribute($context["font"], "family", array());
                echo "\" data-family-val=\"";
                echo $this->getAttribute($context["font"], "family_val", array());
                echo "\"
                                                                                        data-variants=\"";
                // line 187
                echo $this->getAttribute($context["font"], "variants", array());
                echo "\" data-subsets=\"";
                echo $this->getAttribute($context["font"], "subsets", array());
                echo "\" data-category=\"";
                echo $this->getAttribute($context["font"], "category", array());
                echo "\">";
                // line 188
                echo $this->getAttribute($context["font"], "family", array());
                echo "
                                                                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"body-font-disable\" name=\"module_ptcontrolpanel_body_font_disable[";
            // line 194
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"";
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_disable"]) ? $context["module_ptcontrolpanel_body_font_disable"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " checked=\"checked\"";
            }
            echo " />";
            echo (isset($context["entry_font_disable"]) ? $context["entry_font_disable"] : null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"body-font-family-name-";
            // line 197
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_body_font_family_name[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_body_font_family_name"]) ? $context["module_ptcontrolpanel_body_font_family_name"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-cate-";
            // line 198
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_body_font_family_cate[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_body_font_family_cate"]) ? $context["module_ptcontrolpanel_body_font_family_cate"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    <input type=\"hidden\" id=\"body-font-family-link-";
            // line 199
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_body_font_family_link[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_body_font_family_link"]) ? $context["module_ptcontrolpanel_body_font_family_link"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 203
            echo (isset($context["entry_font_size"]) ? $context["entry_font_size"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input class=\"form-control\" type=\"text\" name=\"module_ptcontrolpanel_body_font_size[";
            // line 205
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_body_font_size"]) ? $context["module_ptcontrolpanel_body_font_size"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 210
            echo (isset($context["entry_font_weight"]) ? $context["entry_font_weight"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"body-font-weight-";
            // line 212
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_body_font_weight[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" onclick=\"chooseBodyWeight(this.value,";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ")\">
                                                                            <option value=\"300\"";
            // line 213
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_weight"]) ? $context["module_ptcontrolpanel_body_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\"";
            // line 214
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_weight"]) ? $context["module_ptcontrolpanel_body_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\"";
            // line 215
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_weight"]) ? $context["module_ptcontrolpanel_body_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\"";
            // line 216
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_weight"]) ? $context["module_ptcontrolpanel_body_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\"";
            // line 217
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_body_font_weight"]) ? $context["module_ptcontrolpanel_body_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 223
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_body_color[";
            // line 225
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_body_color"]) ? $context["module_ptcontrolpanel_body_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-header-";
            // line 230
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <div class=\"col-sm-3\"></div>
                                                                    <div class=\"col-sm-6\">
                                                                        <p class=\"font-heading-demo-";
            // line 234
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " font-demo\">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />
                                                                            a b c d e f g h i j k l m n o p q r s t u v w x y z <br />
                                                                            0 1 2 3 4 5 6 7 8 9</p>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group font-control\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 241
            echo (isset($context["entry_heading_font"]) ? $context["entry_heading_font"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" name=\"module_ptcontrolpanel_heading_font_family_id[";
            // line 243
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" onchange=\"chooseHeadingFont(this.value,";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ")\">
                                                                            <option value=\"10000\"";
            // line 244
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_family_id"]) ? $context["module_ptcontrolpanel_heading_font_family_id"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == 10000)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_choose_font"]) ? $context["text_choose_font"] : null);
            echo "</option>";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fonts"]) ? $context["fonts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
                // line 246
                echo "                                                                                <option value=\"";
                echo $this->getAttribute($context["font"], "id", array());
                echo "\"";
                if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_family_id"]) ? $context["module_ptcontrolpanel_heading_font_family_id"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["font"], "id", array()))) {
                    echo " selected=\"selected\"";
                }
                // line 247
                echo "                                                                                        id=\"heading-font-";
                echo $this->getAttribute($context["font"], "id", array());
                echo "\" data-family=\"";
                echo $this->getAttribute($context["font"], "family", array());
                echo "\" data-family-val=\"";
                echo $this->getAttribute($context["font"], "family_val", array());
                echo "\"
                                                                                        data-variants=\"";
                // line 248
                echo $this->getAttribute($context["font"], "variants", array());
                echo "\" data-subsets=\"";
                echo $this->getAttribute($context["font"], "subsets", array());
                echo "\" data-category=\"";
                echo $this->getAttribute($context["font"], "category", array());
                echo "\">";
                // line 249
                echo $this->getAttribute($context["font"], "family", array());
                echo "
                                                                                </option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "                                                                        </select>
                                                                    </div>

                                                                    <div class=\"col-sm-3\">
                                                                        <input type=\"checkbox\" id=\"heading-font-disable\" name=\"module_ptcontrolpanel_heading_font_disable[";
            // line 256
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\"";
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_disable"]) ? $context["module_ptcontrolpanel_heading_font_disable"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " checked=\"checked\"";
            }
            echo " />";
            echo (isset($context["entry_font_disable"]) ? $context["entry_font_disable"] : null);
            echo "
                                                                    </div>

                                                                    <input type=\"hidden\" id=\"heading-font-family-name-";
            // line 259
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_name[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_family_name"]) ? $context["module_ptcontrolpanel_heading_font_family_name"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-cate-";
            // line 260
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_cate[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_family_cate"]) ? $context["module_ptcontrolpanel_heading_font_family_cate"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    <input type=\"hidden\" id=\"heading-font-family-link-";
            // line 261
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_heading_font_family_link[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_family_link"]) ? $context["module_ptcontrolpanel_heading_font_family_link"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 265
            echo (isset($context["entry_font_weight"]) ? $context["entry_font_weight"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <select class=\"form-control\" id=\"heading-font-weight-";
            // line 267
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" name=\"module_ptcontrolpanel_heading_font_weight[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" onchange=\"chooseHeadingWeight(this.value,";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ")\">
                                                                            <option value=\"300\"";
            // line 268
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_weight"]) ? $context["module_ptcontrolpanel_heading_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "300")) {
                echo "selected=\"selected\"";
            }
            echo ">300</option>
                                                                            <option value=\"400\"";
            // line 269
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_weight"]) ? $context["module_ptcontrolpanel_heading_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "400")) {
                echo "selected=\"selected\"";
            }
            echo ">400</option>
                                                                            <option value=\"500\"";
            // line 270
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_weight"]) ? $context["module_ptcontrolpanel_heading_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "500")) {
                echo "selected=\"selected\"";
            }
            echo ">500</option>
                                                                            <option value=\"600\"";
            // line 271
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_weight"]) ? $context["module_ptcontrolpanel_heading_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "600")) {
                echo "selected=\"selected\"";
            }
            echo ">600</option>
                                                                            <option value=\"700\"";
            // line 272
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_heading_font_weight"]) ? $context["module_ptcontrolpanel_heading_font_weight"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "700")) {
                echo "selected=\"selected\"";
            }
            echo ">700</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-3 control-label\">";
            // line 278
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_heading_color[";
            // line 280
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_heading_color"]) ? $context["module_ptcontrolpanel_heading_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-link-";
            // line 285
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 287
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_color[";
            // line 289
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_link_color"]) ? $context["module_ptcontrolpanel_link_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 294
            echo (isset($context["entry_hover_color"]) ? $context["entry_hover_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_link_hover_color[";
            // line 296
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_link_hover_color"]) ? $context["module_ptcontrolpanel_link_hover_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-button-";
            // line 301
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 303
            echo (isset($context["entry_color"]) ? $context["entry_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_color[";
            // line 305
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_button_color"]) ? $context["module_ptcontrolpanel_button_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 310
            echo (isset($context["entry_hover_color"]) ? $context["entry_hover_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_hover_color[";
            // line 312
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_button_hover_color"]) ? $context["module_ptcontrolpanel_button_hover_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 317
            echo (isset($context["entry_bg_color"]) ? $context["entry_bg_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_color[";
            // line 319
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_button_bg_color"]) ? $context["module_ptcontrolpanel_button_bg_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\">";
            // line 324
            echo (isset($context["entry_bg_hover_color"]) ? $context["entry_bg_hover_color"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-3\">
                                                                        <input class=\"form-control jscolor\" type=\"text\" name=\"module_ptcontrolpanel_button_bg_hover_color[";
            // line 326
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_button_bg_hover_color"]) ? $context["module_ptcontrolpanel_button_bg_hover_color"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 333
        echo "                                                <input type=\"hidden\" value=\"";
        echo (isset($context["entry_font_weight"]) ? $context["entry_font_weight"] : null);
        echo "\" id=\"text-font-weight\" />
                                                <input type=\"hidden\" value=\"";
        // line 334
        echo (isset($context["entry_font_subset"]) ? $context["entry_font_subset"] : null);
        echo "\" id=\"text-font-subset\" />
                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-product\">";
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 339
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-related-";
            // line 341
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_related_pro"]) ? $context["entry_related_pro"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_related[";
            // line 343
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_related[";
            // line 344
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-related-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 345
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 346
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_related"]) ? $context["module_ptcontrolpanel_related"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-social-";
            // line 351
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_social_icons"]) ? $context["entry_social_icons"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_social[";
            // line 353
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_social[";
            // line 354
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-social-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 355
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 356
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_social"]) ? $context["module_ptcontrolpanel_social"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tax-";
            // line 361
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_tax"]) ? $context["entry_tax"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tax[";
            // line 363
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tax[";
            // line 364
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-tax-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 365
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 366
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_tax"]) ? $context["module_ptcontrolpanel_tax"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-tags-";
            // line 371
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_tags"]) ? $context["entry_tags"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_tags[";
            // line 373
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_tags[";
            // line 374
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-tags-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 375
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 376
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_tags"]) ? $context["module_ptcontrolpanel_tags"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-";
            // line 381
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_zoom"]) ? $context["entry_use_zoom"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 383
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch zoom-status\" name=\"module_ptcontrolpanel_use_zoom[";
            // line 384
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 385
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 386
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_use_zoom"]) ? $context["module_ptcontrolpanel_use_zoom"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-type-";
            // line 391
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_type"]) ? $context["entry_zoom_type"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_zoom_type[";
            // line 393
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-type-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                                    <option value=\"outer\"";
            // line 394
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_zoom_type"]) ? $context["module_ptcontrolpanel_zoom_type"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "outer")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_outside"]) ? $context["text_outside"] : null);
            echo "</option>
                                                                    <option value=\"inner\"";
            // line 395
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_zoom_type"]) ? $context["module_ptcontrolpanel_zoom_type"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "inner")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_inside"]) ? $context["text_inside"] : null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-space-";
            // line 401
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_space"]) ? $context["entry_zoom_space"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"text\" id=\"input-zoom-space-";
            // line 403
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\" name=\"module_ptcontrolpanel_zoom_space[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_zoom_space"]) ? $context["module_ptcontrolpanel_zoom_space"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" placeholder=\"";
            echo (isset($context["text_zoom_space"]) ? $context["text_zoom_space"] : null);
            echo "\" />
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-zoom-title-";
            // line 407
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_zoom_title"]) ? $context["entry_zoom_title"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 409
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_zoom_title[";
            // line 410
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-zoom-title-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 411
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 412
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_zoom_title"]) ? $context["module_ptcontrolpanel_zoom_title"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-swatches-";
            // line 417
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_use_swatches"]) ? $context["entry_use_swatches"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 419
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_swatches[";
            // line 420
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-swatches-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 421
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 422
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_use_swatches"]) ? $context["module_ptcontrolpanel_use_swatches"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-dimension-";
            // line 427
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_icon_swatches"]) ? $context["entry_icon_swatches"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 429
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_swatches_width"]) ? $context["module_ptcontrolpanel_swatches_width"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_ptcontrolpanel_swatches_width[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 432
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_swatches_height"]) ? $context["module_ptcontrolpanel_swatches_height"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_ptcontrolpanel_swatches_height[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-color-option-";
            // line 437
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_color_option"]) ? $context["entry_color_option"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_swatches_option[";
            // line 439
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-color-option-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">";
            // line 440
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 441
                if ((($this->getAttribute($context["option"], "type", array()) == "select") || ($this->getAttribute($context["option"], "type", array()) == "radio"))) {
                    // line 442
                    echo "                                                                            <option value=\"";
                    echo $this->getAttribute($context["option"], "option_id", array());
                    echo "\"";
                    if (($this->getAttribute((isset($context["module_ptcontrolpanel_swatches_option"]) ? $context["module_ptcontrolpanel_swatches_option"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["option"], "option_id", array()))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</option>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 445
            echo "                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 450
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-category\">";
        // line 453
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 454
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-image-";
            // line 456
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_category_image"]) ? $context["entry_category_image"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_image[";
            // line 458
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_image[";
            // line 459
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-image-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 460
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 461
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_image"]) ? $context["module_ptcontrolpanel_category_image"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-des-";
            // line 466
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_category_des"]) ? $context["entry_category_des"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_category_description[";
            // line 468
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_description[";
            // line 469
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-des-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 470
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 471
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_description"]) ? $context["module_ptcontrolpanel_category_description"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-category-sub-";
            // line 476
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_sub_category"]) ? $context["entry_sub_category"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_sub_category[";
            // line 478
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_sub_category[";
            // line 479
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-sub-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 480
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 481
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_sub_category"]) ? $context["module_ptcontrolpanel_sub_category"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-filter-";
            // line 486
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_use_filter[";
            // line 488
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_use_filter[";
            // line 489
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-filter-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 490
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 491
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_use_filter"]) ? $context["module_ptcontrolpanel_use_filter"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                            <label class=\"col-sm-2 control-label\">";
            // line 493
            echo (isset($context["entry_position"]) ? $context["entry_position"] : null);
            echo "</label>
                                                            <div class=\"col-sm-2\">
                                                                <select name=\"module_ptcontrolpanel_filter_position[";
            // line 495
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                                                                    <option value=\"left\"";
            // line 496
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_filter_position"]) ? $context["module_ptcontrolpanel_filter_position"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "left")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_left"]) ? $context["text_left"] : null);
            echo "</option>
                                                                    <option value=\"right\"";
            // line 497
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_filter_position"]) ? $context["module_ptcontrolpanel_filter_position"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "right")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_right"]) ? $context["text_right"] : null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-cquickview-";
            // line 503
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_quickview"]) ? $context["entry_quickview"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 505
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_cate_quickview[";
            // line 506
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-cquickview-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 507
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 508
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_cate_quickview"]) ? $context["module_ptcontrolpanel_cate_quickview"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-image-effect-";
            // line 513
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_img_effect"]) ? $context["entry_img_effect"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <select name=\"module_ptcontrolpanel_img_effect[";
            // line 515
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-image-effect-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                                    <option value=\"none\"";
            // line 516
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_img_effect"]) ? $context["module_ptcontrolpanel_img_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "none")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_none"]) ? $context["text_none"] : null);
            echo "</option>
                                                                    <option value=\"hover\"";
            // line 517
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_img_effect"]) ? $context["module_ptcontrolpanel_img_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "hover")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_hover_img"]) ? $context["text_hover_img"] : null);
            echo "</option>
                                                                    <option value=\"swatches\"";
            // line 518
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_img_effect"]) ? $context["module_ptcontrolpanel_img_effect"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "swatches")) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_swatches_img"]) ? $context["text_swatches_img"] : null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\">";
            // line 523
            echo (isset($context["entry_icon_swatches"]) ? $context["entry_icon_swatches"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 525
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_cate_swatches_width"]) ? $context["module_ptcontrolpanel_cate_swatches_width"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_width[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                            <div class=\"col-sm-3\">
                                                                <input type=\"text\" value=\"";
            // line 528
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_cate_swatches_height"]) ? $context["module_ptcontrolpanel_cate_swatches_height"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "\" name=\"module_ptcontrolpanel_cate_swatches_height[";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
            echo "\" class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-view-";
            // line 533
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_advance_view"]) ? $context["entry_advance_view"] : null);
            echo "</label>
                                                            <div class=\"col-sm-6\">
                                                                <input type=\"hidden\" name=\"module_ptcontrolpanel_advance_view[";
            // line 535
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_advance_view[";
            // line 536
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-view-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                       data-toggle=\"toggle\" data-on=\"";
            // line 537
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 538
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_advance_view"]) ? $context["module_ptcontrolpanel_advance_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-default-view-";
            // line 542
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_default_view"]) ? $context["entry_default_view"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_default_view[";
            // line 544
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-default-view-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                                    <option value=\"list\"";
            // line 545
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_default_view"]) ? $context["module_ptcontrolpanel_default_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "list")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_list"]) ? $context["text_list"] : null);
            echo "</option>
                                                                    <option value=\"grid\"";
            // line 546
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_default_view"]) ? $context["module_ptcontrolpanel_default_view"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "grid")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo (isset($context["text_grid"]) ? $context["text_grid"] : null);
            echo "</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-row-";
            // line 551
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_product_row"]) ? $context["entry_product_row"] : null);
            echo "</label>
                                                            <div class=\"col-sm-3\">
                                                                <select name=\"module_ptcontrolpanel_product_row[";
            // line 553
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-row-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"form-control\">
                                                                    <option value=\"2\"";
            // line 554
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_product_row"]) ? $context["module_ptcontrolpanel_product_row"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "2")) {
                echo " selected=\"selected\"";
            }
            echo ">2</option>
                                                                    <option value=\"3\"";
            // line 555
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_product_row"]) ? $context["module_ptcontrolpanel_product_row"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "3")) {
                echo " selected=\"selected\"";
            }
            echo ">3</option>
                                                                    <option value=\"4\"";
            // line 556
            if (($this->getAttribute((isset($context["module_ptcontrolpanel_product_row"]) ? $context["module_ptcontrolpanel_product_row"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == "4")) {
                echo " selected=\"selected\"";
            }
            echo ">4</option>

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 563
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-catalog\">";
        // line 566
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 567
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                                                            <li class=\"active\"><a href=\"#tab-cheader-";
            // line 569
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_header"]) ? $context["tab_header"] : null);
            echo "</a></li>
                                                            <li><a href=\"#tab-product-";
            // line 570
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
            echo "</a></li>
                                                            <li><a href=\"#tab-category-";
            // line 571
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo (isset($context["tab_product_listing"]) ? $context["tab_product_listing"] : null);
            echo "</a></li>
                                                        </ul>

                                                        <div class=\"tab-content child-content\">
                                                            <div class=\"tab-pane active\" id=\"tab-cheader-";
            // line 575
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-cart-";
            // line 577
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_cart"]) ? $context["entry_cart"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_cart[";
            // line 579
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_cart[";
            // line 580
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-header-cart-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 581
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 582
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_header_cart"]) ? $context["module_ptcontrolpanel_header_cart"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-header-currency-";
            // line 587
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_header_currency[";
            // line 589
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_header_currency[";
            // line 590
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-header-currency-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 591
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 592
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_header_currency"]) ? $context["module_ptcontrolpanel_header_currency"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=\"tab-pane\" id=\"tab-product-";
            // line 597
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-price-";
            // line 599
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_price"]) ? $context["entry_show_price"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_price[";
            // line 601
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_price[";
            // line 602
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-price-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 603
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 604
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_product_price"]) ? $context["module_ptcontrolpanel_product_price"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-cart-";
            // line 609
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_cart"]) ? $context["entry_show_cart"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_cart[";
            // line 611
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_cart[";
            // line 612
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-cart-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 613
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 614
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_product_cart"]) ? $context["module_ptcontrolpanel_product_cart"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-wishlist-";
            // line 619
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_wishlist"]) ? $context["entry_show_wishlist"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 621
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_wishlist[";
            // line 622
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-wishlist-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 623
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 624
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_product_wishlist"]) ? $context["module_ptcontrolpanel_product_wishlist"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-compare-";
            // line 629
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_compare"]) ? $context["entry_show_compare"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_compare[";
            // line 631
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_compare[";
            // line 632
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-compare-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 633
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 634
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_product_compare"]) ? $context["module_ptcontrolpanel_product_compare"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-product-options-";
            // line 639
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_options"]) ? $context["entry_show_options"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_product_options[";
            // line 641
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_product_options[";
            // line 642
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-product-options-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 643
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 644
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_product_options"]) ? $context["module_ptcontrolpanel_product_options"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=\"tab-pane\" id=\"tab-category-";
            // line 648
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-price-";
            // line 650
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_price"]) ? $context["entry_show_price"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_price[";
            // line 652
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_price[";
            // line 653
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-price-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 654
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 655
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_price"]) ? $context["module_ptcontrolpanel_category_price"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-cart-";
            // line 660
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_cart"]) ? $context["entry_show_cart"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_cart[";
            // line 662
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_cart[";
            // line 663
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-cart-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 664
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 665
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_cart"]) ? $context["module_ptcontrolpanel_category_cart"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-wishlist-";
            // line 670
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_wishlist"]) ? $context["entry_show_wishlist"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 672
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_wishlist[";
            // line 673
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-wishlist-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 674
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 675
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_wishlist"]) ? $context["module_ptcontrolpanel_category_wishlist"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-compare-";
            // line 680
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_show_compare"]) ? $context["entry_show_compare"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_compare[";
            // line 682
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_compare[";
            // line 683
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-compare-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 684
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 685
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_compare"]) ? $context["module_ptcontrolpanel_category_compare"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-prodes-";
            // line 690
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_product_des"]) ? $context["entry_product_des"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 692
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_prodes[";
            // line 693
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-prodes-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 694
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 695
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_prodes"]) ? $context["module_ptcontrolpanel_category_prodes"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>

                                                                <div class=\"form-group\">
                                                                    <label class=\"col-sm-4 control-label\" for=\"input-category-label-";
            // line 700
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</label>
                                                                    <div class=\"col-sm-6\">
                                                                        <input type=\"hidden\" name=\"module_ptcontrolpanel_category_label[";
            // line 702
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" value=\"0\" />
                                                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"module_ptcontrolpanel_category_label[";
            // line 703
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" id=\"input-category-label-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"
                                                                               data-toggle=\"toggle\" data-on=\"";
            // line 704
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "\" data-off=\"";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "\" data-width=\"100\" data-height=\"36\" data-store-id=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"";
            // line 705
            if ($this->getAttribute((isset($context["module_ptcontrolpanel_category_label"]) ? $context["module_ptcontrolpanel_category_label"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")) {
                echo " value=\"1\" checked";
            } else {
                echo " value=\"0\"";
            }
            echo ">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 712
        echo "                                            </div>

                                            <div class=\"tab-pane\" id=\"tab-advance\">";
        // line 715
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 716
            echo "                                                    <div class=\"frm-field frm-field-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">
                                                        <div class=\"form-group\" >
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 718
            echo (isset($context["entry_theme_database"]) ? $context["entry_theme_database"] : null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <div class=\"row\">
                                                                    <div class=\"col-sm-6\">
                                                                        <select id=\"input-theme\" class=\"form-control\" name=\"file\">";
            // line 723
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["database"]) ? $context["database"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 724
                echo "                                                                                <option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["value"];
                echo "</option>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 726
            echo "                                                                        </select>
                                                                    </div>
                                                                    <div class=\"col-sm-6\">
                                                                        <button type=\"button\" id=\"button-import\" class=\"btn btn-primary btn-theme-option\"><i class=\"fa fa-upload\"></i>";
            // line 729
            echo (isset($context["button_import"]) ? $context["button_import"] : null);
            echo "</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 736
            echo (isset($context["entry_custom_css"]) ? $context["entry_custom_css"] : null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_css[";
            // line 738
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\">";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_custom_css"]) ? $context["module_ptcontrolpanel_custom_css"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "</textarea>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-3 control-label\" for=\"input-theme\">";
            // line 743
            echo (isset($context["entry_custom_js"]) ? $context["entry_custom_js"] : null);
            echo "</label>
                                                            <div class=\"col-sm-9\">
                                                                <textarea class=\"form-control code-area\" rows=\"15\" name=\"module_ptcontrolpanel_custom_js[";
            // line 745
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\">";
            echo $this->getAttribute((isset($context["module_ptcontrolpanel_custom_js"]) ? $context["module_ptcontrolpanel_custom_js"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array");
            echo "</textarea>
                                                            </div>
                                                        </div>
                                                    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 750
        echo "                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"body-stylesheet-link\"></div>
<div class=\"heading-stylesheet-link\"></div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.frm-field').hide();
        \$('.frm-field-0').show();

        \$('#input-store').change(function () {
            \$('.frm-field').hide();
            var store = \$(this).val();
            \$('.frm-field-' + store).show();
        })


        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });";
        // line 785
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 786
            echo "            /* Body */
            var body_font_css_link_";
            // line 787
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = \$('#body-font-family-link-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var body_font_stylesheet_link_";
            // line 788
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = '<link href=\"' + body_font_css_link_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " + '\" rel=\"stylesheet\">';
            var body_family_";
            // line 789
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " =  \$('#body-font-family-name-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var body_category_";
            // line 790
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " =  \$('#body-font-family-cate-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var body_font_weight";
            // line 791
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = \$('#body-font-weight-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();

            \$('.body-stylesheet-link').append(body_font_stylesheet_link_";
            // line 793
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");
            \$('.font-body-demo-";
            // line 794
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').css(\"font-family\", \"'\" + body_family_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " + \"', \" + body_category_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");
            \$('.font-body-demo-";
            // line 795
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').css(\"font-weight\", body_font_weight";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");

            /* Heading */
            var heading_font_css_link_";
            // line 798
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = \$('#heading-font-family-link-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var heading_font_stylesheet_link_";
            // line 799
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = '<link href=\"' + heading_font_css_link_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " + '\" rel=\"stylesheet\">';
            var heading_family_";
            // line 800
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " =  \$('#heading-font-family-name-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var heading_category_";
            // line 801
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " =  \$('#heading-font-family-cate-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();
            var heading_font_weight";
            // line 802
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " = \$('#heading-font-weight-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').val();

            \$('.heading-stylesheet-link').append(heading_font_stylesheet_link_";
            // line 804
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");
            \$('.font-heading-demo-";
            // line 805
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').css(\"font-family\", \"'\" + heading_family_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo " + \"', \" + heading_category_";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");
            \$('.font-heading-demo-";
            // line 806
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "').css(\"font-weight\", heading_font_weight";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo ");";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 808
        echo "    });

    function chooseBodyFont(id, store_id) {
        var family = \$(\"#body-font-\" + id).data('family');
        var family_val = \$(\"#body-font-\" + id).data('family-val');
        var variants = \$(\"#body-font-\" + id).data('variants');
        var subsets = \$(\"#body-font-\" + id).data('subsets');
        var category = \$(\"#body-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.body-stylesheet-link').append(font_stylesheet_link);

        \$('#body-font-family-name-' + store_id).val(family);
        \$('#body-font-family-cate-' + store_id).val(category);
        \$('#body-font-family-link-' + store_id).val(font_css_link);

        \$('.font-body-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseBodyWeight(value, store_id) {
        \$('.font-body-demo-' + store_id).css(\"font-weight\", value);
    }

    function chooseHeadingFont(id, store_id) {
        var family = \$(\"#heading-font-\" + id).data('family');
        var family_val = \$(\"#heading-font-\" + id).data('family-val');
        var variants = \$(\"#heading-font-\" + id).data('variants');
        var subsets = \$(\"#heading-font-\" + id).data('subsets');
        var category = \$(\"#heading-font-\" + id).data('category');

        var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + \":\" + variants + '&subset=' + subsets;
        var font_stylesheet_link = '<link href=\"' + font_css_link + '\" rel=\"stylesheet\">';

        \$('.heading-stylesheet-link').append(font_stylesheet_link);

        \$('#heading-font-family-name-' + store_id).val(family);
        \$('#heading-font-family-cate-' + store_id).val(category);
        \$('#heading-font-family-link-' + store_id).val(font_css_link);

        \$('.font-heading-demo-' + store_id).css(\"font-family\", \"'\" + family + \"', \" + category);
    }

    function chooseHeadingWeight(value, store_id) {
        \$('.font-heading-demo-' + store_id).css(\"font-weight\", value);
    }
</script>

<script type=\"text/javascript\"><!--
    \$('#button-import').on('click', function() {

        \$('#form-data input[name=\\'file\\']').val(\$('#input-theme').val());

        \$('#form-data').submit();
    });
    //--></script>";
        // line 865
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "plaza/module/ptcontrolpanel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2568 => 865,  2510 => 808,  2501 => 806,  2493 => 805,  2489 => 804,  2482 => 802,  2476 => 801,  2470 => 800,  2464 => 799,  2458 => 798,  2450 => 795,  2442 => 794,  2438 => 793,  2431 => 791,  2425 => 790,  2419 => 789,  2413 => 788,  2407 => 787,  2404 => 786,  2400 => 785,  2365 => 750,  2353 => 745,  2348 => 743,  2338 => 738,  2333 => 736,  2323 => 729,  2318 => 726,  2308 => 724,  2304 => 723,  2297 => 718,  2291 => 716,  2287 => 715,  2283 => 712,  2267 => 705,  2260 => 704,  2254 => 703,  2250 => 702,  2243 => 700,  2231 => 695,  2224 => 694,  2218 => 693,  2214 => 692,  2207 => 690,  2195 => 685,  2188 => 684,  2182 => 683,  2178 => 682,  2171 => 680,  2159 => 675,  2152 => 674,  2146 => 673,  2142 => 672,  2135 => 670,  2123 => 665,  2116 => 664,  2110 => 663,  2106 => 662,  2099 => 660,  2087 => 655,  2080 => 654,  2074 => 653,  2070 => 652,  2063 => 650,  2058 => 648,  2047 => 644,  2040 => 643,  2034 => 642,  2030 => 641,  2023 => 639,  2011 => 634,  2004 => 633,  1998 => 632,  1994 => 631,  1987 => 629,  1975 => 624,  1968 => 623,  1962 => 622,  1958 => 621,  1951 => 619,  1939 => 614,  1932 => 613,  1926 => 612,  1922 => 611,  1915 => 609,  1903 => 604,  1896 => 603,  1890 => 602,  1886 => 601,  1879 => 599,  1874 => 597,  1862 => 592,  1855 => 591,  1849 => 590,  1845 => 589,  1838 => 587,  1826 => 582,  1819 => 581,  1813 => 580,  1809 => 579,  1802 => 577,  1797 => 575,  1788 => 571,  1782 => 570,  1776 => 569,  1770 => 567,  1766 => 566,  1762 => 563,  1748 => 556,  1742 => 555,  1736 => 554,  1730 => 553,  1723 => 551,  1711 => 546,  1703 => 545,  1697 => 544,  1690 => 542,  1679 => 538,  1672 => 537,  1666 => 536,  1662 => 535,  1655 => 533,  1643 => 528,  1633 => 525,  1628 => 523,  1616 => 518,  1608 => 517,  1600 => 516,  1594 => 515,  1587 => 513,  1575 => 508,  1568 => 507,  1562 => 506,  1558 => 505,  1551 => 503,  1538 => 497,  1530 => 496,  1526 => 495,  1521 => 493,  1512 => 491,  1505 => 490,  1499 => 489,  1495 => 488,  1488 => 486,  1476 => 481,  1469 => 480,  1463 => 479,  1459 => 478,  1452 => 476,  1440 => 471,  1433 => 470,  1427 => 469,  1423 => 468,  1416 => 466,  1404 => 461,  1397 => 460,  1391 => 459,  1387 => 458,  1380 => 456,  1374 => 454,  1370 => 453,  1366 => 450,  1357 => 445,  1342 => 442,  1340 => 441,  1336 => 440,  1331 => 439,  1324 => 437,  1312 => 432,  1302 => 429,  1295 => 427,  1283 => 422,  1276 => 421,  1270 => 420,  1266 => 419,  1259 => 417,  1247 => 412,  1240 => 411,  1234 => 410,  1230 => 409,  1223 => 407,  1210 => 403,  1203 => 401,  1190 => 395,  1182 => 394,  1176 => 393,  1169 => 391,  1157 => 386,  1150 => 385,  1144 => 384,  1140 => 383,  1133 => 381,  1121 => 376,  1114 => 375,  1108 => 374,  1104 => 373,  1097 => 371,  1085 => 366,  1078 => 365,  1072 => 364,  1068 => 363,  1061 => 361,  1049 => 356,  1042 => 355,  1036 => 354,  1032 => 353,  1025 => 351,  1013 => 346,  1006 => 345,  1000 => 344,  996 => 343,  989 => 341,  983 => 339,  979 => 338,  973 => 334,  968 => 333,  954 => 326,  949 => 324,  939 => 319,  934 => 317,  924 => 312,  919 => 310,  909 => 305,  904 => 303,  899 => 301,  889 => 296,  884 => 294,  874 => 289,  869 => 287,  864 => 285,  854 => 280,  849 => 278,  838 => 272,  832 => 271,  826 => 270,  820 => 269,  814 => 268,  806 => 267,  801 => 265,  790 => 261,  782 => 260,  774 => 259,  762 => 256,  756 => 252,  748 => 249,  741 => 248,  732 => 247,  725 => 246,  721 => 245,  714 => 244,  708 => 243,  703 => 241,  693 => 234,  686 => 230,  676 => 225,  671 => 223,  660 => 217,  654 => 216,  648 => 215,  642 => 214,  636 => 213,  628 => 212,  623 => 210,  613 => 205,  608 => 203,  597 => 199,  589 => 198,  581 => 197,  569 => 194,  564 => 191,  556 => 188,  549 => 187,  540 => 186,  533 => 185,  529 => 184,  522 => 183,  516 => 182,  511 => 180,  501 => 173,  494 => 169,  485 => 165,  479 => 164,  473 => 163,  467 => 162,  461 => 160,  457 => 159,  453 => 156,  439 => 151,  433 => 150,  428 => 148,  416 => 143,  411 => 142,  407 => 141,  403 => 140,  398 => 138,  386 => 133,  381 => 132,  377 => 131,  373 => 130,  368 => 128,  356 => 123,  351 => 122,  347 => 121,  343 => 120,  338 => 118,  325 => 112,  317 => 111,  313 => 110,  308 => 108,  295 => 102,  287 => 101,  279 => 100,  271 => 99,  267 => 98,  262 => 96,  256 => 94,  252 => 93,  246 => 89,  240 => 86,  232 => 81,  228 => 80,  224 => 79,  220 => 78,  216 => 77,  212 => 76,  204 => 70,  190 => 68,  186 => 67,  181 => 64,  171 => 56,  165 => 54,  154 => 52,  150 => 49,  136 => 47,  132 => 46,  125 => 45,  115 => 44,  108 => 43,  106 => 42,  102 => 41,  100 => 40,  95 => 37,  88 => 32,  81 => 28,  79 => 27,  72 => 23,  70 => 22,  63 => 18,  61 => 17,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-ptcontrolpanel" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb theme-option-breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if error_load_file %}*/
/*             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_load_file }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-12">*/
/*                 <div class="theme-option-container">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title">{{ text_dashboard_menu }}</h3>*/
/*                         </div>*/
/*                         <ul class="nav nav-tabs menu-sections pt-dashboard-menu">*/
/*                             {% set i = 0 %}*/
/*                             {% for menu in plaza_menus %}*/
/*                                 {% if menu.child %}*/
/*                                     <li {% if menu.active %} class="active" {% endif %}>*/
/*                                         <a href="#ptcollapse_{{ i }}" data-toggle="collapse" class="parent {% if not menu.active %} collapsed {% endif %}">{{ menu.title }}</a>*/
/*                                         <ul id="ptcollapse_{{ i }}" class="collapse {% if menu.active %} in {% endif %}">*/
/*                                             {% for item in menu.child %}*/
/*                                                 <li {% if item.active %} class="active" {% endif %}><a href="{{ item.url }}">{{ item.title }}</a></li>*/
/*                                             {% endfor %}*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                 {% else %}*/
/*                                     <li {% if menu.active %} class="active" {% endif %}><a href="{{ menu.url }}">{{ menu.title }}</a></li>*/
/*                                 {% endif %}*/
/*                                 {% set i = i + 1 %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-9 col-sm-12">*/
/*                 <div class="theme-option-container">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h3 class="panel-title"><i class="fa fa-magic"></i> {{ text_edit }}</h3>*/
/*                             <div class="panel-select">*/
/*                                 <select id="input-store" class="form-control">*/
/*                                     {% for store in stores %}*/
/*                                         <option value="{{ store.store_id }}" {% if(store.store_id == 0) %}selected="selected"{% endif %}>{{ store.name }}</option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="row">*/
/*                             <div class="col-md-3 col-left">*/
/*                                 <ul class="nav nav-tabs menu-sections">*/
/*                                     <li class="active"><a href="#tab-general" data-toggle="tab"><i class="fa fa-tachometer" aria-hidden="true"></i>{{ tab_general }}</a></li>*/
/*                                     <li><a href="#tab-font" data-toggle="tab"><i class="fa fa-font" aria-hidden="true"></i>{{ tab_font }}</a></li>*/
/*                                     <li><a href="#tab-catalog" data-toggle="tab"><i class="fa fa-shopping-bag" aria-hidden="true"></i>{{ tab_catalog }}</a></li>*/
/*                                     <li><a href="#tab-product" data-toggle="tab"><i class="fa fa-cube" aria-hidden="true"></i>{{ tab_product }}</a></li>*/
/*                                     <li><a href="#tab-category" data-toggle="tab"><i class="fa fa-tags" aria-hidden="true"></i>{{ tab_category }}</a></li>*/
/*                                     <li><a href="#tab-advance" data-toggle="tab"><i class="fa fa-fire" aria-hidden="true"></i>{{ tab_advance }}</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="col-md-9 col-right">*/
/*                                 <div class="panel-body">*/
/*                                     <form action="{{ action_import }}" method="post" enctype="multipart/form-data" id="form-data" class="form-horizontal">*/
/*                                         <input type="hidden" name="file" />*/
/*                                     </form>*/
/*                                     <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-ptcontrolpanel" class="form-horizontal">*/
/*                                         <input type="hidden" name="module_ptcontrolpanel_status" value="1" />*/
/*                                         <div class="tab-content">*/
/*                                             <div class="tab-pane active" id="tab-general">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_header }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <select name="module_ptcontrolpanel_header_layout[{{ store.store_id }}]" class="form-control">*/
/*                                                                     <option value="1" {% if module_ptcontrolpanel_header_layout[store.store_id] == '1' %} selected="selected" {% endif %}>{{ entry_header }} 1</option>*/
/*                                                                     <option value="2" {% if module_ptcontrolpanel_header_layout[store.store_id] == '2' %} selected="selected" {% endif %}>{{ entry_header }} 2</option>*/
/*                                                                     <option value="3" {% if module_ptcontrolpanel_header_layout[store.store_id] == '3' %} selected="selected" {% endif %}>{{ entry_header }} 3</option>*/
/*                                                                     <option value="4" {% if module_ptcontrolpanel_header_layout[store.store_id] == '4' %} selected="selected" {% endif %}>{{ entry_header }} 4</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_responsive }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <select name="module_ptcontrolpanel_responsive_type[{{ store.store_id }}]" class="form-control">*/
/*                                                                     <option value="responsive" {% if module_ptcontrolpanel_responsive_type[store.store_id] == 'responsive' %} selected="selected" {% endif %}>{{ text_responsive_layout }}</option>*/
/*                                                                     <option value="specified" {% if module_ptcontrolpanel_responsive_type[store.store_id] == 'specified' %} selected="selected" {% endif %}>{{ text_specified_layout }}</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_sticky_header }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_sticky_header[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_sticky_header[{{ store.store_id }}]"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36"*/
/*                                                                         {% if module_ptcontrolpanel_sticky_header[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_scroll_top }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_scroll_top[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_scroll_top[{{ store.store_id }}]"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36"*/
/*                                                                         {% if module_ptcontrolpanel_scroll_top[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_lazy_load }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_lazy_load[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_lazy_load[{{ store.store_id }}]"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36"*/
/*                                                                         {% if module_ptcontrolpanel_lazy_load[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_loader_image }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <a href="" id="thumb-image{{ store.store_id }}" data-toggle="image" class="img-thumbnail"><img src="{{ thumb[store.store_id] }}" alt="" title=""  /></a>*/
/*                                                                 <input type="hidden" id="input-image{{ store.store_id }}" name="module_ptcontrolpanel_loader_img[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_loader_img[store.store_id] }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/* */
/*                                             <div class="tab-pane" id="tab-font">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <ul class="nav nav-tabs hoz-ul-sections">*/
/*                                                             <li class="active"><a href="#tab-body-{{ store.store_id }}" data-toggle="tab">{{ tab_body }}</a></li>*/
/*                                                             <li><a href="#tab-header-{{ store.store_id }}" data-toggle="tab">{{ tab_heading }}</a></li>*/
/*                                                             <li><a href="#tab-link-{{ store.store_id }}" data-toggle="tab">{{ tab_link }}</a></li>*/
/*                                                             <li><a href="#tab-button-{{ store.store_id }}" data-toggle="tab">{{ tab_button }}</a></li>*/
/*                                                         </ul>*/
/* */
/*                                                         <div class="tab-content child-content">*/
/*                                                             <div class="tab-pane active" id="tab-body-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <div class="col-sm-3"></div>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <p class="font-body-demo-{{ store.store_id }} font-demo">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />*/
/*                                                                             a b c d e f g h i j k l m n o p q r s t u v w x y z <br />*/
/*                                                                             0 1 2 3 4 5 6 7 8 9</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group font-control">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_global_font }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <select class="form-control" name="module_ptcontrolpanel_body_font_family_id[{{ store.store_id }}]" onchange="chooseBodyFont(this.value, {{ store.store_id }})">*/
/*                                                                             <option value="10000" {% if module_ptcontrolpanel_body_font_family_id[store.store_id] == 10000 %} selected="selected" {% endif %}>{{ text_choose_font }}</option>*/
/*                                                                             {% for font in fonts %}*/
/*                                                                                 <option value="{{ font.id }}" {% if module_ptcontrolpanel_body_font_family_id[store.store_id] == font.id %} selected="selected" {% endif %}*/
/*                                                                                         id="body-font-{{ font.id }}" data-family="{{ font.family }}" data-family-val="{{ font.family_val }}"*/
/*                                                                                         data-variants="{{ font.variants }}" data-subsets="{{ font.subsets }}" data-category="{{ font.category }}">*/
/*                                                                                     {{ font.family }}*/
/*                                                                                 </option>*/
/*                                                                             {% endfor %}*/
/*                                                                         </select>*/
/*                                                                     </div>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="checkbox" id="body-font-disable" name="module_ptcontrolpanel_body_font_disable[{{ store.store_id }}]" {% if module_ptcontrolpanel_body_font_disable[store.store_id] %} checked="checked" {% endif %} /> {{ entry_font_disable }}*/
/*                                                                     </div>*/
/* */
/*                                                                     <input type="hidden" id="body-font-family-name-{{ store.store_id }}" name="module_ptcontrolpanel_body_font_family_name[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_body_font_family_name[store.store_id] }}" />*/
/*                                                                     <input type="hidden" id="body-font-family-cate-{{ store.store_id }}" name="module_ptcontrolpanel_body_font_family_cate[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_body_font_family_cate[store.store_id] }}" />*/
/*                                                                     <input type="hidden" id="body-font-family-link-{{ store.store_id }}" name="module_ptcontrolpanel_body_font_family_link[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_body_font_family_link[store.store_id] }}" />*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_font_size }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input class="form-control" type="text" name="module_ptcontrolpanel_body_font_size[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_body_font_size[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_font_weight }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <select class="form-control" id="body-font-weight-{{ store.store_id }}" name="module_ptcontrolpanel_body_font_weight[{{ store.store_id }}]" onclick="chooseBodyWeight(this.value, {{ store.store_id }})">*/
/*                                                                             <option value="300" {% if module_ptcontrolpanel_body_font_weight[store.store_id] == '300' %}selected="selected"{% endif %}>300</option>*/
/*                                                                             <option value="400" {% if module_ptcontrolpanel_body_font_weight[store.store_id] == '400' %}selected="selected"{% endif %}>400</option>*/
/*                                                                             <option value="500" {% if module_ptcontrolpanel_body_font_weight[store.store_id] == '500' %}selected="selected"{% endif %}>500</option>*/
/*                                                                             <option value="600" {% if module_ptcontrolpanel_body_font_weight[store.store_id] == '600' %}selected="selected"{% endif %}>600</option>*/
/*                                                                             <option value="700" {% if module_ptcontrolpanel_body_font_weight[store.store_id] == '700' %}selected="selected"{% endif %}>700</option>*/
/*                                                                         </select>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_body_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_body_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/* */
/*                                                             <div class="tab-pane" id="tab-header-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <div class="col-sm-3"></div>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <p class="font-heading-demo-{{ store.store_id }} font-demo">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z <br />*/
/*                                                                             a b c d e f g h i j k l m n o p q r s t u v w x y z <br />*/
/*                                                                             0 1 2 3 4 5 6 7 8 9</p>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group font-control">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_heading_font }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <select class="form-control" name="module_ptcontrolpanel_heading_font_family_id[{{ store.store_id }}]" onchange="chooseHeadingFont(this.value, {{ store.store_id }})">*/
/*                                                                             <option value="10000" {% if module_ptcontrolpanel_heading_font_family_id[store.store_id] == 10000 %} selected="selected" {% endif %}>{{ text_choose_font }}</option>*/
/*                                                                             {% for font in fonts %}*/
/*                                                                                 <option value="{{ font.id }}" {% if module_ptcontrolpanel_heading_font_family_id[store.store_id] == font.id %} selected="selected" {% endif %}*/
/*                                                                                         id="heading-font-{{ font.id }}" data-family="{{ font.family }}" data-family-val="{{ font.family_val }}"*/
/*                                                                                         data-variants="{{ font.variants }}" data-subsets="{{ font.subsets }}" data-category="{{ font.category }}">*/
/*                                                                                     {{ font.family }}*/
/*                                                                                 </option>*/
/*                                                                             {% endfor %}*/
/*                                                                         </select>*/
/*                                                                     </div>*/
/* */
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input type="checkbox" id="heading-font-disable" name="module_ptcontrolpanel_heading_font_disable[{{ store.store_id }}]" {% if module_ptcontrolpanel_heading_font_disable[store.store_id] %} checked="checked" {% endif %} /> {{ entry_font_disable }}*/
/*                                                                     </div>*/
/* */
/*                                                                     <input type="hidden" id="heading-font-family-name-{{ store.store_id }}" name="module_ptcontrolpanel_heading_font_family_name[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_heading_font_family_name[store.store_id] }}" />*/
/*                                                                     <input type="hidden" id="heading-font-family-cate-{{ store.store_id }}" name="module_ptcontrolpanel_heading_font_family_cate[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_heading_font_family_cate[store.store_id] }}" />*/
/*                                                                     <input type="hidden" id="heading-font-family-link-{{ store.store_id }}" name="module_ptcontrolpanel_heading_font_family_link[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_heading_font_family_link[store.store_id] }}" />*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_font_weight }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <select class="form-control" id="heading-font-weight-{{ store.store_id }}" name="module_ptcontrolpanel_heading_font_weight[{{ store.store_id }}]" onchange="chooseHeadingWeight(this.value, {{ store.store_id }})">*/
/*                                                                             <option value="300" {% if module_ptcontrolpanel_heading_font_weight[store.store_id] == '300' %}selected="selected"{% endif %}>300</option>*/
/*                                                                             <option value="400" {% if module_ptcontrolpanel_heading_font_weight[store.store_id] == '400' %}selected="selected"{% endif %}>400</option>*/
/*                                                                             <option value="500" {% if module_ptcontrolpanel_heading_font_weight[store.store_id] == '500' %}selected="selected"{% endif %}>500</option>*/
/*                                                                             <option value="600" {% if module_ptcontrolpanel_heading_font_weight[store.store_id] == '600' %}selected="selected"{% endif %}>600</option>*/
/*                                                                             <option value="700" {% if module_ptcontrolpanel_heading_font_weight[store.store_id] == '700' %}selected="selected"{% endif %}>700</option>*/
/*                                                                         </select>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-3 control-label">{{ entry_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_heading_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_heading_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/* */
/*                                                             <div class="tab-pane" id="tab-link-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_link_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_link_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_hover_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_link_hover_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_link_hover_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/* */
/*                                                             <div class="tab-pane" id="tab-button-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_button_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_button_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_hover_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_button_hover_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_button_hover_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_bg_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_button_bg_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_button_bg_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label">{{ entry_bg_hover_color }}</label>*/
/*                                                                     <div class="col-sm-3">*/
/*                                                                         <input class="form-control jscolor" type="text" name="module_ptcontrolpanel_button_bg_hover_color[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_button_bg_hover_color[store.store_id] }}" />*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                                 <input type="hidden" value="{{ entry_font_weight }}" id="text-font-weight" />*/
/*                                                 <input type="hidden" value="{{ entry_font_subset }}" id="text-font-subset" />*/
/*                                             </div>*/
/* */
/*                                             <div class="tab-pane" id="tab-product">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-related-{{ store.store_id }}">{{ entry_related_pro }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_related[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_related[{{ store.store_id }}]" id="input-related-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_related[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-social-{{ store.store_id }}">{{ entry_social_icons }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_social[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_social[{{ store.store_id }}]" id="input-social-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_social[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-tax-{{ store.store_id }}">{{ entry_tax }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_tax[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_tax[{{ store.store_id }}]" id="input-tax-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_tax[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-tags-{{ store.store_id }}">{{ entry_tags }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_tags[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_tags[{{ store.store_id }}]" id="input-tags-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_tags[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-zoom-{{ store.store_id }}">{{ entry_use_zoom }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_use_zoom[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch zoom-status" name="module_ptcontrolpanel_use_zoom[{{ store.store_id }}]" id="input-zoom-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_use_zoom[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-zoom-type-{{ store.store_id }}">{{ entry_zoom_type }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <select name="module_ptcontrolpanel_zoom_type[{{ store.store_id }}]" id="input-zoom-type-{{ store.store_id }}" class="form-control">*/
/*                                                                     <option value="outer" {% if module_ptcontrolpanel_zoom_type[store.store_id] == 'outer' %}selected="selected"{% endif %}>{{ text_outside }}</option>*/
/*                                                                     <option value="inner" {% if module_ptcontrolpanel_zoom_type[store.store_id] == 'inner' %}selected="selected"{% endif %}>{{ text_inside }}</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-zoom-space-{{ store.store_id }}">{{ entry_zoom_space }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="text" id="input-zoom-space-{{ store.store_id }}" class="form-control" name="module_ptcontrolpanel_zoom_space[{{ store.store_id }}]" value="{{ module_ptcontrolpanel_zoom_space[store.store_id] }}" placeholder="{{ text_zoom_space }}" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-zoom-title-{{ store.store_id }}">{{ entry_zoom_title }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_zoom_title[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_zoom_title[{{ store.store_id }}]" id="input-zoom-title-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_zoom_title[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-swatches-{{ store.store_id }}">{{ entry_use_swatches }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_use_swatches[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_use_swatches[{{ store.store_id }}]" id="input-swatches-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_use_swatches[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-dimension-{{ store.store_id }}">{{ entry_icon_swatches }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" value="{{ module_ptcontrolpanel_swatches_width[store.store_id] }}" name="module_ptcontrolpanel_swatches_width[{{ store.store_id }}]" placeholder="{{ entry_width }}" class="form-control" />*/
/*                                                             </div>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" value="{{ module_ptcontrolpanel_swatches_height[store.store_id] }}" name="module_ptcontrolpanel_swatches_height[{{ store.store_id }}]" placeholder="{{ entry_height }}" class="form-control" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-color-option-{{ store.store_id }}">{{ entry_color_option }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <select name="module_ptcontrolpanel_swatches_option[{{ store.store_id }}]" id="input-color-option-{{ store.store_id }}" class="form-control">*/
/*                                                                     {% for option in options %}*/
/*                                                                         {% if option.type == 'select' or option.type == 'radio' %}*/
/*                                                                             <option value="{{ option.option_id }}" {% if module_ptcontrolpanel_swatches_option[store.store_id] == option.option_id %} selected="selected" {% endif %}>{{ option.name }}</option>*/
/*                                                                         {% endif %}*/
/*                                                                     {% endfor %}*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/* */
/*                                             <div class="tab-pane" id="tab-category">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-category-image-{{ store.store_id }}">{{ entry_category_image }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_category_image[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_image[{{ store.store_id }}]" id="input-category-image-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_category_image[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-category-des-{{ store.store_id }}">{{ entry_category_des }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_category_description[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_description[{{ store.store_id }}]" id="input-category-des-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_category_description[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-category-sub-{{ store.store_id }}">{{ entry_sub_category }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_sub_category[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_sub_category[{{ store.store_id }}]" id="input-category-sub-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_sub_category[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-filter-{{ store.store_id }}">{{ entry_filter }}</label>*/
/*                                                             <div class="col-sm-2">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_use_filter[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_use_filter[{{ store.store_id }}]" id="input-filter-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_use_filter[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                             <label class="col-sm-2 control-label">{{ entry_position }}</label>*/
/*                                                             <div class="col-sm-2">*/
/*                                                                 <select name="module_ptcontrolpanel_filter_position[{{ store.store_id }}]" class="form-control">*/
/*                                                                     <option value="left" {% if module_ptcontrolpanel_filter_position[store.store_id] == 'left' %} selected="selected" {% endif %}>{{ text_left }}</option>*/
/*                                                                     <option value="right" {% if module_ptcontrolpanel_filter_position[store.store_id] == 'right' %} selected="selected" {% endif %}>{{ text_right }}</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-cquickview-{{ store.store_id }}">{{ entry_quickview }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_cate_quickview[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_cate_quickview[{{ store.store_id }}]" id="input-cquickview-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_cate_quickview[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-image-effect-{{ store.store_id }}">{{ entry_img_effect }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <select name="module_ptcontrolpanel_img_effect[{{ store.store_id }}]" id="input-image-effect-{{ store.store_id }}" class="form-control">*/
/*                                                                     <option value="none" {% if module_ptcontrolpanel_img_effect[store.store_id] == 'none' %}selected="selected" {% endif %}>{{ text_none }}</option>*/
/*                                                                     <option value="hover" {% if module_ptcontrolpanel_img_effect[store.store_id] == 'hover' %}selected="selected" {% endif %}>{{ text_hover_img }}</option>*/
/*                                                                     <option value="swatches" {% if module_ptcontrolpanel_img_effect[store.store_id] == 'swatches' %}selected="selected" {% endif %}>{{ text_swatches_img }}</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label">{{ entry_icon_swatches }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" value="{{ module_ptcontrolpanel_cate_swatches_width[store.store_id] }}" name="module_ptcontrolpanel_cate_swatches_width[{{ store.store_id }}]" placeholder="{{ entry_width }}" class="form-control" />*/
/*                                                             </div>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <input type="text" value="{{ module_ptcontrolpanel_cate_swatches_height[store.store_id] }}" name="module_ptcontrolpanel_cate_swatches_height[{{ store.store_id }}]" placeholder="{{ entry_height }}" class="form-control" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-view-{{ store.store_id }}">{{ entry_advance_view }}</label>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <input type="hidden" name="module_ptcontrolpanel_advance_view[{{ store.store_id }}]" value="0" />*/
/*                                                                 <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_advance_view[{{ store.store_id }}]" id="input-view-{{ store.store_id }}"*/
/*                                                                        data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                         {% if module_ptcontrolpanel_advance_view[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-default-view-{{ store.store_id }}">{{ entry_default_view }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <select name="module_ptcontrolpanel_default_view[{{ store.store_id }}]" id="input-default-view-{{ store.store_id }}" class="form-control">*/
/*                                                                     <option value="list" {% if module_ptcontrolpanel_default_view[store.store_id] == 'list' %} selected="selected" {% endif %}>{{ text_list }}</option>*/
/*                                                                     <option value="grid" {% if module_ptcontrolpanel_default_view[store.store_id] == 'grid' %} selected="selected" {% endif %}>{{ text_grid }}</option>*/
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-row-{{ store.store_id }}">{{ entry_product_row }}</label>*/
/*                                                             <div class="col-sm-3">*/
/*                                                                 <select name="module_ptcontrolpanel_product_row[{{ store.store_id }}]" id="input-row-{{ store.store_id }}" class="form-control">*/
/*                                                                     <option value="2" {% if module_ptcontrolpanel_product_row[store.store_id] == '2' %} selected="selected" {% endif %}>2</option>*/
/*                                                                     <option value="3" {% if module_ptcontrolpanel_product_row[store.store_id] == '3' %} selected="selected" {% endif %}>3</option>*/
/*                                                                     <option value="4" {% if module_ptcontrolpanel_product_row[store.store_id] == '4' %} selected="selected" {% endif %}>4</option>*/
/* */
/*                                                                 </select>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/* */
/*                                             <div class="tab-pane" id="tab-catalog">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <ul class="nav nav-tabs hoz-ul-sections">*/
/*                                                             <li class="active"><a href="#tab-cheader-{{ store.store_id }}" data-toggle="tab">{{ tab_header }}</a></li>*/
/*                                                             <li><a href="#tab-product-{{ store.store_id }}" data-toggle="tab">{{ tab_product }}</a></li>*/
/*                                                             <li><a href="#tab-category-{{ store.store_id }}" data-toggle="tab">{{ tab_product_listing }}</a></li>*/
/*                                                         </ul>*/
/* */
/*                                                         <div class="tab-content child-content">*/
/*                                                             <div class="tab-pane active" id="tab-cheader-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-header-cart-{{ store.store_id }}">{{ entry_cart }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_header_cart[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_header_cart[{{ store.store_id }}]" id="input-header-cart-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_header_cart[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-header-currency-{{ store.store_id }}">{{ entry_currency }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_header_currency[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_header_currency[{{ store.store_id }}]" id="input-header-currency-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_header_currency[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/* */
/*                                                             <div class="tab-pane" id="tab-product-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-product-price-{{ store.store_id }}">{{ entry_show_price }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_product_price[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_product_price[{{ store.store_id }}]" id="input-product-price-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_product_price[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-product-cart-{{ store.store_id }}">{{ entry_show_cart }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_product_cart[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_product_cart[{{ store.store_id }}]" id="input-product-cart-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_product_cart[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-product-wishlist-{{ store.store_id }}">{{ entry_show_wishlist }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_product_wishlist[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_product_wishlist[{{ store.store_id }}]" id="input-product-wishlist-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_product_wishlist[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-product-compare-{{ store.store_id }}">{{ entry_show_compare }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_product_compare[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_product_compare[{{ store.store_id }}]" id="input-product-compare-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_product_compare[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-product-options-{{ store.store_id }}">{{ entry_show_options }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_product_options[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_product_options[{{ store.store_id }}]" id="input-product-options-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_product_options[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                             <div class="tab-pane" id="tab-category-{{ store.store_id }}">*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-price-{{ store.store_id }}">{{ entry_show_price }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_price[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_price[{{ store.store_id }}]" id="input-category-price-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_price[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-cart-{{ store.store_id }}">{{ entry_show_cart }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_cart[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_cart[{{ store.store_id }}]" id="input-category-cart-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_cart[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-wishlist-{{ store.store_id }}">{{ entry_show_wishlist }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_wishlist[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_wishlist[{{ store.store_id }}]" id="input-category-wishlist-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_wishlist[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-compare-{{ store.store_id }}">{{ entry_show_compare }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_compare[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_compare[{{ store.store_id }}]" id="input-category-compare-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_compare[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-prodes-{{ store.store_id }}">{{ entry_product_des }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_prodes[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_prodes[{{ store.store_id }}]" id="input-category-prodes-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_prodes[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/* */
/*                                                                 <div class="form-group">*/
/*                                                                     <label class="col-sm-4 control-label" for="input-category-label-{{ store.store_id }}">{{ entry_label }}</label>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <input type="hidden" name="module_ptcontrolpanel_category_label[{{ store.store_id }}]" value="0" />*/
/*                                                                         <input type="checkbox" class="ckb-switch" name="module_ptcontrolpanel_category_label[{{ store.store_id }}]" id="input-category-label-{{ store.store_id }}"*/
/*                                                                                data-toggle="toggle" data-on="{{ text_enabled }}" data-off="{{ text_disabled }}" data-width="100" data-height="36" data-store-id="{{ store.store_id }}"*/
/*                                                                                 {% if module_ptcontrolpanel_category_label[store.store_id] %} value="1" checked {% else %} value="0" {% endif %}>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/* */
/*                                             <div class="tab-pane" id="tab-advance">*/
/*                                                 {% for store in stores %}*/
/*                                                     <div class="frm-field frm-field-{{ store.store_id }}">*/
/*                                                         <div class="form-group" >*/
/*                                                             <label class="col-sm-3 control-label" for="input-theme">{{ entry_theme_database }}</label>*/
/*                                                             <div class="col-sm-9">*/
/*                                                                 <div class="row">*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <select id="input-theme" class="form-control" name="file">*/
/*                                                                             {% for key, value in database %}*/
/*                                                                                 <option value="{{ key }}">{{ value }}</option>*/
/*                                                                             {% endfor %}*/
/*                                                                         </select>*/
/*                                                                     </div>*/
/*                                                                     <div class="col-sm-6">*/
/*                                                                         <button type="button" id="button-import" class="btn btn-primary btn-theme-option"><i class="fa fa-upload"></i> {{ button_import }}</button>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-3 control-label" for="input-theme">{{ entry_custom_css }}</label>*/
/*                                                             <div class="col-sm-9">*/
/*                                                                 <textarea class="form-control code-area" rows="15" name="module_ptcontrolpanel_custom_css[{{ store.store_id }}]">{{ module_ptcontrolpanel_custom_css[store.store_id] }}</textarea>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-3 control-label" for="input-theme">{{ entry_custom_js }}</label>*/
/*                                                             <div class="col-sm-9">*/
/*                                                                 <textarea class="form-control code-area" rows="15" name="module_ptcontrolpanel_custom_js[{{ store.store_id }}]">{{ module_ptcontrolpanel_custom_js[store.store_id] }}</textarea>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="body-stylesheet-link"></div>*/
/* <div class="heading-stylesheet-link"></div>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function () {*/
/*         $('.frm-field').hide();*/
/*         $('.frm-field-0').show();*/
/* */
/*         $('#input-store').change(function () {*/
/*             $('.frm-field').hide();*/
/*             var store = $(this).val();*/
/*             $('.frm-field-' + store).show();*/
/*         })*/
/* */
/* */
/*         $('.toggle.btn').on('click', function () {*/
/*             var ckb_status = parseInt($(this).find('.ckb-switch').val());*/
/*             if(ckb_status == 1) {*/
/*                 $(this).find('.ckb-switch').val('0');*/
/*             } else {*/
/*                 $(this).find('.ckb-switch').val('1');*/
/*             }*/
/*         });*/
/* */
/*         {% for store in stores %}*/
/*             /* Body *//* */
/*             var body_font_css_link_{{ store.store_id }} = $('#body-font-family-link-{{ store.store_id }}').val();*/
/*             var body_font_stylesheet_link_{{ store.store_id }} = '<link href="' + body_font_css_link_{{ store.store_id }} + '" rel="stylesheet">';*/
/*             var body_family_{{ store.store_id }} =  $('#body-font-family-name-{{ store.store_id }}').val();*/
/*             var body_category_{{ store.store_id }} =  $('#body-font-family-cate-{{ store.store_id }}').val();*/
/*             var body_font_weight{{ store.store_id }} = $('#body-font-weight-{{ store.store_id }}').val();*/
/* */
/*             $('.body-stylesheet-link').append(body_font_stylesheet_link_{{ store.store_id }});*/
/*             $('.font-body-demo-{{ store.store_id }}').css("font-family", "'" + body_family_{{ store.store_id }} + "', " + body_category_{{ store.store_id }});*/
/*             $('.font-body-demo-{{ store.store_id }}').css("font-weight", body_font_weight{{ store.store_id }});*/
/* */
/*             /* Heading *//* */
/*             var heading_font_css_link_{{ store.store_id }} = $('#heading-font-family-link-{{ store.store_id }}').val();*/
/*             var heading_font_stylesheet_link_{{ store.store_id }} = '<link href="' + heading_font_css_link_{{ store.store_id }} + '" rel="stylesheet">';*/
/*             var heading_family_{{ store.store_id }} =  $('#heading-font-family-name-{{ store.store_id }}').val();*/
/*             var heading_category_{{ store.store_id }} =  $('#heading-font-family-cate-{{ store.store_id }}').val();*/
/*             var heading_font_weight{{ store.store_id }} = $('#heading-font-weight-{{ store.store_id }}').val();*/
/* */
/*             $('.heading-stylesheet-link').append(heading_font_stylesheet_link_{{ store.store_id }});*/
/*             $('.font-heading-demo-{{ store.store_id }}').css("font-family", "'" + heading_family_{{ store.store_id }} + "', " + heading_category_{{ store.store_id }});*/
/*             $('.font-heading-demo-{{ store.store_id }}').css("font-weight", heading_font_weight{{ store.store_id }});*/
/*         {% endfor %}*/
/*     });*/
/* */
/*     function chooseBodyFont(id, store_id) {*/
/*         var family = $("#body-font-" + id).data('family');*/
/*         var family_val = $("#body-font-" + id).data('family-val');*/
/*         var variants = $("#body-font-" + id).data('variants');*/
/*         var subsets = $("#body-font-" + id).data('subsets');*/
/*         var category = $("#body-font-" + id).data('category');*/
/* */
/*         var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + ":" + variants + '&subset=' + subsets;*/
/*         var font_stylesheet_link = '<link href="' + font_css_link + '" rel="stylesheet">';*/
/* */
/*         $('.body-stylesheet-link').append(font_stylesheet_link);*/
/* */
/*         $('#body-font-family-name-' + store_id).val(family);*/
/*         $('#body-font-family-cate-' + store_id).val(category);*/
/*         $('#body-font-family-link-' + store_id).val(font_css_link);*/
/* */
/*         $('.font-body-demo-' + store_id).css("font-family", "'" + family + "', " + category);*/
/*     }*/
/* */
/*     function chooseBodyWeight(value, store_id) {*/
/*         $('.font-body-demo-' + store_id).css("font-weight", value);*/
/*     }*/
/* */
/*     function chooseHeadingFont(id, store_id) {*/
/*         var family = $("#heading-font-" + id).data('family');*/
/*         var family_val = $("#heading-font-" + id).data('family-val');*/
/*         var variants = $("#heading-font-" + id).data('variants');*/
/*         var subsets = $("#heading-font-" + id).data('subsets');*/
/*         var category = $("#heading-font-" + id).data('category');*/
/* */
/*         var font_css_link = 'https://fonts.googleapis.com/css?family=' + family_val + ":" + variants + '&subset=' + subsets;*/
/*         var font_stylesheet_link = '<link href="' + font_css_link + '" rel="stylesheet">';*/
/* */
/*         $('.heading-stylesheet-link').append(font_stylesheet_link);*/
/* */
/*         $('#heading-font-family-name-' + store_id).val(family);*/
/*         $('#heading-font-family-cate-' + store_id).val(category);*/
/*         $('#heading-font-family-link-' + store_id).val(font_css_link);*/
/* */
/*         $('.font-heading-demo-' + store_id).css("font-family", "'" + family + "', " + category);*/
/*     }*/
/* */
/*     function chooseHeadingWeight(value, store_id) {*/
/*         $('.font-heading-demo-' + store_id).css("font-weight", value);*/
/*     }*/
/* </script>*/
/* */
/* <script type="text/javascript"><!--*/
/*     $('#button-import').on('click', function() {*/
/* */
/*         $('#form-data input[name=\'file\']').val($('#input-theme').val());*/
/* */
/*         $('#form-data').submit();*/
/*     });*/
/*     //--></script>*/
/* {{ footer }}*/
/* */
