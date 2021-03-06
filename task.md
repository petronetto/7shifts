# 7Shifts Challenge


At 7shifts we talk a lot about locations, users and time punches. This defines a user and their settings, where a user works (location) and what hours they worked (time punches).


The different data sets for locations, users and time punches can be found at the following addresses, no authentication is required.


- https://shiftstestapi.firebaseio.com/locations.json

- https://shiftstestapi.firebaseio.com/users.json

- https://shiftstestapi.firebaseio.com/timePunches.json


Your job is to make a request to these end points and calculate the hours a user worked over all, and broken down by location. You must calculate the regular hours, as well as daily and weekly overtime hours. Overtime rules come from a location’s setting. Overtime is triggered one of two ways. If an employee works more than X hours a day (daily overtime), or more than Y hours a week (weekly overtime). Overtime is paid for whichever overtime number is greater.


Using the given data set in JSON format calculate an employee’s worked hours and their overtime.

### Overtime Examples
Location settings have overtime starting at 8 hours daily, or 40 hours weekly. (In the locations data these are specified in minutes, so 480 and 2,400 minutes respectively.

- Ryan works 5 days, 8 hours each (40 hours a week) he is not paid overtime.

- Evan works 40 hours for the whole week, but on Monday he works 12 hours and on Tuesday only 4 (and 8 hours Wednesday - Friday) then Ryan is paid 36 hours of normal pay and 4 hours of overtime pay.

- If Martina works 48 hours in a week (8 hours Monday - Saturday) she is paid 40 hours normal rate and 8 hours overtime pay rate.

## Bonus 1
When the data has been processed, list the users in a sortable JavaScript table by user, and show their worked hours, and overtime hours, profile picture

## Bonus 2
Use the following end point (https://shiftstestapi.firebaseio.com/receipts.json) to pull in sales information for a given location

Calculate the sales for a given location by adding all the sales receipts together

Using a graphing library (like high charts), graph the cost of labour against the sales for the location
