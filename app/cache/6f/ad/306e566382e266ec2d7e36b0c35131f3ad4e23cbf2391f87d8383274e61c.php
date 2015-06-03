<?php

/* layout.html.twig */
class __TwigTemplate_6fad306e566382e266ec2d7e36b0c35131f3ad4e23cbf2391f87d8383274e61c extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t \t<meta charset=\"utf-8\">
\t \t<title>Route</title>
\t \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\"/> \t
\t</head>
\t<body>

\t\t<div id=\"addAuthor\">
\t\t\t<label>Ajouter un kjkjkjauteur</label>
\t\t\t<form action=\"addAuthor\" method=\"post\">
\t\t\t    <div>
\t\t\t        <label for=\"nom\">Nom :</label>
\t\t\t        <input type=\"text\" id=\"nom\" name=\"nom\" />
\t\t\t    </div> 
\t\t\t    <div>
\t\t\t        <label for=\"prenom\">Prenom :</label>
\t\t\t        <input type=\"text\" id=\"prenom\" name=\"prenom\" />
\t\t\t    </div>  
\t\t\t    <div class=\"button\">
\t\t\t        <button type=\"submit\">Ajouter</button>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>\t

\t\t<br>

\t\t<div id=\"delAuteur\">
\t\t\t<label>Supprimer un auteur</label>
\t\t\t<form action=\"delAuthor\" method=\"post\">
\t\t\t    <div>
\t\t\t        <label for=\"nom\">Nom :</label>
\t\t\t        <input type=\"text\" id=\"nom\" name=\"nom\" />
\t\t\t    </div> 
\t\t\t    <div>
\t\t\t        <label for=\"prenom\">Prenom :</label>
\t\t\t        <input type=\"text\" id=\"prenom\" name=\"prenom\" />
\t\t\t    </div>  
\t\t\t    <div class=\"button\">
\t\t\t        <button type=\"submit\">Supprimer</button>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>

\t\t<br>

\t\t<div id=\"addPublisher\" style=\"border-style: solid;\">
\t\t\t<label>Ajouter un éditeur</label>
\t\t\t<form action=\"addPublisher\" method=\"post\">
\t\t\t    <div>
\t\t\t        <label for=\"nom\">Nom :</label>
\t\t\t        <input type=\"text\" id=\"nom\" name=\"nom\" />
\t\t\t    </div> 
\t\t\t    <div class=\"button\">
\t\t\t        <button type=\"submit\">Ajouter</button>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>\t

\t\t<br>

\t\t<div id=\"addBook\" style=\"border-style: solid;\">
\t\t\t<label>Ajouter un livre</label>
\t\t\t<form action=\"addBook\" method=\"post\">
\t\t\t    <div>
\t\t\t        <label for=\"titre\">Titre :</label>
\t\t\t        <input type=\"text\" id=\"titre\" name=\"titre\" />
\t\t\t    </div> 
\t\t\t    <div>
\t\t\t        <select name=\"author\">
\t\t\t\t\t\t<?php
\t\t\t\t\t\tforeach(\$authors as \$author) {
\t\t\t\t\t\t\techo \"<option value=\".\$author->getId().\"----\".\$author->getLastName().\">\$author</option>\";
\t\t\t\t\t\t}
\t\t\t\t\t\t?>
\t\t\t\t\t</select>
\t\t\t\t\t</select>
\t\t\t\t\t<select name=\"publisher\">
\t\t\t\t\t\t<?php
\t\t\t\t\t\t\tforeach(\$publishers as \$publisher) {
\t\t\t\t\t\t\techo \"<option value=\".\$publisher->getId().\"----\".\$publisher->getName().\">\$publisher</option>\";
\t\t\t\t\t\t}
\t\t\t\t\t\t?>
\t\t\t\t\t</select>
\t\t\t    </div>  
\t\t\t    <div class=\"button\">
\t\t\t        <button type=\"submit\">Ajouter</button>
\t\t\t    </div>
\t\t\t</form>
\t\t</div>

\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
