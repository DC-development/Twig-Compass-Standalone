<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html>
    <head>
        <link href=\"/stylesheets/screen.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"/stylesheets/print.css\" media=\"print\" rel=\"stylesheet\" type=\"text/css\" />
        <!--[if IE]>
        <link href=\"/stylesheets/ie.css\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />
        <![endif]-->
    </head>
    <body>

        <div class='two-col'>
            <div id='header'>
                <h1>This is the Header ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h1>
            </div>
            <div id='sidebar'>
                <ul>
                    <li>
                        <a href='#'>Nav #1</a>
                    </li>
                    <li>
                        <a href='#'>Nav #2</a>
                    </li>
                    <li>
                        <a href='#'>Nav #3</a>
                    </li>
                </ul>
            </div>
            <div id='content'>
                <p>
                    Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
            <div id='footer'>
                This is the footer.
            </div>
        </div>
    
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  17 => 1,);
    }
}
