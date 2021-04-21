var v1 = "Renault";

var v1 = new String("Renault");

class Voiture 
{
    constructor(marque, modele)
    {
        this.marque = marque;
        this.modele = modele;
    }
}

v1 = new Voiture("Renault", "Megane");

v1.toLowerCase();