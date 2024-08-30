create database toyshop;

-- drop database toyshop;
use toyshop;
create table categories(
 CategoryID int not null auto_increment primary key,
 CategoryName varchar(100) not null unique,
 CategoryDesc varchar(100) null
);
insert into categories 
values
      (1,'Tomica','A Japanese-oriented brand which focuses mostly on miniature cars.'),
      (2,'Hot Wheels','An American brand of scale model cars.'),
      (3,'Yu-G-Oh!','A famous Trading Card Game known for its sophisticated gameplay and expensive rates.'),
      (4,'One Piece Card Game','Another famous Trading Card Game but is only known for coming out of its anime adaptation.'),
      (5,'Magic: the Gathering','How can this even allowed to be exist? Too toxic.');
select* from categories;

create table admins(
adminID varchar(200) not null primary key,
adminname varchar(300) not null,
adminpassword varchar(300) not null
);
-- drop table admins;

insert into admins
values
('admin01','Tom','Tom123'),
('admin02','Jerry','Jerry123'),
('admin03','Dinh','Dinh123');
select * from admins;

-- drop table customers;

create table customers(
customerEmail varchar(300) not null primary key,
customerPass varchar(300) not null,
customerName varchar(300) not null,
customerAddress varchar(300) null,
customerPhone varchar(100) null
);
select* from customers;

create table products(
ProductID varchar(100) not null primary key,
ProductName varchar(300) not null,
ProductPrice varchar(300) not null,
ProductDetail varchar(300) null,
ProductImg varchar(300) null,
CategoryID int not null,


constraint fk_CategoryID foreign key (CategoryID)
references categories(CategoryID)
);


insert into products
values 
('Product1','N74 Lamborghini Countach LPI 800-4','370000','A miniature of the Lamborghini Countach LPI 800-4','Product1.png',1),
('Product2','YGO Booster Pack: Tactical Masters','400000','A new Booster Pack edition that contains new themes and support to some older, incredible themes','Product2.png',3),
('Product3','OPCG Starter Deck: The Beasts Pirates','327000','A deck featuring Character cards with powerful DON!!-based effects Use your DON!! cards to overwhelm your opponent with hard-hitting effects!','Product3.png',4),
('Product4','Hot Wheels HNR88','116000','Đồ Chơi Siêu Xe Fast And Furious Lykan Hypersport Hot Wheels HRW48/HNR88 ','Product4.png',2),
('Product5','YGO Legendary Collection: 25th Anniversary Edition','2800000','One of the most storied Yu-Gi-Oh! TRADING CARD GAME items returns for the 25th anniversary of the card game!','Product5.png',3),
('Product6','N107 Lamborghini Revuelto','450000','A miniature of the Lamborghini Revuelto','Product6.png',1),
('Product7','MTG Booster Pack: Commander Legends - Battle for Baldur"s Gate','230000','Commander Legends: Battle for Baldur''s Gate Set Boosters contain 15 Magic cards per pack and are the ideal booster to open just for fun','Product7.png',5),
('Product8','OPCG Starter Deck: ONE PIECE FILM Edition','330000','An all-star deck that includes characters from the latest movie "ONE PIECE FILM RED"','Product8.png',4),
('Product9','Hot Wheels C4982 (Set 6 chiếc)','410000','Mô Hình Đồ Chơi Hot Wheels Siêu Xe C4982 - Giao hàng 6 chiếc ngẫu nhiên','Product9.png',2),
('Product10','MTG Collector Booster Pack: Modern Horizons III','1200000','Introducing a heaping helping of exciting cards for Modern, one of Magic''s most celebrated formats, plus the return of competitive favorites, there is something for everyone to love in Modern Horizons III','Product10.png',5);
select* from products;

create table Orders (
OrderID int(11) not null auto_increment primary key,
CustomerEmail varchar(30),
InvoiceDate datetime not null,
InvoicePrice float not null
);

create table OrderDetail (
ProductID varchar(10) not null,
OrderID int not null,
Quantity float,
TotalPrice float,
primary key (ProductID, OrderID),
constraint fk_ProductID foreign key (ProductID) 
references products(ProductID),
constraint fk_OrderID foreign key (OrderID) 
references Orders(OrderID)
);

