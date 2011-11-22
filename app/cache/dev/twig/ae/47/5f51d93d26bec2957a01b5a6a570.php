<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_ae475f51d93d26bec2957a01b5a6a570 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = array();
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'blogs'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['blog']) {
            // line 6
            echo "        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'blog'), "created", array(), "any", false), "c"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'blog'), "created", array(), "any", false), "l, F j, Y"), "html");
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, 'blog'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "title", array(), "any", false), "html");
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($this->getContext($context, 'blog'), "image", array(), "any", false)))), "html");
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "blog", array(500, ), "method", false), "html");
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, 'blog'), "id", array(), "any", false))), "html");
            echo "\">Continue reading...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comments: <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, 'blog'), "id", array(), "any", false))), "html");
            echo "#comments\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "comments", array(), "any", false)), "html");
            echo "</a></p>
                <p>Posted by <span class=\"highlight\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "author", array(), "any", false), "html");
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'blog'), "created", array(), "any", false), "h:iA"), "html");
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'blog'), "tags", array(), "any", false), "html");
            echo "</span></p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
