image.png


public function __toString(){         return "" . $this->getNom() . " dont la description est " . $this->getDescription(); // Remplacer champ par une propriété "string" de l'entité     }