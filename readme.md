# Zemoga Test

This is WordPress project which hhave two custom developed plugins.

Installation:

This project is able to run on a Apache Server with a MySQL database. Just clone this reporsitory in a folder in your local machine, configure a new virtualhost in Apache, import the database ( ```zemoga.sql``` in the root directory ) and change the site_url in ```wp_options```

The Wordpress user credentials are:
##### Username: carlos
##### Password: admin

##### Fields page: ```http://sire_url/fields```
##### Path of the template file: ```/wp-content/themes/zemoga/page-templates/fields.php```
##### Wizard form page: ```http://site_url/wizard-form```

##### These are the main aspects and decisions I made regarding this exercise:
### 1. The fields page
Here I developed a custom plugin called Zemoga Fields to generate a metabox in the pages which use the 'Fields' template. The idea behind that metabox is to allow content manager to add information about developers in the page. When a content manager creates a page and set  'Fields' as the template, then he will see an extra metabox with a single button called 'Add Developer', if he clicks the button he will see a square where he can enter information about a developer (name, photo, caption of the photo and a link to a external site). The content manager can add as many developers as he want. The information in the developers field are the shown in the page in a responsive grid fashion.

#### Technical aspects
To implement the repeateable fields in the page edit screen I used jQuery to generate every fields group (developer), the HTML code is sent from the server with the ```wp_localize_script``` method, this way the template code stay in one place. The scripts and the styles are enqueued only when a edit screen of a page with the 'Fields' template s showing. When an content manager click the update button in the edit screen, the fields are sent to the server ( specifically the ```save_fields``` method in the ```ZemogaFields``` class) where they are sanitized and then saved as a metadata.

#### Considerations (not implemented) :
* A mechanism that allows the content manager to set the order of the developers in the frontend. (Drag and Drop)

### 2. The Wizard Form

I developed a custom plugin called Zemoga Wizard Form which generate a wizard form. To show the wizard form in any page, a content manager have to use a shortcode (```[zwf]```). The form has 2 steps, in every step the user has to enter som information about him, at the end the user receives a notification telling him his account has been created.

#### Technical aspects

To implement the wizard form I created a shortcode with no parameters, this shortcode shows the HTML output for the form. The method responsible for that is the  ```html_output``` from the ```ZWFShortcode``` class, this method also enqueues the JS and CSS files, note this files are enqueued only the wizard form is showing, this way the page load this files only when they are needed. When an user click the button 'Next' in the first step, the data is sent to the server which is processed by a method called ```process_data``` in the class ```ZWFAJAX```, which sanitize and validate the data and save it in a SQL table called ```wp_zemoga_users```. There is a different process for every step, so, if the user sent data from the step 1, a new user is inserted in the database along with the data, as a result, the server retrieve a success message and the id of the new user, this id is used to track the user that is being created. When the user sends the data from the second step, the AJAX code add the user_id recieved the preview step to the data object sent to the server, the server receives the data and user_id and complete the columns of the user row in the database. 

#### Considerations (not implemented) :
* It would be nice to implement browser cookies so an user can close the page, do other things and go back after to continue the form in the step he was before he left.
* It would be nice to have form effects, like loading icons and other animations.
* A mail notification to the user when his account is created.