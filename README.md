<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

This is a simple case study created by Brian Verschoore

##How to set up this application:
1. Clone repository
2. copy .env.example to .env
3. add following line to your hosts file (/etc/hosts)

```text
#laravel Test
127.0.0.1   mysql redis memcached
```

4. run `composer install`
5. start Sail `vendor/bin/sail up`
6. install and run npm. This can be done using sail `vendor/bin/sail npm install` & `vendor/bin/sail npm run prod` 
7. Set the app key `vendor/bin/sail artisan key:generate`
8. run the migrations using `vendor/bin/sail artisan migrate`
9. Finally, you can find your site at [localhost](http://localhost/)

##Possible issues during setup
1. please make sure no other docker or apache/nginx/mysql... services are running as this might cause certain ports to be already taken. 
