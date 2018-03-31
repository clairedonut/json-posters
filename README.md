# Posters

Single page to practice querying arrays in PHP (data - JSON format).
Webpage design replicated from Junique.com. 

Please check to latest version [here](http://cookiesandwifi.ovh/json-posters/)

## Key elements

* A Filter & Sort system to only display posters that match various criteria.

-> Users can sort posters by price or popularity.  

-> Users can filter posters by theme or style. A switch statement will then match the user's selection to the matching case which will tehen query the data array according to the set condition from the case and return the posters that match that case.

-> By default, all posters from the dataset are displayed.

* A Search bar that returns posters based on match.
I integrated a jQuery plugin (autocomplete) and tweaked elements to return posters based on true match and add extra information. I modified the design to match the website look and feel.

* A Toast plugin that is triggered whenever the user clicks on an icon that saves a poster to the product wishlist.
The Toast notification was modified to match the website look & feel. Furthermore the icon that triggers the toast plugin changes color depending on the product being added or removed from product wishlist.

* The total amount of posters currently on page is automatically updated whenever the user is filtering posters.

* Poster images change when the user hovers on the image.

![Preview page](https://github.com/clairedonut/json-posters/blob/master/preview.png?raw=true)
