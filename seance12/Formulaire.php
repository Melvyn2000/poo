<?php

class Formulaire implements iFormulaire
{

    private $action;
    private $method;
    private $nom;
    private $class;
    private $html;

    /**
     * @param $action
     * @param $method
     * @param $nom
     * @param $class
     */
    public function __construct($action, $method, $nom, $class='')
    {
        $this->action = $action;
        $this->method = $method;
        $this->nom = $nom;
        $this->class = $class;

        $this->html = '<form action="'.$this->action.'" method="'.$this->method.'" name="'.$this->nom.'" class="'.$this->class.'">';
    }

    public function ajoutChampSimple($label, $type, $nom, $id = '', $class = '')
    {
        // TODO: Implement ajoutChampSimple() method.

        $this->html .= '<label for="'.$nom.'">'.$label.'</label>
                        <input type="'.$type.'" id="'.$id.'" name="'.$nom.'" class="'.$class.'">';
    }

    public function ajoutChampSelect($label, $nom, $data, $id = '', $class = '')
    {
        if ($id = ''){
            $id = $nom;
        }
        // TODO: Implement ajoutChampSelect() method.
        $this->html .= '<label for="'.$nom.'">'.$label.'</label>
                        <select name="'.$nom.'" id="'.$id.'">
                            <option value="">Choisissez une option :</option>';

        foreach($data as $int => $value){
            $this->html .= '<option value="'.$int.'">'.$value.'</option>';
        }

        $this->html .= '</select>';
    }

    public function ajoutChampChoix($label, $type, $nom, $data, $id = '', $class = '')
    {
        if ($id = ''){
            $id = $nom;
        }
        // TODO: Implement ajoutChampChoix() method.
        $this->html .= '<fieldset>
                        <legend>'.$label.'</legend>';

          foreach($data as $ligne => $value){
              $this->html .= '<div><input type="'.$type.'" id="'.$id.'" name="'.$nom.'" class="'.$class.'" value="'.$ligne.'">
                              <label for="'.$ligne.'">'.$value.'</label></div>';
          }

        $this->html .= '</fieldset>';
    }

    public function ajoutBoutonSubmit($label, $nom = '', $id = '', $class = '')
    {
        // TODO: Implement ajoutBoutonSubmit() method.
        $this->html .= '<input type="submit" name="'.$nom.'" value="'.$label.'" id="'.$id.'" class="'.$class.'">';
    }

    public function ajoutChampDate($label, $nom){
        $this->html .= '<label for="'.$nom.'">'.$label.'</label>
                        <input type="date" id="start" name="'.$nom.'">';
    }

    public function genereFormulaireHTML()
    {
        // TODO: Implement genereFormulaireHTML() method.
        $this->html .= '</form>';
        return $this->html;
    }


}
