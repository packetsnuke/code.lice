=== Easy Smooth Scroll Links ===
Contributors: Jeriff Cheng
Donate link: http://www.jeriffcheng.com/donate
Tags: smooth scroll,jquery smooth scroll div,smooth scroll jquery,smooth scroll chrome,smooth scroll firefox,smooth scroll javascript,smooth scroll to anchor,smooth scroll plugin,smooth scroll tutorial,anchor,anchor text, page to id
Requires at least: 3.8
Tested up to: 4.8
Stable tag: trunk
License: GPLv2+
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

ESSL Wordpress plugin adds interesting scroll animation effects to page anchors, smooth scroll and more.

= Major Features =
* You can set scroll speed and offset value. 
* Choose from 30 Scrolling Animation Effects
* You can exclude certain anchors from scrolling.
* Works on all major browsers: IE, Firefox, Chrome, Safari...
* Visual Editor Anchor Button
* Shortcode Supported [anchor]anchorname[/anchor]

== Installation ==

1. Navigate to the 'Add New' in the plugins dashboard
2. Search for 'Easy Smooth Scroll Links'
3. Click 'Install Now'
4. Activate the plugin on the Plugin dashboard

== Frequently Asked Questions ==

= It doesn’t work ! =
It should work on all major browsers and all modern wordpress themes. If it doesn’t,  there are mainly 2 kinds of problems:

* Missing of required js files. There should be jquery.easing file loading after jQuery.js file.  If not, the reason can be complex, maybe plugin conflicts, maybe theme not compatible…

* Incorrect anchor url writing,  for example, my wordpress website is  [http://www.jeriffcheng.com/](http://www.jeriffcheng.com/)  then I should put http://www.jeriffcheng.com/#about  in menu, if I forgot the www and use http://jeriffcheng.com/#about , things just go wrong…

= How many animation effects does this plugin support?  =
They are actually Easing functions, read more : [http://easings.net/](http://easings.net/)

For more, refer to [http://www.jeriffcheng.com/wordpress-plugins/easy-smooth-scroll-links](http://www.jeriffcheng.com/wordpress-plugins/easy-smooth-scroll-links)

== Screenshots ==
1. Plugin Options Page
2. Animation Effects
3. TinyMCE Editor Anchor Button
4. Input Anchor Name

== Changelog ==
= 2.1.1 =
* Load minified version of jquery.easing js file from cloudflare.
* Translation ready.
= 2.1 =
* WordPress 4.5 jQuery fix
= 2.0 =
* Choose to enable Scrolling from One Page to Another or not. This feature is experimental, might cause conflict with some slider plugins, or blank pages. 
= 1.9 =
* Experimental Feature: smooth scroll from one page to another.  Read more: 
* GoToTop button Removed
= 1.8 =
* Visual Editor Anchor Button now using id attribute instead of name. 
= 1.7 =
* WordPress 3.9 Compatible
* Links in Image Map are now supported
= 1.6 =
* New:  Option to set offset for GoToTop Button.
= 1.5 =
* New: Option to enable Go To Top Button (with custom scroll speed and animation effect)
= 1.4 =
* New: You can now exclude certain anchors from scrolling
*Imoprove: Set default scrolling animation effect to more smooth 'easeInQuint' 
= 1.3.2 =
* New: Added 30 Scrolling Animation Effects
* Fix: Prevent saving empty input fields
= 1.3.1 =
* Fix: wp enqueue script error  when turning WP_DEBUG mode on
= 1.3 =
* New: You can set scroll speed and offset value on WordPress backend now !
= 1.2 =
* Fix：Chrome Compatibility Problem
* Fix: wp_enqueue_script was called incorrectly
= 1.1 =
* New : Add Page Anchor Shortcode.
Changed : Use wp_enqueue_script function to load the script instead of the default <script> tag.
= 1.0 =
* First Version
== Upgrade Notice ==
= 2.1 =
* WordPress 4.5 jQuery fix