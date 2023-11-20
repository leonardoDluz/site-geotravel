# site-geotravel

### script banco de dados

```sql

CREATE SCHEMA IF NOT EXISTS Geotravel

USE Geotravel;

CREATE TABLE IF NOT EXISTS Votos (
    idVoto INT(11) NOT NULL AUTO_INCREMENT,
    voto VARCHAR(155) NOT NULL,
    PRIMARY KEY (idVoto)
);

```