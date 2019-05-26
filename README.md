# Fresh Produce Supply
Mock produce store website made in my Web Development class at CSU.

This was worked on in teams of two. Each version of the project involved a partner change, so I was working with a different person for each leg of this.

This project has been uploaded after it and the class were already finished. Each big change to the project has been uploaded in seperate files for clarity to see how the website progressed.

## Project 1

This version had the most basic functionality focusing mainly on the looks of the site. We created it to be mobile-friendly and support temporary comments that get removed once the page has been refreshed. The site contained three pages with ingredients to comment on if the user desired.

## Project 2

jQuery and a SQLite database have been added for this part. Now the ingredient listings are stored in the database and dynamically created when the user accesses the corresponding webpage. A user system has also been implemented with there being three kinds of users: admins (can modify the website), customers (can comment on ingredient listings), and guests (anyone on the site without being logged in, can't comments on ingredient listings). Comments on ingredients are now permanent, being stored in the database and loaded in when the page is accessed. In addition, customers can now add ingredients they would like to purchase to a cart that will keep track of all items that were added.

## Project 3

A JSON status has been added to the website indicating if the site is ready to have other websites pull data from us. A page has been added that utilizes AJAX to pull the JSON status from all other websites of people in the class; if their status is "open" then our website pulls JSON data containing ingredient listings then creates and adds a page for it. Now our website has the same dynamically created ingredient pages as all other websites in the class that have their status set to "open". Users now have the option to reset their password via email. The user will be emailed a one time link that will send them to a special page to input their new password.
