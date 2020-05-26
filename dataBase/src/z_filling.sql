USE maria;

insert into User(id, name, firstName, age, mail, password,admin) values 
    (1,'marchand', 'valentin', '03/11/1997', 'marchandvalentin.7@outlook.fr','$2y$12$59rwQ/WMsXznxeZCrZPL6.Sp2fr8Bb3WTEjw8wJ1yuFUd13pKdH6y',1),
    (2,'scopel','fabrice','05/02/1985','fabrice.scopel@heh.be','$2y$12$lss.6NZtM92okRPTto.dO.g5WP3Je9y8rS2zx6C2kkeA3yex92Tsm',1),
    (3,'malaise','antoine','06/08/1990','antoine.malaise@heh.be','$2y$12$gLmKHBUYOw/QrX46VP2edOpfXFdrANjsnnk4FOC2h30mgF0wY/AXu',1);

insert into Type(type) values 
    ('Carte mère'),('Carte graphique'),('Processeur'),('Ram'),('Disque dur'),('Alimentation');

insert into Composant(reference, power, mark, name, feature, picture, id_type) values 
    ('MSI-MPG-Z390 -GAMING-PLUS',50,'MSI','MSI MPG Z390 GAMING PLUS','Carte mère ATX - Socket 1151 - Chipset Intel Z390 - USB 3.1 - SATA 6 Gb/s - M.2 - LED intégrées','../image/composant/cm1.jpg',1),
    ('MAG-B365-MORTAR',40,'MSI','MSI MAG B365M MORTAR','Carte mère mATX - Socket 1151 - Chipset Intel B365 - USB 3.0 - SATA 6 Gb/s - M.2','../image/composant/cm2.jpg',1),
    ('TUF-B360M-PLUS-GAMING',40,'Asus','Asus TUF B360M PLUS GAMING','Carte mère mATX - Socket 1151 - Chipset Intel B360 - USB 3.1 - SATA 6 Gb/s - M.2','../image/composant/cm2.jpg',1),
    ('11265-05-20G',200,'Sapphire','Sapphire Radeon RX 580 PULSE (8 Go)','Carte graphique PCI-Express overclockée - Refroidissement semi-passif (mode 0 dB) - Avec backplate - Compatible VR','../image/composant/gpu1.jpg',2),
    ('GeForce-GTX-1660-Ti-GAMING-6G',250,'MSI','MSI GeForce GTX 1660 Ti GAMING','Carte graphique PCI-Express - Refroidissement semi-passif (mode 0 dB) - Avec backplate - Compatible VR','../image/composant/gpu2.jpg',2),
    ('DUAL-RTX2070S-O8G-EVO',300,'Asus','Asus GeForce RTX 2070 SUPER DUAL O8G EVO','Carte graphique PCI-Express overclockée - Refroidissement semi-passif (mode 0 dB) - Avec backplate - Compatible VR','../image/composant/gpu3.jpg',2),
    ('100-100000022BOX',100,'AMD','AMD Ryzen 5 3600X (3.8 GHz)','Processeur Socket AM4 - Hexa Core - Cache 36 Mo - Matisse','../image/composant/cpu1.jpg',3),
    ('BX80684I59600KF',90,'Intel','Intel Core i5-9600KF (3.7 GHz)','Processeur Socket 1151 - Hexa Core - Cache 9 Mo - Coffee Lake Refresh - Ventirad non inclus','../image/composant/cpu2.jpg',3),
    ('YD3200C5FHBOX',90,'AMD','AMD Ryzen 3 3200G (3.6 GHz)','Processeur Socket AM4 - Quad Core - Cache 6 Mo - Picasso - Radeon RX Vega 8','../image/composant/cpu3.jpg',3),
    ('CMK16GX4M2E3200C16',30,'Corsair','DDR4 Corsair Vengeance LPX Noir - 16 Go (2 x 8 Go) 3200 MHz - CAS 16','Kit Dual Channel - Mémoire DDR4 optimisée Intel et AMD - PC-25600 - Low-Profile','../image/composant/ram1.jpg',4),
    ('F4-3600C18D-16GVK',40,'G.SKILL','DDR4 G.Skill Ripjaws V Noir - 16 Go (2 x 8 Go) 3600 MHz - CAS 18','Kit Dual Channel - Mémoire DDR4 optimisée Intel - PC-28800','../image/composant/ram2.jpg',4),
    ('BL2K8G30C15U4BL',50,'Crucial','DDR4 Crucial Ballistix Black RGB - 16 Go (2 x 8 Go) 3000 MHz - CAS 15','Kit Dual Channel - Mémoire DDR4 optimisée Intel et AMD - PC-24000 - LED RGB','../image/composant/ram3.jpg',4),
    ('ST2000DM008',10,'Seagate','Seagate BarraCuda 2 To','Disque dur 3.5" - 7200 tpm - 256 Mo - SATA III - Bulk','../image/composant/rom1.jpg',5),
    ('WD40EFAX',10,'Western Digital','Western Digital WD Red 4 To','Disque dur 3.5" - 5400 tpm - 256 Mo - SATA III - Bulk','../image/composant/rom2.jpg',5),
    ('MZ-76E500B/EU',10,'Samsung','Samsung Série 860 EVO 500 Go','SSD 2.5" - SATA III - Contrôleur Samsung MJX - Lecture max : 520 Mo/s - Ecriture max : 520 Mo/s - Mémoire TLC 3D','../image/composant/rom3.jpg',5),
    ('TEXTORM TX350+',350,'Textorm','Textorm TX350+ - 350W','Alimentation PC Certifiée 80+ Bronze - Compatible état C6/C7','../image/composant/alim1.jpg',6),
    ('CP-9020211-EU',650,'Corsair','Corsair CV650 - 650W','Alimentation PC Certifiée 80+ Bronze - Compatible état C6/C7','../image/composant/alim2.jpg',6),
    ('PRIME_PX-650',650,'Seasonic','Seasonic Prime PX - 650W','Alimentation PC Certifiée 80+ Platinum - Modulaire - Semi-passive - Compatible état C6/C7','../image/composant/alim3.jpg',6);