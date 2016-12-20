# PublicBars

This app is looking for bars wthin 2km radius from your position. If you don't share your location by deafult it will find all bars next to Neptune's Fountain. 

To run this project you need to have [docker], [google maps key] and [google public api key] thats all ;)

### Instalation
What you need to do after clone this repo to a folder publicbars, go to that folder and run:

```sh
$ docker-compose up #to run and set environment  
$ docker exec -it publicbars_php_1 bash #to connect to the container
$ composer install #install all dependencies, you will be ask to set your key to google public api
```

The last thing what you need todo is goto ./PublicBars/frontend/dist/index.html and set google maps key at the end of this url: http://maps.googleapis.com/maps/api/js?extension=.js&output=embed&key=YourApiKeyGoesHere

Now you can click http://127.0.0.1:8081 and check how many bars are around you.

### Unit tests
```sh
cd backend
vendor/bin/phpunit
```

### ApiDoc
http://127.0.0.1:8080/api/doc

### Todos

 - Rewrite frontend to React
 - Add persistance layer, eg. mongo
 - Add tests to frontend


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   

   [google public api key]: <https://developers.google.com/api-client-library/php/auth/api-keys>
   [google maps key]: <https://developers.google.com/maps/documentation/javascript/get-api-key#key>
   [docker]: <http://www.docker.com>
