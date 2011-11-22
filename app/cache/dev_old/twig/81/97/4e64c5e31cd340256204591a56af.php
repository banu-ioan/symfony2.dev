<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_81974e64c5e31cd340256204591a56af extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        $parent = "BloggerBlogBundle::layout.html.twig";
        if ($parent instanceof Twig_Template) {
            $name = $parent->getTemplateName();
            $this->parent[$name] = $parent;
            $parent = $name;
        } elseif (!isset($this->parent[$parent])) {
            $this->parent[$parent] = $this->env->loadTemplate($parent);
        }

        return $this->parent[$parent];
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("blogger-notice", ), "method", false)) {
            // line 12
            echo "        <div class=\"blogger-notice\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("blogger-notice", ), "method", false), "html");
            echo "
        </div>
    ";
        }
        // line 16
        echo "

    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, 'form'));
        echo " class=\"blogger\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "

        ";
        // line 23
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "name", array(), "any", false));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "email", array(), "any", false));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "subject", array(), "any", false));
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderRow($this->getAttribute($this->getContext($context, 'form'), "body", array(), "any", false));
        echo "

        ";
        // line 28
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
