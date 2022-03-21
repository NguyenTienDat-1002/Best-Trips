drop database if exists travelmanagement;
create database travelmanagement;
use travelmanagement;

create table `User`
(
	id int auto_increment,
    username varchar(50) unique,
    `password` varchar(30),
    full_name varchar(100),
    `role` varchar(10),
    primary key(id)
);

create table Tour
(
	id int auto_increment,
    title varchar(50),
    price decimal(6,2),
    duration int,
    departure_point varchar(50),
    departure_time datetime,
    overview varchar(200),
    img varchar(200),
    primary key(id)
);

create table Tour_Itinerary
(
	id int auto_increment,
    tour_id int,
    `name` varchar(50),
    `description` varchar(200),
    foreign key (tour_id) references Tour(id),
    primary key(id)
);

create table Tour_Highlight
(
	id int auto_increment,
    tour_id int,
    highlight varchar(100),
    foreign key (tour_id) references Tour(id),
    primary key(id)
);

create table Tour_Review
(
	id int auto_increment,
	user_id int,
	tour_id int,
    rate tinyint,
    `comment` varchar(200),
    foreign key (user_id) references `User`(id),
    foreign key (tour_id) references Tour(id),
    primary key(id)
);

create table Booking
(
	id int auto_increment,
    user_id int,
    tour_id int,
    foreign key (user_id) references `User`(id),
    foreign key (tour_id) references Tour(id),
    primary key(id)
);

create table Ticket_Type
(
	`type` bit(1),
    discount tinyint,
    primary key(`type`)
);

create table Ticket
(
	id int auto_increment,
	booking_id int,
    ticket_type bit(1),
    foreign key (booking_id) references Booking(id),
    foreign key (ticket_type) references Ticket_Type(`type`),
    primary key(id)
);

insert into `User`(username, `password`, full_name, role)
values ('adminphuc', 'phucnguyen', 'Nguyen Tan Phuc', 'Admin'),
('admindat', 'datnguyen', 'Nguyen Tien Dat', 'Admin'),
('adminkhoe', 'khoengo', 'Ngo Minh Khoe', 'Admin'),
('employee1', 'employee1', 'Employee 1', 'Employee')
('employee2', 'employee2', 'Employee 2', 'Employee')
('customer1', 'customer2', 'Customer 1', 'Customer')
('customer2', 'customer2', 'Customer 2', 'Customer');

insert into Tour(title, overview, img) 
values('Tour 1', 'Tour 1 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img1_knmwxo.jpg'),
('Tour 2', 'Tour 2 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img2_dvtdyh.jpg'),
('Tour 3', 'Tour 3 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img3_bxk0we.jpg'),
('Tour 4', 'Tour 4 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505688/travelmanagementproject_tourimg/img4_qsmmvd.jpg'),
('Tour 5', 'Tour 5 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png'),
('Tour 6', 'Tour 6 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png'),
('Tour 7', 'Tour 7 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png'),
('Tour 8', 'Tour 8 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png'),
('Tour 9', 'Tour 9 Overview', 'https://res.cloudinary.com/petern/image/upload/v1647505689/travelmanagementproject_tourimg/img5_cwgw9n.png');

insert into Tour_Highlight(tour_id, highlight)
values(1, 'Highlight 1-1'),
(1, 'Highlight 1-2'),
(2, 'Highlight 2-1'),
(2, 'Highlight 2-2'),
(3, 'Highlight 3-1'),
(3, 'Highlight 3-2'),
(4, 'Highlight 4-1'),
(4, 'Highlight 4-2'),
(5, 'Highlight 5-1'),
(5, 'Highlight 5-2'),
(6, 'Highlight 6-1'),
(6, 'Highlight 6-2'),
(7, 'Highlight 7-1'),
(7, 'Highlight 7-2'),
(8, 'Highlight 8-1'),
(8, 'Highlight 8-2'),
(9, 'Highlight 9-1'),
(9, 'Highlight 9-2');

insert into Tour_Itinerary(tour_id, name, description)
values(1, 'Day 1: Go to...', 'Day 1 description'),
(1, 'Day 2: Go to...', 'Day 2 description'),
(1, 'Day 3: Go to...', 'Day 3 description'),
(2, 'Day 1: Go to...', 'Day 1 description'),
(2, 'Day 2: Go to...', 'Day 2 description'),
(2, 'Day 3: Go to...', 'Day 3 description'),
(3, 'Day 1: Go to...', 'Day 1 description'),
(3, 'Day 2: Go to...', 'Day 2 description'),
(3, 'Day 3: Go to...', 'Day 3 description'),
(4, 'Day 1: Go to...', 'Day 1 description'),
(4, 'Day 2: Go to...', 'Day 2 description'),
(4, 'Day 3: Go to...', 'Day 3 description');

insert into Ticket_Type(type, discount)
values(0, 0), (1, 25);

insert into Booking(user_id, tour_id)
values(6, 1),
(7, 3);

insert into Ticket(booking_id, ticket_type)
values(1, 1),
(1, 0),
(1, 0),
(2, 0),
(2, 0);

insert into Tour_Review(user_id, tour_id, rate, comment)
values(6, 1, 4, 'User review'),
(6, 2, 3, 'User review'),
(7, 3, 4, 'User review');