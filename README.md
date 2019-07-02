# www.rcdbil.se
Milestone Project  - User Centric Frontend Development - Code Institute  

This is a website for a car dealer in Sweden (RCD BIL AB), the website provides customer with information about location, opening hours, terms and contact information.
# Demo

Live demo [here](https://rawa08.github.io/milstoneProject)

# UX
In general car dealers in Sweden need a website as a secondary option, they are using the Swedish online market Blocket.se as their primary selling platform.
My goal in the design was to adapt the website for three types of customer:
* Customer who want to sell their car, they can get in touch very easy with the "Sälja Bil" button on the callout section.

* Customer who found a car on blocket.se but are curious about the RCDBILS reputation, and visiting the website to get more information about professionalism of the company.
Those customers are met with the “reco.se” widget on the first page, and they can see the company’s rating from other customers.

* Customer who want to buy a car often need information about guarantee, shipment and other after sales services. That information will be found on “faq.html”.



# Features
This site uses Bootstrap’s Modal and Grid system.  
#### Features Left to Implement:
I will add a stock catalog of the Cars, this will be a widget which import all the data from blocket.se  
Updating reCaptcha to V.3  

#### Technologies Used
1.	HTML
2.	CSS
3.	JavaScript
4.	PHP
5.	Bootstrap 4.3
6.	Font Awesome
7.	ReCaptcha V.2

# Testing
If you try to submit the contact form without @ in the email address section, there will appear a text box with an error message.  
If you submit the form without completing reCaptcha, you will be redirected to a page with an error message.  

This site was tested across multiple browsers (Chrome, Safari, Internet Explorer, Firefox) and on multiple mobile devices (iPhone 6s, 7, 7plus, 8, XS: Chrome and Safari, iPad, Samsung Galaxy s9, s10, s10plus, Huawei p20pro) to ensure compatibility and responsiveness.  
During the testing phase, I realized that background-image: fixed was not compatible with browsers on iOS devices: Chrome and Safari, only the top of the background photo appeared.  
To fix this, I changed the size of the background image, converted from jpeg to png, and changed the X & Y properties.

# Deployment
This site is hosted at https://rcdbil.se ,it is a clone of https://rawa08.github.io/milstoneProject deployed directly from the master branch.

# Credits
#### Content
All the text on the website is provided by the company RCDBIL AB  

The backend of the contact form is copied from Adam Bray at
https://www.adam-bray.com/2018/04/02/adding-recaptcha-with-php/  

The code for the background image in every page is copied from Chris Coyier at
 https://css-tricks.com/perfect-full-page-background-image/  
 
# Media
The background image and company logo are provided by RCD BIL AB.  
The three logos in the partner section is provided from each partner.  
# Acknowledgements
I received inspiration for this projects design from Code institute>Course>Bootstrapping Your Next Big Idea With Bootstrap 4   by Matt Rudge https://github.com/Code-Institute-Solutions/BootstrappingYourNextBigIdea-BS4/blob/master/README.md
