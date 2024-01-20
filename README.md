# CS Messaging web App

In this project, I Have address the challenge of handling a high volume of customer inquiries
while flagging the most urgent issues. The main objective I have built a simple messaging web
application for Chatting that can scale with a company as they grow theiir customer base.
The Web App covers this 

I) messaging web application that  responses to incoming questions
sent by  customers. The system  allows a team of agents to respond to incoming messages from (potentially many) customers in a streamlined fashion. 
the system is design  so that multiple agents can log in at the same time and respond to incoming messages (authentication not  handled).

II)For testing  Customer sending Messages I have implement  an API endpoint which  issimulated via a  a postman collection also using simple web form 

III)For Extra addition I have provided a SQL query containing tables queries showcasing how the database look like

IV)The code as  Simple scheme that  help agents divide work amongst themselves, and to prevent multiple agents working on the same message at once.

V)The code as  Simple scheme that  helps Explore ways to surface messages that are more urgent and in need of immediate attention.

VI)The code alsoImplement search functionality to allow agents to search over incoming messages and /or customer's attention.

Technology Used 
              
               PHP-Laravel 
               HTML5
               CSS3
               JAVASCRIPT
               JQUERY
      
 Requirements
    
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

it will ask for the database name if not created  enter one

6.Run  this to serve you project and open 

             php artisan serve
7.Open you project in the browser up and running in you local laptop !!!

        http://127.0.0.1:8000



#Happy Coding  #Like my work Buy me a coffee mail me here gibsonmurimi4@gmail.com 






