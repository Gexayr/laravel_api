<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## How to set up this project

1. Clone this repo
2. cd into the directory
3. Run `composer install`
4. Run `php artisan key:generate`
5. Set up your `.env` file with the correct data
6. Run the table migrations `php artisan migrate`
7. Seed the database `php artisan db:seed`

## Call examples

### Create

    POST http://myapi.loc/api/book
    
    "header": {            
                Content-Type : application/json,
                Accept : application/json
              },
              
    "body": {
            "formdata": {
                            name:858
                            author_id:9 
                        }
            },
    "response": {
                "data": {
                    "name": "858",
                    "author_id": "9",
                    "updated_at": "2019-09-13 11:48:27",
                    "created_at": "2019-09-13 11:48:27",
                    "id": 54
                }
            }

### Show all
    GET http://myapi.loc/api/book
    
### Update 
    PUT http://myapi.loc/api/book

    "header": {            
                    Content-Type : application/json,
                    Accept : application/json
                },
    
    "body": {
                "raw": {
                            "name":"ggg",
                            "author_id":8
                        }
            },
    
    "response": {
                    "data": {
                        "id": 3,
                        "name": "ggg",
                        "author_id": 8,
                        "created_at": "2019-09-13 06:25:56",
                        "updated_at": "2019-09-13 08:05:21"
                    }
                }
                

### Destroy 
    DELETE http://myapi.loc/api/book/{id}

    "header": {            
                    Content-Type : application/json,
                    Accept : application/json
                },
    
    "response": {
                    []
                }
                

### Show 
    GET http://myapi.loc/api/book/{id}

    "header": {            
                    Content-Type : application/json,
                    Accept : application/json
                },
    
    "response": {
                    "data": {
                        "id": 3,
                        "name": "ggg",
                        "author_id": 8,
                        "created_at": "2019-09-13 06:25:56",
                        "updated_at": "2019-09-13 08:05:21"
                    }
                }
                

### Filter 
(accepts date (1986-06-26) and type: (greater | equal | less) )

    POST http://myapi.loc/api/book/filter

    "header": {            
                    Content-Type : application/json,
                    Accept : application/json
                },
    
    "body": {
                "raw": {
                       	"type":"equal",
                       	"date":"1986-06-26"
                       }
            },
    
    "response": {
                    [
                        {
                            "id": 42,
                            "name": "Laborum.",
                            "author_id": 5,
                            "created_at": "2019-09-13 06:25:57",
                            "updated_at": "2019-09-13 06:25:57"
                        },
                        {
                            "id": 49,
                            "name": "Vel aut.",
                            "author_id": 5,
                            "created_at": "2019-09-13 06:25:57",
                            "updated_at": "2019-09-13 06:25:57"
                        },
                        {
                            "id": 51,
                            "name": "testBook",
                            "author_id": 5,
                            "created_at": "2019-09-13 07:51:15",
                            "updated_at": "2019-09-13 07:51:15"
                        }
                    ]
                }
             
