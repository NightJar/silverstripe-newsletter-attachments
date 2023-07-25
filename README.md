SilverStripe Newsletter Attachments
===================================

## ARCHIVED
This module was originally written to support some more advanced use-cases of [silverstripe/newsletter](https://github.com/silverstripe-archive/silverstripe-newsletter), where it was being used to supply incident reports (as PDFs) to groups of customers in an operational support capacity. This use-case never eventuated; This module has never been used (to my knowledge) and silverstripe/newsletter is a relic from days gone by (c.2010) - I recommend using Software as a Service like MailChimp or SendGrid instead. Never the less, should one wish to make their own server do all the hard work **this code remains available, but it is NOT being maintained.**

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
