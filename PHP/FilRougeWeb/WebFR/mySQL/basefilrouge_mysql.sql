


create table commercial(
	IdCom			int NOT NULL AUTO_INCREMENT,
	NomCom			varchar(50) NOT NULL,
	PrenomCom		varchar(50) NOT NULL,
	Tel				varchar(30)	NOT NULL,
	TypeCommercial	bit,
PRIMARY KEY (IdCom) 
);


create table client(
	RefClient					int NOT NULL AUTO_INCREMENT,
	NomClient					varchar(50) NOT NULL,
	PrenomClient				varchar(50) NOT NULL,
	AdresseFacturationClient	varchar(200) NOT NULL,
	CoeffClient					decimal(4,2) NOT NULL,
	TypeClient					bit,
	IdCom						int NOT NULL,
	FOREIGN KEY (IdCom) REFERENCES commercial(IdCom),
PRIMARY KEY (RefClient) 
);



create table commande(
	NumCommande					int NOT NULL AUTO_INCREMENT,
	DateCommande				date NOT NULL,
	TotalTTCCommande			int NOT NULL,
	DateReglement				date NOT NULL,
	EtatCommande				int NOT NULL,
	BonDeCommande				varchar(50) NOT NULL,
	TotalHT						int NOT NULL,
	Reduction					numeric NOT NULL,
	Facture						varchar(50) NOT NULL,
	DateFacture					date NOT NULL,
	RefClient					int NOT NULL,
	FOREIGN KEY (RefClient) REFERENCES client(RefClient),
PRIMARY KEY (NumCommande) 
);


create table rubrique(
	IdRubrique					int NOT NULL AUTO_INCREMENT,
	NomRubrique					varchar(50) NOT NULL,
PRIMARY KEY (IdRubrique) 
);


create table sousrubrique(
	IdSousRubrique				int NOT NULL AUTO_INCREMENT,
	NomSousRubrique				varchar(50) NOT NULL,
	IdRubrique					int NOT NULL,
	FOREIGN KEY (IdRubrique) REFERENCES rubrique(IdRubrique),
PRIMARY KEY (IdSousRubrique) 
);


create table fournisseurs(
	IDFournisseur				int NOT NULL AUTO_INCREMENT,
	NomFournisseur				varchar(50) NOT NULL,
	AdresseFournisseur			varchar(200) NOT NULL,
PRIMARY KEY (IdFournisseur) 
);



create table article(
	RefArticle					int NOT NULL AUTO_INCREMENT,
	AppelationArticle			varchar(50) NOT NULL,
	CaracteristiqueArticle		varchar(250) NULL,
	PUHTArticle					int NOT NULL,
	PhotoArticle				varchar(100) NULL,
	QteStockArticle				int NULL,
	IdSousRubrique				int NOT NULL,
	FOREIGN KEY (IdSousRubrique) REFERENCES sousrubrique(IdSousRubrique),
	IDFournisseur				int NOT NULL,
	FOREIGN KEY (IdFournisseur) REFERENCES fournisseurs(IdFournisseur),
PRIMARY KEY (RefArticle) 
);



create table secomposede(
	Quantite					int NULL,
	PVHTArticle					int NOT NULL,
	NumCommande					int NOT NULL,
	FOREIGN KEY (NumCommande) REFERENCES commande(NumCommande),
	RefArticle					int NOT NULL,
	FOREIGN KEY (RefArticle) REFERENCES article(RefArticle),
PRIMARY KEY (NumCommande, RefArticle) 
);



create table livraison(
	NumLivraison				int NOT NULL AUTO_INCREMENT,
	DateLivraison				date NOT NULL,
	NombreColisLivraison		Int	NULL,
PRIMARY KEY (NumLivraison)
);



create table livre(
	BonLivraisonClient			varchar(80) NOT NULL,
	DateExpeditionCommande		date NOT NULL,
	AdresseLivraisonClient		varchar(250) NOT NULL,
	EtatColis					bit NULL,
	RefClient					int NOT NULL,
	FOREIGN KEY (RefClient) REFERENCES client(RefClient),
	NumCommande					int NOT NULL,
	FOREIGN KEY (NumCommande) REFERENCES commande(NumCommande),
	NumLivraison				int NOT NULL,
	FOREIGN KEY (NumLivraison) REFERENCES livraison(NumLivraison),
	
PRIMARY KEY (RefClient, NumCommande, NumLivraison) 
);
