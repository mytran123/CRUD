CREATE DATABASE `shop-online`;
USE `shop-online`;

CREATE TABLE `categories`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar (50)
)

CREATE TABLE `products`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar (50),
    price varchar (50),
    description text
)

CREATE TABLE `category_product`(
    id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT,
    product_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
)

INSERT INTO `products` (`name`, `price`, `description`) VALUES
("Nike", "300000", "Giầy xịn, giá kì"),
("Purma", "200000", "Giầy xịn, giá kì"),
("Adidas", "500000", "Giầy xịn, giá kì"),
("Auth", "150000", "Giầy Việt Nam, chất lượng chưa rõ"),
("Kappa", "200000", "Giầy Xuân tóc Đỏ"),
("Tổ ong", "10000", "Dép quốc dân")

INSERT INTO `categories` (`name`) VALUES
("Adidas"), ("Purma"), ("VNShoes"), ("Nike")

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(1,3),(1,2),(1,4)

SELECT categories.name,products.* FROM `categories`
INNER JOIN `category_product` ON categories.id = category_product.category_id
INNER JOIN `products` ON category_product.product_id = products.id
WHERE categories.id = 2

CREATE TABLE `users`(
    id int primary key auto_increment,
    name varchar (255),
    email varchar (255) unique,
    password varchar (255)
)