##Changelog##
###last update: 13 Jul 2012###

1. INSTALLATION INSTRUCTIONS
   You will need some web space, your own web server or a Wordpress.com installation.
   Your server/web space needs to be able to understand PHP 4 or better to use musify.php - ask whoever hosts the space. 
   If it doesn't, don't worry - just use musify.js instead.

   Extract the archive and upload the files to your server (or upload the archive and extract it on your server).
   
   Then use your web browser to look at <http://musify.coreymwamba.co.uk/>
   
   Thanks for trying musify!

2. SUPPORT
   If you're stuck or something doesn't work, get in touch at <http://www.coreymwamba.co.uk/contact/>

3. CHANGES
   ##2013
   ###12 Jan
   The triangle symbol - whatever you think it means - is now no longer superscripted by default.

   
   ##2012
   ###1 Sep
   For some reason - and I'll be blown if I can find out out what that reason is - the abbr element for flats was repeating itself. So I've fixed it.
   ###13 Jul
   1. modified the ties so that they now look better, at least here.
   2. changed the flat, sharp, double sharp, natural, diminished and half-diminished symbols to abbreviations in the PHP version only.
   3. added a single bar simile mark (%) - thanks to Charlie Evans for bringing it to my attention!
   ###29 May
   1. added a function called musify_tag to PHP only - BBCode-like. Wrapping text in **[mus]...[/mus]** will transform it. Can be used with Markdown as long as the function does its magic before Markdown.
   2. Made a stab at a Drupal module. No idea if it works but it should.
   ###26 May
   1. I've finally worked out a way of adding double sharps - documentation amended
   2. Changed the codes of certain characters (ties, half diminished,  set theory brackets) so they have more of a chance of showing up - but using a Unicode font is essential.
   3. Development now on coreymwamba.co.uk rather than Sourceforge - SVN is overkill for such a small project
   
   ##2011
   ###22 Jun
   1. I've removed automatic parsing of sevenths, since the user should always be able to choose. You can superscript a dominant seventh in the usual way: [[...]].
   2. Because musify doesn't have to parse sevenths any more, I've declared musify stable. 
   3. I've amended the documentation.
   
   ##2010
   ###27 Nov
   1. Adam Faur has added WordPress integration, using the Shortcode Exec PHP plugin and two extra lines of code.
   2. I have removed all redundant lines of code from the PHP file.
   
   ###5 Nov
   1. After much wrangling with Sourceforge's PHP server, I decided to change the sub-scripting method to [-...-]. These changes are reflected in the SVN too.
   
   ###14 Oct 
   1. sevenths should align properly now. Really.
   2. ordered pitch class brackets are now available in JavaScript.
   3. massive clean up of code, but only to my standards
   
   ###13 Oct
   1. sevenths should align properly now.
   2. ordered pitch class brackets [wide angled brackets: cf. Rahn]. but only in PHP.
   3. massive clean up of code, but only to my standards.

   ###11 Oct
   1. Added the natural sign. Finally.