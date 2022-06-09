-- Create a Database name  information.


--Create two table  User and User_details and join both of them with inner join,

--Left join , right join use sql query

--Now create a text file and submit 

--database 
create database information;
--users table 
create table users (
    id int auto_increment primary key,
    user_name varchar(120)
)
--users information insert
insert into users (name) 
values
('sihab'), ('alif'), ('mehbuba'), ('rimi silam'), ('asik islam'), ('sohag khan'), ('tonmoy islam'), ('tuhin khandakar'), ('sakil sikdar'), ('jhon akter'), ('towhid islam')

--users_information table 
create table users_details (    
    id int auto_increment primary key,
    users_address varchar(150),
    users_join_date date,
    users_phone varchar(150),
    users_salary int,
    users_id int    
)

--users_information insert data
insert into users_details(users_address, users_join_date, users_phone, users_salary, users_id)
values
 ('kadermarket, gazipur', '2020-5-11', '01720196644', 45443, 2),
 ('jorun, gazipur', '2020-11-11', '01720196645', 5443, 1),
 ('mirpur, dhaka', '2021-5-11', '01720196646', 456443, 3),
 ('sherpur', '2010-5-11', '01720196647', 67544, 4),
 ('jamalpur', '2011-5-11', '01720196648', 1443227, 5),
 ('kashempur, gazipur', '2012-5-11', '01720196649', 1443227, 7),
 ('Mirzapur', '2013-5-11', '01720196650', 153227, 6),
 ('pakistan', '2014-5-11', '01720196651', 153227, 8),
 ('kashmir', '2015-5-11', '01720196652', 563227, 11),
 ('Sylhet', '2016-5-11', '01720196653', 153227, 15)

-- table data  INNER JOIN
SELECT u.id, u.eName, ud.users_address, ud.users_join_date, ud.users_phone, ud.users_salary FROM users u INNER JOIN users_details ud ON u.id = ud.users_id
ORDER BY u.id
-- table data  LEFT JOIN
SELECT u.id, u.eName, ud.users_address, ud.users_join_date, ud.users_phone, ud.users_salary FROM users u LEFT JOIN users_details ud ON u.id = ud.users_id
ORDER BY u.id
-- table data  RIGHT JOIN
SELECT u.id, u.eName, ud.users_address, ud.users_join_date, ud.users_phone, ud.users_salary FROM users u RIGHT JOIN users_details ud ON u.id = ud.users_id
ORDER BY u.id












