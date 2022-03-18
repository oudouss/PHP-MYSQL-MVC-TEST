-- donners
CREATE TABLE IF NOT EXISTS donners (
    id INT AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);

-- donations
CREATE TABLE IF NOT EXISTS donations (
    id INT AUTO_INCREMENT,
    don_name VARCHAR(255) NOT NULL,
    don_type VARCHAR(255) NOT NULL,

    donner_id INT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (donner_id) REFERENCES donners(id)
);

-- donners

INSERT into donners(full_name, phone_number) values ("nawfal karam", "0620226043");
INSERT into donners(full_name, phone_number) values ("rachid bachir", "0608728456");
INSERT into donners(full_name, phone_number) values ("ouafae alaoui", "0689684622");
INSERT into donners(full_name, phone_number) values ("oussama OUDRHIRI", "0689654622");


-- donations
INSERT into donations(don_name, don_type, donner_id) values ("nawfal karam", "food",1);
INSERT into donations(don_name, don_type, donner_id) values ("rachid bachir", "clothes",2);
INSERT into donations(don_name, don_type, donner_id) values ("ouafae alaoui", "money",3);
INSERT into donations(don_name, don_type, donner_id) values ("oussama OUDRHIRI", "money", 4);