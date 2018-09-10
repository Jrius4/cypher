# aircomplete
Simple-ish autocomplete/typeahead jquery plugin

## Installation
Just include the Javascript file after you've included jQuery.

## Basic Usage:

```html
<h3>Basic Example</h3>
<label for="basic-example">Start typing a planet name</label>
<input type="text" id="basic-example"/>
```
```javascript
$("#basic-example").aircomplete({
    data: [
        "Mercury",  "Vulcan", 
        "Venus",    "Earth",
        "Mars",     "Counter-Earth",
        "Ceres",    "Jupiter",
        "Saturn",   "Uranus", 
        "Neptune",  "Planet X",
        "Pluto",    "Nibiru"
    ],
    onSelect: function(data){
        return data;
    },
    minSearchStringLength : 1// show results after a single character is entered
});

```

