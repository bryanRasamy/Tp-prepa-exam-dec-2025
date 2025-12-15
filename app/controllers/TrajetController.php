<?php

namespace app\controllers;

use app\models\HistoTrajetJour;
use Flight;
use flight\Engine;

class TrajetController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}

	

	public function getbeneficeparjour() {
		// You could actually pull data from the database if you had one set up
		// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		
		$histoTrajetJour=new HistoTrajetJour($this->app->db());
		$benefparjour=$histoTrajetJour->getbeneficeparjour();
		
		Flight::render('benefparjour',['benefparjour'=>$benefparjour]);
	}

	public function gettrajetleplusrentable() {
		// You could actually pull data from the database if you had one set up
		// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		
		$histoTrajetJour=new HistoTrajetJour($this->app->db());
		$trajetrentable=$histoTrajetJour->gettrajetleplusrentable();
		
		Flight::render('trajetrentableparjour',['trajetrentable'=>$trajetrentable]);
	}

	// public function getProduit($id) {
	// 	// You could actually pull data from the database if you had one set up
	// 	// $users = $this->app->db()->fetchAll("SELECT * FROM users");
		
	// 	$produitsModel=new ProduitModel($this->app->db());
	// 	$produit=$produitsModel->getProduit($id);

	// 	// You actually could overwrite the json() method if you just wanted to
	// 	// to ->json($users); and it would auto set pretty print for you.
	// 	// https://flightphp.com/learn#overriding
		
	// 	Flight::render('produit',['produit'=>$produit]);
	// }

	// public function addProduit(){
	// 	$name=Flight::request()->data->name;
	// 	$price=Flight::request()->data->price;

	// 	$produitsModel=new ProduitModel($this->app->db());

	// 	if(isset(Flight::request()->data->id)){
	// 		$id=Flight::request()->data->id;
	// 		$produitsModel->updateProduit($id,$name,$price);
	// 	}else{
	// 		$produitsModel->addProduit($name,$price);
	// 	}
		

	// 	$produits=$produitsModel->getProduits();
		
	// 	Flight::render('accueil',['produits'=>$produits]);
	// }
}