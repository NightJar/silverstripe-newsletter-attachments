SilverStripe Newsletter Attachments
===================================

Requirements
------------
* Silverstripe (~3.2)
* Newsletter Module

Installation
------------
* Place folder in silverstripe root (recommended method: composer require)
* `dev/build`

Usage
-----
A `Newsletter` object now has a `many-many` relationship to `File` named `Attachments`; Use this as you would any other relationship.
Upon sending, the associated files will be attached to the email before it is sent to each recipient automatically.

About
-----
Newsletters are just normal emails, although normally they are 'pretty' in their own respect, and often used for marketing.
However sometimes attaching files can be beneficial, for example if the newsletter is being used as a mass contact point for conveying important information. This requires a bit more flexibility, so this is where attachments with further information or pages intended for print can be useful.
