# Library, Hostel, Video Learning Management System
## Course: Internet Technologies (CA545)

Roll No.: 19MCME08<br>
Institution: University of Hyderabad<br>
Assigned By: Prof. Nagender Kumar Suryadevara<br>
Technologies Used: WAMP Stack (PHP and HTML for front end, MySQL for backend)

## Functionalities
This web project performs three basic functionalities:
1. Library Management System
2. Hostel Management System
3. Online Video Learning Course Management System

There are two user types:
1. Admin
2. Student (the target audience)

It is worth noting that upon logging in to one of the user types, all three functionalities will be available to the user.

### Library Management System (LibMS)
The admin has the authority to do the following:
1. **Add** a book - Add book name, author and quantity for a given book ID. The original quantity is stored as the quantity mentioned at the time of adding
2. **Update** book details - Update any of the book details. Although the original attributes of a book are included in the Update page, the admin may/may not fill all the fields. He/She is required to fill the book ID and zero/more other attributes
3. **Delete** book details - Delete book details for a given book ID
4. **Issue** a book to a student - Enabling the student to borrow a book, based on a given book ID
5. Facilitate the **return** of the book to the library, by the student

The student can do the following:
1. **View** borrowed books
2. **Search** for books by name or author

### Hostel Management System (HostlMS)
The admin has the authority to do the following:
1. **Add** a room - Add room number and its corresponding floor number
2. **Update** room details - Update any of the room details based on room number and floor number
3. **Delete** room details - Delete room details for a given room
4. **Allot** a room to a student - Enabling the student to occupy a room, based on a given room number
5. Facilitate the **vacation** of the room by the student

The student can **view** alloted hostels

### Online Video Learning Course Management System (OVL)
The admin has the authority to do the following:
1. **Add** a lesson - Add lesson name and link for a given lesson ID
2. **Update** lesson details - Update any of the lesson details. Although the original attributes of a lesson are included in the Update page, the admin may/may not fill all the fields. He/She is required to fill the lesson ID and zero/more other attributes
3. **Delete** lessons details - Delete lesson details for a given lesson ID

The student can do the following:
1. **View** lessons
2. **Search** for lessons by name

## Assumptions
1. Each student occupies 1 hostel room, all to himself/herself
2. No other student can occupy a hostel room already occupied by another student
3. The OVL does not discriminate lessons based on subjects
4. Floor 0 is the ground floor
5. A user may search for only a substring of the actual field to be searched

## Others

### Styles
Provided in the **css** folder, each .css file stylizes a given set of webpages.<br>
<ins>For example:</ins> **style.css** will be used for the Library Management System<br><br>
Additionally, there are images provided in the **images** folder which serve as backgrounds for certain pages

### Validations
Inline HTML validations have been included, along with JavaScript and PHP validations
