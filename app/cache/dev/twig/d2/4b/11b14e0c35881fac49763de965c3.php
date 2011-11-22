<?php

/* BloggerBlogBundle:Comment:index.html.twig */
class __TwigTemplate_d24b11b14e0c35881fac49763de965c3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'comments'));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context['_key'] => $context['comment']) {
            // line 4
            echo "    <article class=\"comment ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($this->getContext($context, 'loop'), "index0", array(), "any", false)), "html");
            echo "\" id=\"comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "id", array(), "any", false), "html");
            echo "\">
        <header>
            <p><span class=\"highlight\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "user", array(), "any", false), "html");
            echo "</span> commented <time datetime=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'comment'), "created", array(), "any", false), "c"), "html");
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'comment'), "created", array(), "any", false), "l, F j, Y"), "html");
            echo "</time></p>
        </header>
        <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comment'), "comment", array(), "any", false), "html");
            echo "</p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 11
            echo "    <p>There are no comments for this post. Be the first to comment...</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
