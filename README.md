# Project setup

### Tutorial series on how to build this

If you'd like a step by step guide on how to build this just **CLICK THE IMAGE BELOW**

[![Follow Mohamed El-Qassas GitHub](https://user-images.githubusercontent.com/108229029/203494132-c95e7b90-2b19-4dbb-b090-19a74b587e26.jpg)](https://www.youtube.com/watch?v=4grSddYyZio&list=PL3pX4NAc7vJswKOWNO2kVobd-b2RiOOlY){:target="_blank"}

Come and check out my YOUTUBE channel for lots more tutorials -> https://www.youtube.com/@johnweeksdev

Like, Subscribe, and SMASH THE NOTIFICATION BELL!!!

## Setup

Clone the project

```
git clone https://github.com/John-Weeks-Dev/ev-charge-map-api.git
```

Then
```
composer install 

cp .env.example .env 

php artisan cache:clear 

composer dump-autoload 

php artisan key:generate

php artisan serve
```

Create a DATABASE an now do the command 
```
php artisan migrate
```

Now go to https://console.cloud.google.com/ 

Generate an API KEY.

You'll need to ENABLE Maps API, Directions API, Places API, and Distance Matrix API.

Add your new API KEY to the .env file 
```
GOOGLE_MAPS_API_KEY=api-key
```

You should be good to go!

