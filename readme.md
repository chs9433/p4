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
+ Users can add/load(read)/delete audits
+ Each loaded audit has a dashboard page which presents a short overview of the audit information created by the end-user

## Database summary
+ My application has 3 tables in total (`audits`, `locations`,`sites`)
+ There's a one-to-many relationship between `locations` and `audits`

## Packages
+   barryvdh/laravel-debugbar

## Code style divergences
None

## Notes for instructor
+ Site data is seeded for the 'Tri State' submarket only. If you create and/or load audits for other markets then the 'Site List' section of the dashboard will be empty.
+ There are multiple unused views, tables/migrations, seeders, models, routes and controllers that you should disregard. Those were added as placeholders for my deliverable for work.
