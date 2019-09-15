# symfony_the_sapcebar

After git cloning the project run:

composer install

yarn run dev

re-name the .env_sample to .env

run php bin/console server:start to start local server

go to 127.0.0.1:8000 in web browser to load project 

###Other Notes:

command to check for package vulnerabilities after installing sec-checker: 

./bin/console security:check


###Twig Basic Syntax:

{{ }} "say something" tag, because it prints. 
And just like PHP, you can print anything: a variable, a string or a complex expression



{% %} "do something" tag. It's used whenever you need to do something


{# #}: comments

Twig Documentation Reference - https://twig.symfony.com/doc/2.x/