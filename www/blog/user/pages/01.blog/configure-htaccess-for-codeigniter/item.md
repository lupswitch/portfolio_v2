---
title: 'Configure .htaccess for Codeigniter'
taxonomy:
    tag:
        - codeigniter
        - php
        - htaccess
        - apache
    category:
        - blog
---

The codeigniter has an annoying URL where the controller name appears after index.php. For Example, www.yoursite.com/index.php/controller/ . This is not a proper way to have a URL. Is is also not the right method to provide a URL to the customer. 

You can rewrite a cleaner URL using apache mod_rewrite module.
First, enable mod_rewite using command <code>a2enmod rewrite</code> and then restart apache <code>service apache2 restart</code> or <code>/etc/init.d/apache2 restart</code>

Add the below code to <code>.htaccess</code> file and place it in the codeigniter's root directory. The code is self explanatory with comments. Now you can use a clean URL like www.yoursite.com/controller to access the pages.

<pre><code class='apache'>
<IfModule mod_rewrite.c>
# Turn on URL rewriting
RewriteEngine On

# If your website begins from a folder e.g localhost/my_project then 
# you have to change it to: RewriteBase /my_project/
# If your site begins from the root e.g. example.local/ then
# let it as it is
RewriteBase /

# Protect application and system files from being viewed when the index.php is missing
RewriteCond $1 ^(application|system|private|logs)

# Rewrite to index.php/access_denied/URL
RewriteRule ^(.*)$ index.php/access_denied/$1 [PT,L]

# Allow these directories and files to be displayed directly:
RewriteCond $1 ^(index\.php|robots\.txt|favicon\.ico|public|assets|css|js|images)

# No rewriting
RewriteRule ^(.*)$ - [PT,L]

# Rewrite to index.php/URL
RewriteRule ^(.*)$ index.php/$1 [PT,L]
</IfModule>
</pre></code>