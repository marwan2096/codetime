#  Admin panel to manage companies Application

 CRUD functionality (Create / Read / Update / Delete) for two menu 
   items: Companies and Employees.
    Use basic Laravel resource controllers with default methods -
    index, create, store etc.
     Use Laravel's validation function, using Request classes

## auth
 Basic Laravel Auth: ability to log in as administrator
• Use database seeds to create first user with email 
admin@admin.com and password "password
 Use Laravel's starter kit for auth and basic theme, but remove 
ability to register

## database
Companies DB table consists of these fields: Name (required), 
email, logo (minimum 100x100), website
• Employees DB table consists of these fields: First name (required), 
last name (required), Company (foreign key to Companies), email,
phone
• Use database migrations to create those schemas above

### Dependencies

* laravel,bootstap,html,css and javascripit
*  Windows 10

### bonus
 Store companies’ logos in storage/app/public folder and make 
them accessible from public
 Use Laravel's pagination for showing Companies/Employees list, 
10 entries per page
profile controller



