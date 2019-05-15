## Restaurant theme Uno
Simple and clean theme for restaurants.

### Required plugins
1. Advanced custom fields PRO - https://www.advancedcustomfields.com/pro/
2. Contact form 7 - https://sr.wordpress.org/plugins/contact-form-7/
3. Mailchimp for WordPress - https://nl.wordpress.org/plugins/mailchimp-for-wp/

**NOTE: Install plugins first.**

### Instructions
1. git clone https://github.com/WappstarsBV/rt-uno.git in local wp-content/themes
2. cd rt-uno
3. npm install
4. gulp watch

### Editing
* Main theme color is located in src/scss/variables-site/_colors.scss under variable $main-color
* Fonts are included on the top of file style.scss located in src/scss
* Change fonts in src/scss/variables-site/_typography.scss
* ACF fields and form templates are located in respective folders

### This is what you get if you use default settings:

![Alt text](homepage.jpg?raw=true "Homepage")