create database chatbot

use chatbot




/*  User table  

primary key: user_id
foregn key: personal_detail_id */

drop table users
create table users(

  user_id INT PRIMARY KEY,
  user_name VARCHAR(45),
  password VARCHAR(45),
  personal_detail_id INT,
  user_status INT,
  user_code VARCHAR(255),
  usercode_type INT,
  display_name VARCHAR(255)

);



/*  business_user_role

primary key: business_user_role_id
foregn key: user_id,business_detail_id
*/

drop table business_user_role
create table business_user_role(
business_user_role_id INT PRIMARY KEY,
business_role INT,
user_id INT,
business_detail_id INT,
active_id INT,

FOREIGN KEY(user_id) REFERENCES users(user_id) ON DELETE SET NULL

);




/*  business_role

primary key: business_role
foregn key: 
*/

drop table business_role
create table business_role(
business_role INT PRIMARY KEY,
business_role_name VARCHAR(80),
business_role_decs VARCHAR(255),
active_id INT

);





/*  business_detail

primary key: business_detail_id
foregn key: 
*/
drop table business_detail
create table business_detail(

business_detail_id INT PRIMARY KEY,
businessName VARCHAR(50),
logoName VARCHAR(100),
logoFileName VARCHAR(55),
business_Address VARCHAR(100),
business_Email VARCHAR(50),
business_Phone VARCHAR(45),
businessFax VARCHAR(45),
business_City VARCHAR(45),
businessState VARCHAR(45),
businessZip VARCHAR(45),
businessTypeId INT,
active INT,


);




ALTER TABLE business_user_role
ADD FOREIGN KEY(business_detail_id)
REFERENCES business_detail(business_detail_id)
ON DELETE SET NULL;






/*  category Table

primary key: category_id
foregn key: business_detail_id
*/

drop table category
create table category(

category_id INT primary key,
category_text VARCHAR(255),
category_type INT,
sort_order INT,
business_detail_id INT,
active INT,
created_date DATETIME,
modifiedby INT,
modified DATETIME,


FOREIGN KEY(business_detail_id) REFERENCES business_detail(business_detail_id) ON DELETE SET NULL
);




/*  category Table

primary key: subcategory_id
foregn key: category_id
*/

drop table subcategory
create table subcategory(

subcategory_id INT primary key,
category_id INT,
category_text VARCHAR(255),
category_type INT,
sort_order INT,
active INT,
created_date DATETIME,
modifiedby INT,
modified DATETIME,


FOREIGN KEY(category_id) REFERENCES category(category_id) ON DELETE SET NULL
);




/*  personal_info

primary key: personal_detail_id
foregn key: 
*/

drop table personal_info
create table personal_info(

personal_detail_id INT primary key,
First_Name VARCHAR(255),

Last_Name VARCHAR(255),

Email_Id VARCHAR(255),

Phone_Number VARCHAR(255),

Profile_Pic_Name VARCHAR(255),

Profile_Pic_FileName VARCHAR(255)

);

ALTER TABLE users
ADD FOREIGN KEY(personal_detail_id)
REFERENCES personal_info(personal_detail_id)
ON DELETE SET NULL;
