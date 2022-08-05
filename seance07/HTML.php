<?php
interface iEdition
{
    public function ajoutParagraphe($texte);
    public function ajoutTitre($texte, $niveau);
    public function ajoutsaut();
}
class HTML implements iEdition
{
    private $pagehtml;

    public function __construct($t)
    {
        $this->pagehtml = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
        <html> 
            <head>  
                <head>
                    <meta charset="UTF-8">
                </head>
                <title>'.$t.'</title> 
            </head> 
            <body> 
                <h1>'.$t.'</h1>';
    }
    public function ajoutParagraphe($texte)
    {
        $this->pagehtml .= ' <p>'.$texte.'</p>';
    }

    public function ajoutTitre($texte, $niveau)
    {
        $this->pagehtml .= ' <h'.$niveau.'>'.$texte.'</h'.$niveau.'>';
    }

    public function ajoutsaut()
    {
        // TODO: Implement ajoutsaut() method.
        $this->pagehtml .= '<hr>';
    }

    public function affiche()
    {
        $this->pagehtml .= ' </body> </html>';
        echo $this->pagehtml;
    }
}
?>
