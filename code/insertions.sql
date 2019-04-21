delete from users;
SET FOREIGN_KEY_CHECKS = 0;
truncate users;
SET FOREIGN_KEY_CHECKS = 1;

INSERT INTO users (mail, username, password, privilege_level)
VALUES ('okaanagac@gmail.com', 'CynicalApe', '1234', 3),
      ('atpug@gmail.com', 'aptup', '1235', 0),
      ('anotherone@gmail.com', 'khaleed', '1234', 0),
      ('scrap@yahoo.com', 'alloy"', '111', 1),
      ('bondjames@gmail.com','jb', '007', 2),
      ('randomauthor1@gmail.com','ra1', '000', 1),
      ('randomauthor2@gmail.com','ra2', '000', 1),
      ('randomauthor3@gmail.com','ra3', '000', 1),
      ('randomauthor4@gmail.com','ra4', '000', 1),
      ('randomauthor5@gmail.com','ra5', '000', 1),
      ('randomauthor6@gmail.com','ra6', '000', 1);

INSERT INTO organizations (title)
    VALUES ('Journal of Computer Science & Systems Biology '),
      ('Journal of Global Research in Computer Science'),
      ('Journal of Information Technology & Software Engineering '),
      ('American Journal of Computer Science and Information Technology'),
      ('5th International Conference on Big Data Analysis and Data Mining'),
      ('Global Expo on Computer Graphics & Animation'),
      ('International conference on Data Analysis and Cloud Computing'),
      (' ACM SIGGRAPH');

INSERT INTO journals(journalID, volume, journalDate, subscriber_count)
  VALUES
    ('1', 10, '2017-8-21', 0),
    ('2', 5, '2014-2-12', 0),
    ('3', 9, '2015-1-14', 0),
    ('4', 3, '2017-11-4', 0);

INSERT INTO conferences(conferenceID, conferenceDate, subscriber_count, country, city_name, weblink)
  VALUES
    ('5', '2018-9-21', 0, 'ITALY', 'ROME','https://datamining.conferenceseries.com/'),
    ('6', '2018-9-30', 0, 'JAPAN','TOKYO','computergraphics-gamedesign.conferenceseries.com'),
    ('7', '2018-10-6', 0, 'UK','LONDON','https://cloud-computing.conferenceseries.com/'),
    ('8', '2018-9-12', 0, 'CANADA','VANCOUVER', 'https://s2018.siggraph.org/');

INSERT INTO publications(ID, title, publicationDate, citationCount, weblink)
VALUES
  (555, 'testpublication1', '2000-12-3', '12', 'testurl1.com'),
  (666, 'testpublication2', '2002-11-4', '10', 'testurl2.com'),
  (777, 'testpublication3', '2005-4-2', '9', 'testurl3.com'),
  (888, 'testpublication4', '2000-9-2', '15', 'testurl4.com');

INSERT INTO publicationauthors(pubID, authorID)
VALUES
  (555,6),
  (555,7),
  (666,7),
  (777,8),
  (777,9),
  (777,10),
  (888,11);

INSERT INTO submitted (organizationID, publicationID)
    VALUES
      (5, 555),
      (5, 666),
      (5, 777),
      (5, 888);