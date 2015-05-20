-- SUMMARY --

Simple module that provides a block with the latest updates from Facebook for
the provided account. It is based on the likebox social plugin (now Page Plugin):
https://developers.facebook.com/docs/plugins/page-plugin. The widget
settings are configurable directly in the block  and they are available for 
users with 'administer blocks' permission.


-- REQUIREMENTS --

* None.


-- INSTALLATION --

* Install as usual, see http://drupal.org/node/70151 for further information.


-- CONFIGURATION --

* Go to Site > List > 'Theme' in D6 or Structure > Blocks > 'Theme' in D7
* The block will be called "'Your site name' on Facebook"
* Click on 'configure':
* Add the Facebook Page (i.e.: http://www.facebook.com/wikisaber.es) and
  configure the display and appearance settings.

 - Configuration examples:

 -- A) Faces and Cover photo (default)
 --- Show Stream: No
 --- Show Faces: Yes
 --- Hide Cover Photo: No
 --- Height: 556

 -- B) Without Faces
 --- Show Stream: Yes
 --- Show Faces: No
 --- Hide Cover Photo: No
 --- Height: 292

 -- C) Without Stream and Faces
 --- Show Stream: No
 --- Show Faces: No
 --- Hide Cover Photo: No

 -- D) Only Faces
 --- Hide Cover Photo: No
 --- Show Stream: No
 --- Show Faces: Yes
 --- Height: 330

-- CONTACT --

david.rozas@gmail.com
