<?php
    namespace app\models;

    use Flight;

    class HistoTrajetJour{
        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        public function getProduits(){
            $stmt=$this->db->query("SELECT * FROM produits ORDER BY id ASC");

            return $stmt->fetchAll();
        }

        public function getbeneficeparjour(){
            $stmt=$this->db->query("SELECT date_trajet_jr,(SUM(montant_recette)-SUM(montant_carburant)) AS benef FROM cooperative_histo_trajet_jour GROUP BY date_trajet_jr ORDER BY date_trajet_jr ASC;
");

            return $stmt->fetchAll();
        }
        // public function getProduit($id){
        //     $stmt=$this->db->prepare("SELECT * FROM produits WHERE id=?");
        //     $stmt->execute([$id]);

        //     return $stmt->fetch();
        // }

        // public function addProduit($name,$price){
        //     $sql="INSERT INTO produits(name,price,image) VALUES (?,?,'1.jpg')";
        //     $stmt=$this->db->prepare($sql);

        //     $stmt->execute([$name,$price]);
        // }

        // public function updateProduit($id,$name,$price){
        //     $sql="UPDATE produits SET name=?, price=? where id=?";
        //     $stmt=$this->db->prepare($sql);

        //     $stmt->execute([$name,$price,$id]);
        // }
    }