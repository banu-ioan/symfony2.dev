<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_d328865ce944ae39f2378276456249ec extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "title", array(), "any", false), "html");
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'blog'), "created", array(), "any", false), "c"), "html");
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'blog'), "created", array(), "any", false), "l, F j, Y"), "html");
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "title", array(), "any", false), "html");
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, 'blog'), "image", array(), "any", false)))), "html");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "title", array(), "any", false), "html");
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "blog", array(), "any", false), "html");
        echo "</p>
        </div>
    </article>

    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 21
        $this->env->loadTemplate("BloggerBlogBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, 'comments'))));
        // line 22
        echo "
            <h3>Add Comment</h3>
            ";
        // line 24
        echo $this->env->getExtension('actions')->renderAction("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute($this->getContext($context, 'blog'), "id", array(), "any", false)), array());
        // line 25
        echo "        </section>
    </section>

";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
