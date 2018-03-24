# Posters

Single page to practice querying arrays in PHP (data - JSON format).
Webpage design replicated from Junique.com.

## Key elements

* A Filter & Sort system to only display posters that match various criteria.
-> Users can sort posters by price or popularity (in reality returns array randomly as data set is not included in JSON).
-> Users can filter posters by theme or style. The selected criteria will then be matched to case in a switch statement which will then query the arrays according to set condition and return the posters that match that condition.  
-> All posters in dataset are displayed by default

* A Search bar that returns posters based on match.
I integrated a jQuery plugin (autocomplete) and tweaked elements to return posters based on true match and add extra information. I modified the design to match the website look and feel.

* A Toast plugin that is fired whenever user clicks on icon to save a poster to product wishlist.
The Toast notification was modified to match the website look & feel. Furthermore the icon that triggers the toast plugin changes color fill to notify user when product was added and removed.

* The total amount of posters currently on page is automatically updated whenever the user is filtering posters.

* Poster images change when user hovers on image.

![Preview page](https://github.com/clairedonut/json_posters/blob/master/preview.png)
