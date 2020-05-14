# Scripting Lesson 8 Demo Starter

Run local development using the following:

```
npm install
npm start
```

## Instructions

### Understanding Form Structure

Take a close look at `index-vanilla.html`. See if you can identify each of the following:

* Which set of data is being collected by the form?
* Where is the form data being sent when the form is submitted?
* What method is being used to package the data?

Preview the form in the browser by selecting "Box URL" from the preview dropdown menu. Enter `index-vanilla.html` in the address bar after the provided project domain. Finally, experiment with the form method setting and watch the results in the submission script. 

* How are the `get` method and `post` methods different?

Now take a closer look at each field or group of fields in the form and note the simple semantic structure as well as how the various attributes are used. Choose one field to play with its values:

* What happens when you change the field's `name` attribute?
* What happens when you change the field's `id` attribute?

Look specifically at one of the `radio` widgets and ask the same questions again. 

Hopefully your understanding of how forms work has grown through this exercise.

### Working with Form Values

Open `index.html`. This will look much more complicated than the last file. This is because we've added structure and classes to embelish the form's appearance thanks to the Bootstrap framework. But notice how the same core structure is in place despite all the extra stuff. 

Preview this file in the browser by choosing "Box URL" from the preview dropdown menu. You'll see this page by default. 

Now let's practice working using jQuery to read and change field values.

1. In the provided DRE select the single line text box and read its value. 
2. Do the same for one of the radio buttons. 
3. Do the same for the dropdown box. 

Now let's modify field values.

4. Select the single line text box and change its value to contain your name.
5. Select the dropdown list and change its value to one of the `value` settings for one of its items. 

### Responding to Form Events

Let's practice responding to form events with jQuery.

1. Add an all-in-one that responds to a change event on the dropdown field. As a result, log the field's current value.
2. Add an all-in-one that responds to input events on the single line text field. As a result, log the field's current value.
3. Add an all-in-one that responds to a submit event on the form itself. As a result prevent the default action using `e.preventDefault()`.