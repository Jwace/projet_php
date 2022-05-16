<?php

class Animal
{
    // Attributs d'un Animal
    private $id_animal;
    private $nom_animal;
    protected $categorie;
    private $age_animal;
    protected $sexe;
    protected $vaccination;
    protected $puce;
    protected $disponible_adoption;
    private $animal_img;

    // Méthodes d'un User
    public function __construct($id_animal, $nom_animal, $categorie, $age_animal, $sexe, $vaccination, $puce, $disponible_adoption, $animal_img)
    {
        $this->setIdAnimal($id_animal);
        $this->setNomAnimal($nom_animal);
        $this->setCategorie($categorie);
        $this->setAgeAnimal($age_animal);
        $this->setSexe($sexe);
        $this->setVaccination($vaccination);
        $this->setPuce($puce);
        $this->setDisponibleAdoption($disponible_adoption);
        $this->setAnimalImg($animal_img);
    }

    public function etreAdopte() {
        echo "Adoption d'un animal";
    }

    // Getter
    public function id_animal() { return $this->id_animal; }
    public function nom_animal() { return $this->nom_animal; }
    public function categorie() { return $this->categorie; }
    public function age_animal() { return $this->age_animal; }
    public function sexe() { return $this->sexe; }
    public function vaccination() { return $this->vaccination; }
    public function puce() { return $this->puce(); }
    public function disponible_adoption() { return $this->disponible_adoption(); }
    public function animal_img() { return $this->animal_img(); }

    // Setter
    public function setIdAnimal($id_animal) {
        $this->id_animal = (int) $id_animal;
    }
    public function setNomAnimal($nom_animal) {
        $this->nom_animal = $nom_animal;
    }
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }
    public function setAgeAnimal($age_animal) {
        $this->age_animal = $age_animal;
    }
    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }
    public function setVaccination($vaccination) {
        $this->vaccination = $vaccination;
    }
    public function setPuce($puce) {
        $this->puce = $puce;
    }
    public function setDisponibleAdoption($disponible_adoption) {
        $this->disponible_adoption = $disponible_adoption;
    }
    public function setAnimalImg($animal_img) {
        $this->animal_img = $animal_img;
    }
}

?>