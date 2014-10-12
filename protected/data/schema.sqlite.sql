CREATE TABLE tbl_lab2 (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    grp VARCHAR(128) NOT NULL,
    subj VARCHAR(128) NOT NULL,
    facl VARCHAR(128) NOT NULL,
	dy VARCHAR(128) NOT NULL
);

INSERT INTO tbl_lab2 (grp, subj, facl, dy) VALUES ('3PI13', 'Mathemathics', 'FKI', 'Monday');
INSERT INTO tbl_lab2 (grp, subj, facl, dy) VALUES ('1PI13', 'OPI', 'FKZ', 'Tuesday');
INSERT INTO tbl_lab2 (grp, subj, facl, dy) VALUES ('4KI11', 'OS', 'FKN', 'Thursday');

