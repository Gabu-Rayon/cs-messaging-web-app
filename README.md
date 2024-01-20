# CS Messaging web App

Technology Used 
              
               PHP-Laravel 
               HTML5
               CSS3
               JAVASCRIPT
               JQUERY
      
 Requirement
    
           PHP >7.0*
           XAMPP 
           Composer 

Install Xampp  

          https://www.apachefriends.org/download.html
Download Composer Also you can use the command listed in the site to instal using CMD

            https://getcomposer.org/download/        
   
Steps to Run the Application


1.Clone the Application using either SSH /HTTPS from this Git Repo to Htdocs directory in your Xampp

HTTPS 

                 https://github.com/Gabu-Rayon/cs-messaging-web-app.git

SSH 

                git@github.com:Gabu-Rayon/cs-messaging-web-app.git
                
2.Navigate to the directoryof your project in the CMD and Run

                composer update 
3.Next run  to open the project in IDE

                  code .
                  
4.Navigate to the  .env file and enter the name of your database  e.g my-project-db

5.Next Run in the CMD to create database table

            php artisan migrate 

it will ask for the database name if not created  enter on

6.Run  this to serve you project and open 

             php artisan serve
7.Open you project in the browser up and running in you local laptop !!!

        http://127.0.0.1:8000



#Happy Coding  #Like my work Buy me a coffee mail me here gibsonmurimi4@gmail.com 






