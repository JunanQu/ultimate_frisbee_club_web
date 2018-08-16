/* User Accounts */
CREATE TABLE accounts (
	id	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	username	TEXT NOT NULL UNIQUE,
	password	TEXT NOT NULL,
	session TEXT UNIQUE
);
CREATE TABLE 'roster' (
    'num' INTEGER NOT NULL PRIMARY KEY UNIQUE,
    'name' TEXT NOT NULL UNIQUE,
    'year' TEXT NOT NULL,
    'major' TEXT
);

CREATE TABLE `contact` (
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  'first_name' TEXT NOT NULL,
  'last_name' TEXT NOT NULL,
  'email' TEXT NOT NULL,
  'listserv' INT,
  'subject' TEXT NOT NULL,
  'message' TEXT
);

CREATE TABLE 'photos' (
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  'photo_name' TEXT NOT NULL,
  'photo_ext' TEXT NOT NULL,
  'uploader_id' INT NOT NULL
);


CREATE TABLE 'schedule' (
  'id' INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
  'eventdate' TEXT NOT NULL,
  'location' TEXT NOT NULL,
  'note' TEXT NOT NULL
);

INSERT INTO schedule (id, eventdate, location, note) VALUES (1, 'Feb 17 - 19, 2018', 'Presidents Day Invite','San Diego, CA');
INSERT INTO schedule (id, eventdate, location, note) VALUES (2, 'March 18 - 19, 2017', 'Oak Creek Invite','Axton, VA');
INSERT INTO schedule (id, eventdate, location, note) VALUES (3, 'Apr 14- 15, 2018', 'Western NY D1 Conference','Ithaca, NY');
INSERT INTO schedule (id, eventdate, location, note) VALUES (4, 'Apr 28- 29, 2018', 'Metro East D1 Regionals','TBD');
INSERT INTO schedule (id, eventdate, location, note) VALUES (5, 'Sep 30 - Oct 1, 2017', 'TSGMUT','Buffalo, NY');
INSERT INTO schedule (id, eventdate, location, note) VALUES (6, 'Oct 14 - 15, 2017', 'Cayuga Classic','Ithaca, NY');
INSERT INTO schedule (id, eventdate, location, note) VALUES (7, 'Nov 4 - 5, 2018', 'Patriot Games','Fairfax, VA');



INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (1, '1.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (2, '2.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (3, '3.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (4, '4.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (5, '5.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (6, '6.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (7, '7.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (8, '8.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (9, '9.jpg', 'jpg', 1);
INSERT INTO photos (id, photo_name, photo_ext, uploader_id) VALUES (10, '10.jpg', 'jpg', 1);


INSERT INTO accounts (id, username, password) VALUES ( 1, 'team-member' ,  '$2y$10$rG9HTXDNTzLwLap0QAvaYer5IpwxSNkDc7TcTVJCce5Oa.kWNAYeC');/* password: cornellbuds */
INSERT INTO accounts (id, username, password) VALUES ( 2, 'captain' ,  '$2y$10$lqkUnGjxoJ2R3pE6b233buXuVsMNrZbEQ6ZS4cSm7Ma4Ue2h9Ym.a');/* password: iamacaptain */

INSERT INTO roster (num, name, year, major) VALUES (0, 'Lucas Bulger', 'Junior', 'Urban and Regional Studies');
INSERT INTO roster (num, name, year, major) VALUES (1, 'Christopher Wan', 'Junior', 'Biology');
INSERT INTO roster (num, name, year, major) VALUES (2, 'Max Tomsick', 'Freshman', NULL);
INSERT INTO roster (num, name, year, major) VALUES (4, 'Kevin Liu', 'Junior', 'Mechanical Engineering');
INSERT INTO roster (num, name, year, major) VALUES (5, 'Zac Chen', 'Junior', 'Biological Engineering');
INSERT INTO roster (num, name, year, major) VALUES (6, 'Frank Wang', 'Senior', 'Architecture');
INSERT INTO roster (num, name, year, major) VALUES (7, 'Elie Lehmann', 'Senior', 'Philosophy');
INSERT INTO roster (num, name, year, major) VALUES (10, 'Spencer DeRoos', 'Junior', 'Economics');
INSERT INTO roster (num, name, year, major) VALUES (11, 'Gabe Curran', 'Grad', 'Master of Regional Planning');
INSERT INTO roster (num, name, year, major) VALUES (13, 'Binli Huang', 'Junior', 'Economics');
INSERT INTO roster (num, name, year, major) VALUES (14, 'Sam VanNoy', 'Grad', 'Mechanical Engineering');
INSERT INTO roster (num, name, year, major) VALUES (15, 'Aidan Mackenzie', 'Sophomore', NULL);
INSERT INTO roster (num, name, year, major) VALUES (16, 'Andrew Gavin', 'Junior', 'Physics');
INSERT INTO roster (num, name, year, major) VALUES (17, 'Dave Maniloff', 'Sophomore', 'ILR');
INSERT INTO roster (num, name, year, major) VALUES (18, 'Vinny Calderon', 'Sophomore', 'ILR');
INSERT INTO roster (num, name, year, major) VALUES (19, 'Graham Cohen', 'Sophomore', 'Undecided');
INSERT INTO roster (num, name, year, major) VALUES (21, 'Randy Tang', 'Freshman', NULL);
INSERT INTO roster (num, name, year, major) VALUES (23, 'Max Kong', 'Sophomore', 'Biology');
INSERT INTO roster (num, name, year, major) VALUES (26, 'Matt Burke', 'Grad', 'Computer Science');
INSERT INTO roster (num, name, year, major) VALUES (27, 'Tom Pera', 'Grad', 'Master of Regional Planning');
INSERT INTO roster (num, name, year, major) VALUES (30, 'Noah Schulman', 'Sophomore', 'Enviornmental and Sustainability Science');
INSERT INTO roster (num, name, year, major) VALUES (33, 'Evan Greenberg', 'Grad', 'Enviornmental Engineering');
INSERT INTO roster (num, name, year, major) VALUES (43, 'Leo Decter', 'Freshman', NULL);
INSERT INTO roster (num, name, year, major) VALUES (47, 'Patrick Voorhees', 'Senior', 'Mechanical Engineering');
INSERT INTO roster (num, name, year, major) VALUES (50, 'Lito Avila', 'Senior', 'Enviornmental Science and Sustainability ');
INSERT INTO roster (num, name, year, major) VALUES (55, 'Josh Klein', 'Senior', 'Hotel Administration');
INSERT INTO roster (num, name, year, major) VALUES (72, 'Jason Russo', 'Sophomore', 'Electrical and Computer Engineering');
INSERT INTO roster (num, name, year, major) VALUES (77, 'Plato Deliyannis', 'Sophomore', 'Undecided');
INSERT INTO roster (num, name, year, major) VALUES (81, 'Max Wrobel', 'Sophomore', 'ILR');
INSERT INTO roster (num, name, year, major) VALUES (8, 'Jineet Patel', 'Senior', NULL);
