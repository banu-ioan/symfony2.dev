<?php

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_1f13fd03f3c00ac941daa15ce91453e6 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'tags'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['tag'] => $context['weight']) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, $this->getContext($context, 'weight'), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, 'tag'), "html");
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </p>
</section>


<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'latestComments'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['comment']) {
            // line 22
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "user", array(), "any", false), "html");
            echo "</span> commented on
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, 'comment'), "blog", array(), "any", false), "id", array(), "any", false))), "html");
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "id", array(), "any", false), "html");
            echo "\">
                        ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'comment'), "blog", array(), "any", false), "title", array(), "any", false), "html");
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'comment'), "created", array(), "any", false), "c"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'comment'), "created", array(), "any", false), "Y-m-d h:iA"), "html");
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "comment", array(), "any", false), "html");
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
