insert into commercial (IdCom, NomCom, PrenomCom, Tel, TypeCommercial)
values (1, 'POMPIDOU', 'Georges', '0666666666', 1);

insert into commercial (IdCom, NomCom, PrenomCom, Tel, TypeCommercial)
values (2, 'DE GAULLE', 'Charles', '0669696969', 1);

insert into commercial (IdCom, NomCom, PrenomCom, Tel, TypeCommercial)
values (3, 'POINCARE', 'Raymond', '0612345678', 0);






insert into client (RefClient, NomClient, PrenomClient, AdresseFacturationClient, CoeffClient, TypeClient, IdCom)
values (101, 'YOUNG', 'Angus', 'rue AC/DC', 2.25, 1, 1);

insert into client (RefClient, NomClient, PrenomClient, AdresseFacturationClient, CoeffClient, TypeClient, IdCom)
values (102, 'HUDSON', 'Slash', 'rue Gun N Roses', 2.50, 1, 2);

insert into client (RefClient, NomClient, PrenomClient, AdresseFacturationClient, CoeffClient, TypeClient, IdCom)
values (103, 'CHARLES', 'Ray', 'rue Road Jack ', 2.75, 0, 3);

insert into client (RefClient, NomClient, PrenomClient, AdresseFacturationClient, CoeffClient, TypeClient, IdCom)
values (104, 'BECHET', 'Sidney', 'rue du Jazz', 2.75, 0, 3);






insert into commande (NumCommande, DateCommande, TotalTTCCommande, DateReglement, EtatCommande, BonDeCommande, TotalHT, Reduction, Facture, DateFacture, RefClient)
values (1001, '14/10/2015', 4800, '18/12/2015', 3, '10000001', 2222, 199.5, '20000001', '10/12/2015', 101);

insert into commande (NumCommande, DateCommande, TotalTTCCommande, DateReglement, EtatCommande, BonDeCommande, TotalHT, Reduction, Facture, DateFacture, RefClient)
values (1002, '10/11/2015', 2000, '27/12/2015', 3, '10000002', 1000, 500, '20000002', '09/12/2015', 102);

insert into commande (NumCommande, DateCommande, TotalTTCCommande, DateReglement, EtatCommande, BonDeCommande, TotalHT, Reduction, Facture, DateFacture, RefClient)
values (1003, '18/09/2015', 55500, '18/09/2015', 4, '10000003', 22000, 5000, '20000003', '18/09/2015', 103);

insert into commande (NumCommande, DateCommande, TotalTTCCommande, DateReglement, EtatCommande, BonDeCommande, TotalHT, Reduction, Facture, DateFacture, RefClient)
values (1004, '27/10/2015', 6475, '27/10/2015', 4, '10000004', 2500, 400, '20000004', '27/10/2015', 104);







insert into rubrique ( IdRubrique, NomRubrique)
values (1100, 'Instruments à cordes');

insert into rubrique ( IdRubrique, NomRubrique)
values (1200, 'Instruments à vent');

insert into rubrique ( IdRubrique, NomRubrique)
values (1300, 'Instruments à percussions');

insert into rubrique ( IdRubrique, NomRubrique)
values (2000, 'Accessoires');








insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1110, 'Instruments à cordes pincées', 1100);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1120, 'Instruments à cordes ppées', 1100);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1130, 'Instruments à cordes ttées', 1100);


insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1210, 'Instruments à biseau', 1200);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1220, 'Instruments à anche', 1200);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1230, 'Instruments cuivres', 1200);


insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1310, 'Instruments à claviers', 1300);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1320, 'Instruments à peaux', 1300);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (1330, 'Instruments accessoires', 1300);


insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (2010, 'Accessoires Cordes', 2000);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (2020, 'Accessoires Vent', 2000);

insert into sousrubrique (IdSousRubrique, NomSousRubrique, IdRubrique)
values (2030, 'Accessoires Percussions', 2000);








insert into fournisseurs (IDFournisseur, NomFournisseur, AdresseFournisseur)
values (123, 'Guitare&Co', 'Rue de la guitare');

insert into fournisseurs (IDFournisseur, NomFournisseur, AdresseFournisseur)
values (234, 'Piano&Co', 'Rue du piano');

insert into fournisseurs (IDFournisseur, NomFournisseur, AdresseFournisseur)
values (345, 'Cuivre&Co', 'Rue des cuivres');








insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(1111, 'Guitare Electrique GIBSON', 'Modèle SG', 2200, 'Image/produits/gibson_sg.jpg', 2, 123, 1110);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2011, 'Mediator pour Guitare', 'Lot de 10 mediators Souples', 1, 'Image/produits/mediator_souple.jpg', 450, 123, 2010);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2017, 'Cordes Guitare', 'Lot de 6 cordes pour guitare électrique MEDIUM ', 20, 'Image/produits/gibson_medium.jpg', 28, 123, 2010);


insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(1112, 'Guitare GIBSON', 'Modèle LES PAUL', 980, 'Image/produits/gbson_lespaul.jpg', 3, 123, 1110);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2012, 'Mediator pour Guitare', 'Lot de 10 mediators Rigides', 1, 'Image/produits/mediator_rigide.jpg', 250, 123, 2010);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2018, 'Cordes Guitare', 'Lot de 6 cordes pour guitare électrique SOFT', 18, 'Image/produits/gibson_soft.jpg', 27, 123, 2010);


insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(1121, 'Piano STEINWAY & SONS', 'Modèle B-211', 21500, 'Image/produits/steinway_b211.jpg', 4, 234, 1120);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2019, 'Banc Piano Andexinger', 'Banc Piano Bench Lift-o-matic', 500, 'Image/produits/andexinger_liftomatic.jpg', 4, 234, 2010);


insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(1221, 'Saxophone Rampone & Cazzani', 'Modèle 2006/TV/OTS Two Voices', 2400, 'Image/produits/rampone_2006.jpg', 8, 345, 1220);

insert into article	(RefArticle, AppelationArticle, CaracteristiqueArticle, PUHTArticle, PhotoArticle, QteStockArticle, IdFournisseur, IdSousRubrique)
values					(2021, 'Anche Forestone ', 'Anche Unfiled Alto Sax, M, F3.5 ', 25, 'Image/produits/forestone_anche.jpg', 12, 345, 2020);







insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1001, 1111, 1, 2200);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1001, 2011, 2, 1);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1001, 2017, 1, 20);


insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1002, 1112, 1, 980);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1002, 2012, 2, 1);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1002, 2018, 1, 18);


insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1003, 1121, 1, 21500);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1003, 2019, 1, 500);


insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1004, 1221, 1, 2400);

insert into secomposede	(NumCommande, RefArticle, Quantite, PVHTArticle)
values						(1004, 2021, 4, 25);







insert into livraison	(NumLivraison, DateLivraison, NombreColisLivraison)
values						(10001, '15/11/2015', 2);


insert into livraison	(NumLivraison, DateLivraison, NombreColisLivraison)
values						(10002, '16/11/2015', 2);


insert into livraison	(NumLivraison, DateLivraison, NombreColisLivraison)
values						(10003, '15/10/2015', 2);


insert into livraison	(NumLivraison, DateLivraison, NombreColisLivraison)
values						(10004, '18/11/2015', 1);






insert into livre	(RefClient, NumCommande, NumLivraison, BonLivraisonClient, DateExpeditionCommande, AdresseLivraisonClient, EtatColis)
values					(101, 1001, 10001, 100001, '13/11/2015', 'Rue Highway To Hell', 1);


insert into livre	(RefClient, NumCommande, NumLivraison, BonLivraisonClient, DateExpeditionCommande, AdresseLivraisonClient, EtatColis)
values					(102, 1002, 10002, 100002, '14/11/2015', 'Rue Sweet Child O Mine', 1);


insert into livre	(RefClient, NumCommande, NumLivraison, BonLivraisonClient, DateExpeditionCommande, AdresseLivraisonClient, EtatColis)
values					(103, 1003, 10003, 100003, '13/11/2015', 'Rue Road Jack', 0);


insert into livre	(RefClient, NumCommande, NumLivraison, BonLivraisonClient, DateExpeditionCommande, AdresseLivraisonClient, EtatColis)
values					(104, 1004, 10004, 100004, '16/11/2015', 'Rue du Jazz', 1);