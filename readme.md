# Project 4
+ By: Christopher Sheppard
+ Production URL: <http://p4.sheppify.me>
+ Local URL: <http://p4.loc>

## Outside resources
+ Bootstrap 4.3.1 (CSS): <https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css>
+ Font Awesome 5.8.1 (CSS): <https://use.fontawesome.com/releases/v5.8.1/css/all.css>
+ CSS Info Cards - Hover (Pen by Rafaela Lucas): <https://codepen.io/rafaelavlucas/pen/rQWJYG>
+ Bootstrap Floating Labels (CSS): <https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css>

## Feature summary
*Outline a summary of features that your application has. The following details are from a hypothetical project called "Movie Tracker". Note that it is similar to Foobooks, yet it has its own unique features. Delete this example and replace with your own feature summary*

+ Visitors can register/log in
+ Users can add/update/delete movies in their collection (title, release date, director, writer, summary, category)
+ There's a file uploader that's used to upload post images for each movie
+ User's can toggle whether movies in their collection are public or private
+ Each user has a public profile page which presents a short bio about their movie tastes, as well as a list of public movies in their collection.
+ Each user has their own account page where they can edit their bio, email, password
+ Users can clone movies from another user's public collection into their collection
+ The home page features
  + a stream of recently added public movies
  + a list of categories, with a link to each category that shows a page of movies (with links) within that category

  ## Database summary
*Describe the tables and relationships used in your database. Delete the examples below and replace with your own info.*

+ My application has 3 tables in total (`users`, `movies`, `categories`)
+ There's a many-to-many relationship between `movies` and `categories`
+ There's a one-to-many relationship between `movies` and `users`

## Packages
+   barryvdh/laravel-debugbar
+   phpoffice/phpword
+   phpoffice/phpspreadsheet
+   phpoffice/phpvisio
+   phpoffice/phppresentation
+   phpoffice/phpproject
+   phpoffice/common
+   adldap2/adldap2-laravel
+   dompdf/dompdf
+   fullcalendar/fullcalendar
+   consoletvs/charts
+   mobiledetect/mobiledetectlib
+   composer require twbs/bootstrap
+   nolimits4web/swiper
+   jeroendesloovere/vcard
+   nicat/static-map
+   softon/sweetalert
+   datatables/datatables
+   barryvdh/laravel-dompdf
+   adldap2/adldap2-laravel
+   geocoder-php/mapquest-provider
+   toin0u/geotools-laravel

## Code style divergences
None

## Notes for instructor
None
