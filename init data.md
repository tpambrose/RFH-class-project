# inserting into freelancer table

INSERT INTO freelancer (name,email,password,field,profile_pic,location,language,rating,bio,website) VALUES ("NIYONZIMA Eric", "niyonzimaeric@gmail.com", "12345", "Photographer", "http://localhost/freelancehub/images/Ellipse%202.png","HUYE","ENG, KINY","4", "Lorem ipsum, dolor sit goji amelete amet consectetur","niyonzimaeric.com");

INSERT INTO freelancer (name,email,password,field,profile_pic,location,language,rating,bio,website) VALUES ("UWIMANA Ange", "uwi ange@gmail.com", "12345", "Event Planner", "../images/R\ \(3\).jpg","KIGALI","ENG, FRENCH","5", "Lorem ipsum, dolor sit goji amelete amet consectetur","uwimanaAnge.com");

INSERT INTO freelancer (name,email,password,field,profile_pic,location,language,rating,bio,website) VALUES ("UWASE Divine", "uwaseDivine@gmail.com", "12345", "Photography", "../images/R\ \(2\).jpg","Musanze","ENG, KINY","5", "Lorem ipsum, dolor sit goji amelete amet consectetur","uwasedivine.com");

"INSERT INTO freelancer (rating,bio,website,name,email,password,field,profile_pic,location,language) 
        VALUES (4,$bio, $website,$name,$email,$pass,$field,$pic,$location ,'ENG, KINY')";


# inserting into employer table

INSERT INTO employer (name,email,password,location,profile_pic) VALUES ("SHEJA Lervy Emeric","shejaemeric2@gmail.com","123","Huye","../images/R\ \(2\).jpg");

INSERT INTO employer (name,email,password,location,profile_pic) VALUES ("SHEMA Eric","shemaeric@gmail.com","123","Kigali","../images/R\ \(2\).jpg");



# inserting into projects table

INSERT INTO projects (name, category,pictures,lancer_id) VALUES ("Mucyo Wedding",""../images/R\ \(3\).jpg","Wedding Photos",002);

INSERT INTO projects (name, category,pictures,lancer_id) VALUES ("hirwa Graduation",""../images/R\ \(3\).jpg","Graduation Photos",002);

# inserting into jobs table

INSERT INTO jobs (employer_id,lancer_id,description) VALUES (001,002,"need a photographer for my graduation, price is negotiable");

INSERT INTO jobs (employer_id,lancer_id,description) VALUES (002,003,"need an event planner for the graduation of my students, must have experience of fibe years, price is negotiable");

# sending an email using php


